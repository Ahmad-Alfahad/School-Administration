<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 py-2">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-950/50 text-emerald-600 dark:text-emerald-400 flex items-center justify-center font-bold text-lg shadow-sm">
                    {{ strtoupper(substr($teacher->name, 0, 2)) }}
                </div>
                <div>
                    <h2 class="font-bold text-2xl text-slate-800 dark:text-slate-100 leading-tight">
                        {{ $teacher->name }}
                    </h2>
                    <p class="text-sm text-slate-500 dark:text-slate-400 mt-0.5">
                        Faculty Member Portfolio & Qualifications
                    </p>
                </div>
            </div>
            
            <div class="flex items-center gap-2">
                <a href="{{ route('teachers.index') }}" 
                   class="inline-flex items-center bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 text-sm font-semibold px-4 py-2.5 rounded-xl shadow-sm hover:bg-slate-50 dark:hover:bg-slate-800 transition-all">
                    Back to Teachers
                </a>
                <a href="{{ route('teachers.edit', $teacher) }}" 
                   class="inline-flex items-center bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-4 py-2.5 rounded-xl shadow-sm transition-all">
                    Edit Profile
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <div class="lg:col-span-1 space-y-6">
                <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl shadow-sm p-6">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500 mb-4">
                        Contact Information
                    </h3>
                    
                    <div class="space-y-4">
                        <div>
                            <span class="text-xs text-slate-400 dark:text-slate-500 block">Email Address</span>
                            <a href="mailto:{{ $teacher->email }}" class="text-sm font-semibold text-emerald-600 dark:text-emerald-400 hover:underline break-all">
                                {{ $teacher->email }}
                            </a>
                        </div>

                        <div>
                            <span class="text-xs text-slate-400 dark:text-slate-500 block">Phone Number</span>
                            <span class="text-sm font-semibold text-slate-700 dark:text-slate-300">
                                {{ $teacher->phone ?? 'Not Provided' }}
                            </span>
                        </div>

                        <div>
                            <span class="text-xs text-slate-400 dark:text-slate-500 block">Core Specialization</span>
                            <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-semibold bg-blue-50 dark:bg-blue-950/40 text-blue-700 dark:text-blue-300 border border-blue-100 dark:border-blue-900/50 mt-1">
                                {{ $teacher->specialization }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 space-y-6">
                <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl shadow-sm p-6">
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 dark:text-slate-500 mb-4">
                        Academic Assignment
                    </h3>
                    
                    <div class="flex items-start gap-4 p-4 bg-slate-50 dark:bg-slate-800/50 rounded-xl border border-slate-100 dark:border-slate-800">
                        <div class="p-3 bg-emerald-50 dark:bg-emerald-950/30 text-emerald-600 dark:text-emerald-400 rounded-lg">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 dark:text-slate-500 block">Currently Teaching Room</span>
                            <span class="text-lg font-bold text-slate-900 dark:text-slate-100 block mt-0.5">
                                 {{ $teacher->classroom->name ?? 'Not Assigned' }}
                            </span>
                            <p class="text-xs text-slate-400 mt-1">
                                This teacher has full administrative access to student management and grading inside this assigned physical classroom section.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>