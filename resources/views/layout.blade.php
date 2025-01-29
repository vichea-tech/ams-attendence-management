<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen grid grid-cols-8">
        <!-- Sidebar -->
        @include('partials.sidebar')

        <!-- Main Content -->
        <main class="col-span-6 md:col-span-7 p-6 bg-gray-50">
            <div class="bg-white rounded-lg shadow-lg p-6">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
