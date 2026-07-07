<?php

namespace App\Controllers;

class PresencaController extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
}