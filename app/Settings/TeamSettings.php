<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class TeamSettings extends Settings
{
    public string $team_title;
    public string $team_subtitle;
    public static function group(): string
    {
        return 'teams';
    }
}
