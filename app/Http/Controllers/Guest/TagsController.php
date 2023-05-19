<?php

namespace App\Http\Controllers\Guest;

use App\Models\Tag;
use App\Models\Logo;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($tag)
    {
        $tag = Tag::where('name',$tag)->first();

			if(!$tag)
			{
				return view('admin.errors.404');
			}

        $post = Post::where('status','Enabled')
            ->join('post_tag','post_tag.post_id','=','posts.id')
            ->where('post_tag.tag_id',$tag->id)
            ->select('posts.*')
            ->paginate(16);
        $lasted_news = Post::where('status','Enabled')
            ->OrderBy('id','desc')
            ->limit(4)
            ->get();

        $category = Category::OrderBy('id','desc')->get();

        $tags = Tag::OrderBy('id','desc')->get();

        $logo = Logo::where('id', 6)->first();



 			return view('guest.tags.index',compact('logo','post', 'tag', 'lasted_news', 'tags', 'category'));
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
