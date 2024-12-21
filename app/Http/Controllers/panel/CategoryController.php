<?php

namespace App\Http\Controllers\Panel;

use App\Models\Category;
use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Panel\Category\CategoryCreateRequest;
use App\Http\Requests\Panel\Category\CategoryUpdateRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('parent')->paginate(4);
        $category = Category::where('id', null)->get();


        return view('panel.categories.index', compact('categories'));
    }

    public function store(CategoryCreateRequest $request)
    {
        Category::create(
            $request->validated()
        );

        session()->flash('status', 'دسته بندی مد نظر به درستی ایجاد شد!');

        return back();
    }

    public function edit(Category $category)
    {

        return view('panel.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Find the category or fail if it doesn't exist

        
        $category = Category::findOrFail($id);
        $request->validate([
            'name' => ['required','string'],
            'slug' => ['required','string'],
        ]);
        $category->update([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
        ]);

        return redirect()->route('category.index');
    }


    public function destroy(Category $id)
    {

        $id->delete();

        return back();
    }
}
