<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(Request $request)
    {
        Contact::createContact($request);
        return back()->with('msg', 'Your Contact Information Send Successfully');
    }
    public function contactDetails()
    {
        return view('frontend.contact.details', ['contacts' => customers::all()]);
    }
    public function index()
    {
        return view('backend.customer.index', ['customers' =>Contact::all()]);
    }
    public function delete($id)
    {
        Contact::deleteContact($id);
        return back()->with('msg', 'Customer Message Deleted.');
    }
}
