<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $tags = DB::table('tags')
            ->orderByDesc('created_at')
            ->get();

        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Tag::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.tags.index')
            ->with('success', 'Тег додано успішно!');
    }

    public function show(Tag $tag)
    {
//        $tag = DB::table('tags')->find($id);

        return view('admin.tags.show', compact('tag'));
    }

    public function edit(Tag $tag)
    {
//        $tag = DB::table('tags')->find($id);

        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $tag->update([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.tags.index')
            ->with('success', 'Тег оновлено успішно!');
    }
}
