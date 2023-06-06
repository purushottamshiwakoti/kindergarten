<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class FooterSeetings extends Settings
{

    public $footer_copyright_text;
    public static function group(): string
    {
        return 'footer';
    }
}
