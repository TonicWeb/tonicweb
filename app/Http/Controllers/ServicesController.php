<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.index');       
    }

    public function creative()
    {
        return view('services.creative');       
    }

    public function technology()
    {
        return view('services.technology');       
    }

    public function strategy()
    {
        return view('services.strategy');       
    }

    public function show($slug)
    {
        //$project = Project::where('slug', $slug)->first();
        return view('new-developments.project-show', compact('project'));
    }
    
}
