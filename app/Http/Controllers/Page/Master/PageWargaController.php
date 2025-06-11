<?php

namespace App\Http\Controllers\Page\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageWargaController extends Controller
{
    public function index()
    {
        return view('pages.master.warga.warga');
    }
}
