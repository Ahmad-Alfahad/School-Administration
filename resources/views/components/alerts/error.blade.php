@if(session('error'))
    <div
        class="mb-4 rounded border border-red-300 bg-red-100 px-4 py-3 text-red-700">

        {{ session('error') }}

    </div>
@endif