<?php

namespace App\Repositories;

use App\Interfaces\IContact;
use App\Models\Contact;
use App\Objects\ContactData;

class ContactRepository implements IContact
{
    public function save(ContactData $data)
    {
        return Contact::create([
            'first_name' => $data->firstName,
            'last_name' => $data->lastName,
            'country_id' => $data->countryId,
            'phone' => $data->phone,
            'meeting_date' => $data->meetingDate,
            'budget' => $data->budget,
            'bedrooms_count' => $data->bedroomsCount,
        ]);
    }
}
