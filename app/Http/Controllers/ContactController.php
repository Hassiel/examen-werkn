<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('contactos.index');
    }

    public function create()
    {
        return view('contactos.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {
        return view('contactos.edit');
    }

    public function update(Request $request, Contact $contact)
    {
        //
    }


    public function destroy($id)
    {
        return redirect()->route('contactos.index');
    }
}
