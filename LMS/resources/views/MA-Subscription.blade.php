<x-layout>
    <div class="bg-slate-50 font-sans antialiased text-slate-800">
        <div class="flex h-screen overflow-hidden">

            <x-main-admin-sidebar />

            <!-- MAIN VIEW WRAPPER -->
            <main class="flex-1 flex flex-col overflow-y-auto">

                <!-- TOP NAVBAR -->
                <header
                    class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 sticky top-0 z-10">
                    <div class="flex items-center gap-4">
                        <button class="md:hidden text-slate-600 text-xl"><i class="bi bi-list"></i></button>
                        <h2 class="text-lg font-bold text-slate-800">School Subscriptions</h2>
                    </div>
                    <div class="flex items-center gap-4">
                        <button
                            class="inline-flex items-center gap-2 px-3.5 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-semibold rounded-lg transition-colors border border-slate-200">
                            <i class="bi bi-download"></i> Export Report
                        </button>
                    </div>
                </header>

                <!-- MAIN CONTENT CONTAINER -->
                <div class="p-6 max-w-7xl w-full mx-auto space-y-10">

                    <!-- REVENUE STATS -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs">
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Monthly Recurring
                                Income</p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-black text-slate-900">$14,235</span>
                                <span class="text-xs font-bold text-emerald-600"><i class="bi bi-graph-up-arrow"></i>
                                    +8.4%</span>
                            </div>
                        </div>
                        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs">
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Permanent License
                                Income</p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-black text-blue-600">$48,000</span>
                                <span class="text-xs text-slate-500">Total upfront earnings</span>
                            </div>
                        </div>
                        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs">
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Unpaid Bills</p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-black text-amber-600">$1,150</span>
                                <span class="text-xs font-semibold text-amber-600 animate-pulse">3 Overdue
                                    Schools</span>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 1: MONTHLY PLANS -->
                    <div class="space-y-3">
                        <div>
                            <h3 class="text-base font-bold text-slate-900">Monthly Subscriptions</h3>
                            <p class="text-xs text-slate-500">Schools that pay every month.</p>
                        </div>
                        <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr
                                            class="bg-slate-50/70 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                            <th class="py-4 px-6">School Name</th>
                                            <th class="py-4 px-6">Price</th>
                                            <th class="py-4 px-6">Next Payment Date</th>
                                            <th class="py-4 px-6 text-center">Status</th>
                                            <th class="py-4 px-6 text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                                        <tr class="hover:bg-slate-50/50 transition-colors">
                                            <td class="py-4 px-6 font-bold text-slate-900">Roots International</td>
                                            <td class="py-4 px-6 font-bold text-slate-900">$250<span
                                                    class="text-xs text-slate-400 font-normal">/mo</span></td>
                                            <td class="py-4 px-6 font-mono text-xs">Jun 01, 2026</td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex px-2 py-0.5 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">Paid</span>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <button
                                                    class="p-1 px-2 text-xs bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">Manage</button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-slate-50/50 transition-colors bg-amber-50/10">
                                            <td class="py-4 px-6 font-bold text-slate-900">City School Network</td>
                                            <td class="py-4 px-6 font-bold text-slate-900">$450<span
                                                    class="text-xs text-slate-400 font-normal">/mo</span></td>
                                            <td class="py-4 px-6 font-mono text-xs text-amber-600 font-bold">May 10,
                                                2026</td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex px-2 py-0.5 text-xs font-semibold rounded-full bg-amber-50 text-amber-700 border border-amber-200">Overdue</span>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <div class="flex items-center justify-end gap-1">
                                                    <button
                                                        class="p-1 px-2 text-xs bg-amber-500 hover:bg-amber-600 text-white font-semibold rounded-md transition-all cursor-pointer">Remind</button>
                                                    <button
                                                        class="p-1 px-2 text-xs bg-white hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">Manage</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 2: QUARTERLY PLANS -->
                    <div class="space-y-3">
                        <div>
                            <h3 class="text-base font-bold text-slate-900">Quarterly Subscriptions</h3>
                            <p class="text-xs text-slate-500">Schools that pay every 3 months.</p>
                        </div>
                        <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr
                                            class="bg-slate-50/70 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                            <th class="py-4 px-6">School Name</th>
                                            <th class="py-4 px-6">Price</th>
                                            <th class="py-4 px-6">Next Payment Date</th>
                                            <th class="py-4 px-6 text-center">Status</th>
                                            <th class="py-4 px-6 text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                                        <tr class="hover:bg-slate-50/50 transition-colors">
                                            <td class="py-4 px-6 font-bold text-slate-900">Lighthouse School System</td>
                                            <td class="py-4 px-6 font-bold text-slate-900">$700<span
                                                    class="text-xs text-slate-400 font-normal">/quarter</span></td>
                                            <td class="py-4 px-6 font-mono text-xs">Jul 15, 2026</td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex px-2 py-0.5 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">Paid</span>
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


                    <!-- SECTION 3: ANNUAL PLANS -->
                    <div class="space-y-3">
                        <div>
                            <h3 class="text-base font-bold text-slate-900">Annual Subscriptions</h3>
                            <p class="text-xs text-slate-500">Schools that pay once a year.</p>
                        </div>
                        <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr
                                            class="bg-slate-50/70 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                            <th class="py-4 px-6">School Name</th>
                                            <th class="py-4 px-6">Price</th>
                                            <th class="py-4 px-6">Next Payment Date</th>
                                            <th class="py-4 px-6 text-center">Status</th>
                                            <th class="py-4 px-6 text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                                        <tr class="hover:bg-slate-50/50 transition-colors">
                                            <td class="py-4 px-6 font-bold text-slate-900">Elite Grammar School</td>
                                            <td class="py-4 px-6 font-bold text-slate-900">$2,400<span
                                                    class="text-xs text-slate-400 font-normal">/yr</span></td>
                                            <td class="py-4 px-6 font-mono text-xs">Oct 10, 2026</td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex px-2 py-0.5 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">Paid</span>
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


                    <!-- SECTION 4: PERMANENT / LIFETIME PLANS -->
                    <div class="space-y-3">
                        <div>
                            <h3 class="text-base font-bold text-slate-900">Permanent Licenses</h3>
                            <p class="text-xs text-slate-500">Schools that paid once for lifetime access.</p>
                        </div>
                        <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full text-left border-collapse">
                                    <thead>
                                        <tr
                                            class="bg-slate-50/70 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                            <th class="py-4 px-6">School Name</th>
                                            <th class="py-4 px-6">Total Cost</th>
                                            <th class="py-4 px-6">Purchase Date</th>
                                            <th class="py-4 px-6 text-center">Status</th>
                                            <th class="py-4 px-6 text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                                        <tr class="hover:bg-slate-50/50 transition-colors">
                                            <td class="py-4 px-6 font-bold text-slate-900">Beaconhouse Academy</td>
                                            <td class="py-4 px-6 font-bold text-slate-900">$12,500 <span
                                                    class="text-xs text-slate-400 font-normal">one-time</span></td>
                                            <td class="py-4 px-6 font-mono text-xs">Jan 12, 2025</td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex px-2 py-0.5 text-xs font-medium rounded-full bg-blue-50 text-blue-700 border border-blue-100">Lifetime
                                                    Support</span>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <button
                                                    class="p-1 px-2 text-xs bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">Manage</button>
                                            </td>
                                        </tr>
                                        <tr class="hover:bg-slate-50/50 transition-colors">
                                            <td class="py-4 px-6 font-bold text-slate-900">Army Public System</td>
                                            <td class="py-4 px-6 font-bold text-slate-900">$8,200 <span
                                                    class="text-xs text-slate-400 font-normal">one-time</span></td>
                                            <td class="py-4 px-6 font-mono text-xs">Mar 22, 2026</td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex px-2 py-0.5 text-xs font-medium rounded-full bg-blue-50 text-blue-700 border border-blue-100">Lifetime
                                                    Support</span>
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
