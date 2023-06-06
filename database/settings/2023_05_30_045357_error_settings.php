<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('error.error_title','error');
        $this->migrator->add('error.error_button','error');
        $this->migrator->add('error.error_image','error');
    }
};
