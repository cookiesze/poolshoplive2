<?php

namespace App\Http\Controllers\Guest;

use App\Models\Tag;
use App\Models\Logo;
use App\Models\Post;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Category;
use App\Models\Slideshow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $slideshows = Slideshow::Where('status','Enabled')
        ->OrderBy('id','desc')
        ->get();

        $category = Category::OrderBy('id','desc')->get();

        $brand = Brand::where('status', 'Enabled')
        ->OrderBY('id','desc')
        ->get();

        $post = Post::where('status','Enabled')
        ->OrderBy('id','desc')
        ->limit(3)
        ->get();

        $product = Product::orderByRaw('RAND()')->take(10)->get();

        $logo = Logo::where('id', 6)->first();

        $tags = Tag::OrderBy('id','desc')->limit(6)->get();

        return view('guest.home.index' , compact('logo','product','tags','slideshows', 'post', 'brand', 'category'));
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
