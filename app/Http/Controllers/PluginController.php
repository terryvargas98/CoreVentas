<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PluginController extends Controller
{
    //
    public function ActivarPlugin(Request $request){

        if (\request('puntos')) {
            $url = 'https://github.com/terryvargas98/Puntos.git';
            shell_exec('cd ..\\Modules && git clone ' . $url);
        }else{
            if (\request('reportes')) {
            
            $url = 'https://github.com/terryvargas98/Reportes.git';
            shell_exec('cd ..\\Modules && git clone ' . $url);
            }
        }
        
        return view ('configuration');
    }
}
