<?php

namespace App\Http\Controllers;

use App\Repositories\ContactRepository;
use http\Client\Curl\User;
use Illuminate\Support\Facades\DB;
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
    public function search(request $request)
    {
        $search = $request ->get('search');
//        $data = Contact::where('name', '=', 'ralph gantman');
//        $data = DB::select('SELECT * FROM contacts WHERE name LIKE ralph');
        $data = DB::table('contacts')
            ->select('*')
            ->where('name', 'LIKE', '%'.$search.'%')
            ->get();
//        dd($data);
//        dd($search);
        return view('contacts', ['data' => $data, 'search'=>$search]);
    }

    public function create(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->save();
        return view('contactAdded');

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

    public function viewContactForm()
    {
        return view('add');
    }

    public function require()
    {
        return view('require');
    }

    public function index()
    {
        $data = Contact::all();
        return view('contacts', ['data' => $data]);

    }

    public function deleted($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return view('deletedContact', ['contact' => $contact]);

    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('edit', ['contact' => $contact]);


    }

}
