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
                <option value="GIC-1">GIC-1</option>
                <option value="GIC-2">GIC-2</option>
                <option value="GIC-3">GIC-3</option>
                <option value="GIC-4">GIC-4</option>
                <option value="GIC-5">GIC-5</option>
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
                <option value="Y2">Y2</option>
                <option value="Y3">Y3</option>
                <option value="Y4">Y4</option>
                <option value="Y5">Y5</option>
            </select>
        </div>
        <div>
            <label for="semester" class="block text-sm font-medium text-gray-700">Semester</label>
            <select id="semester" class="mt-1 block w-full p-2 border border-gray-300 rounded">
                <option value="S1">S1</option>
                <option value="S2">S2</option>
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
            <tbody id="timetableBody">
                <!-- Dynamic timetable rows will be populated here -->
            </tbody>
        </table>
    </div>

    <!-- JavaScript to Fetch Data -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const apiEndpoint = "http://localhost:8000/api/schedules";
            const timeSlots = ["7:00 - 9:00", "9:00 - 11:00", "1:00 PM - 3:00 PM", "3:00 PM - 5:00 PM"];
            const days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            const timetableBody = document.getElementById("timetableBody");

            // Fetch schedules from the API
            fetch(apiEndpoint)
                .then(response => response.json())
                .then(data => {
                    console.log("Schedules fetched:", data);
                    populateTimetable(data);
                })
                .catch(error => {
                    console.error("Error fetching schedules:", error);
                    timetableBody.innerHTML = `
                <tr>
                    <td colspan="7" class="text-center border border-gray-300 p-4 text-red-500">
                        Failed to load timetable. Please try again.
                    </td>
                </tr>
            `;
                });

            function populateTimetable(schedules) {
                timetableBody.innerHTML = ""; // Clear existing rows

                timeSlots.forEach((timeSlot, index) => {
                    const row = document.createElement("tr");

                    // Add time slot column
                    const timeCell = document.createElement("td");
                    timeCell.className = "border border-gray-300 p-2 font-bold";
                    timeCell.textContent = timeSlot;
                    row.appendChild(timeCell);

                    // Add columns for each day
                    days.forEach(day => {
                        const cell = document.createElement("td");
                        cell.className = "border border-gray-300 p-2";

                        // Find matching schedule for this time and day
                        const schedule = schedules.find(s => s.day === day);

                        if (schedule) {
                            let user = null;

                            // Map time slots to their respective users
                            switch (index) {
                                case 0: // 7:00 - 9:00
                                    user = schedule.time7_9am_user;
                                    break;
                                case 1: // 9:00 - 11:00
                                    user = schedule.time9_11am_user;
                                    break;
                                case 2: // 1:00 PM - 3:00 PM
                                    user = schedule.time1_3pm_user;
                                    break;
                                case 3: // 3:00 PM - 5:00 PM
                                    user = schedule.time3_5pm_user;
                                    break;
                            }

                            if (user) {
                                // Populate cell with schedule data
                                cell.className =
                                "border border-gray-300 bg-teal-500 text-white p-2";
                                cell.innerHTML = `
                            <div>${schedule.room.name}</div>
                            <div class="text-sm">${user.name}</div>
                        `;
                            } else {
                                // No data for this time slot
                                cell.innerHTML =
                                    `<button class="bg-gray-100 p-2 rounded">+</button>`;
                            }
                        } else {
                            // No schedule for this day
                            cell.innerHTML = `<button class="bg-gray-100 p-2 rounded">+</button>`;
                        }

                        row.appendChild(cell);
                    });

                    timetableBody.appendChild(row);
                });
            }
        });
    </script>


@endsection
