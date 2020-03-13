<?php

namespace App\Http\Controllers;

use App\Repositories\ContactRepository;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Validator;
use Session;

class ContactsController extends Controller
{
    /**
     * @var ContactRepository
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function create(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');


        $contact->save();
        return view('contactAdded');
    }

    public function viewContactForm()
    {
        return view('add');
    }

    public function index()
    {
        $data = Contact::all();
        return view('contacts', ['data'=>$data]);

    }

    public function delete($id)
    {

    }
    public function deleted($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return view('deletedContact', ['contact'=>$contact]);

    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('edit', ['contact'=>$contact]);
    }
    public function edited(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->save();
        return view('contactAdded');
        return view('editedContact');
    }
}
