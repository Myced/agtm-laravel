<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories', compact('categories'));
    }

    public function create()
    {
        return view('admin.category_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);


        $category = new Category;

        $category->name = $request->name;
        $category->status = $request->status;
        $category->slug = str_slug($request->name);

        $category->save();

        session()->flash('success', 'Category Saved');

        return back();
    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.category_edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $category = Category::find($id);

        $category->name = $request->name;
        $category->status = $request->status;
        $category->slug = str_slug($request->name);

        $category->save();

        session()->flash("success", 'Category Upated');

        return back();
    }

    public function destroy($id)
    {
        Category::destroy($id);

        session()->flash('success', 'Category Deleted');

        return back();
    }
}
