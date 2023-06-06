<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class DemoPageSettings extends Settings
{

    public $title;
    public $button1;
    public $button2;
    public $button3;
    public static function group(): string
    {
        return 'demopage';
    }

}
