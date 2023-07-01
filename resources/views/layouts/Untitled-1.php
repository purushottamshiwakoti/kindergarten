        foreach ($rootData as $k => $root) {
            $html.='<li data-name="'.$root->name.'" data-layout="'.$root->layout.'" data-link="'.$root->link.'" data-icon="'.$root->icon.'" data-description="'.$root->description.'" data-trip_id="'.$root->trip_id.'" class="dd-item deleteBox" data-id="'.$root->id.'">';
            $html .= '<div class="dd-handle">'.$root->name.'<button href="#" class="no-drag item-edit">Edit</button>';
            $html.='<a href="'.route('admin.menus.menu-items.destroy',[$root->menu->id,$root->id]).'" class="item-delete no-drag ajaxDelete">Delete</a></div>';

            if (!$root->children->isEmpty()) {
                $html .= recursiveBuild($root->children);
            }
            $html .= '</li>';
        }

        $html .= '</ol>';
        return $html;
    }
}
