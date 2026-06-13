<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Services\StudentService;


class StudentController extends Controller
{
    protected $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index()
    {
        $students = $this->studentService->getAllStudents();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(StoreStudentRequest $request)
    {
        $this->studentService->createStudent(
            $request->validated()
        );

        return redirect()
            ->route('students.index')
            ->with(
                'success',
                'Students created successfully.'
            );
    }

    public function show($id)
    {
        $student = $this->studentService
            ->getStudentById($id);

        return view(
            'studetns.show',
            compact('student')
        );
    }

    public function edit(Student $student)
    {
        return view(
            'students.edit',
            compact('student')
        );
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $this->studentService->updateStudent(
            $student,
            $request->validated()
        );

        return redirect()
            ->route('students.index')
            ->with(
                'success',
                'Student updated successfully.'
            );
    }

    public function destroy(Student $student)
    {
        $this->studentService->deleteStudent(
            $student
        );

        return redirect()
            ->route('students.index')
            ->with(
                'success',
                'Student deleted successfully.'
            );
    }

}