@extends('layouts.app')

@section('content')
    <x-layout>
        <div class="bg-slate-50 font-sans antialiased text-slate-800 min-h-screen w-full overflow-x-hidden">
            <div class="flex h-screen overflow-hidden relative">

                <x-main-admin-sidebar />

                <main class="flex-1 flex flex-col min-w-0 h-full overflow-y-auto">

                    <!-- Header -->
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
                                <i class="bi bi-calendar3 mr-1 sm:mr-2"></i><span
                                    id="current-date">{{ now()->format('M Y') }}</span>
                            </p>
                        </div>
                    </header>

                    <!-- Main Content -->
                    <div class="p-4 sm:p-6 max-w-7xl w-full mx-auto space-y-6 flex-1">

                        <!-- Success Message -->
                        <div id="success-message" style="display: none;"
                            class="p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl text-xs font-semibold flex items-center gap-2 animate-in fade-in">
                            <i class="bi bi-check-circle-fill text-emerald-500 text-sm"></i>
                            <span id="success-text"></span>
                        </div>

                        <!-- Error Message -->
                        <div id="error-message" style="display: none;"
                            class="p-4 bg-red-50 border border-red-200 text-red-800 rounded-xl text-xs font-semibold flex items-center gap-2 animate-in fade-in">
                            <i class="bi bi-exclamation-circle-fill text-red-500 text-sm"></i>
                            <span id="error-text"></span>
                        </div>

                        <!-- Stats Cards (Dynamic) -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">

                            <!-- Total Admins Card -->
                            <div
                                class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between gap-4">
                                <div class="space-y-1 min-w-0">
                                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider truncate">Total
                                        Admins</p>
                                    <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight"
                                        id="stat-admins">
                                        <span class="inline-block animate-pulse">⏳</span>
                                    </h3>
                                    <p class="text-xs text-emerald-600 font-medium flex items-center whitespace-nowrap">
                                        <i class="bi bi-arrow-up-short text-base leading-none"></i> System Live Check
                                    </p>
                                </div>
                                <div
                                    class="w-11 h-11 sm:w-12 sm:h-12 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center text-lg sm:text-xl shrink-0">
                                    <i class="bi bi-building"></i>
                                </div>
                            </div>

                            <!-- Active Students Card -->
                            <div
                                class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between gap-4">
                                <div class="space-y-1 min-w-0">
                                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider truncate">Active
                                        Students</p>
                                    <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight"
                                        id="stat-students">
                                        <span class="inline-block animate-pulse">⏳</span>
                                    </h3>
                                    <p class="text-xs text-emerald-600 font-medium flex items-center whitespace-nowrap">
                                        <i class="bi bi-arrow-up-short text-base leading-none"></i> Across Tenants
                                    </p>
                                </div>
                                <div
                                    class="w-11 h-11 sm:w-12 sm:h-12 bg-purple-50 text-purple-600 rounded-lg flex items-center justify-center text-lg sm:text-xl shrink-0">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>

                            <!-- Monthly Revenue Card -->
                            <div
                                class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between gap-4">
                                <div class="space-y-1 min-w-0">
                                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider truncate">
                                        Monthly Revenue</p>
                                    <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight"
                                        id="stat-revenue">
                                        <span class="inline-block animate-pulse">⏳</span>
                                    </h3>
                                    <p class="text-xs text-slate-500 font-medium truncate">MRR Balance</p>
                                </div>
                                <div
                                    class="w-11 h-11 sm:w-12 sm:h-12 bg-emerald-50 text-emerald-600 rounded-lg flex items-center justify-center text-lg sm:text-xl shrink-0">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                            </div>

                            <!-- System Load Card -->
                            <div
                                class="bg-white p-4 sm:p-5 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between gap-4">
                                <div class="space-y-1 min-w-0">
                                    <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider truncate">System
                                        Load</p>
                                    <h3 class="text-xl sm:text-2xl font-bold text-slate-900 tracking-tight" id="stat-load">
                                        <span class="inline-block animate-pulse">⏳</span>
                                    </h3>
                                    <p class="text-xs text-emerald-600 font-medium truncate">Optimal Status</p>
                                </div>
                                <div
                                    class="w-11 h-11 sm:w-12 sm:h-12 bg-amber-50 text-amber-600 rounded-lg flex items-center justify-center text-lg sm:text-xl shrink-0">
                                    <i class="bi bi-cpu"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Main Grid -->
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                            <!-- Add New School Form -->
                            <div class="bg-white p-5 sm:p-6 rounded-xl border border-slate-200 shadow-xs lg:col-span-1">
                                <div class="mb-5">
                                    <h3 class="text-base font-bold text-slate-900">Add New School</h3>
                                    <p class="text-xs text-slate-500 mt-1 leading-relaxed">Deploys an isolated school
                                        database node and sets its managing Tenant Admin instantly.</p>
                                </div>

                                <form id="add-school-form" class="space-y-4">
                                    @csrf

                                    <!-- School Name -->
                                    <div>
                                        <label
                                            class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-1.5">
                                            School / Organization Name
                                        </label>
                                        <div class="relative">
                                            <span
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400 pointer-events-none">
                                                <i class="bi bi-building"></i>
                                            </span>
                                            <input type="text" name="company_name" required
                                                placeholder="e.g., Apex International School"
                                                class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-hidden focus:border-blue-500 focus:bg-white transition-all">
                                        </div>
                                        <span class="error-text text-xs text-rose-500 mt-1 font-semibold hidden"></span>
                                    </div>

                                    <!-- Admin Name -->
                                    <div>
                                        <label
                                            class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-1.5">
                                            Tenant Administrator Name
                                        </label>
                                        <div class="relative">
                                            <span
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400 pointer-events-none">
                                                <i class="bi bi-person-gear"></i>
                                            </span>
                                            <input type="text" name="admin_name" required
                                                placeholder="e.g., Prof. Sarah Khan"
                                                class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-hidden focus:border-blue-500 focus:bg-white transition-all">
                                        </div>
                                        <span class="error-text text-xs text-rose-500 mt-1 font-semibold hidden"></span>
                                    </div>

                                    <!-- Admin Email -->
                                    <div>
                                        <label
                                            class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-1.5">
                                            Tenant Admin Email
                                        </label>
                                        <div class="relative">
                                            <span
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400 pointer-events-none">
                                                <i class="bi bi-envelope"></i>
                                            </span>
                                            <input type="email" name="admin_email" required
                                                placeholder="admin@apexschool.com"
                                                class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-hidden focus:border-blue-500 focus:bg-white transition-all">
                                        </div>
                                        <span class="error-text text-xs text-rose-500 mt-1 font-semibold hidden"></span>
                                    </div>

                                    <!-- Password -->
                                    <div>
                                        <label
                                            class="block text-xs font-semibold text-slate-600 uppercase tracking-wider mb-1.5">
                                            Temporary Initial Password
                                        </label>
                                        <div class="relative">
                                            <span
                                                class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-400 pointer-events-none">
                                                <i class="bi bi-key"></i>
                                            </span>
                                            <input type="password" name="password" required placeholder="••••••••"
                                                class="w-full pl-9 pr-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:outline-hidden focus:border-blue-500 focus:bg-white transition-all">
                                        </div>
                                        <span class="error-text text-xs text-rose-500 mt-1 font-semibold hidden"></span>
                                    </div>

                                    <!-- Submit Button -->
                                    <button type="submit" id="submit-btn"
                                        class="w-full mt-2 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-lg shadow-xs hover:shadow-md transition-all flex items-center justify-center gap-2 cursor-pointer focus:outline-hidden">
                                        <i class="bi bi-plus-circle"></i> <span>Add School</span>
                                    </button>
                                </form>
                            </div>

                            <!-- Recent Onboarded Platforms Table -->
                            <div
                                class="bg-white rounded-xl border border-slate-200 shadow-xs lg:col-span-2 overflow-hidden flex flex-col justify-between min-w-0">

                                <!-- Table Header -->
                                <div>
                                    <div
                                        class="p-5 sm:p-6 border-b border-slate-100 flex items-center justify-between gap-4">
                                        <div class="min-w-0">
                                            <h3 class="text-base font-bold text-slate-900 truncate">Recent Onboarded
                                                Platforms</h3>
                                            <p class="text-xs text-slate-500 mt-0.5 truncate">Live operational statuses of
                                                newly active installations.</p>
                                        </div>
                                        <button id="refresh-table"
                                            class="p-2 hover:bg-slate-100 rounded-lg transition-all" title="Refresh">
                                            <i class="bi bi-arrow-clockwise text-slate-600"></i>
                                        </button>
                                    </div>

                                    <!-- Table -->
                                    <div class="overflow-x-auto w-full block align-middle">
                                        <table class="w-full text-left border-collapse min-w-[600px]">
                                            <thead>
                                                <tr
                                                    class="bg-slate-50 border-b border-slate-100 text-xs font-bold text-slate-500 uppercase tracking-wider">
                                                    <th class="py-3 px-6">School System</th>
                                                    <th class="py-3 px-6">System Slug ID</th>
                                                    <th class="py-3 px-6">Primary Contact</th>
                                                    <th class="py-3 px-6 text-center">Status</th>
                                                    <th class="py-3 px-6 text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tenants-tbody"
                                                class="divide-y divide-slate-100 text-sm text-slate-600">
                                                <tr>
                                                    <td colspan="5" class="text-center py-8">
                                                        <span class="inline-block animate-pulse">⏳ Loading
                                                            schools...</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Pagination -->
                                <div
                                    class="bg-slate-50 border-t border-slate-100 px-5 sm:px-6 py-3 flex items-center justify-between gap-4 text-xs text-slate-500 shrink-0">
                                    <p class="truncate">
                                        Showing <span id="pagination-from">0</span> to
                                        <span id="pagination-to">0</span> of <span id="pagination-total">0</span> Schools
                                    </p>
                                    <div id="pagination-container" class="shrink-0">
                                        <!-- Pagination links will be inserted here -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </main>
            </div>
        </div>
    </x-layout>

    <script>
        // CSRF Token for AJAX requests
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content ||
            document.querySelector('input[name="_token"]')?.value;

        // ========== Load Stats ==========
        function loadStats() {
            fetch('/api/dashboard/stats')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('stat-admins').textContent = data.totalAdmins;
                    document.getElementById('stat-students').textContent = data.activeStudents;
                    document.getElementById('stat-revenue').textContent = '$' + data.monthlyRevenue;
                    document.getElementById('stat-load').textContent = data.systemLoad;
                })
                .catch(error => console.error('Error loading stats:', error));
        }

        // ========== Load Tenants Table ==========
        function loadTenants(page = 1) {
            fetch(`/api/dashboard/tenants?page=${page}`)
                .then(response => response.json())
                .then(data => {
                    const tbody = document.getElementById('tenants-tbody');
                    tbody.innerHTML = '';

                    if (data.data.length === 0) {
                        tbody.innerHTML = `
                        <tr>
                            <td colspan="5" class="text-center py-8 text-xs text-slate-400 font-medium">
                                No school environments deployed yet.
                            </td>
                        </tr>
                    `;
                    } else {
                        data.data.forEach(school => {
                            tbody.innerHTML += `
                            <tr class="hover:bg-slate-50/75 transition-colors">
                                <td class="py-3.5 px-6 font-semibold text-slate-900">${school.name}</td>
                                <td class="py-3.5 px-6 font-mono text-xs text-slate-500">${school.slug}</td>
                                <td class="py-3.5 px-6">${school.primaryContact}</td>
                                <td class="py-3.5 px-6 text-center">
                                    <span class="inline-flex px-2 py-0.5 text-xs font-medium rounded-md ${school.statusClass}">
                                        ${school.status}
                                    </span>
                                </td>
                                <td class="py-3.5 px-6 text-center">
                                    <button class="text-blue-600 hover:text-blue-800 text-sm" onclick="viewSchool(${school.id})">
                                        View
                                    </button>
                                    <button class="text-red-600 hover:text-red-800 text-sm ml-2" onclick="deleteSchool(${school.id})">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        `;
                        });
                    }

                    // Update pagination
                    document.getElementById('pagination-from').textContent = data.pagination.from;
                    document.getElementById('pagination-to').textContent = data.pagination.to;
                    document.getElementById('pagination-total').textContent = data.pagination.total;
                })
                .catch(error => console.error('Error loading tenants:', error));
        }

        // ========== Add School Form ==========
        document.getElementById('add-school-form').addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const submitBtn = document.getElementById('submit-btn');
            const originalText = submitBtn.innerHTML;

            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split animate-spin"></i> <span>Creating...</span>';

            fetch('/api/dashboard/tenants', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;

                    if (data.success) {
                        // Show success message
                        showMessage('success', data.message);

                        // Reset form
                        document.getElementById('add-school-form').reset();

                        // Reload stats and table
                        loadStats();
                        loadTenants();
                    } else {
                        showMessage('error', data.message);
                    }
                })
                .catch(error => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                    showMessage('error', 'An error occurred. Please try again.');
                    console.error('Error:', error);
                });
        });

        // ========== Delete School ==========
        function deleteSchool(id) {
            if (!confirm('Are you sure you want to delete this school?')) return;

            fetch(`/api/dashboard/tenants/${id}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    }
                })
                .then(response => response.json())
                .then(data => {
                    showMessage(data.success ? 'success' : 'error', data.message);
                    if (data.success) {
                        loadStats();
                        loadTenants();
                    }
                })
                .catch(error => {
                    showMessage('error', 'Failed to delete school');
                    console.error('Error:', error);
                });
        }

        // ========== View School Details ==========
        function viewSchool(id) {
            fetch(`/api/dashboard/tenants/${id}`)
                .then(response => response.json())
                .then(data => {
                    alert(
                        `School: ${data.name}\nStatus: ${data.status}\nTotal Users: ${data.totalUsers}\nActive Users: ${data.activeUsers}`);
                })
                .catch(error => console.error('Error:', error));
        }

        // ========== Show Message ==========
        function showMessage(type, message) {
            const messageDiv = document.getElementById(`${type}-message`);
            const messageText = document.getElementById(`${type}-text`);

            messageText.textContent = message;
            messageDiv.style.display = 'flex';

            setTimeout(() => {
                messageDiv.style.display = 'none';
            }, 5000);
        }

        // ========== Refresh Button ==========
        document.getElementById('refresh-table').addEventListener('click', function() {
            this.style.transform = 'rotate(180deg)';
            loadStats();
            loadTenants();
            setTimeout(() => {
                this.style.transform = 'rotate(0deg)';
            }, 600);
        });

        // ========== Auto Refresh Every 30 Seconds ==========
        setInterval(() => {
            loadStats();
            loadTenants();
        }, 30000);

        // ========== Initial Load ==========
        document.addEventListener('DOMContentLoaded', function() {
            loadStats();
            loadTenants();
        });
    </script>

    <style>
        /* Smooth transitions */
        * {
            transition-duration: 300ms;
        }
    </style>
@endsection
