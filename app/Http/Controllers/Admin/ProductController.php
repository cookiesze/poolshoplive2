<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Image_product;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
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
                    ->paginate(8);

        $category = Category::where('name')->first();

        //  ขาด session flash
        return view('admin.product.index', compact('products', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();

        $products = new Product();

        return view('admin.product.create',  compact('category', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::all();
        $products = new Product();
        $request->validate([

        ]);
        if($request->hasFile("image")){
                $file=$request->file("image");
                $imageName=time().'_'.$file->getClientOriginalName();
                $file->move(\public_path("assets/uploads/products/images/"),$imageName);
        }

        if($request->hasFile('image_dimension'))
        {
            $file = $request->file('image_dimension');
            $text = $file->getClientOriginalExtension();
            $filename = time().'.'.$text;
            $file->move('assets/uploads/products/dimension/',$filename);
            $products->image_dimension = $filename;
        }
        $products = Product::create([
            "name" =>$request->name,
            "slug" =>$request->slug,
            "product_code" =>$request->product_code,
            "barcode" =>$request->barcode,
            "use" =>$request->use,
            "dimension" =>$request->dimension,
            "made" =>$request->made,
            "small_description" =>$request->small_description,
            "description" =>$request->description,
            "small_description" =>$request->small_description,
            "status" =>$request->status,
            "image" => $imageName,
            "image_dimension" => $filename,
            "meta_title" =>$request->meta_title,
            "meta_description" =>$request->meta_description,
            "category_id" =>$request->category_id,

        ]);


        if($request->hasFile("etc")){
            $files=$request->file("etc");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['product_id']=$products->id;
                $request['image_etc']=$imageName;
                $file->move(\public_path("assets/uploads/products/etc/"),$imageName);
                Image_product::create($request->all());

            }
        }



        //dd($products);

        return redirect()->back()->with('success', 'ระบบบันทึก '.$products->name.' เรียบร้อย');
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

        $category = Category::get();

        $products = Product::find($id);

        return view('admin.product.edit',  compact('category', 'products'));
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

        $products =Product::findOrFail($id);
        if($request->hasFile("image")){
            if (File::exists("assets/uploads/products/images/".$products->image)) {
                File::delete("assets/uploads/products/images/".$products->image);
            }
            $file=$request->file("image");
            $products->image=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("assets/uploads/products/images/"),$products->image);
            $request['image']=$products->image;
        }

        if($request->hasFile('image_dimension')){
            if (File::exists('assets/uploads/products/dimension/'.$products->image_dimension)) {
                File::delete('assets/uploads/products/dimension/'.$products->image_dimension);
            }
            $file=$request->file('image_dimension');
            $products->image_dimension=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('assets/uploads/products/dimension/'),$products->image_dimension);
            $request['image_dimension']=$products->image_dimension;
        }

        $products->update([
            "name" =>$request->name,
            "slug" =>$request->slug,
            "product_code" =>$request->product_code,
            "barcode" =>$request->barcode,
            "use" =>$request->use,
            "dimension" =>$request->dimension,
            "made" =>$request->made,
            "small_description" =>$request->small_description,
            "description" =>$request->description,
            "small_description" =>$request->small_description,
            "status" =>$request->status,
            "image" => $products->image,
            "image_dimension" => $products->image_dimension,
            "meta_title" =>$request->meta_title,
            "meta_description" =>$request->meta_description,
            "category_id" =>$request->category_id,
        ]);



        if($request->hasFile("etc")){
            $files=$request->file("etc");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request['product_id']=$products->id;
                $request['image_etc']=$imageName;
                $file->move(\public_path("assets/uploads/products/etc/"),$imageName);
                Image_product::create($request->all());

            }
        }




        //dd($products);

        return redirect('/admin/products')->with('slug', "Update Complete");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::where('id', $id)->first();

        if (!$products) {
            return view('admin.errors.404');
        }

        if (File::exists('assets/uploads/products/images/'.$products->image)) {
            File::delete('assets/uploads/products/images/'.$products->image);
        }

        if (File::exists('assets/uploads/products/dimension/'.$products->image_dimension)) {
            File::delete('assets/uploads/products/dimension/'.$products->image_dimension);
        }

        $images=Image_product::where('product_id',$products->id)->get();
        foreach($images as $image){
            if (File::exists('assets/uploads/products/etc/'.$image->image_etc)) {
            File::delete('assets/uploads/products/etc/'.$image->image_etc);
                }
        }
        $products->delete();

        return redirect('/admin/products')->with('success', 'Product deleted successfully');
    }

    public function delete_image_product($id){
        $images=Image_product::findOrFail($id);
        if (File::exists("assets/uploads/products/etc/".$images->image_etc)) {
           File::delete("assets/uploads/products/etc/".$images->image_etc);
       }

       Image_product::find($id)->delete();
       return back();
   }
}
