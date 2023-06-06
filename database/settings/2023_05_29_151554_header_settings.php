<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('header.headerbutton1',"buttonn");
        $this->migrator->add('header.headerbutton2','buttonn');
    }
};
