<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Facades\Log;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        Log::info($tag);

        return view('jobs.results', ['jobs' => $tag->jobs]);
    }
}
