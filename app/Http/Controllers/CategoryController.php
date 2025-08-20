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
    public function __invoke(Request $request)
    {
        $categories = DB::table('categories')->orderByDesc('created_at')->get();
        return view('categories.index', ['categories' => $categories]);

    }
}
