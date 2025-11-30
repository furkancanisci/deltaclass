<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;
use App\Models\Exam;
use App\Models\Schedule;

class StudentController extends Controller
{
    public function dashboard()
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $student = Auth::user();
        
        // Get student's exams
        $exams = Exam::where('student_id', $student->id)->get();
        
        // Get student's schedules
        $schedules = Schedule::where('student_id', $student->id)->get();
        
        return view('student.dashboard', compact('exams', 'schedules'));
    }
    
    public function exams()
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $student = Auth::user();
        $exams = Exam::where('student_id', $student->id)->get();
        
        return view('student.exams', compact('exams'));
    }
    
    public function showExam($id)
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $student = Auth::user();
        $exam = Exam::where('id', $id)->where('student_id', $student->id)->firstOrFail();
        
        return view('student.exam-detail', compact('exam'));
    }
    
    public function schedule()
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $student = Auth::user();
        $schedules = Schedule::where('student_id', $student->id)->get();
        
        return view('student.schedule', compact('schedules'));
    }
    
    public function messages()
    {
        // Check if user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        return view('student.messages');
    }
}