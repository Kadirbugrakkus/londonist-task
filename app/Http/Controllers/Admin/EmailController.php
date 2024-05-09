<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Reminding;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Send an email.
     */
    public function sendEmail(Request $request)
    {
        try {
            $contact = Contact::find($request->id);

            if ($contact) {
                $data = [
                    'first_name' => $contact->first_name,
                    'last_name' => $contact->last_name,
                    'email' => $contact->email,
                    'meeting_date' => $contact->meeting_date,
                ];

                Mail::mailer('smtp')->to($data['email'])
                    ->send(new Reminding($data));
            }

            return response()->json(['success' => 'Email sent successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
