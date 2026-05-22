<x-layout>
    <div
        class="h-screen w-screen overflow-hidden bg-slate-50 font-sans antialiased text-slate-800 flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8 bg-[radial-gradient(#e2e8f0_1px,transparent_1px)] [background-size:16px_16px]">

        <div class="w-full max-w-md space-y-6">

            <div class="text-center">
                <div
                    class="mx-auto h-12 w-12 rounded-xl bg-blue-600 flex items-center justify-center text-white shadow-md shadow-blue-500/20">
                    <i class="bi bi-shield-lock-fill text-2xl"></i>
                </div>
                <h2 class="mt-4 text-2xl font-black tracking-tight text-slate-900">
                    Sign in to your account
                </h2>
                <p class="mt-1 text-xs text-slate-500">
                    Unified gateway for Platform Admins & School Portals
                </p>
            </div>

            <div class="bg-white py-6 px-4 shadow-sm border border-slate-200/80 rounded-2xl sm:px-10">

                <div class="mb-5 p-3 rounded-xl bg-slate-50 border border-slate-200 flex gap-2.5 items-start">
                    <i class="bi bi-info-circle text-blue-600 mt-0.5 text-xs"></i>
                    <p class="text-[11px] text-slate-500 leading-normal">
                        Our system securely routes your access portal automatically based on your domain or user role
                        assignment.
                    </p>
                </div>

                <form action="#" method="POST" class="space-y-4">
                    @csrf

                    <div class="space-y-1">
                        <label for="email"
                            class="block text-[11px] font-bold text-slate-600 uppercase tracking-wider">
                            Email Address
                        </label>
                        <div class="relative rounded-md shadow-xs">
                            <div
                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <i class="bi bi-envelope text-xs"></i>
                            </div>
                            <input id="email" name="email" type="email" autocomplete="email" required
                                placeholder="name@school.com"
                                class="block w-full pl-9 pr-3 py-2 bg-slate-50/50 border border-slate-200 rounded-xl text-sm placeholder-slate-400 focus:bg-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10 focus:outline-hidden transition-all" />
                        </div>
                    </div>

                    <div class="space-y-1">
                        <div class="flex items-center justify-between">
                            <label for="password"
                                class="block text-[11px] font-bold text-slate-600 uppercase tracking-wider">
                                Password
                            </label>
                            <div class="text-[11px]">
                                <a href="#"
                                    class="font-semibold text-blue-600 hover:text-blue-700 transition-colors">
                                    Forgot password?
                                </a>
                            </div>
                        </div>
                        <div class="relative rounded-md shadow-xs">
                            <div
                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <i class="bi bi-key text-xs"></i>
                            </div>
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required placeholder="••••••••"
                                class="block w-full pl-9 pr-3 py-2 bg-slate-50/50 border border-slate-200 rounded-xl text-sm placeholder-slate-400 focus:bg-white focus:border-blue-500 focus:ring-2 focus:ring-blue-500/10 focus:outline-hidden transition-all" />
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-0.5">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-slate-300 rounded-md cursor-pointer" />
                            <label for="remember_me"
                                class="ml-2 block text-xs font-semibold text-slate-600 select-none cursor-pointer">
                                Keep me signed in
                            </label>
                        </div>
                    </div>

                    <div class="pt-1">
                        <button type="submit"
                            class="w-full flex justify-center items-center gap-2 py-2 px-4 border border-transparent rounded-xl text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 shadow-md shadow-blue-500/10 transition-all cursor-pointer">
                            Secure Log In <i class="bi bi-arrow-right text-xs"></i>
                        </button>
                    </div>
                </form>

            </div>

            <p class="text-center text-xs text-slate-400">
                Want to register a new institution?
                <a href="#"
                    class="font-bold text-slate-600 hover:text-slate-900 underline transition-colors ml-0.5">Contact
                    Admin</a>
            </p>
        </div>

    </div>
</x-layout>
