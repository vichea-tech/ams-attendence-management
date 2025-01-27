@extends('layout')

@section('title', 'Schedule')

@section('content')

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
                    <td class="border border-gray-300 bg-teal-500 text-white p-2">
                        <div>Database I</div>
                        <div class="text-sm">Nop Phearum</div>
                        <div class="text-sm">Y1-GIC</div>
                        <div class="text-sm">A-101</div>
                    </td>

                    <td class="border border-gray-300 bg-teal-500 text-white p-2">
                        <div>Database I</div>
                        <div class="text-sm">Nop Phearum</div>
                        <div class="text-sm">Y1-GIC</div>
                        <div class="text-sm">A-101</div>
                    </td>
                    <td class="border border-gray-300 bg-teal-500 text-white p-2">
                        <div>Database I</div>
                        <div class="text-sm">Nop Phearum</div>
                        <div class="text-sm">Y1-GIC</div>
                        <div class="text-sm">A-101</div>
                    </td>
                    <td class="border border-gray-300 bg-teal-500 text-white p-2">
                        <div>Database I</div>
                        <div class="text-sm">Nop Phearum</div>
                        <div class="text-sm">Y1-GIC</div>
                        <div class="text-sm">A-101</div>
                    </td>
                    <td class="border border-gray-300 bg-teal-500 text-white p-2">
                        <div>Database I</div>
                        <div class="text-sm">Nop Phearum</div>
                        <div class="text-sm">Y1-GIC</div>
                        <div class="text-sm">A-101</div>
                    </td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">9:00 - 11:00</td>
                    <td class="border border-gray-300 bg-teal-500 text-white p-2">
                        <div>Database I</div>
                        <div class="text-sm">Nop Phearum</div>
                        <div class="text-sm">Y1-GIC</div>
                        <div class="text-sm">A-101</div>
                    </td>
                    {{-- <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td> --}}
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">1:00 PM - 3:00 PM</td>
                    <td class="border border-gray-300 bg-teal-500 text-white p-2">
                        <div>Database I</div>
                        <div class="text-sm">Nop Phearum</div>
                        <div class="text-sm">Y1-GIC</div>
                        <div class="text-sm">A-101</div>
                    </td>
                    {{-- <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td> --}}
                    {{-- <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded"> --}}
                    <td class="border border-gray-300 bg-teal-500 text-white p-2">
                        <div>Database I</div>
                        <div class="text-sm">Nop Phearum</div>
                        <div class="text-sm">Y1-GIC</div>
                        <div class="text-sm">A-101</div>
                        {{-- </td></button></td> --}}
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                </tr>
                <tr>
                    <td class="border border-gray-300 p-2">3:00 PM - 5:00 PM</td>
                    <td class="border border-gray-300 bg-teal-500 text-white p-2">
                        <div>Database I</div>
                        <div class="text-sm">Nop Phearum</div>
                        <div class="text-sm">Y1-GIC</div>
                        <div class="text-sm">A-101</div>
                    </td>
                    {{-- <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td> --}}
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                    <td class="border border-gray-300 p-2"><button class="bg-gray-100 p-2 rounded">+</button></td>
                </tr>
            </tbody>

        </table>
    </div>
@endsection
