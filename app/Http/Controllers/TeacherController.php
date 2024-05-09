<?php

namespace App\Http\Controllers;

use App\Models\CmsTeacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers = CmsTeacher::with('media')->get();
        return view('teachers',compact('teachers'));
    }
}