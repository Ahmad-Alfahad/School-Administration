<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Services\ClassroomService;
use App\Services\StudentService;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected StudentService $studentService;
    protected ClassroomService $classroomService;

    public function __construct(StudentService $studentService , ClassroomService $classroomService)
    {
        $this->studentService = $studentService;
        $this->classroomService = $classroomService;
    }

    public function index(Request $request)
    {
        $students = $this->studentService
            ->getPaginatedStudents(
                $request->search
            );

        return view('students.index', compact('students'));
    }

    public function create()
    {
       $classrooms = $this->classroomService->getAllClassrooms();
        return view('students.create', compact('classrooms'));
    }

    public function store(StoreStudentRequest $request)
    {
        try {

            $this->studentService->createStudent(
                $request->validated()
            );

            return redirect()
                ->route('students.index')
                ->with(
                    'success',
                    'Student created successfully.'
                );

        } catch (\DomainException $e) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    $e->getMessage()
                );
        }
    }

    public function show(int $id)
    {
        $student = $this->studentService
            ->getStudentById($id);

        return view(
            'students.show',
            compact('student')
        );
    }

    public function edit(Student $student)
    {
       $classrooms = $this->classroomService->getAllClassrooms();
        return view(
            'students.edit',
            compact('student', 'classrooms')
        );
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        try {

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

        } catch (\DomainException $e) {

            return back()
                ->withInput()
                ->with(
                    'error',
                    $e->getMessage()
                );
        }
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