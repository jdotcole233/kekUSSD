<?php

namespace App\Http\Controllers;

use App\Http\Misc\Menu;
use App\Http\Ussd\States\Welcome;
use Illuminate\Http\Request;
use \Sparors\Ussd\Facades\Ussd;


class UssdController extends Controller
{
    public function index(Request $request)
    {
        $menu = new Menu();
        $menu->singleLine('KEK');
        $menu->newline();
        return $menu->multipleLines(['Buy', 'Subscribe'], '.');
    }
}
