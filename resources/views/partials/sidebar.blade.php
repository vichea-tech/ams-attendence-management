<aside class="col-span-2 md:col-span-1 bg-white shadow-lg">
    <div class="flex flex-col h-full">
        <!-- Logo -->
        <a href="#" class="flex items-center justify-center py-4 border-b border-gray-200">
            <svg class="h-12 w-12 text-teal-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" fill="none">
                <!-- Outer Circle -->
                <circle cx="100" cy="100" r="95" stroke="currentColor" stroke-width="8" />
            
                <!-- Stylized G -->
                <path d="M70 100a30 30 0 1 1 30 30h-10v-12h10a18 18 0 1 0-18-18v30h-12V100z" fill="currentColor" />
            
                <!-- Stylized I -->
                <rect x="95" y="65" width="10" height="70" rx="5" fill="currentColor" />
            
                <!-- Stylized C -->
                <path d="M130 130a30 30 0 1 1 0-60h-10v12h10a18 18 0 1 0 0 36h-30v12h30z" fill="currentColor" />
            
                <!-- GIC Text Below -->
                <text x="100" y="175" text-anchor="middle" font-size="24" font-family="Arial, sans-serif" font-weight="bold" fill="currentColor">
                    GIC
                </text>
            </svg>
            
        </a>
        
        

        <!-- Navigation -->
        <nav class="flex-grow">
            <a href="/schedule"
                class="flex items-center gap-4 py-3 px-6 text-gray-700 hover:bg-teal-50 hover:text-teal-500 transition {{ strtolower(request()->path()) === 'schedule' ? 'bg-teal-50 text-teal-500 font-bold' : '' }}">
                <svg class="h-4 w-4 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M8 2v2M16 2v2M4 7h16M9 11h6m-3 4h3M4 22h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v13a2 2 0 002 2z" />
                </svg>
                <span class="hidden md:block">Schedule</span>
            </a>
            <a href="/attendance"
                class="flex items-center gap-4 py-3 px-6 text-gray-700 hover:bg-teal-50 hover:text-teal-500 transition {{ strtolower(request()->path()) === 'attendance' ? 'bg-teal-50 text-teal-500 font-bold' : '' }}">
                <svg class="h-5 w-5 text-teal-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                </svg>
                <span class="hidden md:block">Attendance</span>
            </a>
        </nav>

        <!-- Logout -->
        <a href="#"
            class="flex items-center gap-4 py-3 px-6 text-red-500 hover:bg-red-50 hover:text-red-600 transition">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="hidden md:block">Logout</span>
        </a>
    </div>
</aside>
