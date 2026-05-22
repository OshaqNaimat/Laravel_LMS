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
                    <span class="w-1 h-1 rounded-full bg-blue-400"></span> Student Portal
                </span>
            </div>
        </div>

        <div class="space-y-1.5">
            <p class="text-[10px] font-bold text-slate-600 uppercase tracking-wider px-2 mb-2">Academic Hub</p>

            <a href="/student-dashboard"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('student-dashboard') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-grid-1x2-fill text-sm {{ request()->is('student-dashboard') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>Dashboard</span>
                </div>
            </a>

            <a href="/student-timetable"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('student-timetable') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-calendar3 text-sm {{ request()->is('student-timetable') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>My Timetable</span>
                </div>
            </a>

            <a href="/student-assignments"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('student-assignments') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-file-earmark-text text-sm {{ request()->is('student-assignments') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>Assignments</span>
                </div>
                <span
                    class="{{ request()->is('student-assignments') ? 'bg-blue-700 text-blue-100' : 'bg-slate-800 text-slate-400' }} text-[10px] font-bold px-1.5 py-0.5 rounded-md">2</span>
            </a>

            <a href="/student-report-card"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('student-report-card') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-award text-sm {{ request()->is('student-report-card') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>Report Card</span>
                </div>
            </a>
        </div>
    </div>

    <div class="p-4 border-t border-slate-800 bg-slate-950/40">
        <div class="flex items-center justify-between p-2 rounded-xl bg-slate-900/60 border border-slate-800/60">
            <div class="flex items-center gap-2.5 truncate">
                <div
                    class="w-7 h-7 rounded-lg bg-blue-600 flex items-center justify-center font-bold text-xxs text-white uppercase flex-shrink-0">
                    ZH
                </div>
                <div class="truncate">
                    <p class="text-xs font-bold text-slate-200 truncate leading-tight">Zain Hashmi</p>
                    <span class="text-[10px] text-slate-500 block truncate">Roll No: 10A-01</span>
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
