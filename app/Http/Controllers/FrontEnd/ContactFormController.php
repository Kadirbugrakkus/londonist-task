<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Country;
use App\Services\ContactService;

class ContactFormController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

    public function index()
    {
        $countries = Country::all();

        return view('front.contact_page', [
            'countries' => $countries,
        ]);
    }

    public function store(ContactRequest $request)
    {
        $contactObject = $request->validateContact($request->rules(), $request->messages());
        $this->contactService->createContact($contactObject);

        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }
}
