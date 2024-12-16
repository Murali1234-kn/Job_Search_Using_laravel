<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{

    //     return view(
    //         'jobs.index',
    //         [
    //             'jobs' => $jobs[0],
    //             'featuredJobs' => $jobs[1],
    //             'tags' => Tag::all(),
    //         ]
    //     );
    // }

    public function index()
    {
        $jobs = Job::latest()->with(['employer', 'tags'])->get()->groupBy('featured');

        $jobsWithNoFeatured = $jobs->get(0, collect());
        $featuredJobs = $jobs->get(1, collect());

        return view(
            'jobs.index',
            [
                'jobs' => $jobsWithNoFeatured,
                'featuredJobs' => $featuredJobs,
                'tags' => Tag::all(),
            ]
        );
    }


    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $attributes =  $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Full Time', 'Part Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);

        $attributes['featured'] = $request->has('featured');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }
        return redirect('/');
    }




    public function show(Job $job)
    {
        //
    }

    public function edit(Job $job)
    {
        //
    }

    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }
    public function destroy(Job $job)
    {
        //
    }
}
