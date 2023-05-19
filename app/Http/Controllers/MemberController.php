<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Support\facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::all();
        $member = Member::where('slug','like','%'.$request->search_name.'%')
                    ->OrderBy('id','ASC')
                    ->where('user_id', Auth::user()->id)
                    ->paginate(10);
        return view('member.index',compact('member','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = new Member();
        return view('member.create', compact('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new Member();
        $request->validate([
            'fname' => 'required',
            'sname' => 'required',
            'slug' => 'required',
            'line' => 'required',
            'phone_number' => 'required',
            'link_register' => 'required',
            'email' => 'required',
            'cover' => 'required',
            'status' => 'required',
        ]);
        if($request->hasFile('cover'))
        {
            $file = $request->file('cover');
            $text = $file->getClientOriginalExtension();
            $filename = time().'.'.$text;
            $file->move('assets/uploads/members/cover/',$filename);
            $member->cover = $filename;
        }
        $member->fname = $request->fname;
        $member->sname = $request->sname;
        $member->slug = $request->slug;
        $member->line = $request->line;
        $member->phone_number = $request->phone_number;
        $member->link_register = $request->link_register;
        $member->email = $request->email;
        $member->status = $request->status;
        $member->user_id = Auth::user()->id;
        $member->save();

        //dd($post);

        return redirect('/member')->with('slug', "Update Complete");
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
        $member = Member::find($id);
        return view('member.edit', compact('member'));
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
        $member=Member::findOrFail($id);
        if($request->hasFile("cover")){
            if (File::exists("assets/uploads/members/cover/".$member->cover)) {
                File::delete("assets/uploads/members/cover/".$member->cover);
            }
            $file=$request->file("cover");
            $member->cover=time()."_".$file->getClientOriginalName();
            $file->move(\public_path("assets/uploads/members/cover/"),$member->cover);
            $request['cover']=$member->cover;
        }

        $member->update([
            "fname" =>$request->fname,
            "sname" =>$request->sname,
            "slug" =>$request->slug,
            "line" =>$request->line,
            "phone_number" =>$request->phone_number,
            "link_register" =>$request->link_register,
            "email" =>$request->email,
            'cover' =>$member->cover,
            "status" =>$request->status,
        ]);
        return redirect()->back()->with('success', 'ระบบลบ '.$member->fname.' เรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        $member = Member::where('id', $id)->first();

        if (!$member) {
            return view('admin.errors.404');
        }


        if (File::exists('assets/uploads/members/cover/'.$member->cover)) {
            File::delete('assets/uploads/members/cover/'.$member->cover);
        }

        $member->delete();

        return redirect()->back()->with('success', 'ระบบลบ '.$member->name.' เรียบร้อย');
    }

}
