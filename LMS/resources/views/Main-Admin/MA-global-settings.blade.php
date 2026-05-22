<x-layout>
    <div class="bg-slate-50 font-sans antialiased text-slate-800">
        <div class="flex h-screen overflow-hidden">

            <x-main-admin-sidebar />

            <main class="flex-1 flex flex-col overflow-y-auto">

                <header
                    class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 sticky top-0 z-10">
                    <div class="flex items-center gap-4">
                        <button class="md:hidden text-slate-600 text-xl"><i class="bi bi-list"></i></button>
                        <h2 class="text-lg font-bold text-slate-800">Global Settings</h2>
                    </div>
                    <div class="flex items-center gap-4">
                        <button type="submit" form="global-settings-form"
                            class="inline-flex items-center gap-2 px-4 py-1.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-semibold rounded-lg transition-colors shadow-xs cursor-pointer">
                            <i class="bi bi-check-circle"></i> Save All Changes
                        </button>
                    </div>
                </header>

                <div class="p-6 max-w-4xl w-full mx-auto">

                    <form id="global-settings-form" action="#" method="POST" class="space-y-8">
                        @csrf
                        @method('PUT')

                        <div class="bg-white rounded-xl border border-slate-200 shadow-xs p-6 space-y-6">
                            <div>
                                <h3 class="text-base font-bold text-slate-900">General Platform Information</h3>
                                <p class="text-xs text-slate-500">Configure global metadata indicators and default
                                    regional localization variables.</p>
                            </div>
                            <hr class="border-slate-100" />
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-600 uppercase">Application Name</label>
                                    <input type="text" name="app_name" value="School Management Platform"
                                        class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:bg-white focus:border-blue-500 focus:outline-hidden transition-all" />
                                </div>
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-600 uppercase">Support Email
                                        Target</label>
                                    <input type="email" name="support_email" value="support@schoolplatform.com"
                                        class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:bg-white focus:border-blue-500 focus:outline-hidden transition-all" />
                                </div>
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-600 uppercase">Default Base
                                        Currency</label>
                                    <select name="base_currency"
                                        class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:bg-white focus:border-blue-500 focus:outline-hidden transition-all">
                                        <option value="USD" selected>USD ($) - United States Dollar</option>
                                        <option value="EUR">EUR (€) - Euro</option>
                                        <option value="GBP">GBP (£) - British Pound</option>
                                        <option value="PKR">PKR (₨) - Pakistani Rupee</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-600 uppercase">System Timezone</label>
                                    <select name="timezone"
                                        class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:bg-white focus:border-blue-500 focus:outline-hidden transition-all">
                                        <option value="UTC">UTC / GMT (00:00)</option>
                                        <option value="Asia/Karachi" selected>Asia/Karachi (+05:00)</option>
                                        <option value="America/New_York">America/New_York (-05:00)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl border border-slate-200 shadow-xs p-6 space-y-6">
                            <div>
                                <h3 class="text-base font-bold text-slate-900">System Backups & Retention</h3>
                                <p class="text-xs text-slate-500">Automate snapshots of application states and manage
                                    database logs storage footprint.</p>
                            </div>
                            <hr class="border-slate-100" />
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-600 uppercase">Backup Schedule
                                        Frequency</label>
                                    <select name="backup_frequency"
                                        class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:bg-white focus:border-blue-500 focus:outline-hidden transition-all">
                                        <option value="hourly">Every Hour</option>
                                        <option value="daily" selected>Twice Daily (12-hour intervals)</option>
                                        <option value="weekly">Once Weekly</option>
                                        <option value="monthly">Once Monthly</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-600 uppercase">Backup Storage
                                        Location</label>
                                    <select name="backup_disk"
                                        class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:bg-white focus:border-blue-500 focus:outline-hidden transition-all">
                                        <option value="local_secure">Local Encrypted Disk Pool</option>
                                        <option value="aws_s3" selected>AWS S3 Bucket Cluster (Remote)</option>
                                        <option value="digital_ocean">DigitalOcean Spaces</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-600 uppercase">Purge Database Activity
                                        Logs</label>
                                    <select name="log_retention"
                                        class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:bg-white focus:border-blue-500 focus:outline-hidden transition-all">
                                        <option value="30">Older than 30 days</option>
                                        <option value="90" selected>Older than 90 days</option>
                                        <option value="180">Older than 6 months</option>
                                        <option value="never">Keep Logs Forever (Not Recommended)</option>
                                    </select>
                                </div>
                                <div class="space-y-1">
                                    <label class="text-xs font-bold text-slate-600 uppercase">Maximum Archive
                                        Sizes</label>
                                    <input type="text" name="max_backup_size" value="50 GB"
                                        class="w-full px-3 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm focus:bg-white focus:border-blue-500 focus:outline-hidden transition-all" />
                                </div>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl border border-slate-200 shadow-xs p-6 space-y-6">
                            <div>
                                <h3 class="text-base font-bold text-slate-900">Platform Security & Maintenance</h3>
                                <p class="text-xs text-slate-500">Safeguard administrative parameters or drop
                                    connectivity bounds globally during active migrations.</p>
                            </div>
                            <hr class="border-slate-100" />
                            <div class="space-y-5">
                                <div
                                    class="flex items-start justify-between gap-4 p-4 rounded-xl bg-amber-50/40 border border-amber-200/60">
                                    <div class="space-y-0.5">
                                        <h4 class="text-sm font-bold text-amber-900">Live Maintenance Mode</h4>
                                        <p class="text-xs text-amber-700/80">Force all tenant interfaces down
                                            immediately displaying a clean "Under Construction" template view.</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer select-none">
                                        <input type="checkbox" name="maintenance_mode" class="sr-only peer">
                                        <div
                                            class="w-11 h-6 bg-slate-200 peer-focus:outline-hidden rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-amber-600">
                                        </div>
                                    </label>
                                </div>

                                <div
                                    class="flex items-start justify-between gap-4 p-4 rounded-xl bg-slate-50 border border-slate-200">
                                    <div class="space-y-0.5">
                                        <h4 class="text-sm font-bold text-slate-900">Block Public Registrations</h4>
                                        <p class="text-xs text-slate-500">Restrict access to registration modules. New
                                            schools will require manual staff account invitations.</p>
                                    </div>
                                    <label class="relative inline-flex items-center cursor-pointer select-none">
                                        <input type="checkbox" name="block_registrations" checked
                                            class="sr-only peer">
                                        <div
                                            class="w-11 h-6 bg-slate-200 peer-focus:outline-hidden rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </main>
        </div>
    </div>
</x-layout>
