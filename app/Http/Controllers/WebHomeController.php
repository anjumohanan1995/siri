<?php

namespace App\Http\Controllers;

use App\Models\MainMenu;
use App\Models\SubMenu;
use App\Models\SubSubMenu;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{
    public function index()
    {
        // Get the main menu items.
        $mainMenus = MainMenu::whereNull('deleted_at')->get();

        // Initialize an empty array to store the structured data.
        $menuData = [];

        // Loop through each main menu item.
        foreach ($mainMenus as $mainMenu) {
            $menu = [
                'title' => $mainMenu->title,
                'url' => $mainMenu->link_type == 'link' ? $mainMenu->link : $mainMenu->slug,
                'submenu' => [],
            ];

            // Get the submenus for the current main menu.
            $subMenus = SubMenu::where('menu_id', $mainMenu->id)->whereNull('deleted_at')->get();

            // Loop through each submenu.
            foreach ($subMenus as $subMenu) {
                $submenu = [
                    'title' => $subMenu->title,
                    'url' => $subMenu->link_type == 'link' ? $subMenu->link : $subMenu->slug,
                    'subsubmenu' => [],
                ];

                // Get the subsubmenus for the current submenu.
                $subSubMenus = SubSubMenu::where('sub_menu_id', $subMenu->id)->whereNull('deleted_at')->get();

                // Loop through each subsubmenu.
                foreach ($subSubMenus as $subSubMenu) {
                    $submenu['subsubmenu'][] = [
                        'title' => $subSubMenu->title,
                        'url' => $subSubMenu->link_type == 'link' ? $subSubMenu->link : $subSubMenu->slug,
                    ];
                }

                // Add the submenu to the main menu
                $menu['submenu'][] = $submenu;
            }

            // Add the main menu to the overall structure
            $menuData[] = $menu;
        }

        // dd($menuData);

        // Pass the structured data to the view
        return view('welcome', ['menuData' => $menuData]);
    }
}
