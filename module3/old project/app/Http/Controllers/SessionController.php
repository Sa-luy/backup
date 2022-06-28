<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class SessionController extends Controller
{
    public function store(Request $request)
    {
        $request->session()->flash('saluy', '18tuoi');
        session(['nguyet' => '17tuoi']);
    }
    public function show(Request $request)
    {
        // if ($request->session()->exists('nguyet')) {
        //     echo 12345;
        //     echo '<hr>';
        // } else {
        //     $value = $request->session()->get('saluy');
        //     echo $value . '<hr>';
        // }
        // $request->session()->flush('Saluy');
        echo '<pre>';
        print_r($request->session()->get('saluy'));
    }
}