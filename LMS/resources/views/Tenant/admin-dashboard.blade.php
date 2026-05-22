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
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">Roots International School</h2>
                            <p class="text-xxs text-slate-400">Academic Year: 2025-2026</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button
                            class="p-1.5 hover:bg-slate-100 rounded-lg text-slate-500 transition-colors cursor-pointer relative">
                            <i class="bi bi-bell text-lg"></i>
                            <span class="absolute top-1 right-1 w-2 h-2 bg-rose-500 rounded-full"></span>
                        </button>
                        <div class="h-8 w-px bg-slate-200 mx-1"></div>
                        <div class="flex items-center gap-2">
                            <div
                                class="w-8 h-8 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-xs shadow-xs">
                                PA
                            </div>
                            <span class="text-xs font-semibold text-slate-700 hidden sm:inline-block">Principal
                                Account</span>
                        </div>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                        <div
                            class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Students</p>
                                <span class="text-2xl font-black text-slate-900">1,240</span>
                                <p class="text-xxs text-emerald-600 font-medium"><i class="bi bi-arrow-up"></i> +24 new
                                    this month</p>
                            </div>
                            <div
                                class="w-12 h-12 rounded-xl bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 text-xl">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                        </div>

                        <div
                            class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Active Teachers</p>
                                <span class="text-2xl font-black text-slate-900">48</span>
                                <p class="text-xxs text-slate-400 font-medium">100% Retained</p>
                            </div>
                            <div
                                class="w-12 h-12 rounded-xl bg-purple-50 border border-purple-100 flex items-center justify-center text-purple-600 text-xl">
                                <i class="bi bi-person-badge"></i>
                            </div>
                        </div>

                        <div
                            class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Attendance Rate</p>
                                <span class="text-2xl font-black text-emerald-600">94.2%</span>
                                <p class="text-xxs text-slate-400 font-medium">Daily average this week</p>
                            </div>
                            <div
                                class="w-12 h-12 rounded-xl bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 text-xl">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                        </div>

                        <div
                            class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-1">
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Pending Tuition</p>
                                <span class="text-2xl font-black text-amber-600">$3,450</span>
                                <p class="text-xxs text-amber-600 font-semibold animate-pulse">14 Invoices Overdue</p>
                            </div>
                            <div
                                class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-100 flex items-center justify-center text-amber-600 text-xl">
                                <i class="bi bi-wallet2"></i>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                        <div
                            class="lg:col-span-2 bg-white rounded-xl border border-slate-200 shadow-xs p-6 flex flex-col justify-between min-h-[350px]">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-base font-bold text-slate-900">Fee Collections & Financial Health
                                    </h3>
                                    <p class="text-xs text-slate-500">Overview of paid versus pending collections for
                                        the current semester.</p>
                                </div>
                                <select
                                    class="text-xs bg-slate-50 border border-slate-200 rounded-md p-1 px-2 font-semibold text-slate-600 pointer-events-none">
                                    <option value="6">Last 4 Months</option>
                                    <option value="12">Full Academic Year</option>
                                </select>
                            </div>

                            <div class="flex-1 my-6 flex flex-col justify-end pt-4">
                                <div
                                    class="h-44 flex items-end justify-between gap-4 sm:gap-8 px-4 border-b border-l border-slate-100 relative">

                                    <div class="w-full flex justify-center items-end gap-1 h-full relative group">
                                        <div
                                            class="w-4 sm:w-6 bg-blue-500 rounded-t-xs h-[75%] transition-all group-hover:brightness-95 relative">
                                            <span
                                                class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1.5 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">Rs.
                                                1.2M</span>
                                        </div>
                                        <div
                                            class="w-4 sm:w-6 bg-amber-500 rounded-t-xs h-[25%] transition-all group-hover:brightness-95 relative">
                                            <span
                                                class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1.5 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">Rs.
                                                400K</span>
                                        </div>
                                        <p class="absolute -bottom-6 text-xs text-slate-400 font-semibold">Feb</p>
                                    </div>

                                    <div class="w-full flex justify-center items-end gap-1 h-full relative group">
                                        <div
                                            class="w-4 sm:w-6 bg-blue-500 rounded-t-xs h-[85%] transition-all group-hover:brightness-95 relative">
                                            <span
                                                class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1.5 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">Rs.
                                                1.5M</span>
                                        </div>
                                        <div
                                            class="w-4 sm:w-6 bg-amber-500 rounded-t-xs h-[15%] transition-all group-hover:brightness-95 relative">
                                            <span
                                                class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1.5 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">Rs.
                                                250K</span>
                                        </div>
                                        <p class="absolute -bottom-6 text-xs text-slate-400 font-semibold">Mar</p>
                                    </div>

                                    <div class="w-full flex justify-center items-end gap-1 h-full relative group">
                                        <div
                                            class="w-4 sm:w-6 bg-blue-500 rounded-t-xs h-[60%] transition-all group-hover:brightness-95 relative">
                                            <span
                                                class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1.5 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">Rs.
                                                950K</span>
                                        </div>
                                        <div
                                            class="w-4 sm:w-6 bg-amber-500 rounded-t-xs h-[40%] transition-all group-hover:brightness-95 relative">
                                            <span
                                                class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1.5 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">Rs.
                                                620K</span>
                                        </div>
                                        <p class="absolute -bottom-6 text-xs text-slate-400 font-semibold">Apr</p>
                                    </div>

                                    <div class="w-full flex justify-center items-end gap-1 h-full relative group">
                                        <div
                                            class="w-4 sm:w-6 bg-blue-600 rounded-t-xs h-[90%] transition-all group-hover:brightness-95 relative shadow-xs">
                                            <span
                                                class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1.5 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">Rs.
                                                1.8M</span>
                                        </div>
                                        <div
                                            class="w-4 sm:w-6 bg-amber-600 rounded-t-xs h-[10%] transition-all group-hover:brightness-95 relative shadow-xs">
                                            <span
                                                class="absolute -top-7 left-1/2 -translate-x-1/2 text-[10px] font-bold bg-slate-800 text-white px-1.5 py-0.5 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap z-10">Rs.
                                                200K</span>
                                        </div>
                                        <p class="absolute -bottom-6 text-xs text-slate-800 font-bold">May</p>
                                    </div>

                                </div>
                                <div class="h-4"></div>
                            </div>

                            <div class="flex items-center gap-6 text-xs text-slate-500 border-t border-slate-100 pt-4">
                                <div class="flex items-center gap-1.5"><span
                                        class="w-2.5 h-2.5 rounded-xs bg-blue-500"></span> Collected Fees</div>
                                <div class="flex items-center gap-1.5"><span
                                        class="w-2.5 h-2.5 rounded-xs bg-amber-500"></span> Arrears / Unpaid</div>
                            </div>
                        </div>

                        <div
                            class="bg-white rounded-xl border border-slate-200 shadow-xs p-6 flex flex-col min-h-[350px]">
                            <div class="mb-4">
                                <h3 class="text-base font-bold text-slate-900">Recent Campus Events</h3>
                                <p class="text-xs text-slate-500">Real-time audit log across administrative departments.
                                </p>
                            </div>

                            <div class="flex-1 relative border-l border-slate-100 pl-4 space-y-5">
                                <div class="relative">
                                    <span
                                        class="absolute -left-[21px] top-1 w-2.5 h-2.5 rounded-full bg-blue-500 border-2 border-white ring-4 ring-blue-50"></span>
                                    <span class="text-xxs font-mono text-slate-400 block">10 mins ago</span>
                                    <p class="text-xs font-bold text-slate-800">Grade 10-A Exam Marks Published</p>
                                    <p class="text-xxs text-slate-500">Posted by Admin Sarah Jenkins</p>
                                </div>
                                <div class="relative">
                                    <span
                                        class="absolute -left-[21px] top-1 w-2.5 h-2.5 rounded-full bg-emerald-500 border-2 border-white ring-4 ring-emerald-50"></span>
                                    <span class="text-xxs font-mono text-slate-400 block">1 hour ago</span>
                                    <p class="text-xs font-bold text-slate-800">New Faculty Member Added</p>
                                    <p class="text-xxs text-slate-500">Asif Mahmood (Mathematics Department)</p>
                                </div>
                                <div class="relative">
                                    <span
                                        class="absolute -left-[21px] top-1 w-2.5 h-2.5 rounded-full bg-amber-500 border-2 border-white ring-4 ring-amber-50"></span>
                                    <span class="text-xxs font-mono text-slate-400 block">4 hours ago</span>
                                    <p class="text-xs font-bold text-slate-800">Fee Voucher #481 Paid Online</p>
                                    <p class="text-xxs text-slate-500">Amount received: $250.00 via Bank Account
                                        Transfer</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </main>
        </div>
    </div>
</x-layout>
