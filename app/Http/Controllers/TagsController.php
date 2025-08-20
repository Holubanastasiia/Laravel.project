<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $tags = DB::table('tags')
            ->orderByDesc('created_at')
            ->get();

        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function show($id)
    {
        $tag = DB::table('tags')->find($id);

        return view('tags.show', compact('tag'));
    }

    public function edit($id)
    {
        $tag = DB::table('tags')->find($id);

        return view('tags.edit', compact('tag'));
    }
}
