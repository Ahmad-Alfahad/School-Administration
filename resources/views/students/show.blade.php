<x-app-layout>
    <!-- Header Context Section -->
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 py-2">
            <div class="flex items-center gap-4">
                <!-- Visual Geometric Avatar Placeholder -->
                <div
                    class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-950/50 text-blue-600 dark:text-blue-400 flex items-center justify-center font-bold text-lg shadow-sm border border-blue-200 dark:border-blue-900/30">
                    {{ strtoupper(substr($student->name, 0, 2)) }}
                </div>
                <div>
                    <h2 class="font-bold text-2xl text-slate-800 dark:text-slate-100 leading-tight">
                        {{ $student->name }}
                    </h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-0.5">
                        Comprehensive administrative and personal demographic record dashboard.
                    </p>
                </div>
            </div>

            <!-- Structural Action Button Block -->
            <div class="flex items-center gap-2">
                <a href="{{ route('students.index') }}"
                    class="inline-flex items-center bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 text-sm font-semibold px-4 py-2.5 rounded-xl shadow-sm hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                    Back to List
                </a>
                <a href="{{ route('students.edit', $student) }}"
                    class="inline-flex items-center bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-4 py-2.5 rounded-xl shadow-sm transition-all">
                    Edit Profile
                </a>
            </div>
        </div>
    </x-slot>

    <!-- Main Content Container Layout -->
    <div class="py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

            <!-- Side Column Panel: Demographic and Personal Elements -->
            <div class="lg:col-span-1 space-y-6">
                <div
                    class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl shadow-sm p-6">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500 mb-4">
                        Personal Demographics
                    </h3>

                    <div class="space-y-4">
                        <!-- Student Name Element -->
                        <div>
                            <span class="text-xs text-slate-400 dark:text-slate-500 block">Full Name</span>
                            <span class="text-sm font-bold text-slate-900 dark:text-slate-100">
                                {{ $student->name }}
                            </span>
                        </div>

                        <!-- Email Element -->
                        <div>
                            <span class="text-xs text-slate-400 dark:text-slate-500 block">Email Address</span>
                            <a href="mailto:{{ $student->email }}"
                                class="text-sm font-semibold text-emerald-600 dark:text-emerald-400 hover:underline break-all">
                                {{ $student->email }}
                            </a>
                        </div>

                        <!-- Date of Birth Element -->
                        <div>
                            <span class="text-xs text-slate-400 dark:text-slate-500 block">Date of Birth</span>
                            <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                                {{ is_string($student->birth_date) ? $student->birth_date : $student->birth_date->format('F d, Y') }}
                            </span>
                        </div>

                        <!-- Contact Phone Element -->
                        <div>
                            <span class="text-xs text-slate-400 dark:text-slate-500 block">Contact Phone</span>
                            <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                                {{ $student->phone ?? 'Not Provided' }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Primary Data Column Panel: Educational Context Block -->
            <div class="lg:col-span-2 space-y-6">
                <div
                    class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl shadow-sm p-6">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500 mb-4">
                        Academic Assignment Detail
                    </h3>

                    <div
                        class="flex items-start gap-4 p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-800">
                        <div class="p-3 bg-blue-50 dark:bg-blue-950/30 text-blue-600 dark:text-blue-400 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 dark:text-slate-500 block">Enrolled Classroom
                                Container</span>
                            <span class="text-lg font-bold text-slate-900 dark:text-slate-100 block mt-0.5">
                                {{ $student->classroom->name ?? 'Not Assigned' }}
                            </span>
                            <p class="text-xs text-slate-400 mt-1">
                                This specific profile structure is actively recognized and synchronized within the
                                constraints, schedules, and grading blocks belonging to this target classroom.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>