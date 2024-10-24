<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $data['menus'] = Menu::getMenu();
        /*$menus = Menu::getMenu();
        if (count($menus) > 0) {
            $count = 0;
            foreach ($menus as $menu) {
                if ($count > 0) {
                    echo '<pre>';
                    print_r($menu->subMenus);
                    exit;
                }
                $count++;
            }
        }*/
        return view('welcome', $data);
    }
}
