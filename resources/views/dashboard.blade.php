<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <span class="text-indigo-600">🏫</span>{{ __('School Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">

        <div
            class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all duration-300 flex items-center justify-between group">
            <div>
                <p class="text-sm font-medium text-slate-400 group-hover:text-indigo-600 
                transition-colors">Students </p>
                <h3 class="text-3xl font-bold text-slate-800 mt-1">{{ $statistics['students_count'] }}</h3>
            </div>
            <div
                class="p-3 rounded-xl bg-indigo-50 text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                    </path>
                </svg>
            </div>
        </div>

        <div
            class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all duration-300 flex items-center justify-between group">
            <div>
                <p class="text-sm font-medium text-slate-400 group-hover:text-emerald-600 transition-colors">Teachers
                </p>
                <h3 class="text-3xl font-bold text-slate-800 mt-1">{{ $statistics['teachers_count'] }}</h3>
            </div>
            <div
                class="p-3 rounded-xl bg-emerald-50 text-emerald-600 group-hover:bg-emerald-600 group-hover:text-white transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15">
                    </path>
                </svg>
            </div>
        </div>

        <div
            class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all duration-300 flex items-center justify-between group">
            <div>
                <p class="text-sm font-medium text-slate-400 group-hover:text-amber-600 transition-colors">Classrooms
                </p>
                <h3 class="text-3xl font-bold text-slate-800 mt-1">{{ $statistics['classrooms_count'] }}</h3>
            </div>
            <div
                class="p-3 rounded-xl bg-amber-50 text-amber-600 group-hover:bg-amber-600 group-hover:text-white transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                    </path>
                </svg>
            </div>
        </div>

        <div
            class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm hover:shadow-md transition-all duration-300 flex items-center justify-between group">
            <div>
                <p class="text-sm font-medium text-slate-400 group-hover:text-rose-600 transition-colors">Capacity
                </p>
                <h3 class="text-3xl font-bold text-slate-800 mt-1">{{ $statistics['total_capacity'] }}</h3>
            </div>
            <div
                class="p-3 rounded-xl bg-rose-50 text-rose-600 group-hover:bg-rose-600 group-hover:text-white transition-all duration-300">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 002 2h2a2 2 0 002-2z">
                    </path>
                </svg>
            </div>
        </div>

    </div>

    <div class="mb-12">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <span class="w-2 h-6 bg-indigo-600 rounded-full"></span>
                <h2 class="text-xl font-bold text-slate-800">Recent Students</h2>
            </div>  
            <a href="{{ route('students.index') }}"
                class="text-sm font-semibold text-indigo-600 hover:text-indigo-800 bg-indigo-50 hover:bg-indigo-100 px-4 py-2 rounded-xl transition-all duration-200">
                View All←
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            @forelse($recentStudents as $student)
                <div
                    class="bg-white border border-slate-100 rounded-2xl p-5 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all duration-300 flex flex-col justify-between h-full">
                    <div>
                        <div
                            class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-500 to-purple-500 flex items-center justify-center text-white font-bold text-sm mb-4 shadow-sm shadow-indigo-100">
                            {{ mb_substr($student->name, 0, 1) }}
                        </div>

                        <h3 class="font-bold text-slate-800 line-clamp-1 mb-1">
                            {{ $student->name }}
                        </h3>

                        <p class="text-xs text-slate-400 line-clamp-1 mb-4">
                            {{ $student->email }}
                        </p>
                    </div>

                    <div>
                        <span
                            class="inline-block px-3 py-1 text-xs font-medium rounded-lg bg-indigo-50 text-indigo-700 border border-indigo-100/50">
                            📍 {{ $student->classroom?->name ?? 'No Classroom' }}
                        </span>
                    </div>
                </div>
            @empty
                <div class="col-span-full">
                    <div class="bg-white rounded-2xl border border-dashed border-slate-200 p-12 text-center text-slate-400">
                        No Student Found .
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <div class="mb-12">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <span class="w-2 h-6 bg-emerald-600 rounded-full"></span>
                <h2 class="text-xl font-bold text-slate-800">Recent Teachers</h2>
            </div>
            <a href="{{ route('teachers.index') }}"
                class="text-sm font-semibold text-emerald-600 hover:text-emerald-800 bg-emerald-50 hover:bg-emerald-100 px-4 py-2 rounded-xl transition-all duration-200">
                View All ←
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            @forelse($recentTeachers as $teacher)
                <div
                    class="bg-white border border-slate-100 rounded-2xl p-5 shadow-sm hover:-translate-y-1 hover:shadow-md transition-all duration-300 flex flex-col justify-between h-full">
                    <div>
                        <div
                            class="w-10 h-10 rounded-xl bg-gradient-to-tr from-emerald-500 to-teal-500 flex items-center justify-center text-white font-bold text-sm mb-4 shadow-sm shadow-emerald-100">
                            {{ mb_substr($teacher->name, 0, 1) }}
                        </div>

                        <h3 class="font-bold text-slate-800 line-clamp-1 mb-1">
                            {{ $teacher->name }}
                        </h3>

                        <p class="text-xs text-slate-400 line-clamp-1 mb-4">
                            {{ $teacher->email }}
                        </p>
                    </div>

                    <div>
                        <span
                            class="inline-block px-3 py-1 text-xs font-medium rounded-lg bg-emerald-50 text-emerald-700 border border-emerald-100/50">
                            📚 {{ $teacher->classroom?->name ?? ''}}
                        </span>
                    </div>
                </div>
            @empty
                <div class="col-span-full">
                    <div class="bg-white rounded-2xl border border-dashed border-slate-200 p-12 text-center text-slate-400">
                        No Teachers Found.
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    <div class="mt-12">
        <div class="flex items-center gap-2 mb-6">
            <span class="w-2 h-6 bg-amber-500 rounded-full"></span>
            <h2 class="text-xl font-bold text-slate-800">Classrooms Capacity</h2>
        </div>

        <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @forelse($classroomDistribution as $classroom)
                            @php
                                $percentage = $classroom->capacity > 0
                                    ? round(($classroom->students_count / $classroom->capacity) * 100)
                                    : 0;
                            @endphp

                            <div class="p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-slate-200 transition-all">
                                <div class="flex justify-between items-center mb-3">
                                    <div>
                                        <h3 class="font-bold text-slate-800">{{ $classroom->name }}</h3>
                                        <p class="text-xs text-slate-400 mt-0.5">
                                            Registerd Students : {{ $classroom->students_count }} , From {{ $classroom->capacity }}
                                        </p>
                                    </div>

                                    <span class="text-xs font-bold px-2 py-1 rounded-md
                                                                                {{ $percentage >= 90 ? 'bg-rose-50 text-rose-600' :
                    ($percentage >= 70 ? 'bg-amber-50 text-amber-600' : 'bg-emerald-50 text-emerald-600') }}">
                                        {{ $percentage }}%
                                    </span>
                                </div>

                                <div class="w-full bg-slate-200 rounded-full h-2.5 overflow-hidden">
                                    <div class="h-2.5 rounded-full transition-all duration-500 ease-out
                                                                                {{ $percentage >= 90 ? 'bg-gradient-to-r from-rose-500 to-red-500' :
                    ($percentage >= 70 ? 'bg-gradient-to-r from-amber-500 to-orange-500' : 'bg-gradient-to-r from-emerald-500 to-teal-500') }}"
                                        style="width: {{ $percentage }}%">
                                    </div>
                                </div>
                            </div>
                @empty
                    <div class="col-span-full text-center text-slate-400 py-8">
                        No Classroom Found.
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>