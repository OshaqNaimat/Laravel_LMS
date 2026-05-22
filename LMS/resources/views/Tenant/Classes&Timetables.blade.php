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
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">Classes & Timetables</h2>
                            <p class="text-xxs text-slate-400">Schedule active lectures, assign primary rooms, and audit
                                faculty periods.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button
                            class="inline-flex items-center gap-2 px-4 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-colors shadow-xs cursor-pointer">
                            <i class="bi bi-calendar-plus"></i> Create Schedule Slot
                        </button>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div
                        class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex flex-col sm:flex-row gap-4 items-center justify-between">
                        <div
                            class="flex items-center gap-1 bg-slate-100 p-1 rounded-xl w-full sm:w-auto overflow-x-auto block">
                            <button
                                class="flex-1 sm:flex-initial px-3 py-1 text-xs font-bold rounded-lg bg-white text-slate-900 shadow-xs cursor-pointer">Mon</button>
                            <button
                                class="flex-1 sm:flex-initial px-3 py-1 text-xs font-medium rounded-lg text-slate-500 hover:text-slate-800 cursor-pointer">Tue</button>
                            <button
                                class="flex-1 sm:flex-initial px-3 py-1 text-xs font-medium rounded-lg text-slate-500 hover:text-slate-800 cursor-pointer">Wed</button>
                            <button
                                class="flex-1 sm:flex-initial px-3 py-1 text-xs font-medium rounded-lg text-slate-500 hover:text-slate-800 cursor-pointer">Thu</button>
                            <button
                                class="flex-1 sm:flex-initial px-3 py-1 text-xs font-medium rounded-lg text-slate-500 hover:text-slate-800 cursor-pointer">Fri</button>
                        </div>

                        <div class="w-full sm:w-48 flex-shrink-0">
                            <select
                                class="w-full text-xs bg-slate-50 border border-slate-200 rounded-lg p-2 font-bold text-slate-700 cursor-pointer focus:bg-white focus:border-blue-500 focus:outline-hidden">
                                <option value="1a" selected>Grade 1 - Section A</option>
                                <option value="1b">Grade 1 - Section B</option>
                                <option value="2a">Grade 2 - Section A</option>
                                <option value="3a">Grade 3 - Section A</option>
                                <option value="4a">Grade 4 - Section A</option>
                                <option value="5a">Grade 5 - Section A</option>
                                <option value="6a">Grade 6 - Section A</option>
                                <option value="7a">Grade 7 - Section A</option>
                                <option value="8a">Grade 8 - Section A</option>
                                <option value="9a">Grade 9 - Section A</option>
                                <option value="10a">Grade 10 - Section A</option>
                                <option value="10b">Grade 10 - Section B</option>
                            </select>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                        <div class="space-y-4 lg:col-span-1">
                            <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs space-y-4">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Active
                                        Classroom</span>
                                    <span
                                        class="px-2 py-0.5 text-xxs font-bold bg-blue-50 text-blue-700 rounded border border-blue-100">Primary
                                        Room</span>
                                </div>
                                <div>
                                    <h3 class="text-xl font-black text-slate-900">Room 304-B</h3>
                                    <p class="text-xs text-slate-500">Science Block, 3rd Floor</p>
                                </div>
                                <hr class="border-slate-100" />
                                <div class="grid grid-cols-2 gap-4 pt-1">
                                    <div>
                                        <p class="text-xxs font-semibold text-slate-400 uppercase">Class Teacher</p>
                                        <p class="text-xs font-bold text-slate-800 mt-0.5">Asif Mahmood</p>
                                    </div>
                                    <div>
                                        <p class="text-xxs font-semibold text-slate-400 uppercase">Total Capacity</p>
                                        <p class="text-xs font-bold text-slate-800 mt-0.5">35 Students</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-2 bg-white rounded-xl border border-slate-200 shadow-xs p-5 space-y-4">
                            <div>
                                <h3 class="text-sm font-bold text-slate-900">Monday Schedule Overview</h3>
                                <p class="text-xxs text-slate-400">Sequential order of lectures, intervals, and
                                    designated subject instructors.</p>
                            </div>

                            <div class="pt-2 w-full space-y-3">

                                <div
                                    class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4 p-3 rounded-xl bg-slate-50/50 border border-slate-200/60 hover:border-slate-300 transition-all">
                                    <div class="w-full sm:w-24 flex-shrink-0">
                                        <span class="block text-xs font-bold text-slate-900">08:30 AM</span>
                                        <span class="text-[10px] text-slate-400 font-mono">09:15 AM (45m)</span>
                                    </div>
                                    <div
                                        class="hidden sm:block w-2.5 h-2.5 rounded-full bg-blue-500 ring-4 ring-blue-50 flex-shrink-0">
                                    </div>
                                    <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-2 sm:pl-2">
                                        <div>
                                            <h4 class="text-xs font-bold text-slate-900">Advanced Mathematics</h4>
                                            <p class="text-xxs text-slate-400">Algebraic Functions & Matrices</p>
                                        </div>
                                        <div class="text-left sm:text-right self-center sm:pr-2">
                                            <span class="text-xs font-semibold text-slate-700">Asif Mahmood</span>
                                            <span class="block text-[10px] text-slate-400">Math Dept Lead</span>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4 p-3 rounded-xl bg-slate-50/50 border border-slate-200/60 hover:border-slate-300 transition-all">
                                    <div class="w-full sm:w-24 flex-shrink-0">
                                        <span class="block text-xs font-bold text-slate-900">09:15 AM</span>
                                        <span class="text-[10px] text-slate-400 font-mono">10:00 AM (45m)</span>
                                    </div>
                                    <div
                                        class="hidden sm:block w-2.5 h-2.5 rounded-full bg-purple-500 ring-4 ring-purple-50 flex-shrink-0">
                                    </div>
                                    <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-2 sm:pl-2">
                                        <div>
                                            <h4 class="text-xs font-bold text-slate-900">Organic Chemistry</h4>
                                            <p class="text-xxs text-slate-400">Covalent Bonds & Hydrocarbons Lab</p>
                                        </div>
                                        <div class="text-left sm:text-right self-center sm:pr-2">
                                            <span class="text-xs font-semibold text-slate-700">Sarah Jenkins</span>
                                            <span class="block text-[10px] text-slate-400">Natural Science HOD</span>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-4 p-2.5 rounded-xl bg-amber-50/40 border border-dashed border-amber-200">
                                    <div class="w-full sm:w-24 flex-shrink-0">
                                        <span class="block text-xs font-bold text-amber-900">10:00 AM</span>
                                        <span class="text-[10px] text-amber-600 font-mono">10:30 AM (30m)</span>
                                    </div>
                                    <div
                                        class="hidden sm:block w-2.5 h-2.5 rounded-full bg-amber-400 ring-4 ring-amber-100 flex-shrink-0">
                                    </div>
                                    <div class="flex-1 sm:pl-2">
                                        <h4 class="text-xs font-bold text-amber-900 flex items-center gap-1.5">
                                            <i class="bi bi-cup-hot text-xs"></i> Morning Recess Break
                                        </h4>
                                        <p class="text-xxs text-amber-700/70">Campus Main Cafeteria Operational Window
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4 p-3 rounded-xl bg-slate-50/50 border border-slate-200/60 hover:border-slate-300 transition-all">
                                    <div class="w-full sm:w-24 flex-shrink-0">
                                        <span class="block text-xs font-bold text-slate-900">10:30 AM</span>
                                        <span class="text-[10px] text-slate-400 font-mono">11:15 AM (45m)</span>
                                    </div>
                                    <div
                                        class="hidden sm:block w-2.5 h-2.5 rounded-full bg-slate-400 ring-4 ring-slate-100 flex-shrink-0">
                                    </div>
                                    <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 gap-2 sm:pl-2">
                                        <div>
                                            <h4 class="text-xs font-bold text-slate-900">English Literature</h4>
                                            <p class="text-xxs text-slate-400">Shakespearean Prose Analytics</p>
                                        </div>
                                        <div class="text-left sm:text-right self-center sm:pr-2">
                                            <span class="text-xs font-semibold text-slate-400 line-through">Raza
                                                Ahmed</span>
                                            <span class="block text-[10px] text-amber-600 font-semibold"><i
                                                    class="bi bi-patch-exclamation"></i> Substitute Required</span>
                                        </div>
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
