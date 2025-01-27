<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="w-dvw h-dvh bg-gray-200 grid grid-cols-7">
        <!-- SideBar -->
        <div class="col-span-1 bg-white">
            <div class="p-2 h-full w-full flex flex-col bg-white dark:bg-gray-100 border-r border-r-gray-200">
                <!-- Logo -->
                <a href="#">
                    <div
                        class="flex justify-center lg:justify-start items-center gap-2 py-2 px-0 md:px-2 lg:px-4 cursor-pointer ">
                        <svg width="36" height="36" viewBox="0 0 903 1000" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M814.39 736.55L751.05 699.74L750.81 617.11L814.15 653.92L814.39 736.55Z"
                                fill="#00717E"></path>
                            <path d="M520.46 997.94L457.12 961.13L456.86 869.58L520.2 906.39L520.46 997.94Z"
                                fill="#00717E"></path>
                            <path d="M520.2 906.39L456.86 869.58L751.05 699.74L814.39 736.55L520.2 906.39Z"
                                fill="#00B6CA"></path>
                            <path d="M608.06 681.21L544.72 644.4L838.91 474.55L902.25 511.36L608.06 681.21Z"
                                fill="#00B6CA"></path>
                            <path d="M519.97 823.77L456.63 786.96L455.87 521.56L519.22 558.37L519.97 823.77Z"
                                fill="#00717E"></path>
                            <path d="M519.22 558.37L455.87 521.56L838.41 300.7L901.75 337.51L519.22 558.37Z"
                                fill="#00B6CA"></path>
                            <path
                                d="M901.75 337.51L902.01 429.05L607.83 598.9L608.06 681.21L902.25 511.36L903 777.08L520.46 997.94L520.2 906.39L814.39 736.55L814.15 653.92L519.97 823.77L519.22 558.37L901.75 337.51Z"
                                fill="#00A3B6"></path>
                            <path d="M75.75 554.2L139.09 517.4L138.34 784.69L75 821.5L75.75 554.2Z" fill="#1D49C5">
                            </path>
                            <path d="M1.25 338.65L64.59 301.84L149.22 350.7L85.88 387.51L1.25 338.65Z" fill="#2152DC">
                            </path>
                            <path d="M85.88 387.51L149.22 350.7L255.26 668.51L191.92 705.32L85.88 387.51Z"
                                fill="#2459EF"></path>
                            <path d="M308.29 688.46L371.63 651.65L254.74 851.89L191.4 888.7L308.29 688.46Z"
                                fill="#1D49C5"></path>
                            <path d="M383.77 559.5L447.11 522.69L445.87 962.24L382.53 999.05L383.77 559.5Z"
                                fill="#1D49C5"></path>
                            <path d="M299.15 510.64L362.49 473.83L447.11 522.69L383.77 559.5L299.15 510.64Z"
                                fill="#2152DC"></path>
                            <path
                                d="M383.77 559.5L382.53 999.05L307.53 955.76L308.29 688.46L191.4 888.7L75.75 554.2L75 821.5L0 778.2L1.25 338.65L85.88 387.51L191.92 705.32L299.15 510.64L383.77 559.5Z"
                                fill="#143389"></path>
                            <path d="M832.32 218.54L832.12 291.8L752.97 337.8L753.18 264.54L832.32 218.54Z"
                                fill="#007DC5"></path>
                            <path d="M753.18 264.54L752.97 337.8L370.44 116.94L370.65 43.68L753.18 264.54Z"
                                fill="#005789"></path>
                            <path d="M449.8 -2.31L832.32 218.54L753.18 264.54L370.65 43.68L449.8 -2.31Z" fill="#008CDC">
                            </path>
                            <path d="M387.82 136.05L387.62 209.31L237.03 296.82L237.23 223.56L387.82 136.05Z"
                                fill="#007DC5"></path>
                            <path d="M514.52 300.89L514.31 374.15L421.06 320.31L421.27 247.05L514.52 300.89Z"
                                fill="#005789"></path>
                            <path d="M452.27 439.4L452.06 512.66L69.54 291.81L69.74 218.55L452.27 439.4Z"
                                fill="#005789"></path>
                            <path
                                d="M602.86 351.89L531.42 393.41L452.27 439.4L452.06 512.66L531.21 466.67L602.65 425.15L681.8 379.15L682.01 305.89L602.86 351.89Z"
                                fill="#007DC5"></path>
                            <path
                                d="M421.27 247.05L500.41 201.05L682.01 305.89L602.86 351.89L531.42 393.41L452.27 439.4L69.74 218.55L299.48 85.04L387.82 136.05L237.23 223.56L443.08 342.4L514.52 300.89L421.27 247.05Z"
                                fill="#008CDC"></path>
                        </svg>
                    </div>
                </a>
                <div class="flex flex-col h-full overflow-y-auto overflow-x-hidden flex-grow pt-2 justify-between">
                    <div class="flex flex-col space-y-1 mx-1 lg:mt-1 ">
                        <a class="flex flex-row items-center justify-center lg:justify-start rounded-md h-12 focus:outline-none pr-3.5 lg:pr-6 font-semibold bg-primary-50 shadow-sm text-primary-400 font-bold "
                            href="/app/projects">
                            <span class="inline-flex justify-center items-center ml-3.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.25rem" height="1.25rem"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M2 12c0 5.523 4.477 10 10 10h9.25a.75.75 0 0 0 0-1.5h-3.98A9.99 9.99 0 0 0 22 12c0-5.523-4.477-10-10-10S2 6.477 2 12">
                                    </path>
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M12 15.75a3.75 3.75 0 1 1 0-7.5a3.75 3.75 0 0 1 0 7.5" clip-rule="evenodd">
                                    </path>
                                    <path fill="currentColor"
                                        d="M5.5 13a1 1 0 1 0 0-2a1 1 0 0 0 0 2M12 4.5a1 1 0 1 1 0 2a1 1 0 0 1 0-2m1 14a1 1 0 1 0-2 0a1 1 0 0 0 2 0m5.5-5.5a1 1 0 1 0 0-2a1 1 0 0 0 0 2">
                                    </path>
                                </svg>
                            </span>
                            <span
                                class="ml-0 lg:ml-2 text-sm tracking-wide truncate capitalize hidden lg:block">Schedule</span>
                        </a>
                    </div>
                </div>

                <div class="px-1">
                    <div
                        class="flex flex-row items-center  justify-center lg:justify-start rounded-md h-12 focus:outline-none pr-3.5  lg:pr-6 font-semibold text-gray-500 hover:text-primary-400 cursor-pointer text-red-400 hover:text-red-600">
                        <span class="inline-flex justify-center items-center ml-3.5"><svg
                                xmlns="http://www.w3.org/2000/svg" width="1.25rem" height="1.25rem" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M15 2h-1c-2.828 0-4.243 0-5.121.879C8 3.757 8 5.172 8 8v8c0 2.828 0 4.243.879 5.121C9.757 22 11.172 22 14 22h1c2.828 0 4.243 0 5.121-.879C21 20.243 21 18.828 21 16V8c0-2.828 0-4.243-.879-5.121C19.243 2 17.828 2 15 2"
                                    opacity=".6"></path>
                                <path fill="currentColor"
                                    d="M8 8c0-1.538 0-2.657.141-3.5H8c-2.357 0-3.536 0-4.268.732S3 7.143 3 9.5v5c0 2.357 0 3.535.732 4.268S5.643 19.5 8 19.5h.141C8 18.657 8 17.538 8 16z"
                                    opacity=".4"></path>
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M4.47 11.47a.75.75 0 0 0 0 1.06l2 2a.75.75 0 0 0 1.06-1.06l-.72-.72H14a.75.75 0 0 0 0-1.5H6.81l.72-.72a.75.75 0 1 0-1.06-1.06z"
                                    clip-rule="evenodd"></path>
                            </svg></span><span
                            class="ml-2 text-sm tracking-wide truncate capitalize hidden lg:block">Logout</span>
                    </div>
                </div>


            </div>

        </div>
        <!-- View Content -->
        <div class="col-span-6 bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Weekly Schedule</h2>
            <div class="grid grid-cols-8 gap-6 text-center">
                <!-- Time Column -->
                <divc class="p-4 bg-gray-50 rounded-lg shadow-sm">

                    <div class="text-lg font-semibold text-gray-700">
                        Time
                    </div>
                    <!-- Time slots column -->
                    <div class="space-y-4 p-4 bg-gray-50 rounded-lg shadow-sm">
                        <div class="text-sm text-gray-600">7:00 AM - 9:00 AM</div>
                        <div class="text-sm text-gray-600">9:00 AM - 11:00 AM</div>
                        <div class="text-sm text-gray-600">1:00 PM - 3:00 PM</div>
                        <div class="text-sm text-gray-600">3:00 PM - 5:00 PM</div>
                    </div>
                </divc>

                <!-- Days of the Week -->
                <div class="p-4 bg-gray-50 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-700">Monday</h3>
                    <ul class="mt-2 space-y-2">
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 201F</li>
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 202F</li>
                    </ul>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-700">Tuesday</h3>
                    <ul class="mt-2 space-y-2">
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 203F</li>
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 204F</li>
                    </ul>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-700">Wednesday</h3>
                    <ul class="mt-2 space-y-2">
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 205F</li>
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 206F</li>
                    </ul>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-700">Thursday</h3>
                    <ul class="mt-2 space-y-2">
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 207F</li>
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 208F</li>
                    </ul>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-700">Friday</h3>
                    <ul class="mt-2 space-y-2">
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 209F</li>
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 210F</li>
                    </ul>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-700">Saturday</h3>
                    <ul class="mt-2 space-y-2">
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 211F</li>
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 212F</li>
                    </ul>
                </div>
                <div class="p-4 bg-gray-50 rounded-lg shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-700">Sunday</h3>
                    <ul class="mt-2 space-y-2">
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 213F</li>
                        <li class="p-2 bg-gray-100 rounded shadow-sm">Room 214F</li>
                    </ul>
                </div>

            </div>
        </div>


    </div>
</body>

</html>
