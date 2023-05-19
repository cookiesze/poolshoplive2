<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\Paginator;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $category =Category::where('name','like','%'.$request->search_name.'%')
                    ->OrderBy('id','desc')
                    ->paginate(10);
        return view('admin.category.index', compact('category'));
    }

    public function create()
    {
        $category = new Category();
        return view('admin.category.create', compact('category'));
    }

    public function store(Request $request)
    {
        $category = new Category();
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $text = $file->getClientOriginalExtension();
            $filename = time().'.'.$text;
            $file->move('assets/uploads/category',$filename);
            $category->image = $filename;
        }
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->status = $request->status;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->save();

        return redirect('/admin/categories')->with('status', "Category Added Complete");
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $request->validate([
        ]);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $text = $file->getClientOriginalExtension();
            $filename = time().'.'.$text;
            $file->move('assets/uploads/category',$filename);
            $category->image = $filename;
        }

            $category->name = $request->name;
            $category->slug = $request->slug;
            $category->description = $request->description;
            $category->status = $request->status;
            $category->meta_title = $request->meta_title;
            $category->meta_description = $request->meta_description;
            $category->save();


        //dd($category);
        return redirect('/admin/categories')->with('slug', "Update Complete");
        //ลอง

    }
    public function destroy($id)
    {
        $category = Category::find($id);
        if($category->image)
        {
            $path = 'assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }

        $category->delete();
        return back()->with('success','category deleted successfully');
    }


    public function boot()
    {
        Paginator::useBootstrap();
    }

}
