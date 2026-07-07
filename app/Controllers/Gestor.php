<?php

namespace App\Controllers;

use App\Models\GestorModel;


class Gestor extends BaseController
{
    public function index()
    {
        return view('gestor/index');
    }

}