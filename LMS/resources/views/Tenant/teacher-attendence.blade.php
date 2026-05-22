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
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">Daily Attendance Sheet</h2>
                            <p class="text-xxs text-slate-400">Select a class section registry layout matrix to log
                                student presence.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <button type="button" onclick="alert('Attendance saved successfully!')"
                            class="inline-flex items-center gap-1.5 px-4 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold rounded-lg transition-colors shadow-xs cursor-pointer">
                            <i class="bi bi-check-circle"></i> Save Attendance
                        </button>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div
                        class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex flex-col sm:flex-row gap-3 items-center justify-between">
                        <div class="flex flex-wrap items-center gap-2 w-full sm:w-auto">
                            <div class="w-full sm:w-44">
                                <label
                                    class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Class
                                    Section</label>
                                <select
                                    class="w-full text-xs bg-slate-50 border border-slate-200 rounded-lg p-2 font-semibold text-slate-700 cursor-pointer">
                                    <option value="10A">Grade 10 - Section A</option>
                                    <option value="9B">Grade 9 - Section B</option>
                                    <option value="10B">Grade 10 - Section B</option>
                                </select>
                            </div>
                            <div class="w-full sm:w-44">
                                <label
                                    class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Period
                                    / Subject</label>
                                <select
                                    class="w-full text-xs bg-slate-50 border border-slate-200 rounded-lg p-2 font-semibold text-slate-700 cursor-pointer">
                                    <option value="math">09:00 AM - Mathematics</option>
                                    <option value="alg">10:30 AM - Algebra</option>
                                </select>
                            </div>
                        </div>

                        <div class="text-right w-full sm:w-auto">
                            <span class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Sheet
                                Session Date</span>
                            <div
                                class="inline-flex items-center gap-2 px-3 py-1.5 bg-slate-100 border border-slate-200 text-slate-700 text-xs font-bold rounded-lg">
                                <i class="bi bi-calendar-event text-slate-400"></i> Today, May 22, 2026
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-xs text-center">
                            <span class="block text-xl font-black text-slate-900">35</span>
                            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Total Enrolled</p>
                        </div>
                        <div class="bg-emerald-50/40 p-3.5 rounded-xl border border-emerald-100 text-center">
                            <span class="block text-xl font-black text-emerald-600">31</span>
                            <p class="text-[10px] font-bold text-emerald-500 uppercase tracking-wider">Present Today</p>
                        </div>
                        <div class="bg-rose-50/40 p-3.5 rounded-xl border border-rose-100 text-center">
                            <span class="block text-xl font-black text-rose-600">4</span>
                            <p class="text-[10px] font-bold text-rose-500 uppercase tracking-wider">Absent / Leave</p>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                        <div class="w-full overflow-x-auto block">
                            <table class="w-full text-left border-collapse min-w-[600px]">
                                <thead>
                                    <tr
                                        class="bg-slate-50 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                        <th class="py-3 px-6 w-24">Roll No</th>
                                        <th class="py-3 px-6">Student Full Name</th>
                                        <th class="py-3 px-6 text-center w-72">Attendance Status Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-sm text-slate-600">

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-3.5 px-6 font-mono text-xs font-bold text-slate-400">10A-01</td>
                                        <td class="py-3.5 px-6">
                                            <div class="font-bold text-slate-900">Zain Hashmi</div>
                                            <div class="text-[10px] text-slate-400">Guardian Contacted • Bus Route 3
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-6">
                                            <div
                                                class="flex items-center justify-center gap-1 bg-slate-100 p-1 rounded-lg border border-slate-200 max-w-[260px] mx-auto">
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-bold rounded-md bg-emerald-600 text-white shadow-xs transition-all cursor-pointer">P</button>
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-medium rounded-md text-slate-600 hover:bg-white transition-all cursor-pointer">A</button>
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-medium rounded-md text-slate-600 hover:bg-white transition-all cursor-pointer">L</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-3.5 px-6 font-mono text-xs font-bold text-slate-400">10A-02</td>
                                        <td class="py-3.5 px-6">
                                            <div class="font-bold text-slate-900">Ayesha Khan</div>
                                            <div class="text-[10px] text-slate-400">Hostel Resident • Room 12-B</div>
                                        </td>
                                        <td class="py-3.5 px-6">
                                            <div
                                                class="flex items-center justify-center gap-1 bg-slate-100 p-1 rounded-lg border border-slate-200 max-w-[260px] mx-auto">
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-bold rounded-md bg-emerald-600 text-white shadow-xs transition-all cursor-pointer">P</button>
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-medium rounded-md text-slate-600 hover:bg-white transition-all cursor-pointer">A</button>
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-medium rounded-md text-slate-600 hover:bg-white transition-all cursor-pointer">L</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors bg-rose-50/10">
                                        <td class="py-3.5 px-6 font-mono text-xs font-bold text-rose-400">10A-03</td>
                                        <td class="py-3.5 px-6">
                                            <div class="font-bold text-slate-900">Daniyal Butt</div>
                                            <div class="text-[10px] text-rose-500 font-semibold">Flagged: Unexcused
                                                Absence</div>
                                        </td>
                                        <td class="py-3.5 px-6">
                                            <div
                                                class="flex items-center justify-center gap-1 bg-slate-100 p-1 rounded-lg border border-slate-200 max-w-[260px] mx-auto">
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-medium rounded-md text-slate-600 hover:bg-white transition-all cursor-pointer">P</button>
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-bold rounded-md bg-rose-600 text-white shadow-xs transition-all cursor-pointer">A</button>
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-medium rounded-md text-slate-600 hover:bg-white transition-all cursor-pointer">L</button>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors bg-amber-50/10">
                                        <td class="py-3.5 px-6 font-mono text-xs font-bold text-amber-500">10A-04</td>
                                        <td class="py-3.5 px-6">
                                            <div class="font-bold text-slate-900">Eshaal Fatima</div>
                                            <div class="text-[10px] text-amber-600 font-semibold">Medical Application
                                                Submitted</div>
                                        </td>
                                        <td class="py-3.5 px-6">
                                            <div
                                                class="flex items-center justify-center gap-1 bg-slate-100 p-1 rounded-lg border border-slate-200 max-w-[260px] mx-auto">
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-medium rounded-md text-slate-600 hover:bg-white transition-all cursor-pointer">P</button>
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-medium rounded-md text-slate-600 hover:bg-white transition-all cursor-pointer">A</button>
                                                <button type="button"
                                                    class="flex-1 py-1 px-3 text-xs font-bold rounded-md bg-amber-500 text-white shadow-xs transition-all cursor-pointer">L</button>
                                            </div>
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
