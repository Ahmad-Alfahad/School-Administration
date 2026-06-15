@csrf

<div class="space-y-6">
    
    <div>
        <label for="classroom_id" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">
            Assign Classroom
        </label>
        <select name="classroom_id" 
                id="classroom_id" 
                class="w-full rounded-xl border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-100 focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 dark:focus:border-emerald-500 transition-all duration-200 @error('classroom_id') border-rose-500 dark:border-rose-500 @enderror"
                required>
            <option value="" disabled {{ old('classroom_id', $teacher->classroom_id ?? '') == '' ? 'selected' : '' }}>
                Select a classroom...
            </option>
            @foreach($classrooms as $classroom)
                <option value="{{ $classroom->id }}" {{ old('classroom_id', $teacher->classroom_id ?? '') == $classroom->id ? 'selected' : '' }}>
                    {{ $classroom->name }} (Capacity: {{ $classroom->capacity }})
                </option>
            @endforeach
        </select>
        @error('classroom_id')
            <p class="mt-2 text-sm text-rose-600 dark:text-rose-400 font-medium">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="name" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">
            Full Name
        </label>
        <input type="text" 
               name="name" 
               id="name" 
               value="{{ old('name', $teacher->name ?? '') }}" 
               placeholder="e.g. John Doe"
               class="w-full rounded-xl border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-100 placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 dark:focus:border-emerald-500 transition-all duration-200 @error('name') border-rose-500 dark:border-rose-500 @enderror"
               required>
        @error('name')
            <p class="mt-2 text-sm text-rose-600 dark:text-rose-400 font-medium">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">
            Email Address
        </label>
        <input type="email" 
               name="email" 
               id="email" 
               value="{{ old('email', $teacher->email ?? '') }}" 
               placeholder="e.g. teacher@school.com"
               class="w-full rounded-xl border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-100 placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 dark:focus:border-emerald-500 transition-all duration-200 @error('email') border-rose-500 dark:border-rose-500 @enderror"
               required>
        @error('email')
            <p class="mt-2 text-sm text-rose-600 dark:text-rose-400 font-medium">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <label for="phone" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">
                Phone Number
            </label>
            <input type="text" 
                   name="phone" 
                   id="phone" 
                   value="{{ old('phone', $teacher->phone ?? '') }}" 
                   placeholder="e.g. +123456789"
                   class="w-full rounded-xl border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-100 placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 dark:focus:border-emerald-500 transition-all duration-200 @error('phone') border-rose-500 dark:border-rose-500 @enderror">
            @error('phone')
                <p class="mt-2 text-sm text-rose-600 dark:text-rose-400 font-medium">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="specialization" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 mb-2">
                Specialization / Subject
            </label>
            <input type="text" 
                   name="specialization" 
                   id="specialization" 
                   value="{{ old('specialization', $teacher->specialization ?? '') }}" 
                   placeholder="e.g. Mathematics, Physics"
                   class="w-full rounded-xl border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-100 placeholder-slate-400 focus:ring-2 focus:ring-emerald-500/20 focus:border-emerald-500 dark:focus:border-emerald-500 transition-all duration-200 @error('specialization') border-rose-500 dark:border-rose-500 @enderror"
                   required>
            @error('specialization')
                <p class="mt-2 text-sm text-rose-600 dark:text-rose-400 font-medium">{{ $message }}</p>
            @enderror
        </div>
    </div>

</div>