<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $categories = Category::orderByDesc('created_at')->paginate(7);

        return view('admin.categories.index', compact('categories'))->with(['categories' => $categories, "title" => "All Categories", "breadcrumb" => "Categories Management"]);
    }

    public function create()
    {
        return view('admin.categories.create', ["title" => "Create category", "breadcrumb" => "New Category"]);
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->status = $request->status;
        $category->save();
        return redirect()->route('admin.categories.index');
//        $request->validate([
//            'name' => 'required|string|max:255',
//        ]);
//
//        Category::create([
//            'name' => $request->name,
//        ]);
//
//        return redirect()->route('admin.categories.index')
//            ->with('success', 'Категорію додано успішно!');
    }

    public function show(Category $category)
    {
        return view('admin.categories.show', compact('category'));
//        $category = DB::table('categories')->find($id);
//
//        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'))->with(["title" => "Edit Category", "breadcrumb" => "New Category"]);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update([
            'name' => $request->name,
            'status' => (bool)$request->status
        ]);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Category updated!');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.categories.index');
    }

    public function trashed()
    {
        $categories = Category::onlyTrashed()->paginate();
        return view('admin.categories.trashed', compact('categories'))->with(['breadcrumb' => 'Trashed Categories', 'title' => 'Trashed Categories']);
    }

    public function restore($id)
    {
        Category::withTrashed()
            ->where('id', $id)
            ->restore();
        return redirect(route('admin.categories.trashed'))->with("success", "Category restored successfully!");
    }

    public function force($id)
    {
        $category = Category::withTrashed()->where('id', $id)->first();
        $category->forceDelete();
        return redirect()->route('admin.categories.index')->with("success", "Category deleted successfully!");
    }
}
