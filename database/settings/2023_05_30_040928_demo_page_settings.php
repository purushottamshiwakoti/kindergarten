<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('demopage.title','demopage');
        $this->migrator->add('demopage.button1','demopage');
        $this->migrator->add('demopage.button2','demopage');
        $this->migrator->add('demopage.button3','demopage');
    }
};
