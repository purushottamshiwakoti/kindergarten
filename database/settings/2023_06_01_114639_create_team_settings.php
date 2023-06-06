<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('teams.team_title', 'team');
        $this->migrator->add('teams.team_subtitle', 'teamdesc');
    }
};
