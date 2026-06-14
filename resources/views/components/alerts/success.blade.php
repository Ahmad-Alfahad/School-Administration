@if(session('success'))
    <div
        class="mb-4 rounded border border-green-300 bg-green-100 px-4 py-3 text-green-700">

        {{ session('success') }}

    </div>
@endif