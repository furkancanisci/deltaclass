<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('student.schedule');
    }

    public function guidanceIndex()
    {
        return view('guidance.schedules');
    }

    public function show($id)
    {
        return view('guidance.schedule-detail');
    }
}