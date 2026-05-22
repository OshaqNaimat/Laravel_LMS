<aside
    class="w-64 h-screen bg-slate-900 text-slate-300 flex flex-col justify-between hidden md:flex flex-shrink-0 border-r border-slate-800">
    <div>
        <div class="h-16 flex items-center px-6 border-b border-slate-800 gap-3">
            <div class="bg-blue-600 text-white p-2 rounded-lg flex items-center justify-center">
                <i class="bi bi-layers-half text-xl leading-none"></i>
            </div>
            <div>
                <h1 class="text-white font-bold leading-none tracking-wide text-sm">EDUCORE</h1>
                <span class="text-xs text-blue-400 font-semibold uppercase tracking-wider">SaaS Engine</span>
            </div>
        </div>

        <nav class="p-4 space-y-1">
            <a href="/MA_Dashboard"
                class="flex items-center gap-3 px-4 py-2.5 rounded-lg font-medium transition-all duration-200 group {{ request()->is('MA_Dashboard') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white text-slate-400' }}">
                <i
                    class="bi bi-grid-1x2-fill {{ request()->is('MA_Dashboard') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                <span>Dashboard</span>
            </a>
            <a href="/MA_School-admins"
                class="flex items-center gap-3 px-4 py-2.5 rounded-lg font-medium transition-all duration-200 group {{ request()->is('MA_School-admins') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white text-slate-400' }}">
                <i
                    class="bi bi-building {{ request()->is('MA_School-admins') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                <span>School Admins</span>
            </a>

            <a href="/MA_Subscriptions"
                class="flex items-center gap-3 px-4 py-2.5 rounded-lg font-medium transition-all duration-200 group {{ request()->is('MA_Subscriptions') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white text-slate-400' }}">
                <i
                    class="bi bi-credit-card {{ request()->is('MA_Subscriptions') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                <span>Subscriptions</span>
            </a>

            <a href="/MA_platform-admins"
                class="flex items-center gap-3 px-4 py-2.5 rounded-lg font-medium transition-all duration-200 group {{ request()->is('MA_platform-admins') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white text-slate-400' }}">
                <i
                    class="bi bi-shield-lock {{ request()->is('MA_platform-admins') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                <span>Platform Admins</span>
            </a>

            <a href="/MA_global-settings"
                class="flex items-center gap-3 px-4 py-2.5 rounded-lg font-medium transition-all duration-200 group {{ request()->is('MA_global-settings') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-white text-slate-400' }}">
                <i
                    class="bi bi-sliders {{ request()->is('MA_global-settings') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                <span>Global Settings</span>
            </a>
        </nav>
    </div>

    <div class="p-4 border-t border-slate-800 flex items-center justify-between bg-slate-950/20">
        <div class="flex items-center gap-3">
            <div
                class="w-9 h-9 bg-slate-700 text-white font-bold rounded-full flex items-center justify-center text-sm border border-slate-600 shadow-xs">
                SA
            </div>
            <div class="leading-tight">
                <p class="text-sm font-semibold text-white">Super Admin</p>
                <p class="text-[11px] text-slate-500">System Root</p>
            </div>
        </div>
        <form action="#" method="POST" class="inline">
            @csrf
            <button type="submit"
                class="text-slate-500 hover:text-rose-400 p-1.5 hover:bg-rose-500/10 rounded-lg transition-colors cursor-pointer"
                title="Sign Out">
                <i class="bi bi-box-arrow-right text-base"></i>
            </button>
        </form>
    </div>
</aside>
