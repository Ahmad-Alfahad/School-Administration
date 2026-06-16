@if(session('success'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        x-transition
        class="mb-6 rounded-2xl border border-emerald-200 bg-emerald-50 px-5 py-4 text-emerald-800 shadow-sm"
    >
        <div class="flex items-center justify-between">

            <div class="flex items-center gap-3">

                <svg class="w-5 h-5"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M5 13l4 4L19 7"/>
                </svg>

                <span>{{ session('success') }}</span>

            </div>

            <button
                @click="show = false"
                class="text-emerald-700 hover:text-emerald-900"
            >
                ✕
            </button>

        </div>
    </div>
@endif


@if(session('error'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 5000)"
        x-show="show"
        x-transition
        class="mb-6 rounded-2xl border border-rose-200 bg-rose-50 px-5 py-4 text-rose-800 shadow-sm"
    >
        <div class="flex items-center justify-between">

            <div class="flex items-center gap-3">

                <svg class="w-5 h-5"
                     fill="none"
                     stroke="currentColor"
                     viewBox="0 0 24 24">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>

                <span>{{ session('error') }}</span>

            </div>

            <button
                @click="show = false"
                class="text-rose-700 hover:text-rose-900"
            >
                ✕
            </button>

        </div>
    </div>
@endif