<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Guidance;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        // Check if user exists in any of the user tables
        $student = Student::where('email', $credentials['email'])->first();
        $teacher = Teacher::where('email', $credentials['email'])->first();
        $guidance = Guidance::where('email', $credentials['email'])->first();
        
        if ($student && Hash::check($credentials['password'], $student->password)) {
            Auth::guard('web')->login($student);
            return redirect()->route('student.dashboard');
        }
        
        if ($teacher && Hash::check($credentials['password'], $teacher->password)) {
            Auth::guard('web')->login($teacher);
            return redirect()->route('teacher.dashboard');
        }
        
        if ($guidance && Hash::check($credentials['password'], $guidance->password)) {
            Auth::guard('web')->login($guidance);
            return redirect()->route('guidance.dashboard');
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}