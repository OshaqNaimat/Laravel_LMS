<x-layout>
    <div class="bg-slate-50 font-sans antialiased text-slate-800">
        <div class="flex h-screen overflow-hidden">

            <x-tenant-sidebar />

            <main class="flex-1 flex flex-col overflow-y-auto">

                <header
                    class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 sticky top-0 z-10">
                    <div class="flex items-center gap-4">
                        <button class="md:hidden text-slate-600 text-xl"><i class="bi bi-list"></i></button>
                        <div>
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">Attendance Analytics Dashboard
                            </h2>
                            <p class="text-xxs text-slate-400">Institutional overview of student body and faculty
                                presence rates.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <button
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold rounded-lg transition-colors cursor-pointer">
                            <i class="bi bi-download"></i> Export Report
                        </button>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">

                        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-3">
                            <div class="flex items-center justify-between">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Student Attendance
                                </p>
                                <span
                                    class="text-xxs font-bold text-emerald-600 bg-emerald-50 px-1.5 py-0.5 rounded">+0.4%
                                    vs last week</span>
                            </div>
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-black text-slate-900">94.2%</span>
                                <span class="text-xs text-slate-400 font-medium">avg term rate</span>
                            </div>
                            <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                                <div class="bg-blue-600 h-full rounded-full" style="width: 94.2%"></div>
                            </div>
                        </div>

                        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-3">
                            <div class="flex items-center justify-between">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Faculty Attendance
                                </p>
                                <span class="text-xxs font-bold text-rose-600 bg-rose-50 px-1.5 py-0.5 rounded">-1.2% vs
                                    last week</span>
                            </div>
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-black text-slate-900">97.8%</span>
                                <span class="text-xs text-slate-400 font-medium">avg term rate</span>
                            </div>
                            <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
                                <div class="bg-purple-600 h-full rounded-full" style="width: 97.8%"></div>
                            </div>
                        </div>

                        <div
                            class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-3 sm:col-span-2 lg:col-span-1">
                            <div class="flex items-center justify-between">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Today's Absences
                                </p>
                                <i class="bi bi-person-exclamation text-slate-400"></i>
                            </div>
                            <div class="grid grid-cols-2 gap-2 pt-1">
                                <div>
                                    <span class="block text-xl font-black text-slate-900">72 Students</span>
                                    <span class="text-[10px] text-slate-400 uppercase font-semibold">Absent Today</span>
                                </div>
                                <div class="border-l border-slate-100 pl-3">
                                    <span class="block text-xl font-black text-slate-900">1 Teacher</span>
                                    <span class="text-[10px] text-slate-400 uppercase font-semibold">On Casual
                                        Leave</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Student
                                        Attendance Trend</h3>
                                    <p class="text-[10px] text-slate-400">Monthly aggregate breakdown across all active
                                        student wings</p>
                                </div>
                                <span
                                    class="text-[10px] font-bold px-2 py-0.5 rounded-md bg-blue-50 text-blue-600 border border-blue-100">Term
                                    Avg: 94.2%</span>
                            </div>
                            <div
                                class="h-44 flex items-end justify-between gap-4 pt-4 px-2 border-b border-l border-slate-100">
                                <div
                                    class="w-full bg-blue-100 hover:bg-blue-200 rounded-t-sm h-[88%] relative group transition-all">
                                    <span
                                        class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">88%</span>
                                    <p
                                        class="absolute -bottom-5 left-1/2 -translate-x-1/2 text-[10px] text-slate-400 font-medium">
                                        Jan</p>
                                </div>
                                <div
                                    class="w-full bg-blue-100 hover:bg-blue-200 rounded-t-sm h-[92%] relative group transition-all">
                                    <span
                                        class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">92%</span>
                                    <p
                                        class="absolute -bottom-5 left-1/2 -translate-x-1/2 text-[10px] text-slate-400 font-medium">
                                        Feb</p>
                                </div>
                                <div
                                    class="w-full bg-blue-100 hover:bg-blue-200 rounded-t-sm h-[90%] relative group transition-all">
                                    <span
                                        class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">90%</span>
                                    <p
                                        class="absolute -bottom-5 left-1/2 -translate-x-1/2 text-[10px] text-slate-400 font-medium">
                                        Mar</p>
                                </div>
                                <div class="w-full bg-blue-600 rounded-t-sm h-[94%] relative group transition-all">
                                    <span
                                        class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">94%</span>
                                    <p
                                        class="absolute -bottom-5 left-1/2 -translate-x-1/2 text-[10px] text-slate-500 font-bold">
                                        Apr</p>
                                </div>
                            </div>
                            <div class="pt-2"></div>
                        </div>

                        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Faculty
                                        Attendance by Department</h3>
                                    <p class="text-[10px] text-slate-400">Current month attendance ratios across
                                        separate departments</p>
                                </div>
                                <span
                                    class="text-[10px] font-bold px-2 py-0.5 rounded-md bg-purple-50 text-purple-600 border border-purple-100">Staff
                                    Avg: 97.8%</span>
                            </div>
                            <div
                                class="h-44 flex items-end justify-between gap-4 pt-4 px-2 border-b border-l border-slate-100">
                                <div class="w-full bg-purple-600 rounded-t-sm h-[98%] relative group transition-all">
                                    <span
                                        class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">98%</span>
                                    <p class="absolute -bottom-5 left-1/2 -translate-x-1/2 text-[10px] text-slate-500 font-bold truncate max-w-[45px] text-center"
                                        title="Mathematics">Math</p>
                                </div>
                                <div
                                    class="w-full bg-purple-100 hover:bg-purple-200 rounded-t-sm h-[94%] relative group transition-all">
                                    <span
                                        class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">94%</span>
                                    <p class="absolute -bottom-5 left-1/2 -translate-x-1/2 text-[10px] text-slate-400 font-medium truncate max-w-[45px] text-center"
                                        title="Sciences">Sci</p>
                                </div>
                                <div class="w-full bg-purple-600 rounded-t-sm h-[100%] relative group transition-all">
                                    <span
                                        class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">100%</span>
                                    <p class="absolute -bottom-5 left-1/2 -translate-x-1/2 text-[10px] text-slate-500 font-bold truncate max-w-[45px] text-center"
                                        title="English Literature">Eng</p>
                                </div>
                                <div
                                    class="w-full bg-purple-100 hover:bg-purple-200 rounded-t-sm h-[96%] relative group transition-all">
                                    <span
                                        class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">96%</span>
                                    <p class="absolute -bottom-5 left-1/2 -translate-x-1/2 text-[10px] text-slate-400 font-medium truncate max-w-[45px] text-center"
                                        title="Humanities">Hum</p>
                                </div>
                            </div>
                            <div class="pt-2"></div>
                        </div>

                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                        <div class="p-4 bg-slate-50/70 border-b border-slate-200">
                            <h3 class="text-xs font-bold text-slate-600 uppercase tracking-wider">Class-by-Class
                                Attendance Metrics</h3>
                        </div>
                        <div class="w-full overflow-x-auto block">
                            <table class="w-full text-left border-collapse min-w-[600px] text-xs">
                                <thead>
                                    <tr
                                        class="bg-slate-50/30 border-b border-slate-200 text-slate-400 font-bold uppercase tracking-wider">
                                        <th class="py-3 px-5">Class Section</th>
                                        <th class="py-3 px-5">Assigned Teacher</th>
                                        <th class="py-3 px-5 text-center">Present Today</th>
                                        <th class="py-3 px-5 text-center">Rate Percentage</th>
                                        <th class="py-3 px-5 text-right">Action Log</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-slate-600 font-medium">
                                    <tr>
                                        <td class="py-3 px-5 font-bold text-slate-900">Grade 10 - Section A</td>
                                        <td class="py-3 px-5">Asif Mahmood</td>
                                        <td class="py-3 px-5 text-center font-mono">31 / 35</td>
                                        <td class="py-3 px-5 text-center">
                                            <span class="text-emerald-600 font-bold">88.5%</span>
                                        </td>
                                        <td class="py-3 px-5 text-right">
                                            <button
                                                class="px-2 py-1 text-[11px] bg-slate-50 border border-slate-200 rounded text-slate-700 hover:bg-slate-100 transition-colors cursor-pointer">View
                                                Details</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-5 font-bold text-slate-900">Grade 9 - Section A</td>
                                        <td class="py-3 px-5">Sarah Jenkins</td>
                                        <td class="py-3 px-5 text-center font-mono">34 / 34</td>
                                        <td class="py-3 px-5 text-center">
                                            <span class="text-emerald-600 font-bold">100.0%</span>
                                        </td>
                                        <td class="py-3 px-5 text-right">
                                            <button
                                                class="px-2 py-1 text-[11px] bg-slate-50 border border-slate-200 rounded text-slate-700 hover:bg-slate-100 transition-colors cursor-pointer">View
                                                Details</button>
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
