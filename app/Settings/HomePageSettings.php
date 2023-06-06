<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomePageSettings extends Settings
{
    public $home_banner_title1;
    public $home_banner_title2;
    public $home_banner_title3;
    public $home_banner_button1;
    public $home_banner_button2;
    public $photo_text_banner_image;
    public $photo_text_banner_accordion;
    public $about_app_title1;
    public $about_app_title2;
    public $about_app_card;
    public $about_app_icon;
    public $about_app_counter1;
    public $about_app_counter2;
    public $about_app_counter3;
    public $about_app_counter4;
    public $why_kidoroma_title;
    public $why_kidoroma_image;
    public $why_kidoroma_icon;
    public $why_kidoroma_card;
    public $text_content_title1;
    public $text_content_title2;
    public $text_content_title3;
    public $text_content_button1;
    public $text_content_button2;
    public $about_the_inventor_description;
    public $about_the_inventor_image;
    public $about_the_inventor_name;
    public $about_the_inventor_position;
    public $about_the_inventor_button;
    public $meet_our_team_title;
    public $meet_our_team_image;
    public $meet_our_team_name;
    public $meet_our_team_position;
    public $meet_our_team_description;
    public $text_journey_title1;
    public $text_journey_title2;
    public $text_journey_image;
    public $text_journey_button1;
    public $text_journey_button2;
    public $latest_blogs_title;
    public $latest_blogs_date;
    public $latest_blogs_description;
    public $latest_blogs_button;

    public $about_app_image;



    public static function group(): string
    {
        return 'homepage';
    }
}
