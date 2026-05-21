<x-layout>
    <!-- SIDEBAR -->
    <aside
        class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between hidden md:flex border-r border-slate-800">
        <div>
            <!-- Brand/Logo -->
            <div class="h-16 flex items-center px-6 border-b border-slate-800 gap-3">
                <div class="bg-blue-600 text-white p-2 rounded-lg flex items-center justify-center">
                    <i class="bi bi-layers-half text-xl leading-none"></i>
                </div>
                <div>
                    <h1 class="text-white font-bold leading-none tracking-wide text-sm">EDUCORE</h1>
                    <span class="text-xs text-blue-400 font-semibold uppercase tracking-wider">SaaS Engine</span>
                </div>
            </div>

            <!-- Sidebar Navigation -->
            <nav class="p-4 space-y-1">
                <a href="/"
                    class="flex items-center gap-3 px-4 py-2.5 bg-blue-600 text-white rounded-lg font-medium transition-all duration-200">
                    <i class="bi bi-grid-1x2-fill"></i> Dashboard
                </a>
                <a href="/MA_School-admins"
                    class="flex items-center gap-3 px-4 py-2.5 hover:bg-slate-800 hover:text-white rounded-lg font-medium transition-all duration-200">
                    <i class="bi bi-building"></i> School Admins
                </a>
                <a href="/MA_Subscriptions"
                    class="flex items-center gap-3 px-4 py-2.5 hover:bg-slate-800 hover:text-white rounded-lg font-medium transition-all duration-200">
                    <i class="bi bi-credit-card"></i> Subscriptions
                </a>
                <a href="/MA_platform-admins"
                    class="flex items-center gap-3 px-4 py-2.5 hover:bg-slate-800 hover:text-white rounded-lg font-medium transition-all duration-200">
                    <i class="bi bi-shield-lock"></i> Platform Admins
                </a>
                <a href="/MA_global-settings"
                    class="flex items-center gap-3 px-4 py-2.5 hover:bg-slate-800 hover:text-white rounded-lg font-medium transition-all duration-200">
                    <i class="bi bi-sliders"></i> Global Settings
                </a>
            </nav>
        </div>

        <!-- User Info Sidebar Footer -->
        <div class="p-4 border-t border-slate-800 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div
                    class="w-9 h-9 bg-slate-700 text-white font-bold rounded-full flex items-center justify-center text-sm border border-slate-600">
                    SA
                </div>
                <div class="leading-tight">
                    <p class="text-sm font-semibold text-white">Super Admin</p>
                    <p class="text-xs text-slate-500">System Root</p>
                </div>
            </div>
            <button class="text-slate-500 hover:text-red-400 p-1 rounded transition-colors">
                <i class="bi bi-box-arrow-right text-lg"></i>
            </button>
        </div>
    </aside>
</x-layout>
