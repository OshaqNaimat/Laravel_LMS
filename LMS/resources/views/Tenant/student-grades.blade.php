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
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">Academic Report Card</h2>
                            <p class="text-xxs text-slate-400">View your comprehensive term results, percentage tracking,
                                and performance analysis.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <button onclick="window.print()"
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold rounded-lg border border-slate-200 transition-colors cursor-pointer">
                            <i class="bi bi-download"></i> Export Report Card
                        </button>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div
                            class="bg-linear-to-br from-blue-600 to-indigo-700 p-5 rounded-xl text-white shadow-xs space-y-1">
                            <p class="text-[10px] font-bold text-blue-200 uppercase tracking-wider">Total Percentage</p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-black">88.85%</span>
                            </div>
                            <p class="text-[10px] text-blue-100/80 pt-1">Result Status: Passed (Grade A+)</p>
                        </div>

                        <div
                            class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Total Marks
                                    Obtained</p>
                                <span class="text-2xl font-black text-slate-900">355.4 / 400</span>
                                <p class="text-[10px] text-slate-400 block">Accumulated school exam metrics</p>
                            </div>
                            <div
                                class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-lg">
                                <i class="bi bi-journal-check"></i>
                            </div>
                        </div>

                        <div
                            class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">Term Rank
                                    Position</p>
                                <span class="text-2xl font-black text-slate-900">3rd <span
                                        class="text-xs font-normal text-slate-400">out of 35</span></span>
                                <p class="text-[10px] text-emerald-600 font-semibold block"><i
                                        class="bi bi-arrow-up-short"></i> Top 10% percentile group</p>
                            </div>
                            <div
                                class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-lg">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                        <div
                            class="p-5 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-3 bg-slate-50/50">
                            <div>
                                <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Term Examination
                                    Transcript</h3>
                                <p class="text-[10px] text-slate-400">Subject-wise breakdowns for monthly tests,
                                    mid-terms, and final exams.</p>
                            </div>
                            <div>
                                <select
                                    class="text-xs bg-white border border-slate-200 rounded-lg p-2 font-semibold text-slate-700 cursor-pointer focus:outline-hidden">
                                    <option value="2026_finals">Final Examinations (2026)</option>
                                    <option value="2026_mid">Mid-Term Examinations (2026)</option>
                                </select>
                            </div>
                        </div>

                        <div class="w-full overflow-x-auto block">
                            <table class="w-full text-left border-collapse min-w-[750px]">
                                <thead>
                                    <tr
                                        class="bg-slate-50 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                        <th class="py-3.5 px-6">Subject Course Title</th>
                                        <th class="py-3.5 px-4 text-center w-32">Class Tests (20)</th>
                                        <th class="py-3.5 px-4 text-center w-32">Mid Terms (30)</th>
                                        <th class="py-3.5 px-4 text-center w-32">Final Exams (50)</th>
                                        <th class="py-3.5 px-4 text-center w-32">Obtained / Total</th>
                                        <th class="py-3.5 px-4 text-center w-24">Percentage</th>
                                        <th class="py-3.5 px-6 text-right w-24">Grade</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-xs text-slate-600 font-medium">

                                    <tr class="hover:bg-slate-50/40 transition-colors">
                                        <td class="py-4 px-6">
                                            <div class="font-bold text-slate-900">Core Mathematics</div>
                                            <div class="text-[10px] text-slate-400 font-normal">Instructor: Mr. Haris •
                                                Code: MTH-10</div>
                                        </td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">18.5</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">28.2</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">47.5</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-700 font-bold">94.2 / 100
                                        </td>
                                        <td
                                            class="py-4 px-4 text-center font-mono font-bold text-slate-900 bg-slate-50/30">
                                            94.2%</td>
                                        <td class="py-4 px-6 text-right">
                                            <span
                                                class="inline-block px-2.5 py-0.5 bg-emerald-50 text-emerald-600 font-bold rounded-md border border-emerald-100">A+</span>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/40 transition-colors">
                                        <td class="py-4 px-6">
                                            <div class="font-bold text-slate-900">English Literature</div>
                                            <div class="text-[10px] text-slate-400 font-normal">Instructor: Mrs. Fatima
                                                • Code: ENG-10</div>
                                        </td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">17.0</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">25.5</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">44.0</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-700 font-bold">86.5 / 100
                                        </td>
                                        <td
                                            class="py-4 px-4 text-center font-mono font-bold text-slate-900 bg-slate-50/30">
                                            86.5%</td>
                                        <td class="py-4 px-6 text-right">
                                            <span
                                                class="inline-block px-2.5 py-0.5 bg-emerald-50 text-emerald-600 font-bold rounded-md border border-emerald-100">A</span>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/40 transition-colors">
                                        <td class="py-4 px-6">
                                            <div class="font-bold text-slate-900">Chemistry Principles</div>
                                            <div class="text-[10px] text-slate-400 font-normal">Instructor: Dr. Nadeem •
                                                Code: CHM-10</div>
                                        </td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">19.0</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">23.0</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">41.2</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-700 font-bold">83.2 / 100
                                        </td>
                                        <td
                                            class="py-4 px-4 text-center font-mono font-bold text-slate-900 bg-slate-50/30">
                                            83.2%</td>
                                        <td class="py-4 px-6 text-right">
                                            <span
                                                class="inline-block px-2.5 py-0.5 bg-blue-50 text-blue-600 font-bold rounded-md border border-blue-100">B+</span>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/40 transition-colors">
                                        <td class="py-4 px-6">
                                            <div class="font-bold text-slate-900">Computer Sciences</div>
                                            <div class="text-[10px] text-slate-400 font-normal">Instructor: Ms. Kiran •
                                                Code: CSC-10</div>
                                        </td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">19.5</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">27.0</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-500">45.0</td>
                                        <td class="py-4 px-4 text-center font-mono text-slate-700 font-bold">91.5 / 100
                                        </td>
                                        <td
                                            class="py-4 px-4 text-center font-mono font-bold text-slate-900 bg-slate-50/30">
                                            91.5%</td>
                                        <td class="py-4 px-6 text-right">
                                            <span
                                                class="inline-block px-2.5 py-0.5 bg-emerald-50 text-emerald-600 font-bold rounded-md border border-emerald-100">A+</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="md:col-span-2 bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-3">
                            <div>
                                <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Class Advisor
                                    Remarks</h4>
                                <p class="text-[10px] text-slate-400">Overall school behavioral progress notes.</p>
                            </div>
                            <blockquote
                                class="text-xs text-slate-600 bg-slate-50 border-l-4 border-slate-300 p-3 rounded-r-lg italic leading-relaxed">
                                "Zain continues to demonstrate excellent critical problem-solving skills across
                                quantitative courses. He is active during collaborative projects and school assemblies.
                                Maintaining this level of focus will comfortably keep him within the top tier of his
                                class block."
                            </blockquote>
                            <p class="text-[10px] font-bold text-slate-400 text-right">— Mrs. Fatima, Grade 10 Advisor
                            </p>
                        </div>

                        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-2.5">
                            <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider">School Grading System
                            </h4>
                            <div class="grid grid-cols-2 gap-2 text-[10px] font-semibold text-slate-500">
                                <div class="flex justify-between items-center bg-slate-50 px-2 py-1 rounded">
                                    <span>90% - 100%</span> <span class="font-bold text-emerald-600">A+</span>
                                </div>
                                <div class="flex justify-between items-center bg-slate-50 px-2 py-1 rounded">
                                    <span>80% - 89%</span> <span class="font-bold text-emerald-500">A</span>
                                </div>
                                <div class="flex justify-between items-center bg-slate-50 px-2 py-1 rounded">
                                    <span>70% - 79%</span> <span class="font-bold text-blue-600">B</span>
                                </div>
                                <div class="flex justify-between items-center bg-slate-50 px-2 py-1 rounded">
                                    <span>60% - 69%</span> <span class="font-bold text-amber-600">C</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</x-layout>
