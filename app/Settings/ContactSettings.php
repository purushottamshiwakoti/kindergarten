<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactSettings extends Settings
{
    public $contact_title;
    public $contact_description;
    public $contact_phone_number;
    public $contact_email1;
    public $contact_email2;
    public $contact_mapstreet;
    public static function group(): string
    {
        return 'contact';
    }
}
