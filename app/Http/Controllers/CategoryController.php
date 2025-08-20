<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $categories = DB::table('categories')
            ->orderByDesc('created_at')
            ->get();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function show($id)
    {
        $category = DB::table('categories')->find($id);

        return view('categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = DB::table('categories')->find($id);

        return view('categories.edit', compact('category'));
    }
}
