<?php

namespace SumonInfo\Installer\Controllers;

use App\Http\Controllers\Controller;

class InstallerController extends Controller
{
    public function welcome()
    {
        return view('install::welcome');
    }
    public function index()
    {
        return view('install::app');
    }
}
