<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return view('pages.admin.contact.contact', [
       
        ]);   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         {
     return view('pages.admin.contact.contact', [

        ]);   
    }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           {
        $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'pesan' => 'required',
          
            
        ]);

        Contact::create([
          'email' =>  $request->email,
            'subject' => $request->subject,
            'pesan' => $request->pesan,
       
              ]);

        return Redirect::route('contact')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
