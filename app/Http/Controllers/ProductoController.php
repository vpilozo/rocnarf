<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $r)
    {
        if ($r->submenu == '') {
            echo 1;
            exit;
        } elseif ($r->submenu == 'usos') {
            echo 2;
            exit;
        } else {
            echo 3;
            exit;
        }
    }
}
