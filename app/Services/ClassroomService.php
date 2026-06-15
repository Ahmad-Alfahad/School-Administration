<?php

namespace App\Services;

use App\Models\Classroom;
use App\Repositories\ClassroomRepository;

class ClassroomService
{
    protected $classroomRepository;

    public function __construct(ClassroomRepository $classroomRepository)
    {
        $this->classroomRepository = $classroomRepository;
    }

    public function getAllClassroooms()
    {
        return $this->classroomRepository->getAll();
    }

    public function getClassroomById($id)
    {
        return $this->classroomRepository->findById($id);
    }

    public function createClassroom(array $data)
    {
        $this->ensureClassroomNameIsUnique(
            $data['name']
        );
        return $this->classroomRepository->create($data);
    }

    public function updateClassroom(Classroom $classroom, array $data)
    {
        $this->ensureClassroomNameIsUnique(
            $data['name'],
            $classroom->id
        );
        return $this->classroomRepository->update(
            $classroom,
            $data
        );
    }

    public function deleteClassroom(Classroom $classroom)
    {
        $this->ensureClassroomCanBeDeleted(
            $classroom
        );

        return $this->classroomRepository->delete(
            $classroom
        );
    }

    private function ensureClassroomCanBeDeleted(Classroom $classroom): void
    {
        if ($classroom->students()->exists()) {

            throw new \DomainException(
                'Cannot delete a classroom that contains students.'
            );
        }

        if ($classroom->teachers()->exists()) {

            throw new \DomainException(
                'Cannot delete a classroom that contains teachers.'
            );
        }
    }

    private function ensureClassroomNameIsUnique(string $name, ?int $ignoreId = null): void
    {
        $exists = $this->classroomRepository
            ->existsByName($name, $ignoreId);


        if ($exists) {
            throw new \DomainException(
                'A classroom with this name already exists.'
            );
        }
    }
}