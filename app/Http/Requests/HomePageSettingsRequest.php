<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomePageRequest extends FormRequest
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
            'home_banner_title1'=>'required',
            'home_banner_title2'=>'required',
            'home_banner_title3'=>'required',
            'home_banner_button1'=>'required',
            'home_banner_button2'=>'required',
            'photo_text_banner_image'=>'required',
            'photo_text_banner_accordion'=>'required',
            'about_app_title1'=>'required',
            'about_app_title2'=>'required',
            'about_app_card'=>'required',
            'about_app_icon'=>'required',
            'about_app_counter1'=>'required',
            'about_app_counter2'=>'required',
            'about_app_counter3'=>'required',
            'about_app_counter4'=>'required',
            'why_kidoroma_title'=>'required',
            'why_kidoroma_image'=>'required',
            'why_kidoroma_icon'=>'required',
            'why_kidoroma_card'=>'required',
            'text_content_title1'=>'required',
            'text_content_title2'=>'required',
            'text_content_title3'=>'required',
            'text_content_button1'=>'required',
            'text_content_button2'=>'required',
            'about_the_inventor_description'=>'required',
            'about_the_inventor_image'=>'required',
            'about_the_inventor_name'=>'required',
            'about_the_inventor_position'=>'required',
            'about_the_inventor_button'=>'required',
            'meet_our_team_title'=>'required',
            'meet_our_team_image'=>'required',
            'meet_our_team_name'=>'required',
            'meet_our_team_position'=>'required',
            'meet_our_team_description'=>'required',
            'text_journey_title1'=>'required',
            'text_journey_title2'=>'required',
            'text_journey_image'=>'required',
            'text_journey_button1'=>'required',
            'text_journey_button2'=>'required',
            'latest_blogs_title'=>'required',
            'latest_blogs_date'=>'required',
            'latest_blogs_description'=>'required',
            'latest_blogs_button'=>'required',

        ];
    }
}
