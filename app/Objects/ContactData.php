<?php


namespace App\Objects;

class ContactData
{
    public string $firstName;
    public string $lastName;
    public int $countryId;
    public string $phone;
    public string $meetingDate;
    public string $budget;
    public string $bedroomsCount;

    public function __construct($firstName, $lastName, $countryId, $phone, $meetingDate, $budget, $bedroomsCount)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->countryId = $countryId;
        $this->phone = $phone;
        $this->meetingDate = $meetingDate;
        $this->budget = $budget;
        $this->bedroomsCount = $bedroomsCount;
    }
}

