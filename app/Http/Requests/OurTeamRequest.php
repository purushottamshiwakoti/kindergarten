<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OurTeamRequest extends FormRequest
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
            'title' => 'required',
            // 'slug' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,webp',
            'description' => 'required',
            'position' => 'required'
        ];
    }
}
