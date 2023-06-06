<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('homepage.home_banner_title1','Some Title');
        $this->migrator->add('homepage.home_banner_title2','Some Title');
        $this->migrator->add('homepage.home_banner_title3','Some Title');
        $this->migrator->add('homepage.home_banner_button1','Some Btn');
        $this->migrator->add('homepage.home_banner_button2','Some Btn');
        $this->migrator->add('homepage.photo_text_banner_image','Some Title');
        $this->migrator->add('homepage.photo_text_banner_accordion','Some Title');
        $this->migrator->add('homepage.about_app_title1','Some Title');
        $this->migrator->add('homepage.about_app_title2','Some Title');
        $this->migrator->add('homepage.about_app_card','Some Title');
        $this->migrator->add('homepage.about_app_icon','Some Title');
        $this->migrator->add('homepage.about_app_counter1','Some Title');
        $this->migrator->add('homepage.about_app_counter2','Some Title');
        $this->migrator->add('homepage.about_app_counter3','Some Title');
        $this->migrator->add('homepage.about_app_counter4','Some Title');
        $this->migrator->add('homepage.why_kidoroma_title','Some Text');
        $this->migrator->add('homepage.why_kidoroma_image','Some Text');
        $this->migrator->add('homepage.why_kidoroma_icon','Some Text');
        $this->migrator->add('homepage.why_kidoroma_card','Some Text');
        $this->migrator->add('homepage.text_content_title1','Some Text');
        $this->migrator->add('homepage.text_content_title2','Some Text');
        $this->migrator->add('homepage.text_content_title3','Some Text');
        $this->migrator->add('homepage.text_content_button1','Some Text');
        $this->migrator->add('homepage.text_content_button2','Some Text');
        $this->migrator->add('homepage.about_the_inventor_description','Some Text');
        $this->migrator->add('homepage.about_the_inventor_image','Some Text');
        $this->migrator->add('homepage.about_the_inventor_name','Some Text');
        $this->migrator->add('homepage.about_the_inventor_position','Some Text');
        $this->migrator->add('homepage.about_the_inventor_button','Some Text');
        $this->migrator->add('homepage.meet_our_team_title','Some Text');
         $this->migrator->add('homepage.meet_our_team_image','Some Text');
         $this->migrator->add('homepage.meet_our_team_name','Some Text');
         $this->migrator->add('homepage.meet_our_team_position','Some Text');
        $this->migrator->add('homepage.meet_our_team_description','Some Text');
        $this->migrator->add('homepage.text_journey_title1','Some Text');
        $this->migrator->add('homepage.text_journey_title2','Some Text');
        $this->migrator->add('homepage.text_journey_image','Some Text');
        $this->migrator->add('homepage.text_journey_button1','Some Text');
        $this->migrator->add('homepage.text_journey_button2','Some Text');
        $this->migrator->add('homepage.latest_blogs_title','Some Text');
        $this->migrator->add('homepage.latest_blogs_date','Some Text');
        $this->migrator->add('homepage.latest_blogs_description','Some Text');
        $this->migrator->add('homepage.latest_blogs_button','Some Text');


    }
};
