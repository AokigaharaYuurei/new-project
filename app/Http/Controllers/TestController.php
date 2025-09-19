<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function about()
    {
        $adress="улица Пушкина, 24";
        $data = ['name' => 'Витя', 'phone' => '89514723983', 'age' => 22];
        return view('about', compact('adress', 'data'));
        return view('about', compact('adress'));
    }


    public function contact()
    {
        return view('contact');
    }
}
