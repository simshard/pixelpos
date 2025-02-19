<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return view('jobs.index', [
            'jobs' => Job::all(),//->groupBy('featured'),
            'featuredjobs' => Job::take(3)->get(),
            'tags' => Tag::all()
         ]);
    }
}
