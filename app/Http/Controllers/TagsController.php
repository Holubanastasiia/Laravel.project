<?php

namespace App\Http\Controllers;

use App\Models\Tag;
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Tag::create([
            'name' => $request->name,
        ]);

        return redirect()->route('tags.index')
            ->with('success', 'Тег додано успішно!');
    }

    public function show($id)
    {
//        $tag = DB::table('tags')->find($id);

        $tag = Tag::findOrFail($id);
        return view('tags.show', compact('tag'));
    }

    public function edit($id)
    {
//        $tag = DB::table('tags')->find($id);

        $tag = Tag::findOrFail($id);
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $tag = Tag::findOrFail($id);
        $tag->update([
            'name' => $request->name,
        ]);

        return redirect()->route('tags.index')
            ->with('success', 'Тег оновлено успішно!');
    }
}
