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
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">My Weekly Timetable</h2>
                            <p class="text-xxs text-slate-400">Track class periods, section rooms, and core subject hour
                                assignments.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <button onclick="window.print()"
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold rounded-lg border border-slate-200 transition-colors cursor-pointer">
                            <i class="bi bi-printer"></i> Print Grid
                        </button>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                        <div class="p-4 border-b border-slate-100 bg-slate-50/50">
                            <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Class Block Registry
                            </h3>
                            <p class="text-[10px] text-slate-400">Full calendar mapping for Grade 10 - Section A</p>
                        </div>

                        <div class="w-full overflow-x-auto block">
                            <table class="w-full text-left border-collapse min-w-[800px] table-fixed">
                                <thead>
                                    <tr
                                        class="bg-slate-50 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider text-center">
                                        <th class="py-3 px-4 text-left w-24">Weekday</th>
                                        <th class="py-3 px-2 w-32">08:30 AM - 09:45 AM</th>
                                        <th class="py-3 px-2 w-32">10:00 AM - 11:15 AM</th>
                                        <th class="py-3 px-2 w-32">11:30 AM - 12:45 PM</th>
                                        <th
                                            class="py-3 px-1 w-12 bg-slate-100/50 text-[10px] tracking-normal font-black uppercase text-slate-400">
                                            Recess</th>
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
                                                <span class="text-[9px] text-blue-500 block mt-0.5">Mr. Haris •
                                                    R-304</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div
                                                class="bg-indigo-50 border border-indigo-100 p-2 rounded-lg text-indigo-700">
                                                <span class="block font-bold">English Lit</span>
                                                <span class="text-[9px] text-indigo-500 block mt-0.5">Mrs. Fatima •
                                                    R-201</span>
                                            </div>
                                        </td>
                                        <td class="p-2 text-slate-400 font-normal italic">Study Period</td>
                                        <td class="p-2 bg-slate-50/50" rowspan="5"></td>
                                        <td class="p-2">
                                            <div
                                                class="bg-emerald-50 border border-emerald-100 p-2 rounded-lg text-emerald-700">
                                                <span class="block font-bold">Chemistry Lab</span>
                                                <span class="text-[9px] text-emerald-500 block mt-0.5">Dr. Nadeem • Lab
                                                    2</span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-4 font-bold text-slate-900 text-left text-xs bg-slate-50/30">
                                            Tuesday</td>
                                        <td class="p-2 text-slate-400 font-normal italic">Study Period</td>
                                        <td class="p-2">
                                            <div
                                                class="bg-amber-50 border border-amber-100 p-2 rounded-lg text-amber-700">
                                                <span class="block font-bold">World History</span>
                                                <span class="text-[9px] text-amber-500 block mt-0.5">Mr. Bilall •
                                                    R-104</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="bg-blue-50 border border-blue-100 p-2 rounded-lg text-blue-700">
                                                <span class="block font-bold">Mathematics</span>
                                                <span class="text-[9px] text-blue-500 block mt-0.5">Mr. Haris •
                                                    R-304</span>
                                            </div>
                                        </td>
                                        <td class="p-2 text-slate-400 font-normal italic">Study Period</td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-4 font-bold text-slate-900 text-left text-xs bg-slate-50/30">
                                            Wednesday</td>
                                        <td class="p-2">
                                            <div class="bg-blue-50 border border-blue-100 p-2 rounded-lg text-blue-700">
                                                <span class="block font-bold">Mathematics</span>
                                                <span class="text-[9px] text-blue-500 block mt-0.5">Mr. Haris •
                                                    R-304</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div
                                                class="bg-indigo-50 border border-indigo-100 p-2 rounded-lg text-indigo-700">
                                                <span class="block font-bold">English Lit</span>
                                                <span class="text-[9px] text-indigo-500 block mt-0.5">Mrs. Fatima •
                                                    R-201</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div
                                                class="bg-purple-50 border border-purple-100 p-2 rounded-lg text-purple-700">
                                                <span class="block font-bold">Computer Sci</span>
                                                <span class="text-[9px] text-purple-500 block mt-0.5">Ms. Kiran • Tech
                                                    Hub</span>
                                            </div>
                                        </td>
                                        <td class="p-2 text-slate-400 font-normal italic">Study Period</td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-4 font-bold text-slate-900 text-left text-xs bg-slate-50/30">
                                            Thursday</td>
                                        <td class="p-2 text-slate-400 font-normal italic">Study Period</td>
                                        <td class="p-2">
                                            <div
                                                class="bg-amber-50 border border-amber-100 p-2 rounded-lg text-amber-700">
                                                <span class="block font-bold">World History</span>
                                                <span class="text-[9px] text-amber-500 block mt-0.5">Mr. Bilall •
                                                    R-104</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div class="bg-blue-50 border border-blue-100 p-2 rounded-lg text-blue-700">
                                                <span class="block font-bold">Mathematics</span>
                                                <span class="text-[9px] text-blue-500 block mt-0.5">Mr. Haris •
                                                    R-304</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div
                                                class="bg-purple-50 border border-purple-100 p-2 rounded-lg text-purple-700">
                                                <span class="block font-bold">Computer Sci</span>
                                                <span class="text-[9px] text-purple-500 block mt-0.5">Ms. Kiran • Tech
                                                    Hub</span>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors bg-blue-50/10">
                                        <td
                                            class="py-4 px-4 font-black text-blue-700 text-left text-xs bg-blue-50/20 border-l-4 border-blue-600">
                                            Friday</td>
                                        <td class="p-2">
                                            <div
                                                class="bg-blue-600 border border-blue-700 shadow-xs p-2 rounded-lg text-white">
                                                <span class="block font-bold">Mathematics</span>
                                                <span class="text-[9px] text-blue-100 block mt-0.5">Mr. Haris •
                                                    R-304</span>
                                            </div>
                                        </td>
                                        <td class="p-2">
                                            <div
                                                class="bg-indigo-50 border border-indigo-100 p-2 rounded-lg text-indigo-700">
                                                <span class="block font-bold">English Lit</span>
                                                <span class="text-[9px] text-indigo-500 block mt-0.5">Mrs. Fatima •
                                                    R-201</span>
                                            </div>
                                        </td>
                                        <td class="p-2 text-slate-400 font-normal italic">Study Period</td>
                                        <td class="p-2">
                                            <div
                                                class="bg-emerald-50 border border-emerald-100 p-2 rounded-lg text-emerald-700">
                                                <span class="block font-bold">Biology Research</span>
                                                <span class="text-[9px] text-emerald-500 block mt-0.5">Dr. Nadeem •
                                                    R-301</span>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs p-5 space-y-3">
                        <div class="flex items-center gap-2">
                            <i class="bi bi-info-circle text-blue-600 text-base"></i>
                            <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Schedule Notices</h3>
                        </div>
                        <p class="text-xxs text-slate-500 leading-normal">
                            Chemistry Lab practical evaluations for Monday afternoon sessions will be hosted in the Main
                            Auditorium instead of Lab 2 next week. Please carry your validated lab manuals.
                        </p>
                    </div>

                </div>
            </main>
        </div>
    </div>
</x-layout>
