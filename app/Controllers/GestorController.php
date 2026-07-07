<?php

namespace App\Controllers;

class GestorController extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
}