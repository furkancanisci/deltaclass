<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        // Check if user is authenticated
        if (!auth()->check()) {
            return redirect()->route('login');
        }
        
        // Get the authenticated user
        $user = auth()->user();
        
        // Debug: Log user type
        \Log::info('User type: ' . get_class($user));
        
        // Check user type and return appropriate view
        if ($user instanceof \App\Models\Student) {
            return view('student.messages');
        } elseif ($user instanceof \App\Models\Teacher) {
            return view('teacher.messages');
        } elseif ($user instanceof \App\Models\Guidance) {
            return view('guidance.messages');
        }
        
        // Fallback to login
        return redirect()->route('login');
    }
}