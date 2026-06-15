<?php
namespace App\Repositories;

use App\Models\Classroom;

class ClassroomRepository
{
    public function getAll()
    {
        return Classroom::withCount('students')->latest()->get();
    }

    public function findById(int $id)
    {
        return Classroom::with(['teachers'])->withCount('students')->findOrFail($id);
    }

    public function create(array $data)
    {
        return Classroom::create($data);
    }

    public function update(Classroom $classroom, array $data)
    {
        $classroom->update($data);
        return $classroom;
    }

    public function delete(Classroom $classroom)
    {
        return $classroom->delete();
    }

    public function existsByName(string $name, ?int $ignoreId = null): bool
    {
        return Classroom::query()
            ->where('name', $name)
            ->when(
                $ignoreId,
                fn($query) => $query->where('id', '!=', $ignoreId)
            )
            ->exists();
    }
}