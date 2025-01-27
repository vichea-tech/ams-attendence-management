<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanner</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsqr/dist/jsQR.js"></script>
</head>
<body class="bg-gray-100 h-screen flex flex-col items-center justify-center">
    <div class="w-1/3 p-4 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold text-gray-800 text-center mb-4">QR Code Scanner</h1>
        <div class="relative border rounded-lg overflow-hidden bg-gray-200">
            <video id="video" class="w-full bg-black"></video>
        </div>
        <canvas id="canvas" class="hidden"></canvas>
        <p id="output" class="mt-4 text-center text-lg text-gray-700">
            Scan a QR code to see the result here.
        </p>
    </div>

    <script>
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const output = document.getElementById('output');
        const ctx = canvas.getContext('2d');

        // Access the camera
        navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
            .then((stream) => {
                video.srcObject = stream;
                video.setAttribute("playsinline", true); // for iOS compatibility
                video.play();
                requestAnimationFrame(scanQRCode);
            })
            .catch((err) => {
                console.error("Error accessing camera: ", err);
                output.textContent = "Camera access is required for scanning.";
                output.classList.add('text-red-500');
            });

        // Scan for QR code
        function scanQRCode() {
            if (video.readyState === video.HAVE_ENOUGH_DATA) {
                // Set canvas dimensions
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;

                // Draw video frame on canvas
                ctx.drawImage(video, 0, 0, canvas.width, canvas.height);

                // Extract image data
                const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                const code = jsQR(imageData.data, imageData.width, imageData.height);

                // Check if QR code detected
                if (code) {
                    output.textContent = `QR Code Detected: ${code.data}`;
                    output.classList.remove('text-gray-700');
                    output.classList.add('text-green-500');
                } else {
                    output.textContent = "Scanning for QR code...";
                    output.classList.remove('text-green-500');
                    output.classList.add('text-gray-700');
                }
            }
            requestAnimationFrame(scanQRCode);
        }
    </script>
</body>
</html>