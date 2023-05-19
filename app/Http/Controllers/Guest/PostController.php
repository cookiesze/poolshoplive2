<?php

namespace App\Http\Controllers\Guest;

use App\Models\Tag;
use App\Models\Logo;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
			$post = Post::where('title','like','%'.$request->search_name.'%')
				->where('status','Enabled')
                ->OrderBy('id','desc')
				->paginate(5);

			$request->flash();

            $category = Category::OrderBy('id','desc')->get();

			$lasted_news = Post::where('status','Enabled')
						->OrderBy('id','desc')
						->limit(4)
						->get();
			$tag = Tag::OrderBy('id','desc')->get();

            $tags = Tag::OrderBy('id','desc')->limit(6)->get();

            $logo = Logo::where('id', 6)->first();

			return view('guest.post.index',compact('logo','category', 'post', 'lasted_news', 'tags','tag'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)
        ->where('status','Enabled')
        ->first();

        $category = Category::OrderBy('id','desc')->get();


        $lasted_news = Post::where('status','Enabled')
        ->OrderBy('id','desc')
        ->limit(4)
        ->get();

        $tag = Tag::OrderBy('id','desc')->get();

        $tags = Tag::OrderBy('id','desc')->limit(6)->get();
        $logo = Logo::where('id', 6)->first();

        return view('guest.post.show',compact('logo','tag','category','post', 'lasted_news', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
