<?php

namespace App\Http\Controllers\Admin;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $video =Video::where('name','like','%'.$request->search_name.'%')
                    ->OrderBy('id','desc')
                    ->paginate(20);


        return view('admin.video.index', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $video = new Video();
        return view('admin.video.create', compact('video'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new Video();

        $video->name = $request->name;
        $video->slug = $request->slug;
        $video->link = $request->link;
        $video->small_description = $request->small_description;
        $video->description = $request->description;
        $video->status = $request->status;
        $video->save();
        //dd($tags);
        return redirect('/admin/videos')->with('slug', "Update Complete");
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
        $video = Video::find($id);

        return view('admin.video.edit', compact('video'));
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
        $video = Video::find($id);

        $video->name = $request->name;
        $video->slug = $request->slug;
        $video->link = $request->link;
        $video->small_description = $request->small_description;
        $video->description = $request->description;
        $video->status = $request->status;
        $video->save();
        //dd($tags);
        return redirect('/admin/videos')->with('slug', "Update Complete");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::where('id', $id)->first();


        $video->delete();
        return back();
    }
}
