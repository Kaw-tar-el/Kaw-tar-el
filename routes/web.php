<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Skill;
use App\Models\Education;

Route::get('/portfolio', function() {
    $projects = Project::all();
    $certificates = Certificate::all();
    $skills = Skill::all()->groupBy('category');
    $educations = Education::all();
    $cv = [
        'title' => 'My CV',
        'url' => asset('files/my_cv.pdf')
    ];
    return view('portfolio', compact('projects', 'certificates', 'cv', 'skills', 'educations'));
})->name('portfolio');
