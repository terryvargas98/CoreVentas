<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PluginController extends Controller
{
    //
    public function ActivarPlugin(){
        $url = 'https://github.com/terryvargas98/Puntos.git';
        shell_exec('cd ..\\Modules && git clone ' . $url);
        return view ('configuration');
    }
}
