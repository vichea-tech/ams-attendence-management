@extends('layout')

@section('title', 'Attendance')

@section('content')
    <h1 class="text-2xl font-bold text-gray-800 mb-6">Attendance</h1>

    <!-- Filters -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div>
            <label for="class" class="block text-sm font-medium text-gray-700">Class</label>
            <select id="class" class="mt-1 block w-full p-2 border border-gray-300 rounded">
                <option value="Y1-GIC">Y1-GIC</option>
                <option value="Y2-GIC">Y2-GIC</option>
                <option value="Y3-GIC">Y3-GIC</option>
            </select>
        </div>
        <div>
            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
            <input type="date" id="date" class="mt-1 block w-full p-2 border border-gray-300 rounded">
        </div>
        <div>
            <button class="mt-6 w-full bg-teal-500 text-white px-4 py-2 rounded hover:bg-teal-600 transition">
                Filter Attendance
            </button>
        </div>
    </div>

    <!-- Attendance Table -->
    <div class="overflow-x-auto">
        <table class="w-full table-auto border border-gray-300 text-center text-gray-800">
            <thead class="bg-gray-200 text-gray-700">
                <tr>
                    <th class="border border-gray-300 p-2">#</th>
                    <th class="border border-gray-300 p-2">Student Name</th>
                    <th class="border border-gray-300 p-2">Roll Number</th>
                    <th class="border border-gray-300 p-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Rows -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 p-2">1</td>
                    <td class="border border-gray-300 p-2">John Doe</td>
                    <td class="border border-gray-300 p-2">101</td>
                    <td class="border border-gray-300 p-2">
                        <select class="p-2 border border-gray-300 rounded">
                            <option value="present">Present</option>
                            <option value="absent">Absent</option>
                            <option value="late">Late</option>
                        </select>
                    </td>
                </tr>
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 p-2">2</td>
                    <td class="border border-gray-300 p-2">Jane Smith</td>
                    <td class="border border-gray-300 p-2">102</td>
                    <td class="border border-gray-300 p-2">
                        <select class="p-2 border border-gray-300 rounded">
                            <option value="present">Present</option>
                            <option value="absent">Absent</option>
                            <option value="late">Late</option>
                        </select>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <!-- Submit Button -->
    <div class="text-right mt-4">
        <button class="bg-teal-500 text-white px-6 py-2 rounded hover:bg-teal-600 transition">
            Submit Attendance
        </button>
    </div>
@endsection
