<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AboutSettings extends Settings
{
    public string $about_title;
    public string $about_description;
    public static function group(): string
    {
        return 'about';
    }
}
