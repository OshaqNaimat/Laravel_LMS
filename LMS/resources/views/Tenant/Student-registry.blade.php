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
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">Student Registry</h2>
                            <p class="text-xxs text-slate-400">View, audit, and track student profiles across all active
                                grades and classes.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button
                            class="inline-flex items-center gap-2 px-4 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-colors shadow-xs cursor-pointer">
                            <i class="bi bi-plus-lg"></i> Admit New Student
                        </button>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                                    Total Enrolled</p>
                                <span class="text-xl sm:text-2xl font-black text-slate-900">1,240</span>
                            </div>
                            <div
                                class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 text-base sm:text-lg">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">Male
                                    Students</p>
                                <span class="text-xl sm:text-2xl font-black text-slate-900">652</span>
                            </div>
                            <div
                                class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-teal-50 border border-teal-100 flex items-center justify-center text-teal-600 text-base sm:text-lg">
                                <i class="bi bi-gender-male"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                                    Female Students</p>
                                <span class="text-xl sm:text-2xl font-black text-slate-900">588</span>
                            </div>
                            <div
                                class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-purple-50 border border-purple-100 flex items-center justify-center text-purple-600 text-base sm:text-lg">
                                <i class="bi bi-gender-female"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                                    Suspended</p>
                                <span class="text-xl sm:text-2xl font-black text-rose-600">3</span>
                            </div>
                            <div
                                class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-rose-50 border border-rose-100 flex items-center justify-center text-rose-500 text-base sm:text-lg">
                                <i class="bi bi-exclamation-triangle"></i>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex flex-col md:flex-row gap-3 items-center justify-between">
                        <div class="relative w-full md:max-w-xs">
                            <i class="bi bi-search absolute left-3 top-2.5 text-slate-400 text-xs"></i>
                            <input type="text" placeholder="Search student name, ID or guardian..."
                                class="w-full pl-9 pr-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:bg-white focus:border-blue-500 focus:outline-hidden transition-all" />
                        </div>
                        <div class="grid grid-cols-2 md:flex items-center gap-2 w-full md:w-auto">
                            <select
                                class="text-xs bg-slate-50 border border-slate-200 rounded-lg p-1.5 px-3 font-semibold text-slate-600 cursor-pointer w-full">
                                <option value="">All Grades</option>
                                <option value="9">Grade 9</option>
                                <option value="10">Grade 10</option>
                                <option value="11">Grade 11</option>
                            </select>
                            <select
                                class="text-xs bg-slate-50 border border-slate-200 rounded-lg p-1.5 px-3 font-semibold text-slate-600 cursor-pointer w-full">
                                <option value="">Status: All</option>
                                <option value="active">Active Only</option>
                                <option value="inactive">Inactive / Suspended</option>
                            </select>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                        <div class="w-full overflow-x-auto block">
                            <table class="w-full text-left border-collapse min-w-[900px]">
                                <thead>
                                    <tr
                                        class="bg-slate-50/70 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                        <th class="py-4 px-6">Student Name / ID</th>
                                        <th class="py-4 px-6">Class Assignment</th>
                                        <th class="py-4 px-6">Guardian Info</th>
                                        <th class="py-4 px-6 text-center">Tuition Invoices</th>
                                        <th class="py-4 px-6 text-center">Status</th>
                                        <th class="py-4 px-6 text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-sm text-slate-600">

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-6 font-bold text-slate-900">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center font-bold text-xs uppercase">
                                                    ZH
                                                </div>
                                                <div>
                                                    <span class="block text-slate-900">Zain Hashmi</span>
                                                    <span
                                                        class="text-xxs font-mono text-slate-400 font-normal tracking-wide">ID:
                                                        #ST-2026-0914</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span
                                                class="inline-flex px-2 py-0.5 text-xxs font-bold rounded-md bg-slate-100 border border-slate-200 text-slate-700">Grade
                                                10-A</span>
                                        </td>
                                        <td class="py-4 px-6 text-xs">
                                            <p class="font-semibold text-slate-800">Muhammad Hashmi</p>
                                            <p class="text-slate-400 font-mono text-[10px]">+92 300 1234567</p>
                                        </td>
                                        <td class="py-4 px-6 text-center">
                                            <span
                                                class="inline-flex px-2 py-0.5 text-xxs font-semibold rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">Clear</span>
                                        </td>
                                        <td class="py-4 px-6 text-center">
                                            <span
                                                class="inline-flex items-center gap-1 px-2 py-0.5 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">
                                                <span class="w-1 h-1 rounded-full bg-emerald-500"></span> Active
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-right">
                                            <button
                                                class="p-1 px-2 text-xs bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">Profile</button>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-6 font-bold text-slate-900">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center font-bold text-xs uppercase">
                                                    AK
                                                </div>
                                                <div>
                                                    <span class="block text-slate-900">Ayesha Khan</span>
                                                    <span
                                                        class="text-xxs font-mono text-slate-400 font-normal tracking-wide">ID:
                                                        #ST-2026-1044</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span
                                                class="inline-flex px-2 py-0.5 text-xxs font-bold rounded-md bg-slate-100 border border-slate-200 text-slate-700">Grade
                                                10-A</span>
                                        </td>
                                        <td class="py-4 px-6 text-xs">
                                            <p class="font-semibold text-slate-800">Tariq Khan</p>
                                            <p class="text-slate-400 font-mono text-[10px]">+92 321 9876543</p>
                                        </td>
                                        <td class="py-4 px-6 text-center">
                                            <span
                                                class="inline-flex px-2 py-0.5 text-xxs font-semibold rounded-full bg-amber-50 text-amber-700 border border-amber-200 animate-pulse">Pending</span>
                                        </td>
                                        <td class="py-4 px-6 text-center">
                                            <span
                                                class="inline-flex items-center gap-1 px-2 py-0.5 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">
                                                <span class="w-1 h-1 rounded-full bg-emerald-500"></span> Active
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-right">
                                            <button
                                                class="p-1 px-2 text-xs bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">Profile</button>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors bg-rose-50/10">
                                        <td class="py-4 px-6 font-bold text-slate-400 line-through">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-8 h-8 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center font-bold text-xs uppercase">
                                                    DB
                                                </div>
                                                <div>
                                                    <span class="block text-slate-400">Daniyal Butt</span>
                                                    <span
                                                        class="text-xxs font-mono text-slate-300 font-normal tracking-wide line-through">ID:
                                                        #ST-2025-0042</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span
                                                class="inline-flex px-2 py-0.5 text-xxs font-bold rounded-md bg-slate-50 border border-slate-100 text-slate-400">Grade
                                                9-C</span>
                                        </td>
                                        <td class="py-4 px-6 text-xs text-slate-400">
                                            <p class="font-normal text-slate-400">Kamran Butt</p>
                                        </td>
                                        <td class="py-4 px-6 text-center text-slate-400">—</td>
                                        <td class="py-4 px-6 text-center">
                                            <span
                                                class="inline-flex items-center gap-1 px-2 py-0.5 text-xs font-medium rounded-full bg-rose-50 text-rose-700 border border-rose-100">
                                                <span class="w-1 h-1 rounded-full bg-rose-400"></span> Suspended
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-right">
                                            <button
                                                class="p-1 px-2 text-xs bg-white hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">Manage</button>
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
