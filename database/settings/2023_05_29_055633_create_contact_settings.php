<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.contact_title');
        $this->migrator->add('contact.contact_description');
        $this->migrator->add('contact.contact_phone_number');
        $this->migrator->add('contact.contact_email1');
        $this->migrator->add('contact.contact_email2');
        $this->migrator->add('contact.contact_mapstreet');
    }
};
