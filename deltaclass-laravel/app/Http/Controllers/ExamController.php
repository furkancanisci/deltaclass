<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Exam;

class ExamController extends Controller
{
    public function index()
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $student = Auth::user();
        $exams = Exam::where('student_id', $student->id)->get();
        
        return view('student.exams', compact('exams'));
    }
    
    public function show($id)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $student = Auth::user();
        $exam = Exam::where('id', $id)->where('student_id', $student->id)->firstOrFail();
        
        return view('student.exam-detail', compact('exam'));
    }
    
    public function teacherIndex()
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        // For now, we'll return a simple view
        // In a real application, this would show exams for all students of the teacher
        return view('teacher.exams');
    }
    
    public function teacherShow($id)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        // For now, we'll return a simple view
        // In a real application, this would show a specific exam
        return view('teacher.exam-detail');
    }
}