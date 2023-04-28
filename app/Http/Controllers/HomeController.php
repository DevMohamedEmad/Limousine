<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('contact','contact_store','delete_contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function contact(){
        return view('front.contact');
    }
    public function show_contact(){
        return view('contact.index' , ['contacts' => Contact::all()]);
    }
    public function contact_store(Request $request){
      $contact = new Contact();
      $contact->name = $request->name;
      $contact->subject= $request->subject;
      $contact->message= $request->message;
      $contact->email= $request->email;
      if($contact->save()){
        return redirect()->back();
      }
    }
    public function delete_contact(Contact $id){
        $id->delete();
        return redirect()->back();
    }
}
