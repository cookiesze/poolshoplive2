<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LogosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $logos = Logo::where('name','like','%'.$request->search_name.'%')
        ->OrderBy('id','desc')
        ->paginate(8);

        return view('admin.logo.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $logo = new Logo();

        return view('admin.logo.create',  compact('logo' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $logo = new Logo();

        if($request->hasFile('logo_top')){
            $file=$request->file('logo_top');
            $image_logo_top=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("/assets/uploads/logo/"),$image_logo_top);
        }

        if($request->hasFile('logo_footer')){
            $file=$request->file('logo_footer');
            $image_logo_footer=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path("/assets/uploads/logo/"),$image_logo_footer);
        }

    $logo = Logo::create([
        "name" =>$request->name,
        "logo_top" => $image_logo_top,
        "logo_footer" => $image_logo_footer,

    ]);
        return redirect()->back()->with('success', 'ระบบบันทึก '.$logo->name.' เรียบร้อย');

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
        $logo = Logo::find($id);

        return view('admin.logo.edit',  compact('logo'));
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
        $logo =Logo::findOrFail($id);
        if($request->hasFile("logo_top")){
            if (File::exists("/assets/uploads/logo/".$logo->logo_top)) {
                File::delete("/assets/uploads/logo/".$logo->logo_top);
            }
            $file=$request->file("logo_top");
            $logo->image=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("/assets/uploads/logo/"),$logo->logo_top);
            $request['logo_top']=$logo->logo_top;
        }

        if($request->hasFile('logo_footer')){
            if (File::exists('/assets/uploads/logo/'.$logo->logo_footer)) {
                File::delete('/assets/uploads/logo/'.$logo->logo_footer);
            }
            $file=$request->file('logo_footer');
            $logo->logo_footer=time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('/assets/uploads/logo/'),$logo->logo_footer);
            $request['logo_footer']=$logo->logo_footer;
        }

        $logo = Logo::create([
            "name" =>$request->name,
            "logo_top" =>$request->name,
            "logo_footer" =>$request->name,

        ]);

        return redirect()->back()->with('success', 'ระบบบันทึก '.$logo->name.' เรียบร้อย');
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
