<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;

class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::where('title', 'like', '%'.$request->search_name.'%')
                ->orderBy('id', 'desc')
                ->paginate(15);


        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::all();
        $post = new Post();
        return view('admin.posts.create', compact('tags', 'post'));
    }

    public function store(Request $request)
    {
        $tags = Tag::all();
        $post = new Post();
        $request->validate([

        ]);
        if($request->hasFile("cover")){
            $file=$request->file("cover");
            $imageName=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("assets/uploads/news/cover/"),$imageName);

            $post = Post::create([
                "title" =>$request->title,
                "slug" =>$request->slug,
                "small_description" =>$request->small_description,
                "description" =>$request->description,
                "cover" => $imageName,
                "status" =>$request->status,
                "meta_title" =>$request->meta_title,
                "meta_description" =>$request->meta_description,
            ]);
        }
        if ($request->has('tags')) {
            $post->tags()->attach($request->tags);
        }

            if($request->hasFile("images")){
                $files=$request->file("images");
                foreach($files as $file){
                    $imageName=time().'_'.$file->getClientOriginalName();
                    $request['post_id']=$post->id;
                    $request['image']=$imageName;
                    $file->move(\public_path("assets/uploads/news/images/"),$imageName);
                    Image::create($request->all());

                }
            }

            //dd($post);

       return redirect('/admin/posts')->with('slug', "Update Complete");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


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

        $tags = Tag::get();
        $post = Post::find($id);
        return view('admin.posts.edit', compact('post', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
     $post=Post::findOrFail($id);
        if($request->hasFile("cover")){
            if (File::exists("assets/uploads/news/cover/".$post->cover)) {
                File::delete("assets/uploads/news/cover/".$post->cover);
            }
            $file=$request->file("cover");
            $post->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("assets/uploads/news/cover/"),$post->cover);
            $request['cover']=$post->cover;
        }

        $post->update([
        'title' =>$request->title,
            'slug' =>$request->slug,
            'small_description' =>$request->small_description,
            'description' =>$request->description,
            'small_description' =>$request->small_description,
            'cover' =>$post->cover,
            'status' =>$request->status,
            'meta_title' =>$request->meta_title,
            'meta_description' =>$request->meta_description,
        ]);


        $post->tags()->sync($request->tags);

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request["post_id"]=$id;
                $request["image"]=$imageName;
                $file->move(\public_path("assets/uploads/news/images/"),$imageName);
                Image::create($request->all());

            }
        }
        //dd($post);

        return redirect('/admin/posts')->with('slug', "Update Complete");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id', $id)->first();

        if (!$post) {
            return view('admin.errors.404');
        }

        $post->tags()->detach();

        if (File::exists('assets/uploads/news/cover/'.$post->cover)) {
            File::delete('assets/uploads/news/cover/'.$post->cover);
        }
        $images=Image::where('post_id',$post->id)->get();
        foreach($images as $image){
            if (File::exists('assets/uploads/news/images/'.$image->image)) {
            File::delete('assets/uploads/news/images/'.$image->image);
                }
        }
        $post->delete();


        return redirect()->back()->with('success', 'ระบบลบ '.$post->name.' เรียบร้อย');
    }

    public function delete_image($id){
        $images=Image::findOrFail($id);
        if (File::exists('assets/uploads/news/images/'.$images->image)) {
           File::delete('assets/uploads/news/images/'.$images->image);
       }

       Image::find($id)->delete();
       return back();
   }
}
