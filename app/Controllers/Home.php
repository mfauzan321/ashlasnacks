<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'   => 'Home - Ashla Snacks',
            'content'  => view('home/index'),
        ];
        return view('layouts/main', $data);
    }
}
