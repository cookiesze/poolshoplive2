<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = User::find($id);
        return view('user.edit', compact('user'));
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
        $user=User::findOrFail($id);


        if($request->hasFile("avatar")){
            if (File::exists("assets/uploads/avatar/".$user->avatar)) {
                File::delete("assets/uploads/avatar/".$user->avatar);
            }
            $avatarName = time().'.'.request()->avatar->getClientOriginalExtension();
            request()->avatar->move(public_path('assets/uploads/avatar'), $avatarName);
            $user->avatar = $avatarName;
        }

        $user->update([
            "fname" => $request->fname,
            "sname" => $request->sname,
            "phome" => $request->phone,
            "member" => $request->slug,
            "line" => $request->line,
            "link" => $request->link,
            "email" => $request->email,
            
        ]);
        
        return redirect()->back()->with('success', 'ระบบลบ '.$user->fname.' เรียบร้อย');
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
