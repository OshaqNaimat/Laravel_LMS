<aside
    class="w-64 h-screen bg-slate-900 text-slate-400 flex flex-col justify-between hidden md:flex flex-shrink-0 border-r border-slate-800">

    <div class="space-y-7 p-5">
        <div class="flex items-center gap-3 border-b border-slate-800 pb-5">
            <div
                class="w-9 h-9 rounded-xl bg-blue-600 text-white flex items-center justify-center font-black text-sm shadow-xs">
                RI
            </div>
            <div>
                <h1 class="text-sm font-black text-white tracking-wide leading-tight truncate w-40">Roots Int'l</h1>
                <span
                    class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded-md bg-blue-500/10 text-blue-400 text-[10px] font-bold mt-0.5">
                    <span class="w-1 h-1 rounded-full bg-blue-400"></span> Campus Portal
                </span>
            </div>
        </div>

        <div class="space-y-1.5">
            <p class="text-[10px] font-bold text-slate-600 uppercase tracking-wider px-2 mb-2">Core Modules</p>

            <a href="/Tenant-dashboard"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('Tenant-dashboard') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-grid-1x2-fill text-sm {{ request()->is('Tenant-dashboard') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>Dashboard</span>
                </div>
            </a>

            <a href="/Tenant-Faculty-management"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('Tenant-Faculty-management') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-person-badge text-sm {{ request()->is('Tenant-Faculty-management') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>Faculty Management</span>
                </div>
                <span
                    class="{{ request()->is('Tenant-Faculty-management') ? 'bg-blue-700 text-blue-100' : 'bg-slate-800 group-hover:bg-slate-750 text-slate-400' }} text-[10px] font-bold px-2 py-0.5 rounded-md">48</span>
            </a>

            <a href="/Tenant-Student-Registry"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('Tenant-Student-Registry') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-mortarboard text-sm {{ request()->is('Tenant-Student-Registry') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>Student Registry</span>
                </div>
            </a>

            <a href="/Tenant-Classes-Timetables"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('Tenant-Classes-Timetables') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-calendar3 text-sm {{ request()->is('Tenant-Classes-Timetables') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>Classes & Timetables</span>
                </div>
            </a>

            <a href="/Tenant-Attendence-Rate"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('Tenant-Attendence-Rate') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-calendar-check text-sm {{ request()->is('Tenant-Attendence-Rate') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>Attendance Rate</span>
                </div>
            </a>

            <a href="/Tenant-Fees"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('Tenant-Fees') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-wallet2 text-sm {{ request()->is('Tenant-Fees') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>Fee Collections</span>
                </div>
                @unless (request()->is('Tenant-Fees'))
                    <i class="bi bi-exclamation-circle text-amber-500 text-xs animate-pulse"></i>
                @endunless
            </a>
        </div>
    </div>

    <div class="p-4 border-t border-slate-800 bg-slate-950/40">
        <div class="flex items-center justify-between p-2 rounded-xl bg-slate-900/60 border border-slate-800/60">
            <div class="flex items-center gap-2.5 truncate">
                <div
                    class="w-7 h-7 rounded-lg bg-slate-800 flex items-center justify-center font-bold text-xxs text-slate-300 uppercase flex-shrink-0">
                    PR
                </div>
                <div class="truncate">
                    <p class="text-xs font-bold text-slate-200 truncate leading-tight">Principal Account</p>
                    <span class="text-[10px] text-slate-500 block truncate">roots@portal.com</span>
                </div>
            </div>

            <form action="#" method="POST" class="inline">
                @csrf
                <button type="submit"
                    class="p-1.5 text-slate-500 hover:text-rose-400 hover:bg-rose-500/10 rounded-lg transition-all cursor-pointer"
                    title="Log Out">
                    <i class="bi bi-box-arrow-right text-sm"></i>
                </button>
            </form>
        </div>
    </div>

</aside>
