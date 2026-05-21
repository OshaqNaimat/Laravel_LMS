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
                        <h2 class="text-lg font-bold text-slate-800">Manage Schools</h2>
                    </div>
                    <div class="flex items-center gap-4">
                        <button
                            class="inline-flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-lg transition-colors shadow-xs">
                            <i class="bi bi-plus-lg"></i> Add New School
                        </button>
                    </div>
                </header>

                <!-- CONTROLS & TABLE WRAPPER CONTAINER -->
                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <!-- UTILITY BAR (Search, Filters, Layouts) -->
                    <div
                        class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 bg-white p-4 rounded-xl border border-slate-200 shadow-xs">
                        <!-- Search Field -->
                        <div class="relative w-full sm:max-w-xs">
                            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400">
                                <i class="bi bi-search text-xs"></i>
                            </span>
                            <input type="text" placeholder="Search school name or email..."
                                class="w-full pl-9 pr-4 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-hidden focus:border-blue-500 focus:bg-white transition-all">
                        </div>
                        <!-- Action Filters -->
                        <div class="flex items-center gap-3 self-end sm:self-auto">
                            <select
                                class="px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-600 focus:outline-hidden focus:bg-white">
                                <option value="">All Plans</option>
                                <option value="premium">Premium Plan</option>
                                <option value="standard">Standard Plan</option>
                                <option value="trial">Free Trial</option>
                            </select>
                            <select
                                class="px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-600 focus:outline-hidden focus:bg-white">
                                <option value="">All Statuses</option>
                                <option value="active">Active</option>
                                <option value="suspended">Suspended</option>
                            </select>
                        </div>
                    </div>

                    <!-- MAIN DATA CONTAINER (TABLE) -->
                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                        <!-- REMOVED OVERFLOW WRAPPER FROM HERE -->
                        <div class="w-full overflow-x-auto block">
                            <table class="w-full text-left border-collapse min-w-[800px] sm:min-w-0">
                                <thead>
                                    <tr
                                        class="bg-slate-50/70 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                        <th class="py-4 px-6">School Name</th>
                                        <th class="py-4 px-6">Website Links</th>
                                        <th class="py-4 px-6">Total Users</th>
                                        <th class="py-4 px-6">Current Plan</th>
                                        <th class="py-4 px-6 text-center">Status</th>
                                        <th class="py-4 px-6 text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-sm text-slate-600">

                                    <!-- Tenant Item 1 -->
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-6">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 bg-blue-50 text-blue-600 font-bold rounded-lg flex items-center justify-center text-base border border-blue-100">
                                                    BA
                                                </div>
                                                <div>
                                                    <p class="font-bold text-slate-900">Beaconhouse Academy</p>
                                                    <p class="text-xs text-slate-400">Added on Jan 12, 2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span class="block text-slate-700 font-medium">beaconhouse</span>
                                            <span
                                                class="block text-xs text-blue-500 font-medium">beaconhouse.educorelms.com</span>
                                        </td>
                                        <td class="py-4 px-6 space-y-1">
                                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500">
                                                <span class="w-16"><i class="bi bi-people mr-1.5"></i> 240</span>
                                                Teachers
                                            </div>
                                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500">
                                                <span class="w-16"><i class="bi bi-mortarboard mr-1.5"></i>
                                                    3,420</span>
                                                Students
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span
                                                class="inline-flex items-center gap-1 px-2 py-1 text-xs font-semibold rounded-md bg-blue-50 text-blue-700 border border-blue-100">
                                                <i class="bi bi-gem"></i> Premium
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-center">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-right">
                                            <div class="flex items-center justify-end gap-2">
                                                <button title="Log in as Admin"
                                                    class="p-1.5 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all cursor-pointer">
                                                    <i class="bi bi-box-arrow-in-right text-base"></i>
                                                </button>
                                                <button title="Edit School"
                                                    class="p-1.5 text-slate-400 hover:text-slate-600 hover:bg-slate-100 rounded-lg transition-all cursor-pointer">
                                                    <i class="bi bi-pencil-square text-base"></i>
                                                </button>
                                                <button title="Suspend School"
                                                    class="p-1.5 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-all cursor-pointer">
                                                    <i class="bi bi-slash-circle text-base"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Tenant Item 2 -->
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-6">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 bg-purple-50 text-purple-600 font-bold rounded-lg flex items-center justify-center text-base border border-purple-100">
                                                    RI
                                                </div>
                                                <div>
                                                    <p class="font-bold text-slate-900">Roots International</p>
                                                    <p class="text-xs text-slate-400">Added on Feb 28, 2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span class="block text-slate-700 font-medium">roots-intl</span>
                                            <span
                                                class="block text-xs text-blue-500 font-medium">roots-intl.educorelms.com</span>
                                        </td>
                                        <td class="py-4 px-6 space-y-1">
                                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500">
                                                <span class="w-16"><i class="bi bi-people mr-1.5"></i> 110</span>
                                                Teachers
                                            </div>
                                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500">
                                                <span class="w-16"><i class="bi bi-mortarboard mr-1.5"></i>
                                                    1,890</span>
                                                Students
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span
                                                class="inline-flex items-center gap-1 px-2 py-1 text-xs font-semibold rounded-md bg-slate-50 text-slate-700 border border-slate-200">
                                                <i class="bi bi-box"></i> Standard
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-center">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-100">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-right">
                                            <div class="flex items-center justify-end gap-2">
                                                <button title="Log in as Admin"
                                                    class="p-1.5 text-slate-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all cursor-pointer">
                                                    <i class="bi bi-box-arrow-in-right text-base"></i>
                                                </button>
                                                <button title="Edit School"
                                                    class="p-1.5 text-slate-400 hover:text-slate-600 hover:bg-slate-100 rounded-lg transition-all cursor-pointer">
                                                    <i class="bi bi-pencil-square text-base"></i>
                                                </button>
                                                <button title="Suspend School"
                                                    class="p-1.5 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition-all cursor-pointer">
                                                    <i class="bi bi-slash-circle text-base"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Tenant Item 3 -->
                                    <tr class="hover:bg-slate-50/50 transition-colors bg-rose-50/10">
                                        <td class="py-4 px-6">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="w-10 h-10 bg-rose-50 text-rose-600 font-bold rounded-lg flex items-center justify-center text-base border border-rose-100">
                                                    CS
                                                </div>
                                                <div>
                                                    <p class="font-bold text-slate-900">City School Network</p>
                                                    <p class="text-xs text-rose-500 font-medium">Payment Failed</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span class="block text-slate-700 font-medium">city-school</span>
                                            <span
                                                class="block text-xs text-slate-400 line-through">city-school.educorelms.com</span>
                                        </td>
                                        <td class="py-4 px-6 space-y-1">
                                            <div class="flex items-center gap-2 text-xs font-medium text-slate-400">
                                                <span class="w-16"><i class="bi bi-people mr-1.5"></i> 400</span>
                                                Teachers
                                            </div>
                                            <div class="flex items-center gap-2 text-xs font-medium text-slate-400">
                                                <span class="w-16"><i class="bi bi-mortarboard mr-1.5"></i>
                                                    6,800</span>
                                                Students
                                            </div>
                                        </td>
                                        <td class="py-4 px-6">
                                            <span
                                                class="inline-flex items-center gap-1 px-2 py-1 text-xs font-semibold rounded-md bg-rose-50 text-rose-700 border border-rose-100">
                                                <i class="bi bi-exclamation-octagon"></i> Premium
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-center">
                                            <span
                                                class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full text-xs font-medium bg-rose-50 text-rose-700 border border-rose-100">
                                                <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span> Suspended
                                            </span>
                                        </td>
                                        <td class="py-4 px-6 text-right">
                                            <div class="flex items-center justify-end gap-2">
                                                <button title="Log in as Admin" disabled
                                                    class="p-1.5 text-slate-300 cursor-not-allowed opacity-50">
                                                    <i class="bi bi-box-arrow-in-right text-base"></i>
                                                </button>
                                                <button title="Edit School"
                                                    class="p-1.5 text-slate-400 hover:text-slate-600 hover:bg-slate-100 rounded-lg transition-all cursor-pointer">
                                                    <i class="bi bi-pencil-square text-base"></i>
                                                </button>
                                                <button title="Activate School"
                                                    class="p-1.5 text-slate-400 hover:text-emerald-600 hover:bg-emerald-50 rounded-lg transition-all cursor-pointer">
                                                    <i class="bi bi-check-circle text-base"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- TABLE PAGINATION FOOTER -->
                    <div
                        class="bg-slate-50 border border-slate-200 rounded-xl px-6 py-4 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs text-slate-500">
                        <p class="font-medium">Showing 1 to 3 of 42 Registered Schools</p>
                        <div class="flex items-center gap-1">
                            <button
                                class="px-3 py-1.5 bg-white border border-slate-200 rounded-md shadow-xs font-medium hover:bg-slate-50 cursor-pointer disabled:opacity-50"
                                disabled>
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button
                                class="px-3 py-1.5 bg-blue-600 border border-blue-600 rounded-md shadow-xs font-bold text-white cursor-default">1</button>
                            <button
                                class="px-3 py-1.5 bg-white border border-slate-200 rounded-md shadow-xs font-medium hover:bg-slate-50 cursor-pointer">2</button>
                            <button
                                class="px-3 py-1.5 bg-white border border-slate-200 rounded-md shadow-xs font-medium hover:bg-slate-50 cursor-pointer">3</button>
                            <button
                                class="px-3 py-1.5 bg-white border border-slate-200 rounded-md shadow-xs font-medium hover:bg-slate-50 cursor-pointer">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </main>
        </div>

    </div>

</x-layout>
