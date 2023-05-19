<?php

namespace App\Http\Controllers\Guest;

use App\Models\Tag;
use App\Models\Logo;
use App\Models\Post;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use GuzzleHttp\Handler\Proxy;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products =Product::where('name','like','%'.$request->search_name.'%')
                    ->OrderBy('id','desc')
                    ->get();

        $category = Category::all();

        $logo = Logo::where('id', 6)->first();

        $tags = Tag::OrderBy('id','desc')->limit(6)->get();



        return view('guest.product.index', compact('logo','products','category', 'tags'));
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
        $product = Product::where('slug', $slug)
        ->where('status','Enabled')
        ->first();

        $category = Category::OrderBy('id','desc')->get();


        $lasted_product = Product::where('status','Enabled')
        ->OrderBy('id','desc')
        ->limit(4)
        ->get();

        $tag = Tag::OrderBy('id','desc')->get();

        $tags = Tag::OrderBy('id','desc')->limit(6)->get();
        $logo = Logo::where('id', 6)->first();

        return view('guest.product.show',compact('logo','tag','category','product', 'lasted_product', 'tags'));
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
