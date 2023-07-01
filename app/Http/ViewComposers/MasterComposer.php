<?php

namespace App\Http\ViewComposers;

use App\Models\Menu;
use App\Models\MenuItem;
use App\Settings\ContactSettings;
use App\Settings\HeaderSeetings;
use App\Settings\HomePageSettings;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Void_;

use function PHPUnit\Framework\isEmpty;

class MasterComposer
{
    public function __construct()
    {
    }

    public function compose(View $view,)
    {
        $headersettings = app(HeaderSeetings::class);
        $contactSettings = app(ContactSettings::class);

        $menu = Menu::where('slug', 'header')->first();
        if (isEmpty($menu)) {
            $category = MenuItem::tree()->where('menu_id', $menu->id);
        } else {
            $category = null;
        }

        $view->with(
            [
                /// header settings
                'header_image' => $headersettings->header_image,
                'headerbutton1' => $headersettings->headerbutton1,
                'headerbutton2' => $headersettings->headerbutton2,

                /// contact settings
                'contact_title' => $contactSettings->contact_title,
                'contact_description' => $contactSettings->contact_description,
                'contact_phone_number' => $contactSettings->contact_phone_number,
                'contact_email1' => $contactSettings->contact_email1,
                'contact_email2' => $contactSettings->contact_email2,
                'contact_mapstreet' => $contactSettings->contact_mapstreet,


            ],

        )->with(compact('category'));
    }
}
