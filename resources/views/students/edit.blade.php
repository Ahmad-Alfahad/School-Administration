<x-app-layout>
    <!-- Header Context Section -->
    <x-slot name="header">
        <div class="py-2">
            <h2 class="font-bold text-2xl text-slate-800 dark:text-slate-100 leading-tight">
                {{ __('Modify Student Profile') }}
            </h2>
            <p class="text-sm text-slate-500 dark:text-slate-400 mt-1">
                Update core personal identity fields, contact numbers, or reassign the student to an alternate classroom
                segment.
            </p>
        </div>
    </x-slot>

    <!-- Main Container -->
    <div class="py-8 max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Structural Navigation Row -->
        <div class="mb-4">
            <a href="{{ route('students.index') }}"
                class="inline-flex items-center gap-2 text-sm font-semibold text-slate-500 hover:text-slate-800 dark:text-slate-400 dark:hover:text-slate-200 transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
                <span>Back to Students List</span>
            </a>
        </div>

        <!-- Form Card Container -->
        <div
            class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl shadow-sm p-6 sm:p-8">

            <form action="{{ route('students.update', $student) }}" method="POST">
                @method('PUT')

                <!-- Dynamic Input Form Component Inclusion -->
                @include('students._form')

                <!-- Structural Submission Controls -->
                <div
                    class="mt-8 pt-6 border-t border-slate-100 dark:border-slate-800 flex items-center justify-end gap-3">
                    <a href="{{ route('students.index') }}"
                        class="px-4 py-2.5 text-sm font-semibold text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800/60 rounded-xl transition-all">
                        Cancel
                    </a>
                    <button type="submit"
                        class="bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl shadow-sm hover:shadow transition-all duration-200">
                        Update Student
                    </button>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>