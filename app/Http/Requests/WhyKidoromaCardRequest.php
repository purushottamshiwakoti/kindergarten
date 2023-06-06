<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WhyKidoromaCardRequest extends FormRequest
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
            'title1'=>'required',
            'title2'=>'required',
            'title3'=>'required',
            'title4'=>'required',
            'image1'=>'required|mimes:png,jpg,jpeg,webp',
            'image2'=>'required|mimes:png,jpg,jpeg,webp',
            'image3'=>'required|mimes:png,jpg,jpeg,webp',
            'image4'=>'required|mimes:png,jpg,jpeg,webp',
        ];
    }
}
