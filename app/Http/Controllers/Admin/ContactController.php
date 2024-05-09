<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::with('country', 'designation')->get();
        return view('admin.pages.contact.contact-list', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::with('country', 'designation')->find($id);
        $designations = User::all();
        $countries = Country::all();
        return view('admin.pages.contact.contact-show', [
            'contact' => $contact,
            'designations' => $designations,
            'countries' => $countries,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = Contact::find($id);

        $contact->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'country_id' => (int)$request->country_id,
            'phone' => $request->phone,
            'meeting_date' => $request->meeting_date,
            'budget' => $request->budget,
            'bedrooms_count' => $request->bedrooms_count,
            'email' => $request->email,
            'designation_id' => (int)$request->designation_id,
        ]);

        return redirect()->route('admin.contact.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::find($id);

        if ($contact)
        {
            $contact->delete();
        }

        return redirect()->route('admin.contact.index');
    }
}
