<div class="w-64 bg-white shadow-md sticky top-0 h-screen ">

    <div class="p-4 border-b">
        <h2 class="text-lg font-bold">
            School System
        </h2>
    </div>

    <nav class="p-4">

        <ul class="space-y-2">

            <li>
                <a href="{{ route('dashboard') }}"
                   class="block px-4 py-2 rounded hover:bg-gray-100">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="{{ route('classrooms.index') }}"
                   class="block px-4 py-2 rounded hover:bg-gray-100 ">
                    Classrooms
                </a>
            </li>

            <li>
                <a href="{{ route('teachers.index') }}"
                   class="block px-4 py-2 rounded hover:bg-gray-100">
                    Teachers
                </a>
            </li>

            <li>
                <a href="{{ route('students.index') }}"
                   class="block px-4 py-2 rounded hover:bg-gray-100">
                    Students
                </a>
            </li>

        </ul>

    </nav>

</div>