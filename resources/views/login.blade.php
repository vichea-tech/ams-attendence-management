<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">Login</h1>
        <form id="loginForm" class="space-y-4">
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" 
                    class="mt-1 w-full p-2 border border-gray-300 rounded focus:ring focus:ring-teal-300" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" 
                    class="mt-1 w-full p-2 border border-gray-300 rounded focus:ring focus:ring-teal-300" required>
            </div>
            <button type="submit" 
                class="w-full bg-teal-500 text-white py-2 rounded hover:bg-teal-600 transition">
                Login
            </button>
        </form>
    </div>
    <script>
        // Handle form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Example: Simulating authentication (Replace with real API logic)
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username === 'admin' && password === 'password') {
                // Redirect to the /schedule route on success
                window.location.href = '/schedule';
            } else {
                alert('Invalid credentials! Please try again.');
            }
        });
    </script>
</body>
</html>
