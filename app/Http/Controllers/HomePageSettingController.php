<?php

namespace App\Http\Controllers;

use App\Settings\HomePageSettings;
use Illuminate\Http\Request;

class HomePageSettingController
{

    public function index()
    {
        //returns view file with form and setting data
    }

    public function update(Request $request, HomePageSettings $setting)
    {
        $setting->home_banner_image = 'logopath';
        $setting->home_banner_title = 'Title';
        $setting->save();
        echo 'here';exit;
    }
}
