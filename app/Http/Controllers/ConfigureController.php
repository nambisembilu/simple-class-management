<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classes;
use App\Teachers;
use App\Students;
use PDF;

class ConfigureController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::all();
        return view('configure.index', compact('classes'));
    }

    public function export_pdf()
    {
        $data =[
            'title'=>"All Class, Teacher and Student",
            'classes'=>Classes::all()
        ];
        $pdf = PDF::loadView('configure.export_pdf', $data)->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function teacher(Request $request, $class_id)
    {
        if ($request->isMethod('patch')) {
            $request->validate([
                'teacher' => 'required',
            ]);
            $class = Classes::find($class_id);
            $class->teacher_id = $request->get('teacher');
            $class->save();
            return redirect('/home')->with('success', 'Class Teacher has been updated');
        }
        $class = Classes::find($class_id);
        $teachers = Teachers::all();
        $teacher = $class->teacher;

        return view('configure.teacher', compact('class', 'teachers', 'teacher'));
    }

    public function student(Request $request, $class_id)
    {
        if ($request->isMethod('patch')) {
            try {
                $students_post = $request->get('students');
                foreach ($students_post as $post) {
                    $student = Students::find($post);
                    $student->class_id = $class_id;
                    $student->save();
                }
            } catch (\Exception $e) {
                return redirect('/home')->with('error', $e->getMessage());
            }
            return redirect('/home')->with('success', 'Class Students has been updated');
        }
        $class = Classes::find($class_id);
        $students = Students::all();
        return view('configure.student', compact('class', 'students'));
    }

    public function students_reset(Request $request, $class_id)
    {
        try {
            $students_classes = Students::where('class_id',$class_id)->get();
            foreach ($students_classes as $student_class) {
                $student = Students::find($student_class->id);
                $student->class_id = NULL;
                $student->save();
            }
        } catch (\Exception $e) {
            return redirect('/home')->with('error', $e->getMessage());
        }
        return redirect('/home')->with('success', 'Class Students has been updated');
    }
}
