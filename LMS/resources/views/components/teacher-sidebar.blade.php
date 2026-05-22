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
                    class="inline-flex items-center gap-1 px-1.5 py-0.5 rounded-md bg-emerald-500/10 text-emerald-400 text-[10px] font-bold mt-0.5">
                    <span class="w-1 h-1 rounded-full bg-emerald-400"></span> Teacher Portal
                </span>
            </div>
        </div>

        <div class="space-y-1.5">
            <p class="text-[10px] font-bold text-slate-600 uppercase tracking-wider px-2 mb-2">My Classroom</p>

            <a href="/teacher_dashboard"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('teacher_dashboard') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-grid-1x2-fill text-sm {{ request()->is('teacher_dashboard') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>Dashboard</span>
                </div>
            </a>

            <a href="/teacher_attendence"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('teacher_attendence') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-calendar-check text-sm {{ request()->is('teacher_attendence') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>Mark Attendance</span>
                </div>
            </a>

            <a href="/teacher_timetable"
                class="flex items-center justify-between px-3 py-2.5 rounded-xl text-xs font-semibold transition-all group {{ request()->is('teacher_timetable') ? 'bg-blue-600 text-white' : 'hover:bg-slate-800 hover:text-slate-200 text-slate-400' }}">
                <div class="flex items-center gap-3">
                    <i
                        class="bi bi-calendar3 text-sm {{ request()->is('teacher_timetable') ? 'text-white' : 'text-slate-500 group-hover:text-slate-300' }}"></i>
                    <span>My Timetable</span>
                </div>
            </a>
        </div>
    </div>

    <div class="p-4 border-t border-slate-800 bg-slate-950/40">
        <div class="flex items-center justify-between p-2 rounded-xl bg-slate-900/60 border border-slate-800/60">
            <div class="flex items-center gap-2.5 truncate">
                <div
                    class="w-7 h-7 rounded-lg bg-emerald-600 flex items-center justify-center font-bold text-xxs text-white uppercase flex-shrink-0">
                    TH
                </div>
                <div class="truncate">
                    <p class="text-xs font-bold text-slate-200 truncate leading-tight">Teacher Account</p>
                    <span class="text-[10px] text-slate-500 block truncate">teacher@portal.com</span>
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
