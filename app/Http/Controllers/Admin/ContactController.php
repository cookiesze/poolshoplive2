<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contact =Contact::where('name','like','%'.$request->search_name.'%')
                    ->OrderBy('id','desc')
                    ->paginate(20);


        return view('admin.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = new Contact();
        return view('admin.contact.create', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact();

        $contact->name = $request->name;
        $contact->slug = $request->slug;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->map = $request->map;
        $contact->description = $request->description;
        $contact->facebook = $request->facebook;
        $contact->shopee = $request->shopee;
        $contact->lazada = $request->lazada;
        $contact->status = $request->status;
        $contact->save();
        //dd($tags);
        return redirect('/admin/contact_us')->with('slug', "Update Complete");
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
        $contact = Contact::find($id);

        return view('admin.contact.edit', compact('contact'));
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

        $contact=Contact::findOrFail($id);

        $contact->name = $request->name;
        $contact->slug = $request->slug;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->map = $request->map;
        $contact->description = $request->description;
        $contact->facebook = $request->facebook;
        $contact->shopee = $request->shopee;
        $contact->lazada = $request->lazada;
        $contact->status = $request->status;
        $contact->save();
        //dd($tags);
        return redirect('/admin/contact_us')->with('slug', "Update Complete");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::where('id', $id)->first();


        $contact->delete();
        return back();
    }
}
