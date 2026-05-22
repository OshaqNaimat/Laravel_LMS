<x-layout>
    <div class="bg-slate-50 font-sans antialiased text-slate-800">
        <div class="flex h-screen overflow-hidden">

            <x-main-admin-sidebar />

            <main class="flex-1 flex flex-col overflow-y-auto">

                <header
                    class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 sticky top-0 z-10">
                    <div class="flex items-center gap-4">
                        <button class="md:hidden text-slate-600 text-xl"><i class="bi bi-list"></i></button>
                        <h2 class="text-lg font-bold text-slate-800">Platform Admins</h2>
                    </div>
                    <div class="flex items-center gap-4">
                        <button
                            class="inline-flex items-center gap-2 px-4 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-colors shadow-xs cursor-pointer">
                            <i class="bi bi-person-plus"></i> Invite New Admin
                        </button>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-10">

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs">
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Super
                                Administrators</p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-black text-slate-900">2</span>
                                <span class="text-xs text-slate-500">Full platform control</span>
                            </div>
                        </div>
                        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs">
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Standard Managers
                            </p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-black text-blue-600">4</span>
                                <span class="text-xs text-slate-500">Operations & support</span>
                            </div>
                        </div>
                        <div class="bg-white p-5 rounded-xl border border-slate-200 shadow-xs">
                            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-1">Active Sessions
                            </p>
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-black text-emerald-600">3</span>
                                <span class="text-xs font-semibold text-emerald-600 animate-pulse">Currently
                                    online</span>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <div>
                            <h3 class="text-base font-bold text-slate-900">System Administrators</h3>
                            <p class="text-xs text-slate-500">Internal platform profiles managing system operations,
                                infrastructure, and billing tiers.</p>
                        </div>
                        <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                            <div class="w-full overflow-x-auto block">
                                <table class="w-full text-left border-collapse min-w-[800px]">
                                    <thead>
                                        <tr
                                            class="bg-slate-50/70 border-b border-slate-200 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                            <th class="py-4 px-6">Admin User</th>
                                            <th class="py-4 px-6">Email Address</th>
                                            <th class="py-4 px-6">Role Assigned</th>
                                            <th class="py-4 px-6 text-center">Status</th>
                                            <th class="py-4 px-6 text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-slate-100 text-sm text-slate-600">

                                        <tr class="hover:bg-slate-50/50 transition-colors">
                                            <td class="py-4 px-6 font-bold text-slate-900">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center border border-slate-200 text-slate-600 font-bold text-xs uppercase">
                                                        ON
                                                    </div>
                                                    <span>Oshaq Naimat</span>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 font-mono text-xs text-slate-500">oshaq@platform.com
                                            </td>
                                            <td class="py-4 px-6">
                                                <span
                                                    class="inline-flex px-2 py-0.5 text-xs font-semibold rounded-full bg-blue-50 text-blue-700 border border-blue-100">Super
                                                    Admin</span>
                                            </td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2 py-0.5 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                                </span>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <button
                                                    class="p-1 px-2 text-xs bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">Edit
                                                    Profile</button>
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-slate-50/50 transition-colors">
                                            <td class="py-4 px-6 font-bold text-slate-900">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center border border-slate-200 text-slate-600 font-bold text-xs uppercase">
                                                        AK
                                                    </div>
                                                    <span>Asim Khan</span>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 font-mono text-xs text-slate-500">asim.k@platform.com
                                            </td>
                                            <td class="py-4 px-6">
                                                <span
                                                    class="inline-flex px-2 py-0.5 text-xs font-semibold rounded-full bg-slate-100 text-slate-700 border border-slate-200">Billing
                                                    Manager</span>
                                            </td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2 py-0.5 text-xs font-medium rounded-full bg-emerald-50 text-emerald-700 border border-emerald-100">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Active
                                                </span>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <button
                                                    class="p-1 px-2 text-xs bg-slate-50 hover:bg-slate-100 border border-slate-200 text-slate-700 font-semibold rounded-md transition-all cursor-pointer">Edit
                                                    Profile</button>
                                            </td>
                                        </tr>

                                        <tr class="hover:bg-slate-50/50 transition-colors bg-slate-50/30">
                                            <td class="py-4 px-6 font-bold text-slate-400 line-through">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center border border-slate-100 text-slate-400 font-bold text-xs uppercase">
                                                        ZA
                                                    </div>
                                                    <span>Zain Ahmed</span>
                                                </div>
                                            </td>
                                            <td class="py-4 px-6 font-mono text-xs text-slate-400 line-through">
                                                zain.a@platform.com</td>
                                            <td class="py-4 px-6">
                                                <span
                                                    class="inline-flex px-2 py-0.5 text-xs font-semibold rounded-full bg-slate-50 text-slate-400 border border-slate-200">Support
                                                    Staff</span>
                                            </td>
                                            <td class="py-4 px-6 text-center">
                                                <span
                                                    class="inline-flex items-center gap-1.5 px-2 py-0.5 text-xs font-medium rounded-full bg-rose-50 text-rose-700 border border-rose-100">
                                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-400"></span> Suspended
                                                </span>
                                            </td>
                                            <td class="py-4 px-6 text-right">
                                                <div class="flex items-center justify-end gap-1">
                                                    <button
                                                        class="p-1 px-2 text-xs bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-md transition-all cursor-pointer">Activate</button>
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

                </div>
            </main>
        </div>
    </div>
</x-layout>
