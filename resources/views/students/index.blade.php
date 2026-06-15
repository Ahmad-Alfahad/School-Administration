<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 py-2">
            <div>
                <h2 class="font-bold text-2xl text-slate-800 dark:text-slate-100 leading-tight">
                    {{ __('Students Management') }}
                </h2>
                <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                    Manage student profiles, track their assigned classrooms, and access contact records.
                </p>
            </div>

            <a href="{{ route('students.create') }}"
                class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-4 py-2.5 rounded-xl shadow-sm hover:shadow transition-all duration-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                <span>Add Student</span>
            </a>
        </div>
    </x-slot>

    <div class="py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl shadow-sm overflow-hidden">

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr
                            class="bg-slate-50 dark:bg-slate-800/60 border-b border-slate-200 dark:border-slate-800 text-slate-500 dark:text-slate-400">
                            <th class="p-4 text-xs font-bold uppercase tracking-wider">Classroom</th>
                            <th class="p-4 text-xs font-bold uppercase tracking-wider">Name</th>
                            <th class="p-4 text-xs font-bold uppercase tracking-wider">Email</th>
                            <th class="p-4 text-xs font-bold uppercase tracking-wider">Phone</th>
                            <th class="p-4 text-xs font-bold uppercase tracking-wider">Birth Date</th>
                            <th class="p-4 text-xs font-bold uppercase tracking-wider text-right pr-6">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800 text-slate-700 dark:text-slate-300">
                        @forelse($students as $student)
                            <tr class="hover:bg-slate-50/70 dark:hover:bg-slate-800/30 transition-colors duration-150">

                                <td class="p-4 text-sm">
                                    <span
                                        class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-semibold bg-slate-200 dark:bg-slate-800 text-slate-700 dark:text-slate-300">
                                         {{ $student->classroom->name ?? 'Not Assigned' }}
                                    </span>
                                </td>

                                <td class="p-4 text-sm font-semibold text-slate-900 dark:text-slate-100">
                                    {{ $student->name }}
                                </td>

                                <td class="p-4 text-sm text-slate-600 dark:text-slate-400 lowercase">
                                    {{ $student->email }}
                                </td>

                                <td class="p-4 text-sm text-slate-600 dark:text-slate-400">
                                    {{ $student->phone ?? '-' }}
                                </td>

                                <td class="p-4 text-sm text-slate-600 dark:text-slate-400">
                                    {{ $student->birth_date }}
                                </td>

                                <td class="p-4 text-sm text-right pr-6">
                                    <div class="inline-flex items-center gap-2 justify-end">

                                        <x-tables.crud-actions 
                                            :show="route('students.show', $student)"
                                            :edit="route('students.edit', $student)" 
                                            :delete="route('students.destroy', $student)" 
                                            confirmMessage="Are you sure you want to delete this student?" />


                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="p-16 text-center text-slate-400 dark:text-slate-500">
                                    <div class="flex flex-col items-center justify-center gap-3">
                                        <div
                                            class="p-4 bg-slate-50 dark:bg-slate-800 rounded-full text-slate-300 dark:text-slate-600">
                                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="text-base font-medium text-slate-500">No students registered yet</span>
                                        <p class="text-xs text-slate-400 max-w-xs">Start building your school index by
                                            registering students and assigning them to their respective classrooms.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>