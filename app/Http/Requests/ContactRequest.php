<?php

namespace App\Http\Requests;

use App\Objects\ContactData;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'budgets' => 'required',
            'numberOfBedrooms' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'country.required' => 'Country is required',
            'phone.required' => 'Phone is required',
            'date.required' => 'Date is required',
            'budgets.required' => 'Budget is required',
            'numberOfBedrooms.required' => 'Number of bedrooms is required',
        ];
    }


    public function validateContact(array $rules, ...$params): ContactData {
        parent::validate($rules, $params);

        $firstName = $this->request->get('first_name');
        $lastName = $this->request->get('last_name');
        $countryId = $this->request->get('country');
        $phone = $this->request->get('phone');
        $meetingDate = $this->request->get('date');
        $budget = $this->request->get('budgets');
        $bedroomsCount = $this->request->get('numberOfBedrooms');

        return new ContactData($firstName, $lastName, $countryId, $phone, $meetingDate, $budget, $bedroomsCount);
    }
}
