<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contactos = Contact::all();
        return view('contactos.index') 
        ->with('contactos', $contactos);
    }

    public function create()
    {
        return view('contactos.create');
    }


    public function store(Request $request)
    {
        $contacto = Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'state' => 'Registro Nuevo',
        ]);

        return redirect()->back();
    }


    public function show( $id)
    {
        $contacto = Contact::all('id', $id);

        if (empty($contacto)) {
            return redirect()->back();
        }else{
            return view('contactos.show')->with('contacto', $contacto);
        }
    }

    public function edit(Contact $contact)
    {
        return view('contactos.edit');
    }

    public function update(Request $request, $id)
    {
        $contacto = Contact::find($id);

        $contacto->update([
           'name' => $request->name,
           'email' => $request->email,
           'number' => $request->number,
            'state' => $request->state,
        ]);

        if ($request->origen == 'contact.edit') {
            redirect()->route('contactos.show', $contacto->id);
        }else{
           return redirect()->back();
        }

    }


    public function destroy($id)
    { 
        $contacto = Contact::find($id);

        $contacto->delete();

        return redirect()->route('contactos.index');
    }
}
