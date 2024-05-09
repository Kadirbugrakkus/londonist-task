<?php

namespace App\Services;

use App\Interfaces\IContact;
use App\Objects\ContactData;

class ContactService
{
    protected IContact $contactRepo;

    public function __construct(IContact $IContact)
    {
        $this->contactRepo = $IContact;
    }

    public function createContact(ContactData $data)
    {
        return $this->contactRepo->save($data);
    }
}
