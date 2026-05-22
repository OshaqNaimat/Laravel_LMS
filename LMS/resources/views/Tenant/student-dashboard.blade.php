<x-layout>
    <div class="bg-slate-50 font-sans antialiased text-slate-800">
        <div class="flex h-screen overflow-hidden">

            <x-student-sidebar />

            <main class="flex-1 flex flex-col overflow-y-auto">

                <header
                    class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 sticky top-0 z-10">
                    <div class="flex items-center gap-4">
                        <button class="md:hidden text-slate-600 text-xl"><i class="bi bi-list"></i></button>
                        <div>
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">Student Dashboard</h2>
                            <p class="text-xxs text-slate-400">Welcome back, Zain! Here is your school profile track
                                overview for today.</p>
                        </div>
                    </div>
                    <div class="text-right hidden sm:block">
                        <span
                            class="text-xs font-bold text-slate-700 bg-slate-100 border border-slate-200 px-3 py-1.5 rounded-lg">
                            Grade 10 - Section A
                        </span>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div
                            class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Attendance Rate
                                </p>
                                <span class="text-xl sm:text-2xl font-black text-emerald-600">95.8%</span>
                            </div>
                            <div
                                class="w-9 h-9 rounded-lg bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 text-base">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                        </div>

                        <div
                            class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Total
                                    Percentage</p>
                                <span class="text-xl sm:text-2xl font-black text-slate-900">88.85%</span>
                            </div>
                            <div
                                class="w-9 h-9 rounded-lg bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 text-base">
                                <i class="bi bi-journal-bookmark"></i>
                            </div>
                        </div>

                        <div
                            class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Pending Tasks
                                </p>
                                <span class="text-xl sm:text-2xl font-black text-amber-600">2 Pending</span>
                            </div>
                            <div
                                class="w-9 h-9 rounded-lg bg-amber-50 border border-amber-100 flex items-center justify-center text-amber-600 text-base">
                                <i class="bi bi-exclamation-triangle"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Class Rank</p>
                                <span class="text-xl sm:text-2xl font-black text-purple-600">3rd / 35</span>
                            </div>
                            <div
                                class="w-9 h-9 rounded-lg bg-purple-50 border border-purple-100 flex items-center justify-center text-purple-600 text-base">
                                <i class="bi bi-trophy"></i>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                        <div class="lg:col-span-2 bg-white rounded-xl border border-slate-200 shadow-xs p-5 space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Today's Class
                                        Schedule</h3>
                                    <p class="text-[10px] text-slate-400">Your layout track periods for today.</p>
                                </div>
                                <span class="text-xxs font-bold text-slate-500 bg-slate-100 px-2 py-1 rounded">May 22,
                                    2026</span>
                            </div>

                            <div class="space-y-3">
                                <div
                                    class="p-3 rounded-xl bg-slate-50/70 border border-slate-150 flex items-center justify-between opacity-70">
                                    <div class="flex items-center gap-3">
                                        <div class="text-xs font-medium text-slate-400 bg-slate-100 px-2 py-1 rounded">
                                            08:30 AM</div>
                                        <div>
                                            <h4 class="text-xs font-bold text-slate-700 line-through">Core Mathematics
                                            </h4>
                                            <p class="text-[10px] text-slate-400">Mr. Haris • Room 304-B</p>
                                        </div>
                                    </div>
                                    <span
                                        class="text-xxs font-bold text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded-md">Attended</span>
                                </div>

                                <div
                                    class="p-3 rounded-xl border-l-4 border-blue-600 bg-blue-50/30 flex items-center justify-between border border-slate-150">
                                    <div class="flex items-center gap-3">
                                        <div class="text-xs font-bold text-blue-700 bg-blue-100 px-2 py-1 rounded">10:30
                                            AM</div>
                                        <div>
                                            <h4 class="text-xs font-bold text-slate-900">Algebra & Geometry</h4>
                                            <p class="text-[10px] text-slate-500">Ms. Ayesha • Room 102</p>
                                        </div>
                                    </div>
                                    <span
                                        class="text-[10px] font-black text-white bg-blue-600 px-1.5 py-0.5 rounded uppercase animate-pulse">Live
                                        Now</span>
                                </div>

                                <div
                                    class="p-3 rounded-xl bg-white border border-slate-200 flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="text-xs font-medium text-slate-500 bg-slate-100 px-2 py-1 rounded">
                                            01:15 PM</div>
                                        <div>
                                            <h4 class="text-xs font-bold text-slate-800">Advanced Calculus</h4>
                                            <p class="text-[10px] text-slate-400">Mr. Haris • Room 304-C</p>
                                        </div>
                                    </div>
                                    <span class="text-xxs text-slate-400 font-mono">Period 5</span>
                                </div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl border border-slate-200 shadow-xs p-5 flex flex-col justify-between space-y-4">
                            <div>
                                <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Active Assignments
                                </h3>
                                <p class="text-[10px] text-slate-400">Deadlines requiring immediate submission
                                    attention.</p>
                            </div>

                            <div class="space-y-3 flex-1 my-2">
                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 space-y-2">
                                    <div class="flex justify-between items-start">
                                        <h4 class="text-xs font-bold text-slate-900 truncate w-36">Quadratic Quiz</h4>
                                        <span
                                            class="text-[9px] font-bold text-rose-600 bg-rose-50 px-1.5 py-0.5 rounded">Due
                                            Today</span>
                                    </div>
                                    <p class="text-[10px] text-slate-400 leading-tight">Complete problems 1 through 15
                                        on page 140.</p>
                                </div>

                                <div class="p-3 rounded-xl bg-slate-50 border border-slate-200 space-y-2">
                                    <div class="flex justify-between items-start">
                                        <h4 class="text-xs font-bold text-slate-900 truncate w-36">Trigonometry Lab</h4>
                                        <span
                                            class="text-[9px] font-medium text-slate-500 bg-slate-200 px-1.5 py-0.5 rounded">In
                                            2 Days</span>
                                    </div>
                                    <p class="text-[10px] text-slate-400 leading-tight">Submit clean geometric
                                        construction sheet vectors.</p>
                                </div>
                            </div>

                            <a href="/student_assignments"
                                class="block text-center py-2 text-xs font-bold text-blue-600 bg-blue-50 hover:bg-blue-100 border border-blue-100 rounded-xl transition-colors cursor-pointer">
                                Open Submission Desk
                            </a>
                        </div>

                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs p-5 space-y-4">
                        <div>
                            <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Recent Quiz & Term
                                Results</h3>
                            <p class="text-[10px] text-slate-400">Direct metrics ledger for released classroom
                                evaluation transcripts.</p>
                        </div>

                        <div class="w-full overflow-x-auto block">
                            <table class="w-full text-left border-collapse min-w-[600px]">
                                <thead>
                                    <tr
                                        class="bg-slate-50 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                        <th class="py-3 px-4">Subject Course</th>
                                        <th class="py-3 px-4">Assessment Task</th>
                                        <th class="py-3 px-4 text-center">Score Obtained</th>
                                        <th class="py-3 px-4 text-center">Class Avg</th>
                                        <th class="py-3 px-4 text-right">Grade Status</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-xs text-slate-600">
                                    <tr>
                                        <td class="py-3 px-4 font-bold text-slate-900">Mathematics</td>
                                        <td class="py-3 px-4">Mid-Term Exam Evaluation</td>
                                        <td class="py-3 px-4 text-center font-mono font-bold text-slate-900">94 / 100
                                        </td>
                                        <td class="py-3 px-4 text-center font-mono text-slate-400">78 / 100</td>
                                        <td class="py-3 px-4 text-right"><span
                                                class="px-2 py-0.5 bg-emerald-50 text-emerald-600 font-bold rounded-md">A+</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-bold text-slate-900">Algebra Foundations</td>
                                        <td class="py-3 px-4">Pop Quiz #3 (Linear Formulas)</td>
                                        <td class="py-3 px-4 text-center font-mono font-bold text-slate-900">23 / 25
                                        </td>
                                        <td class="py-3 px-4 text-center font-mono text-slate-400">19 / 25</td>
                                        <td class="py-3 px-4 text-right"><span
                                                class="px-2 py-0.5 bg-emerald-50 text-emerald-600 font-bold rounded-md">A</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-bold text-slate-900">Advanced Geometry</td>
                                        <td class="py-3 px-4">Class Viva Presentation Matrix</td>
                                        <td class="py-3 px-4 text-center font-mono font-bold text-slate-900">12 / 15
                                        </td>
                                        <td class="py-3 px-4 text-center font-mono text-slate-400">11 / 15</td>
                                        <td class="py-3 px-4 text-right"><span
                                                class="px-2 py-0.5 bg-blue-50 text-blue-600 font-bold rounded-md">B+</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</x-layout>
