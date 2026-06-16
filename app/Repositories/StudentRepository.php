<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{
    public function getAll()
    {
        return Student::with('classroom')
            ->latest()
            ->get();
    }

    public function findById($id)
    {
        return Student::findOrFail($id);
    }

    public function create(array $data)
    {
        return Student::create($data);
    }

    public function update(Student $student, array $data)
    {
        $student->update($data);

        return $student;
    }

    public function delete(Student $student)
    {
        return $student->delete();
    }

    public function paginate(int $perPage = 10, ?string $search = null)
    {
        return Student::query()
            ->with('classroom')

            ->when(
                $search,
                function ($query) use ($search) {

                    $query->where(function ($q) use ($search) {

                        $q->where('name', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%");

                    });

                }
            )

            ->latest()
            ->paginate($perPage)
            ->withQueryString();
    }
}