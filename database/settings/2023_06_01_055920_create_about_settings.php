<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('about.about_title', 'about');
        $this->migrator->add('about.about_description', 'description');
    }
};
