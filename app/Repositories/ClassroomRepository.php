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

    public function update(Classroom $classroom , array $data)
    {
        $classroom ->update($data);
        return $classroom;  
    }

    public function delete(Classroom $classroom)
    {
        return $classroom->delete();
    }
}