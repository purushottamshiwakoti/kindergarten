<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HeaderSeetings extends Settings
{
    public $header_title;
    public $header_image;
    public $headerbutton1;
    public $headerbutton2;
    public static function group(): string
    {
        return 'header';
    }
}
