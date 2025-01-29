<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'inforamcion' => "Ejemplo de informacion."
        ];
        return view('Home', $data);
    }
}
