<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(){

        $announcements = Announcement::whereDate('created_at', '>=', Carbon::now())
        ->latest()
        ->get();

        return view('announcements.announcements',compact('announcements'));
        
    }
}