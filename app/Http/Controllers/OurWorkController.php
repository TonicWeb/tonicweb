<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class OurWorkController extends Controller
{
    public function index()
    {
        return view('our-work.index');       
    }

    public function show($slug)
    {
        //$project = Project::where('slug', $slug)->first();
        return view('our-work.project-show', compact('project'));
    }
    
}
