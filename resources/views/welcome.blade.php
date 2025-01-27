<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Timetable</title>
</head>

<body class="bg-gray-100">
    <div class="min-h-screen grid grid-cols-8">
        <!-- Sidebar -->
        <aside class="col-span-2 md:col-span-1 bg-white shadow-lg">
            <div class="flex flex-col h-full">
                <!-- Logo -->
                <a href="#" class="flex items-center justify-center py-4 border-b border-gray-200">
                    <svg class="h-12 w-12 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 2l6.928 4v8L12 18l-6.928-4V6l6.928-4z" />
                    </svg>
                </a>
                <!-- Navigation -->
                <nav class="flex-grow">
                    <a href="/schedule"
                        class="flex items-center gap-4 py-3 px-6 text-gray-700 hover:bg-teal-50 hover:text-teal-500 transition">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                        </svg>
                        <span class="hidden md:block">Schedule</span>
                    </a>
                </nav>
                <!-- Logout -->
                <a href="#"
                    class="flex items-center gap-4 py-3 px-6 text-red-500 hover:bg-red-50 hover:text-red-600 transition">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5l7 7-7 7" />
                    </svg>
                    <span class="hidden md:block">Logout</span>
                </a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="col-span-6 md:col-span-7 p-6 bg-gray-50">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <!-- Header -->
                <h1 class="text-2xl font-bold text-gray-800 mb-6">Timetable</h1>

                <!-- Filters -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                    <div>
                        <label for="department" class="block text-sm font-medium text-gray-700">Department</label>
                        <select id="department" class="mt-1 block w-full p-2 border border-gray-300 rounded">
                            <option value="GIC">GIC</option>
                        </select>
                    </div>
                    <div>
                        <label for="academic" class="block text-sm font-medium text-gray-700">Academic</label>
                        <select id="academic" class="mt-1 block w-full p-2 border border-gray-300 rounded">
                            <option value="2020-2025">2020-2025</option>
                        </select>
                    </div>
                    <div>
                        <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                        <select id="year" class="mt-1 block w-full p-2 border border-gray-300 rounded">
                            <option value="Y1">Y1</option>
                        </select>
                    </div>
                    <div>
                        <label for="semester" class="block text-sm font-medium text-gray-700">Semester</label>
                        <select id="semester" class="mt-1 block w-full p-2 border border-gray-300 rounded">
                            <option value="S1">S1</option>
                        </select>
                    </div>
                </div>

                <!-- Reset Button -->
                <div class="text-right">
                    <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600 transition">Reset</button>
                </div>

                <!-- Timetable Table -->
                <div class="mt-6 overflow-x-auto">
                    <table class="w-full table-auto border border-gray-300 text-center text-gray-800">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="border border-gray-300 p-2">Time</th>
                                <th class="border border-gray-300 p-2">Monday</th>
                                <th class="border border-gray-300 p-2">Tuesday</th>
                                <th class="border border-gray-300 p-2">Wednesday</th>
                                <th class="border border-gray-300 p-2">Thursday</th>
                                <th class="border border-gray-300 p-2">Friday</th>
                                <th class="border border-gray-300 p-2">Saturday</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td class="border border-gray-300 p-2">7:00 - 9:00</td>
                              <td class="border border-gray-300 bg-teal-500 text-white p-2">
                                <div>Database I</div>
                                <div class="text-sm">Nop Phearum</div>
                                <div class="text-sm">Y1-GIC</div>
                                <div class="text-sm">A-101</div>
                              </td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                            </tr>
                            <tr>
                              <td class="border border-gray-300 p-2">9:00 - 11:00</td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                            </tr>
                            <tr>
                              <td class="border border-gray-300 p-2">1:00 PM - 3:00 PM</td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                            </tr>
                            <tr>
                              <td class="border border-gray-300 p-2">3:00 PM - 5:00 PM</td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                              <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                            </tr>
                          </tbody>
                          
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
