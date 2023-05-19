<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brand = Brand::where('name','like','%'.$request->search_name.'%')
        ->OrderBy('id','desc')
        ->paginate(10);

        return view('admin.brand.index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = new Brand();
        return view('admin.brand.create', compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand();

        $request->validate([

        ]);
        if($request->hasFile('cover'))
        {
            $file = $request->file('cover');
            $text = $file->getClientOriginalExtension();
            $filename = time().'.'.$text;
            $file->move('assets/uploads/brand/',$filename);
            $brand->cover = $filename;
        }

        $brand->name = $request->name;
        $brand->slug = $request->slug;
        $brand->small_description = $request->small_description;
        $brand->status = $request->status;
        $brand->link = $request->link;
        $brand->save();

        return redirect('/admin/brands')->with('slug', "Update Complete");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        $request->validate([

        ]);

        if($request->hasFile("cover")){
            if (File::exists("assets/uploads/brand/".$brand->cover)) {
                File::delete("assets/uploads/brand/".$brand->cover);
            }
            $file=$request->file("cover");
            $brand->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("assets/uploads/brand/"),$brand->cover);
            $request['cover']=$brand->cover;
        }

        $brand->update([
            "name" =>$request->name,
            "slug" =>$request->slug,
            "small_description" =>$request->small_description,
            "link" =>$request->link,
            "status" =>$request->status,
            "cover" =>$brand->cover,
        ]);

        return redirect('/admin/brands')->with('slug', "Update Complete");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        if($brand->cover)
        {
            $path = 'assets/uploads/brand/'.$brand->cover;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }

        $brand->delete();
        return back()->with('success','brand deleted successfully');
    }
}
