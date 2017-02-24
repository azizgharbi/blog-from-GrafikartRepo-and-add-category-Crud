<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;
use App\User;

class CategoryController extends Controller {

    public function index () {
        $categories = Category::paginate(10);
        return view('admin.categories.index', ['categories' => $categories]);
    }

    public function create () {
        $category = new Category();
        return view('admin.categories.new', compact('category'));
    }

    public function store (CategoryRequest $request) {
        Category::create($request->all());
        return redirect()->route('admin.categories.index')->with('success', 'Category created successfully');
    }

    public function edit($id) {
        $category = Category::find($id);
        return view('admin.categories.new', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category) {
        $category->update($request->all());
        return redirect()->route('admin.categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'categories destroyed successfully');
    }

}
