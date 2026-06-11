<?php
namespace App\Repositories;

use App\Models\Classroom;

class ClassroomRepository 
{
    public function getAll()
    {
        return Classroom::latest()->get();
    }

    public function findById(int $id)
    {
        return Classroom::with(['students' , 'teachers'])->findOrFail($id);
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