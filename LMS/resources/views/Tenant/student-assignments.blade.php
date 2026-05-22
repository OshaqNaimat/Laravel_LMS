<x-layout>
    <div class="bg-slate-50 font-sans antialiased text-slate-800">
        <div class="flex h-screen overflow-hidden">

            <x-student-sidebar />

            <main class="flex-1 flex flex-col overflow-y-auto">

                <header
                    class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-6 sticky top-0 z-10">
                    <div class="flex items-center gap-4">
                        <button class="md:hidden text-slate-600 text-xl"><i class="bi bi-list"></i></button>
                        <div>
                            <h2 class="text-sm font-bold text-slate-900 leading-tight">My Assignment Desk</h2>
                            <p class="text-xxs text-slate-400">Track pending tasks, view teacher reviews, and turn in
                                your coursework files.</p>
                        </div>
                    </div>
                </header>

                <div class="p-6 max-w-7xl w-full mx-auto space-y-6">

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">

                        <div class="lg:col-span-2 space-y-4">
                            <div
                                class="bg-white p-4 rounded-xl border border-slate-200 shadow-xs flex items-center justify-between">
                                <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Current Coursework
                                    Tasks</h3>
                                <span class="text-xxs text-slate-400 font-bold">Showing All Active Subjects</span>
                            </div>

                            <div
                                class="bg-white p-5 rounded-xl border-l-4 border-rose-500 border-t border-r border-b border-slate-200 shadow-xs space-y-3">
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                                    <div>
                                        <span
                                            class="text-[9px] font-bold px-2 py-0.5 rounded-md bg-blue-50 text-blue-600 border border-blue-100">Mathematics</span>
                                        <h4 class="text-sm font-bold text-slate-900 mt-1">Quadratic Equations Practice
                                            Quiz</h4>
                                    </div>
                                    <div class="text-left sm:text-right">
                                        <span
                                            class="inline-flex px-2 py-0.5 text-xxs font-bold rounded-md bg-rose-50 text-rose-600 border border-rose-100">Due
                                            Tonight by 11:59 PM</span>
                                    </div>
                                </div>
                                <p class="text-xs text-slate-500 leading-relaxed">
                                    Complete all graphing algorithms and algebraic proofs on pages 140 through 142. Make
                                    sure your coordinate points are plotted cleanly with structural grid labeling before
                                    submitting your work.
                                </p>
                                <div
                                    class="flex items-center gap-2 pt-2 border-t border-slate-100 text-xxs text-slate-400 font-semibold">
                                    <span><i class="bi bi-person-workspace text-slate-400"></i> Assigned by Mr.
                                        Haris</span>
                                    <span>•</span>
                                    <span>Weightage: 10% of Term Grade</span>
                                </div>
                            </div>

                            <div
                                class="bg-white p-5 rounded-xl border-l-4 border-amber-500 border-t border-r border-b border-slate-200 shadow-xs space-y-3 opacity-90">
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                                    <div>
                                        <span
                                            class="text-[9px] font-bold px-2 py-0.5 rounded-md bg-indigo-50 text-indigo-600 border border-indigo-100">English
                                            Literature</span>
                                        <h4 class="text-sm font-bold text-slate-900 mt-1">Macbeth Analytical Theme Essay
                                        </h4>
                                    </div>
                                    <div class="text-left sm:text-right">
                                        <span
                                            class="inline-flex px-2 py-0.5 text-xxs font-bold rounded-md bg-amber-50 text-amber-700 border border-amber-100">Awaiting
                                            Grading</span>
                                    </div>
                                </div>
                                <p class="text-xs text-slate-500 leading-relaxed">
                                    Write a 750-word character study analyzing Lady Macbeth's progressive descent into
                                    psychological remorse during Act V. Include context references from the original
                                    textbook material.
                                </p>
                                <div
                                    class="flex items-center justify-between pt-2 border-t border-slate-100 text-xxs text-slate-400 font-semibold">
                                    <div class="flex items-center gap-2">
                                        <span><i class="bi bi-person-workspace"></i> Assigned by Mrs. Fatima</span>
                                        <span>•</span>
                                        <span class="text-emerald-600 font-bold"><i class="bi bi-check-all"></i> Turned
                                            in on May 20</span>
                                    </div>
                                    <a href="#" class="text-blue-600 font-bold hover:underline">View Uploaded
                                        File</a>
                                </div>
                            </div>

                        </div>

                        <div class="bg-white rounded-xl border border-slate-200 shadow-xs p-5 space-y-4 sticky top-20">
                            <div>
                                <h3 class="text-xs font-bold text-slate-900 uppercase tracking-wider">Coursework Turn-In
                                    Desk</h3>
                                <p class="text-[10px] text-slate-400">Select an active task assignment below to upload
                                    your solution document.</p>
                            </div>

                            <form action="#" onsubmit="event.preventDefault(); alert('File uploaded successfully!')"
                                class="space-y-4">
                                <div>
                                    <label
                                        class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Target
                                        Task Assignment</label>
                                    <select
                                        class="w-full text-xs bg-slate-50 border border-slate-200 rounded-lg p-2 font-semibold text-slate-700 cursor-pointer focus:bg-white focus:outline-hidden">
                                        <option value="math">Mathematics - Quadratic Quiz</option>
                                    </select>
                                </div>

                                <div>
                                    <label
                                        class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Upload
                                        Work File</label>
                                    <div
                                        class="border-2 border-dashed border-slate-200 hover:border-blue-400 bg-slate-50/50 hover:bg-slate-50 rounded-xl p-6 text-center cursor-pointer transition-all flex flex-col items-center justify-center group">
                                        <i
                                            class="bi bi-cloud-arrow-up text-2xl text-slate-400 group-hover:text-blue-500 mb-1 transition-colors"></i>
                                        <span class="block text-xs text-slate-700 font-bold">Click to browse or drag
                                            file here</span>
                                        <span class="block text-[9px] text-slate-400 font-medium mt-0.5">PDF, DOCX, or
                                            PNG formats accepted (Max 10MB)</span>
                                    </div>
                                </div>

                                <div>
                                    <label
                                        class="block text-[10px] font-bold text-slate-400 uppercase tracking-wider mb-1">Message
                                        to Teacher (Optional)</label>
                                    <textarea placeholder="Type an optional private note or clarification regarding your submission..." rows="2"
                                        class="w-full p-2.5 text-xs bg-slate-50 border border-slate-200 rounded-lg placeholder-slate-400 text-slate-700 focus:bg-white focus:outline-hidden transition-all resize-none"></textarea>
                                </div>

                                <button type="submit"
                                    class="w-full py-2 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs rounded-xl shadow-xs transition-colors cursor-pointer">
                                    <i class="bi bi-file-earmark-arrow-up"></i> Submit Assignment
                                </button>
                            </form>
                        </div>

                    </div>

                </div>
            </main>
        </div>
    </div>
</x-layout>
