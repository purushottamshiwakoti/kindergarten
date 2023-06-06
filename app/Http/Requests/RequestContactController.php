<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestContactController extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'contact_title'=>'required',
            'contact_description'=>'required',
            'contact_phone_number'=>'required',
            'contact_email1'=>'required',
            'contact_email2'=>'required',
            'contact_mapstreet'=>'required',
        ];
    }
}
