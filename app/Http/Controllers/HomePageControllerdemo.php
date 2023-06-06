<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index(){




        //get menu with slug header
        $menu=Menu::where('slug','header')->first();

        //define a variable to store html data
       $res = '<ul>';

foreach ($menu->parentMenuItems as $parent) {
    $res .= '<li>';
    // $res.=$parent->id;
    $res .= $parent->title;
// print_r($parent->children);
$res.="<ul>";
        // foreach($parent->children as $child){

        //     $res.="<li>";
        //     $res.=$child->title;
        //     $res.="</li>";

        //     $res.="<ul>";
        //     foreach($child->children as $subChild){
        //         $res.="<li>";
        //         $res.=$subChild->title;
        //         $res.="</li>";
        //     }
        //     $res.="</ul>";

        // }
        $res.=$this->getChildren($parent);
        $res.="</ul>";

    $res .= '</li>';
}
$res .= '</ul>';

echo $res;





    exit;

        //get parent menu items belonging to header menu


        //loop thorough menu items
        // assin title to the html output variable
        // check if it has children then get the children
        // loop through the children menu items and assign it to html output variable
        //repeat 6 and 7 as long as the children has it's own children
        // make recursive function for stpes 6,7 and 8
        //return html

        // $res = '<ul>';
        // foreach($menu->parentMenuItems as $parent)
        // {
        //     $res.='<li>';
        //     $res.=$parent->title;
        //     $res.=$this->getChildren($parent);
        //     $res.='</li>';
        // }

        // $res.='</ul>';
        // echo $res;exit;

    //  $menuItems [];
    //  foreach($parents as $parent)
    //  {

    //  }
        // return view('')

    // return view("homepage.index", compact('menu'));


    }



    private function getChildren($parent)
    {
        $res = '';
        // $children = MenuItem::where('parent_id',$parent->id)->get();
        if($parent->children)
        {
            $res.='<ul>';
            foreach($parent->children as $child)
            {
                $res.='<li>';
                $res.=$child->title;
                $res.=$this->getChildren($child);
                $res.='</li>';

            }
            $res.='</ul>';
        }
        return $res;
    }


}


