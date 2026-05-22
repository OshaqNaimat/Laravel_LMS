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
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">Faculty Management</h2>
                            <p class="text-xxs text-slate-400">Manage school instructors, department leads, and academic
                                access privileges.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button
                            class="inline-flex items-center gap-2 px-4 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-colors shadow-xs cursor-pointer">
                            <i class="bi bi-person-plus"></i> Add New Teacher
                        </button>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                        <div
                            class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Instructors
                                </p>
                                <span class="text-2xl font-black text-slate-900">48</span>
                            </div>
                            <div
                                class="w-10 h-10 rounded-lg bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 text-lg">
                                <i class="bi bi-people"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Science & Math</p>
                                <span class="text-2xl font-black text-purple-600">18</span>
                            </div>
                            <div
                                class="w-10 h-10 rounded-lg bg-purple-50 border border-purple-100 flex items-center justify-center text-purple-600 text-lg">
                                <i class="bi bi-calculator"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Humanities & Arts
                                </p>
                                <span class="text-2xl font-black text-amber-600">22</span>
                            </div>
                            <div
                                class="w-10 h-10 rounded-lg bg-amber-50 border border-amber-100 flex items-center justify-center text-amber-600 text-lg">
                                <i class="bi bi-palette"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">On Medical Leave
                                </p>
                                <span class="text-2xl font-black text-rose-600">2</span>
                            </div>
                            <div
                                class="w-10 h-10 rounded-lg bg-rose-50 border border-rose-100 flex items-center justify-center text-rose-600 text-lg">
                                <i class="bi bi-heart-pulse"></i>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex flex-col sm:flex-row gap-3 items-center justify-between">
                        <div class="relative w-full sm:max-w-xs">
                            <i class="bi bi-search absolute left-3 top-2.5 text-slate-400 text-xs"></i>
                            <input type="text" placeholder="Search teacher names or emails..."
                                class="w-full pl-9 pr-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:bg-white focus:border-blue-500 focus:outline-hidden transition-all" />
                        </div>
                        <div class="flex items-center gap-2 w-full sm:w-auto justify-end">
                            <select
                                class="text-xs bg-slate-50 border border-slate-200 rounded-lg p-1.5 px-3 font-semibold text-slate-600 cursor-pointer">
                                <option value="">All Departments</option>
                                <option value="math">Mathematics</option>
                                <option value="science">Natural Sciences</option>
                                <option value="english">English Literature</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                            <div class="w-full overflow-x-auto block">
                                <table class="w-full text-left border-collapse min-w-[850px]">
                                    <thead>
                                        <tr
                                            class="bg-slate-50/70 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                            <th class="py-4 px-6">Faculty Member</th>
                                            <th class="py-4 px-6">Department</th>
                                            <th class="py-4 px-6">Assigned Classes</th>
                                            <th class="py-4 px-6 text-center">Status</th>
                                            <th class="py-4 px-6 text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100 text-sm text-slate-600">

                                        <tr class="hover:bg-slate-50/50 transition-colors">
                                            <td class="py-4 px-6 font-bold text-slate-900">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-8 h-8 rounded-full bg-blue-50 border border-blue-200 text-blue-600 flex items-center justify-center font-bold text-xs">
                                                        AM
                                                    </div>
                                                    <div>
                                                        <span class="block">Asif Mahmood</span>
                                                        <span
                                                            class="text-xxs font-mono text-slate-400 font-normal">asif.mahmood@school.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 font-medium text-slate-600">Mathematics</td>
                                            <td class="py-4 px-6">
                                                <div class="flex gap-1 flex-wrap">
                                                    <span
                                                        class="bg-slate-100 border border-slate-200 text-slate-600 text-xxs font-semibold px-2 py-0.5 rounded-md">Grade
                                                        9-A</span>
                                                    <span
                                                        class="bg-slate-100 border border-slate-200 text-slate-600 text-xxs font-semibold px-2 py-0.5 rounded-md">Grade
                                                        10-C</span>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2 py-0.5 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                                </span>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <button
                                                    class="p-1 px-2 text-xs bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">Manage</button>
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-slate-50/50 transition-colors">
                                            <td class="py-4 px-6 font-bold text-slate-900">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-8 h-8 rounded-full bg-purple-50 border border-purple-200 text-purple-600 flex items-center justify-center font-bold text-xs">
                                                        SJ
                                                    </div>
                                                    <div>
                                                        <span class="block">Sarah Jenkins</span>
                                                        <span
                                                            class="text-xxs font-mono text-slate-400 font-normal">s.jenkins@school.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 font-medium text-slate-600">
                                                <div class="space-y-0.5">
                                                    <span>Natural Sciences</span>
                                                    <span
                                                        class="block text-[10px] text-purple-600 font-bold uppercase tracking-wider">HOD</span>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6">
                                                <div class="flex gap-1 flex-wrap">
                                                    <span
                                                        class="bg-slate-100 border border-slate-200 text-slate-600 text-xxs font-semibold px-2 py-0.5 rounded-md">Grade
                                                        11-M</span>
                                                    <span
                                                        class="bg-slate-100 border border-slate-200 text-slate-600 text-xxs font-semibold px-2 py-0.5 rounded-md">Grade
                                                        12-S</span>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2 py-0.5 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                                </span>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <button
                                                    class="p-1 px-2 text-xs bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">Manage</button>
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-slate-50/50 transition-colors">
                                            <td class="py-4 px-6 font-bold text-slate-900">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-8 h-8 rounded-full bg-rose-50 border border-rose-100 text-rose-500 flex items-center justify-center font-bold text-xs">
                                                        RA
                                                    </div>
                                                    <div>
                                                        <span class="block">Raza Ahmed</span>
                                                        <span
                                                            class="text-xxs font-mono text-slate-400 font-normal">raza.a@school.com</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 font-medium text-slate-600">English Literature</td>
                                            <td class="py-4 px-6 text-slate-400 italic text-xs">None assigned</td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2 py-0.5 text-xs font-medium rounded-full bg-amber-50 text-amber-700 border border-amber-100">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span> On
                                                    Leave
                                                </span>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <button
                                                    class="p-1 px-2 text-xs bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">Manage</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
</x-layout>
