<x-layout>
    <div class="bg-slate-50 font-sans antialiased text-slate-800">
        <div class="flex h-screen overflow-hidden">

            <x-teacher-sidebar />

            <main class="flex-1 flex flex-col overflow-y-auto">

                <header
                    class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 sticky top-0 z-10">
                    <div class="flex items-center gap-4">
                        <button class="md:hidden text-slate-600 text-xl"><i class="bi bi-list"></i></button>
                        <div>
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">Teacher Workspace</h2>
                            <p class="text-xxs text-slate-400">Welcome back! Here is your schedule and classroom overview
                                for today.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <a href="/teacher_attendence"
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-colors shadow-xs cursor-pointer">
                            <i class="bi bi-calendar-check"></i> Take Attendance
                        </a>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
                        <div
                            class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                                    Today's Periods</p>
                                <span class="text-xl sm:text-2xl font-black text-slate-900">4 Classes</span>
                            </div>
                            <div
                                class="w-9 h-9 rounded-lg bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 text-base">
                                <i class="bi bi-book"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                                    Homeroom Attendance</p>
                                <span class="text-xl sm:text-2xl font-black text-emerald-600">92.4%</span>
                            </div>
                            <div
                                class="w-9 h-9 rounded-lg bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 text-base">
                                <i class="bi bi-people"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                                    Pending Grading</p>
                                <span class="text-xl sm:text-2xl font-black text-amber-600">18 Tasks</span>
                            </div>
                            <div
                                class="w-9 h-9 rounded-lg bg-amber-50 border border-amber-100 flex items-center justify-center text-amber-600 text-base">
                                <i class="bi bi-journal-check"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                                    Active Assignments</p>
                                <span class="text-xl sm:text-2xl font-black text-purple-600">3 Live</span>
                            </div>
                            <div
                                class="w-9 h-9 rounded-lg bg-purple-50 border border-purple-100 flex items-center justify-center text-purple-600 text-base">
                                <i class="bi bi-file-earmark-arrow-up"></i>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                        <div class="lg:col-span-2 bg-white rounded-xl border border-slate-200 shadow-xs p-5 space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Today's
                                        Teaching Schedule</h3>
                                    <p class="text-[10px] text-slate-400">Chronological list of your class assignments
                                        for Friday</p>
                                </div>
                                <span class="text-xxs font-bold text-slate-500 bg-slate-100 px-2 py-1 rounded">May 22,
                                    2026</span>
                            </div>

                            <div class="space-y-3">

                                <div
                                    class="p-3.5 rounded-xl border-l-4 border-blue-600 bg-blue-50/30 flex items-center justify-between gap-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="text-xs font-bold text-blue-700 bg-blue-100/60 p-2 rounded-lg text-center min-w-[70px]">
                                            09:00 AM
                                        </div>
                                        <div>
                                            <h4 class="text-xs font-bold text-slate-900 leading-tight">Mathematics</h4>
                                            <p class="text-xxs text-slate-500 mt-0.5">Grade 10 - Section A • Room 304-B
                                            </p>
                                        </div>
                                    </div>
                                    <span
                                        class="px-2 py-0.5 rounded text-[9px] font-black uppercase tracking-wider bg-blue-600 text-white animate-pulse">Now</span>
                                </div>

                                <div
                                    class="p-3.5 rounded-xl border-l-4 border-slate-300 bg-white border border-slate-200 hover:border-slate-300 flex items-center justify-between gap-4 transition-all">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="text-xs font-semibold text-slate-500 bg-slate-100 p-2 rounded-lg text-center min-w-[70px]">
                                            10:30 AM
                                        </div>
                                        <div>
                                            <h4 class="text-xs font-bold text-slate-800 leading-tight">Algebra &
                                                Geometry</h4>
                                            <p class="text-xxs text-slate-400 mt-0.5">Grade 9 - Section B • Room 102</p>
                                        </div>
                                    </div>
                                    <span class="text-xxs font-mono text-slate-400">Period 3</span>
                                </div>

                                <div
                                    class="p-3.5 rounded-xl border-l-4 border-slate-300 bg-white border border-slate-200 hover:border-slate-300 flex items-center justify-between gap-4 transition-all">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="text-xs font-semibold text-slate-500 bg-slate-100 p-2 rounded-lg text-center min-w-[70px]">
                                            01:15 PM
                                        </div>
                                        <div>
                                            <h4 class="text-xs font-bold text-slate-800 leading-tight">Advanced Calculus
                                            </h4>
                                            <p class="text-xxs text-slate-400 mt-0.5">Grade 10 - Section B • Room 304-C
                                            </p>
                                        </div>
                                    </div>
                                    <span class="text-xxs font-mono text-slate-400">Period 5</span>
                                </div>

                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl border border-slate-200 shadow-xs p-5 flex flex-col justify-between space-y-4">
                            <div>
                                <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Assigned Homeroom
                                    Roll</h3>
                                <p class="text-[10px] text-slate-400">Quick headcount status monitoring for your main
                                    class (10-A)</p>
                            </div>

                            <div class="flex flex-col items-center justify-center py-2 space-y-2">
                                <div
                                    class="relative w-28 h-28 flex items-center justify-center rounded-full border-8 border-slate-100 border-t-emerald-500 border-r-emerald-500">
                                    <div class="text-center">
                                        <span class="block text-xl font-black text-slate-900">31 / 35</span>
                                        <span
                                            class="text-[9px] font-bold uppercase tracking-wider text-slate-400">Present</span>
                                    </div>
                                </div>
                                <p class="text-xxs text-slate-500 font-medium text-center">4 students unaccounted for or
                                    absent today</p>
                            </div>

                            {{-- <div class="bg-slate-50 p-3 rounded-lg border border-slate-200 text-xxs space-y-1.5">
                                <div class="flex items-center justify-between text-slate-700">
                                    <span class="font-bold"><i class="bi bi-info-circle text-blue-500"></i> Action
                                        Required:</span>
                                    <a href="/Tenant-Attendence-Rate"
                                        class="text-blue-600 font-bold hover:underline">Open Sheet</a>
                                </div>
                                <p class="text-slate-500 leading-normal">Attendance logs for Grade 10-A have not been
                                    verified for the current morning session roster yet.</p>
                            </div> --}}
                        </div>

                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs p-5 space-y-4">
                        <div>
                            <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Active Course
                                Assignments</h3>
                            <p class="text-[10px] text-slate-400">Track distribution deadlines, submission rates, and
                                review queues</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="p-4 rounded-xl border border-slate-100 bg-slate-50/50 space-y-3">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <span
                                            class="text-[9px] font-bold text-blue-600 bg-blue-50 border border-blue-100 px-1.5 py-0.5 rounded">Grade
                                            10-A</span>
                                        <h4 class="text-xs font-bold text-slate-900 mt-1.5">Quadratic Equations Quiz
                                        </h4>
                                    </div>
                                    <span class="text-xxs text-slate-400 font-medium">Due Today</span>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex justify-between text-[10px] font-semibold text-slate-500">
                                        <span>Submissions Rate</span>
                                        <span>28 / 35</span>
                                    </div>
                                    <div class="w-full bg-slate-200 h-1.5 rounded-full overflow-hidden">
                                        <div class="bg-blue-600 h-full" style="width: 80%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl border border-slate-100 bg-slate-50/50 space-y-3">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <span
                                            class="text-[9px] font-bold text-purple-600 bg-purple-50 border border-purple-100 px-1.5 py-0.5 rounded">Grade
                                            9-B</span>
                                        <h4 class="text-xs font-bold text-slate-900 mt-1.5">Trigonometry Worksheet</h4>
                                    </div>
                                    <span class="text-xxs text-slate-400 font-medium">Due in 2 days</span>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex justify-between text-[10px] font-semibold text-slate-500">
                                        <span>Submissions Rate</span>
                                        <span>12 / 34</span>
                                    </div>
                                    <div class="w-full bg-slate-200 h-1.5 rounded-full overflow-hidden">
                                        <div class="bg-purple-600 h-full" style="width: 35%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl border border-slate-100 bg-slate-50/50 space-y-3">
                                <div class="flex items-start justify-between">
                                    <div>
                                        <span
                                            class="text-[9px] font-bold text-emerald-600 bg-emerald-50 border border-emerald-100 px-1.5 py-0.5 rounded">Grade
                                            10-B</span>
                                        <h4 class="text-xs font-bold text-slate-900 mt-1.5">Polynomial Theorem Vivas
                                        </h4>
                                    </div>
                                    <span
                                        class="text-xxs text-emerald-600 font-bold bg-emerald-50 px-1 rounded">Completed</span>
                                </div>
                                <div class="space-y-1">
                                    <div class="flex justify-between text-[10px] font-semibold text-slate-500">
                                        <span>Submissions Rate</span>
                                        <span>32 / 32</span>
                                    </div>
                                    <div class="w-full bg-slate-200 h-1.5 rounded-full overflow-hidden">
                                        <div class="bg-emerald-500 h-full" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</x-layout>
