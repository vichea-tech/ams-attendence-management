<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Login</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">Login</h1>
        <form id="loginForm" class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" 
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
        <div id="error" class="text-red-500 text-sm mt-2 hidden"></div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {
                // Step 1: Fetch CSRF token
                await axios.get('http://127.0.0.1:8000/sanctum/csrf-cookie', {
                    withCredentials: true, // Required for Sanctum
                });

                // Step 2: Attempt login
                const response = await axios.post('http://127.0.0.1:8000/api/login', {
                    email,
                    password,
                }, {
                    withCredentials: true, // Required for Sanctum
                });

                alert('Login successful!');
                window.location.href = '/schedule'; // Redirect to dashboard
            } catch (error) {
                console.error('Error:', error);

                // Handle error messages
                const errorMessage = error.response?.data?.message || 'An error occurred. Please try again.';
                document.getElementById('error').innerText = errorMessage;
                document.getElementById('error').classList.remove('hidden');
            }
        });
    </script>
</body>
</html>
