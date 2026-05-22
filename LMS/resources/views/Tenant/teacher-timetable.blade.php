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
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">My Teaching Schedule</h2>
                            <p class="text-xxs text-slate-400">View your comprehensive weekly schedule grid and active
                                daily assignments.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <button onclick="window.print()"
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold rounded-lg border border-slate-200 transition-colors cursor-pointer">
                            <i class="bi bi-printer"></i> Print Schedule
                        </button>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                        <div class="p-4 border-b border-slate-100 bg-slate-50/50">
                            <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Weekly Block Matrix
                            </h3>
                            <p class="text-[10px] text-slate-400">Overview of your assigned sections throughout the
                                academic week.</p>
                        </div>

                        <div class="w-full overflow-x-auto block">
                            <table class="w-full text-left border-collapse min-w-[800px] table-fixed">
                                <thead>
                                    <tr
                                        class="bg-slate-50 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">
                                        <th class="py-3 px-4 text-left w-24">Day</th>
                                        <th class="py-3 px-2 w-32">08:30 AM - 09:45 AM</th>
                                        <th class="py-3 px-2 w-32">10:00 AM - 11:15 AM</th>
                                        <th class="py-3 px-2 w-32">11:30 AM - 12:45 PM</th>
                                        <th
                                            class="py-3 px-2 w-16 bg-slate-100/50 text-[10px] font-black tracking-normal">
                                            Break</th>
                                        <th class="py-3 px-2 w-32">01:30 PM - 02:45 PM</th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="divide-y divide-slate-100 text-xxs text-slate-600 text-center font-medium">

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-4 font-bold text-slate-900 text-left text-xs bg-slate-50/30">
                                            Monday</td>
                                        <td class="p-2">
                                            <div class="bg-blue-50 border border-blue-100 p-2 rounded-lg text-blue-700">
                                                <span class="block font-bold">Mathematics</span>
                                                <span class="text-[9px] text-blue-500/90 block mt-0.5">Grade 10-A •
                                                    R-304</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div
                                                class="bg-purple-50 border border-purple-100 p-2 rounded-lg text-purple-700">
                                                <span class="block font-bold">Algebra</span>
                                                <span class="text-[9px] text-purple-500/90 block mt-0.5">Grade 9-B •
                                                    R-102</span>
                                            </div>
                                        </td>
                                        <td class="p-2 text-slate-400 font-normal italic">Free Window</td>
                                        <td class="p-2 bg-slate-50/50" rowspan="5"></td>
                                        <td class="p-2">
                                            <div class="bg-blue-50 border border-blue-100 p-2 rounded-lg text-blue-700">
                                                <span class="block font-bold">Math Seminar</span>
                                                <span class="text-[9px] text-blue-500/90 block mt-0.5">Grade 10-B •
                                                    R-304</span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-4 font-bold text-slate-900 text-left text-xs bg-slate-50/30">
                                            Tuesday</td>
                                        <td class="p-2 text-slate-400 font-normal italic">Free Window</td>
                                        <td class="p-2">
                                            <div
                                                class="bg-purple-50 border border-purple-100 p-2 rounded-lg text-purple-700">
                                                <span class="block font-bold">Algebra</span>
                                                <span class="text-[9px] text-purple-500/90 block mt-0.5">Grade 9-B •
                                                    R-102</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="bg-blue-50 border border-blue-100 p-2 rounded-lg text-blue-700">
                                                <span class="block font-bold">Mathematics</span>
                                                <span class="text-[9px] text-blue-500/90 block mt-0.5">Grade 10-A •
                                                    R-304</span>
                                            </div>
                                        </td>
                                        <td class="p-2 text-slate-400 font-normal italic">Free Window</td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-4 font-bold text-slate-900 text-left text-xs bg-slate-50/30">
                                            Wednesday</td>
                                        <td class="p-2">
                                            <div class="bg-blue-50 border border-blue-100 p-2 rounded-lg text-blue-700">
                                                <span class="block font-bold">Mathematics</span>
                                                <span class="text-[9px] text-blue-500/90 block mt-0.5">Grade 10-A •
                                                    R-304</span>
                                            </div>
                                        </td>
                                        <td class="p-2 text-slate-400 font-normal italic">Free Window</td>
                                        <td class="p-2">
                                            <div class="bg-blue-50 border border-blue-100 p-2 rounded-lg text-blue-700">
                                                <span class="block font-bold">Calculus Intro</span>
                                                <span class="text-[9px] text-blue-500/90 block mt-0.5">Grade 10-B •
                                                    R-305</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div
                                                class="bg-purple-50 border border-purple-100 p-2 rounded-lg text-purple-700">
                                                <span class="block font-bold">Algebra</span>
                                                <span class="text-[9px] text-purple-500/90 block mt-0.5">Grade 9-B •
                                                    R-102</span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-4 font-bold text-slate-900 text-left text-xs bg-slate-50/30">
                                            Thursday</td>
                                        <td class="p-2 text-slate-400 font-normal italic">Free Window</td>
                                        <td class="p-2">
                                            <div
                                                class="bg-purple-50 border border-purple-100 p-2 rounded-lg text-purple-700">
                                                <span class="block font-bold">Algebra</span>
                                                <span class="text-[9px] text-purple-500/90 block mt-0.5">Grade 9-B •
                                                    R-102</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="bg-blue-50 border border-blue-100 p-2 rounded-lg text-blue-700">
                                                <span class="block font-bold">Mathematics</span>
                                                <span class="text-[9px] text-blue-500/90 block mt-0.5">Grade 10-A •
                                                    R-304</span>
                                            </div>
                                        </td>
                                        <td class="p-2 text-slate-400 font-normal italic">Free Window</td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors bg-emerald-50/10">
                                        <td
                                            class="py-4 px-4 font-black text-emerald-700 text-left text-xs bg-emerald-50/30 border-l-4 border-emerald-500">
                                            Friday</td>
                                        <td class="p-2">
                                            <div
                                                class="bg-blue-600 border border-blue-700 shadow-xs p-2 rounded-lg text-white">
                                                <span class="block font-bold">Mathematics</span>
                                                <span class="text-[9px] text-blue-100 block mt-0.5">Grade 10-A •
                                                    R-304</span>
                                            </div>
                                        </td>
                                        <td class="p-2 text-slate-400 font-normal italic">Free Window</td>
                                        <td class="p-2">
                                            <div class="bg-blue-50 border border-blue-100 p-2 rounded-lg text-blue-700">
                                                <span class="block font-bold">Advanced Calc</span>
                                                <span class="text-[9px] text-blue-500/90 block mt-0.5">Grade 10-B •
                                                    R-304</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div
                                                class="bg-purple-50 border border-purple-100 p-2 rounded-lg text-purple-700">
                                                <span class="block font-bold">Geometry Lab</span>
                                                <span class="text-[9px] text-purple-500/90 block mt-0.5">Grade 9-B •
                                                    R-102</span>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs p-5 space-y-4">
                        <div>
                            <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Today's Class Queue
                            </h3>
                            <p class="text-[10px] text-slate-400">Sequential look at your commitments for the ongoing
                                session.</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">

                            <div
                                class="p-4 rounded-xl border-l-4 border-blue-600 bg-blue-50/20 space-y-3 border border-slate-100">
                                <div class="flex justify-between items-start">
                                    <span
                                        class="text-[9px] font-mono font-bold text-blue-700 bg-blue-100 px-1.5 py-0.5 rounded">08:30
                                        AM - 09:45 AM</span>
                                    <span
                                        class="text-[9px] font-black tracking-wider uppercase text-white bg-blue-600 px-1 rounded animate-pulse">Live</span>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-slate-900">Core Mathematics</h4>
                                    <p class="text-xxs text-slate-500 mt-0.5">Grade 10-A • Room 304-B (Main Wing)</p>
                                </div>
                            </div>

                            <div
                                class="p-4 rounded-xl border-l-4 border-slate-300 bg-white space-y-3 border border-slate-200">
                                <div class="flex justify-between items-start">
                                    <span
                                        class="text-[9px] font-mono font-semibold text-slate-500 bg-slate-100 px-1.5 py-0.5 rounded">11:30
                                        AM - 12:45 PM</span>
                                    <span class="text-[9px] font-semibold text-slate-400">Period 4</span>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-slate-800">Advanced Calculus</h4>
                                    <p class="text-xxs text-slate-400 mt-0.5">Grade 10-B • Room 304-C (Science Lab)</p>
                                </div>
                            </div>

                            <div
                                class="p-4 rounded-xl border-l-4 border-slate-300 bg-white space-y-3 border border-slate-200">
                                <div class="flex justify-between items-start">
                                    <span
                                        class="text-[9px] font-mono font-semibold text-slate-500 bg-slate-100 px-1.5 py-0.5 rounded">01:30
                                        PM - 02:45 PM</span>
                                    <span class="text-[9px] font-semibold text-slate-400">Period 5</span>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-slate-800">Geometry Lab</h4>
                                    <p class="text-xxs text-slate-400 mt-0.5">Grade 9-B • Room 102 (Basement Wing)</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</x-layout>
