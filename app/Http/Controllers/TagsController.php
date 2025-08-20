<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $tags = DB::table('tags')->orderByDesc('created_at')->get();
        return view('tags.index', ['tags' => $tags]);

    }
}
