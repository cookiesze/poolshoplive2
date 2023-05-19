<?php

namespace App\Http\Controllers\Admin;

use App\Models\Slideshow;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $slideshow =Slideshow::where('name','like','%'.$request->search_name.'%')
                    ->OrderBy('id','desc')
                    ->paginate(10);
        return view('admin.slideshow.index', compact('slideshow'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slideshow = new Slideshow();
        return view('admin.slideshow.create', compact('slideshow'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slideshow = new Slideshow();

        $request->validate([

        ]);
        if($request->hasFile('cover'))
        {
            $file = $request->file('cover');
            $text = $file->getClientOriginalExtension();
            $filename = time().'.'.$text;
            $file->move('assets/uploads/slideshow/',$filename);
            $slideshow->cover = $filename;
        }

        $slideshow->name = $request->name;
        $slideshow->slug = $request->slug;
        $slideshow->small_description = $request->small_description;
        $slideshow->status = $request->status;
        $slideshow->link = $request->link;
        $slideshow->save();





        return redirect('/admin/slideshow')->with('slug', "Update Complete");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slideshow = Slideshow::find($id);
        return view('admin.slideshow.edit', compact('slideshow'));
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
        $slideshow = Slideshow::find($id);

        $request->validate([

        ]);

        if($request->hasFile("cover")){
            if (File::exists("assets/uploads/slideshow/".$slideshow->cover)) {
                File::delete("assets/uploads/slideshow/".$slideshow->cover);
            }
            $file=$request->file("cover");
            $slideshow->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("assets/uploads/slideshow/"),$slideshow->cover);
            $request['cover']=$slideshow->cover;
        }

        $slideshow->update([
            "name" =>$request->name,
            "slug" =>$request->slug,
            "small_description" =>$request->small_description,
            "link" =>$request->link,
            "status" =>$request->status,
            "cover" =>$slideshow->cover,
        ]);

        return redirect('/admin/slideshow')->with('slug', "Update Complete");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slideshows = Slideshow::find($id);
        if($slideshows->cover)
        {
            $path = 'assets/uploads/slideshow/'.$slideshows->cover;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }

        $slideshows->delete();
        return back()->with('success','slideshow deleted successfully');
    }
}
