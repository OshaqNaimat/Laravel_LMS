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
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">Fee Collection Dashboard</h2>
                            <p class="text-xxs text-slate-400">Track student billing accounts, log incoming payments, and
                                audit aging dues.</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <button
                            class="inline-flex items-center gap-2 px-4 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-colors shadow-xs cursor-pointer">
                            <i class="bi bi-cash-coin"></i> Record Payment
                        </button>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                                    Total Target (Term)</p>
                                <span class="text-xl sm:text-2xl font-black text-slate-900">Rs. 4.8M</span>
                            </div>
                            <div
                                class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-blue-50 border border-blue-100 flex items-center justify-center text-blue-600 text-base sm:text-lg">
                                <i class="bi bi-calculator"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                                    Collected Dues</p>
                                <span class="text-xl sm:text-2xl font-black text-emerald-600">Rs. 3.9M</span>
                            </div>
                            <div
                                class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 text-base sm:text-lg">
                                <i class="bi bi-wallet2"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                                    Outstanding Dues</p>
                                <span class="text-xl sm:text-2xl font-black text-amber-600">Rs. 820K</span>
                            </div>
                            <div
                                class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-amber-50 border border-amber-100 flex items-center justify-center text-amber-600 text-base sm:text-lg">
                                <i class="bi bi-clock-history"></i>
                            </div>
                        </div>
                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                            <div class="space-y-0.5">
                                <p class="text-[10px] sm:text-xs font-bold text-slate-400 uppercase tracking-wider">
                                    Overdue Defaulters</p>
                                <span class="text-xl sm:text-2xl font-black text-rose-600">14</span>
                            </div>
                            <div
                                class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-rose-50 border border-rose-100 flex items-center justify-center text-rose-500 text-base sm:text-lg">
                                <i class="bi bi-exclamation-octagon"></i>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex flex-col lg:flex-row gap-3 items-center justify-between">
                        <div class="relative w-full lg:max-w-xs">
                            <i class="bi bi-search absolute left-3 top-2.5 text-slate-400 text-xs"></i>
                            <input type="text" placeholder="Search invoice ID, student name, or roll..."
                                class="w-full pl-9 pr-3 py-1.5 bg-slate-50 border border-slate-200 rounded-lg text-xs focus:bg-white focus:border-blue-500 focus:outline-hidden transition-all" />
                        </div>
                        <div class="grid grid-cols-2 sm:flex items-center gap-2 w-full lg:w-auto">
                            <select
                                class="text-xs bg-slate-50 border border-slate-200 rounded-lg p-1.5 px-3 font-semibold text-slate-600 cursor-pointer w-full sm:w-36">
                                <option value="">All Class Grades</option>
                                <option value="10">Grade 10</option>
                                <option value="9">Grade 9</option>
                            </select>
                            <select
                                class="text-xs bg-slate-50 border border-slate-200 rounded-lg p-1.5 px-3 font-semibold text-slate-600 cursor-pointer w-full sm:w-36">
                                <option value="">Status: All</option>
                                <option value="paid">Fully Paid</option>
                                <option value="partial">Partial Payment</option>
                                <option value="unpaid">Unpaid / Overdue</option>
                            </select>
                        </div>
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                        <div class="w-full overflow-x-auto block">
                            <table class="w-full text-left border-collapse min-w-[850px]">
                                <thead>
                                    <tr
                                        class="bg-slate-50/70 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                        <th class="py-4 px-6">Invoice Voucher</th>
                                        <th class="py-4 px-6">Student details</th>
                                        <th class="py-4 px-6">Class Assignment</th>
                                        <th class="py-4 px-6 text-right">Total Amount</th>
                                        <th class="py-4 px-6 text-center">Payment Status</th>
                                        <th class="py-4 px-6 text-right">Statement Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-sm text-slate-600">

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-6">
                                            <span
                                                class="block text-slate-900 font-bold font-mono text-xs">#INV-2026-8901</span>
                                            <span class="text-[10px] text-slate-400">Paid on May 18, 2026</span>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="font-bold text-slate-900">Zain Hashmi</div>
                                            <div class="text-xxs font-mono text-slate-400">Roll No: 10A-01</div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span
                                                class="inline-flex px-2 py-0.5 text-xxs font-bold rounded-md bg-slate-100 border border-slate-200 text-slate-700">Grade
                                                10-A</span>
                                        </td>
                                        <td class="py-4 px-6 text-right font-mono font-bold text-slate-900">
                                            Rs. 15,000
                                        </td>
                                        <td class="py-4 px-6 text-center">
                                            <span
                                                class="inline-flex items-center gap-1 px-2 py-0.5 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">
                                                <span class="w-1 h-1 rounded-full bg-emerald-500"></span> Fully Paid
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-right">
                                            <button
                                                class="p-1 px-2.5 text-xs bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer"
                                                title="Print Receipt">
                                                <i class="bi bi-printer"></i> Receipt
                                            </button>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-6">
                                            <span
                                                class="block text-slate-900 font-bold font-mono text-xs">#INV-2026-8942</span>
                                            <span class="text-[10px] text-slate-400">Updated May 12, 2026</span>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="font-bold text-slate-900">Ayesha Khan</div>
                                            <div class="text-xxs font-mono text-slate-400">Roll No: 10A-02</div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span
                                                class="inline-flex px-2 py-0.5 text-xxs font-bold rounded-md bg-slate-100 border border-slate-200 text-slate-700">Grade
                                                10-A</span>
                                        </td>
                                        <td class="py-4 px-6 text-right font-mono">
                                            <span class="block font-bold text-slate-900">Rs. 15,000</span>
                                            <span class="block text-[10px] text-amber-600 font-semibold">Bal: Rs.
                                                5,000</span>
                                        </td>
                                        <td class="py-4 px-6 text-center">
                                            <span
                                                class="inline-flex items-center gap-1 px-2 py-0.5 text-xs font-medium rounded-full bg-amber-50 text-amber-700 border border-amber-200">
                                                <span class="w-1 h-1 rounded-full bg-amber-500"></span> Part Paid
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-right">
                                            <button
                                                class="p-1 px-2.5 text-xs bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-md transition-all cursor-pointer">
                                                Collect
                                            </button>
                                        </td>
                                    </tr>

                                    <tr class="hover:bg-slate-50/50 transition-colors bg-rose-50/5">
                                        <td class="py-4 px-6">
                                            <span
                                                class="block text-rose-900 font-bold font-mono text-xs">#INV-2026-8711</span>
                                            <span class="text-[10px] text-rose-500 font-semibold">Overdue 14
                                                Days</span>
                                        </td>
                                        <td class="py-4 px-6">
                                            <div class="font-bold text-slate-900">Daniyal Butt</div>
                                            <div class="text-xxs font-mono text-slate-400">Roll No: 9A-04</div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span
                                                class="inline-flex px-2 py-0.5 text-xxs font-bold rounded-md bg-slate-100 border border-slate-200 text-slate-700">Grade
                                                9-A</span>
                                        </td>
                                        <td class="py-4 px-6 text-right font-mono font-bold text-rose-600">
                                            Rs. 12,500
                                        </td>
                                        <td class="py-4 px-6 text-center">
                                            <span
                                                class="inline-flex items-center gap-1 px-2 py-0.5 text-xs font-medium rounded-full bg-rose-50 text-rose-700 border border-rose-100">
                                                <span class="w-1 h-1 rounded-full bg-rose-500"></span> Overdue Unpaid
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-right">
                                            <button
                                                class="p-1 px-2.5 text-xs bg-white hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">
                                                Remind
                                            </button>
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
