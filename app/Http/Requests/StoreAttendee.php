<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttendee extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'attendeeId' => 'required|email',
            'tshirt' => 'required',
            'dietaryRequirements' => 'required',
            'firstName'=>'required',
            'lastName'=>'required'
        ];
    }
}
