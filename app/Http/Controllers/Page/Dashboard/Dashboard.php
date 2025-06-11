<?php

namespace App\Http\Controllers\Page\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    //
    public function dashboard()
    {
        return view('welcome');
    }
}
