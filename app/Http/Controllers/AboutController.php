<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return 'NIM: 2241720055' . '<br>' . 'Nama: Farid Fitriansah Alfarizi';
    }
}
