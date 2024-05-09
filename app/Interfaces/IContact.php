<?php

namespace App\Interfaces;

use App\Objects\ContactData;

interface IContact
{
    public function save(ContactData $data);
}
