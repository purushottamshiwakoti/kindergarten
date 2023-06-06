<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ErrorSeetings extends Settings
{
    public $error_title;
    public $error_button;
    public $error_image;

    public static function group(): string
    {
        return 'error';
    }
}
