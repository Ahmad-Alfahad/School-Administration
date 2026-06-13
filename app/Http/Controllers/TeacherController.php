<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Services\TeacherService;


class TeacherController extends Controller
{
    protected $teacherService;

    public function __construct(TeacherService $teacherService)
    {
        $this->teacherService = $teacherService;
    }

    public function index()
    {
        $teachers = $this->teacherService->getAllTeachers();

        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(StoreTeacherRequest $request)
    {
        $this->teacherService->createTeacher(
            $request->validated()
        );

        return redirect()
            ->route('teachers.index')
            ->with(
                'success',
                'Teacher created successfully.'
            );
    }

    public function show($id)
    {
        $teacher = $this->teacherService
            ->getTeacherById($id);

        return view(
            'teachers.show',
            compact('teacher')
        );
    }

    public function edit(Teacher $teacher)
    {
        return view(
            'teachers.edit',
            compact('teacher')
        );
    }

    public function update(UpdateTeacherRequest $request, Teacher $teacher)
    {
        $this->teacherService->updateTeacher(
            $teacher,
            $request->validated()
        );

        return redirect()
            ->route('teachers.index')
            ->with(
                'success',
                'Teacher updated successfully.'
            );
    }

    public function destroy(Teacher $teacher)
    {
        $this->teacherService->deleteTeacher(
            $teacher
        );

        return redirect()
            ->route('teachers.index')
            ->with(
                'success',
                'Teacher deleted successfully.'
            );
    }

}