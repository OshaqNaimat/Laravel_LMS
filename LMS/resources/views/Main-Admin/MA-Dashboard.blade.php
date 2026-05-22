<x-layout>
    <div class="bg-slate-50 font-sans antialiased text-slate-800 min-h-screen w-full overflow-x-hidden">
        <div class="flex h-screen overflow-hidden relative">

            <x-main-admin-sidebar />

            <main class="flex-1 flex flex-col min-w-0 h-full overflow-y-auto">

                <header
                    class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 sm:px-6 sticky top-0 z-10 shrink-0">
                    <div class="flex items-center gap-3 sm:gap-4 min-w-0">
                        <button
                            class="md:hidden text-slate-600 text-xl p-1 hover:bg-slate-100 rounded transition-colors focus:outline-hidden"
                            aria-label="Toggle Navigation">
                            <i class="bi bi-list"></i>
                        </button>
                        <h2 class="text-base sm:text-lg font-bold text-slate-800 truncate">Global Overview</h2>
                    </div>
                    <div class="flex items-center gap-2 sm:gap-4 shrink-0">
                        <span
                            class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span class="hidden xs:inline">Engine Online</span>
                        </span>
                        <div class="w-px h-6 bg-slate-200"></div>
                        <p class="text-xs sm:text-sm text-slate-500 font-medium whitespace-nowrap">
                            <i class="bi bi-calendar3 mr-1 sm:mr-2"></i>{{ now()->format('M Y') }}
                        </p>
                    </div>
                </header>

                <div class="p-4 sm:p-6 max-w-7xl w-full mx-auto space-y-6 flex-1">

                    @if (session('success'))
                        <div
                            class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl text-xs font-semibold flex items-center gap-2">
                            <i class="bi bi-check-circle-fill text-emerald-500 text-sm"></i> {{ session('success') }}
                        </div>
                    @endif

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between gap-4">
                            <div class="space-y-1 min-w-0">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider truncate">Total
                                    Admins</p>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                                    {{ $totalAdmins }}</h3>
                                <p class="text-xs text-emerald-600 font-medium flex items-center whitespace-nowrap">
                                    <i class="bi bi-arrow-up-short text-base leading-none"></i> System Live Check
                                </p>
                            </div>
                            <div
                                class="w-11 h-11 sm:w-12 sm:h-12 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center text-lg sm:text-xl shrink-0">
                                <i class="bi bi-building"></i>
                            </div>
                        </div>

                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between gap-4">
                            <div class="space-y-1 min-w-0">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider truncate">Active
                                    Students</p>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                                    {{ number_format($activeStudents) }}</h3>
                                <p class="text-xs text-emerald-600 font-medium flex items-center whitespace-nowrap">
                                    <i class="bi bi-arrow-up-short text-base leading-none"></i> Across Tenants
                                </p>
                            </div>
                            <div
                                class="w-11 h-11 sm:w-12 sm:h-12 bg-purple-50 text-purple-600 rounded-lg flex items-center justify-center text-lg sm:text-xl shrink-0">
                                <i class="bi bi-people"></i>
                            </div>
                        </div>

                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between gap-4">
                            <div class="space-y-1 min-w-0">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider truncate">
                                    Monthly Revenue</p>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                                    ${{ number_format($monthlyRevenue) }}</h3>
                                <p class="text-xs text-slate-500 font-medium truncate">MRR Balance</p>
                            </div>
                            <div
                                class="w-11 h-11 sm:w-12 sm:h-12 bg-emerald-50 text-emerald-600 rounded-lg flex items-center justify-center text-lg sm:text-xl shrink-0">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                        </div>

                        <div
                            class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between gap-4">
                            <div class="space-y-1 min-w-0">
                                <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider truncate">System
                                    Load</p>
                                <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight">
                                    {{ $systemLoad }}</h3>
                                <p class="text-xs text-emerald-600 font-medium truncate">Optimal Status</p>
                            </div>
                            <div
                                class="w-11 h-11 sm:w-12 sm:h-12 bg-amber-50 text-amber-600 rounded-lg flex items-center justify-center text-lg sm:text-xl shrink-0">
                                <i class="bi bi-cpu"></i>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                        <div class="bg-white p-5 sm:p-6 rounded-xl border border-slate-200 shadow-xs lg:col-span-1">
                            <div class="mb-5">
                                <h3 class="text-base font-bold text-slate-900">Add New School</h3>
                                <p class="text-xs text-slate-500 mt-1 leading-relaxed">Deploys an isolated school
                                    database node and sets its managing Tenant Admin instantly.</p>
                            </div>

                            <form action="{{ route('super.admin.tenants.store') }}" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <label
                                        class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-1.5">School
                                        / Organization Name</label>
                                    <div class="relative">
                                        <span
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400 pointer-events-none"><i
                                                class="bi bi-building"></i></span>
                                        <input type="text" name="company_name" value="{{ old('company_name') }}"
                                            required placeholder="e.g., Apex International School"
                                            class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-hidden focus:border-blue-500 focus:bg-white transition-all">
                                    </div>
                                    @error('company_name')
                                        <p class="text-xxs text-rose-500 mt-1 font-semibold">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-1.5">Tenant
                                        Administrator Name</label>
                                    <div class="relative">
                                        <span
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400 pointer-events-none"><i
                                                class="bi bi-person-gear"></i></span>
                                        <input type="text" name="admin_name" value="{{ old('admin_name') }}" required
                                            placeholder="e.g., Prof. Sarah Khan"
                                            class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-hidden focus:border-blue-500 focus:bg-white transition-all">
                                    </div>
                                    @error('admin_name')
                                        <p class="text-xxs text-rose-500 mt-1 font-semibold">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-1.5">Tenant
                                        Admin Email</label>
                                    <div class="relative">
                                        <span
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400 pointer-events-none"><i
                                                class="bi bi-envelope"></i></span>
                                        <input type="email" name="admin_email" value="{{ old('admin_email') }}"
                                            required placeholder="admin@apexschool.com"
                                            class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-hidden focus:border-blue-500 focus:bg-white transition-all">
                                    </div>
                                    @error('admin_email')
                                        <p class="text-xxs text-rose-500 mt-1 font-semibold">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-1.5">Temporary
                                        Initial Password</label>
                                    <div class="relative">
                                        <span
                                            class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400 pointer-events-none"><i
                                                class="bi bi-key"></i></span>
                                        <input type="password" name="password" required placeholder="••••••••"
                                            class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-hidden focus:border-blue-500 focus:bg-white transition-all">
                                    </div>
                                    @error('password')
                                        <p class="text-xxs text-rose-500 mt-1 font-semibold">{{ $message }}</p>
                                    @enderror
                                </div>

                                <button type="submit"
                                    class="w-full mt-2 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-lg shadow-xs hover:shadow-md transition-all flex items-center justify-center gap-2 cursor-pointer focus:outline-hidden">
                                    <i class="bi bi-plus-circle"></i> Add School
                                </button>
                            </form>
                        </div>

                        <div
                            class="bg-white rounded-xl border border-slate-200 shadow-xs lg:col-span-2 overflow-hidden flex flex-col justify-between min-w-0">
                            <div>
                                <div
                                    class="p-5 sm:p-6 border-b border-slate-100 flex items-center justify-between gap-4">
                                    <div class="min-w-0">
                                        <h3 class="text-base font-bold text-slate-900 truncate">Recent Onboarded
                                            Platforms</h3>
                                        <p class="text-xs text-slate-500 mt-0.5 truncate">Live operational statuses of
                                            newly active installations.</p>
                                    </div>
                                </div>

                                <div class="overflow-x-auto w-full block align-middle">
                                    <table class="w-full text-left border-collapse min-w-[600px]">
                                        <thead>
                                            <tr
                                                class="bg-slate-50 border-b border-slate-100 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                                <th class="py-3 px-6">School System</th>
                                                <th class="py-3 px-6">System Slug ID</th>
                                                <th class="py-3 px-6">Primary Contact</th>
                                                <th class="py-3 px-6 text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-slate-100 text-sm text-slate-600">
                                            @forelse($tenants as $item)
                                                <tr class="hover:bg-slate-50/75 transition-colors">
                                                    <td class="py-3.5 px-6 font-semibold text-slate-900">
                                                        {{ $item->name }}</td>
                                                    <td class="py-3.5 px-6 font-mono text-xs text-slate-500">
                                                        {{ $item->slug }}</td>
                                                    <td class="py-3.5 px-6">
                                                        {{ $item->users->first()?->email ?? 'N/A' }}</td>
                                                    <td class="py-3.5 px-6 text-center">
                                                        <span
                                                            class="inline-flex px-2 py-0.5 text-xs font-medium rounded-md {{ $item->status === 'Active' ? 'bg-emerald-100 text-emerald-800' : 'bg-slate-100 text-slate-600' }}">
                                                            {{ $item->status }}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="4"
                                                        class="text-center py-8 text-xs text-slate-400 font-medium">No
                                                        school environments deployed yet.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div
                                class="bg-slate-50 border-t border-slate-100 px-5 sm:px-6 py-3 flex items-center justify-between gap-4 text-xs text-slate-500 shrink-0">
                                <p class="truncate">Showing {{ $tenants->firstItem() ?? 0 }} to
                                    {{ $tenants->lastItem() ?? 0 }} of {{ $tenants->total() }} Schools</p>
                                <div class="shrink-0">
                                    {{ $tenants->links('pagination::tailwind') }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
</x-layout>
