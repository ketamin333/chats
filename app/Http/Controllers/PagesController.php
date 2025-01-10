<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class PagesController extends Controller
{
    public function app(): View|Factory|Application
    {
        return view('app');
    }
}
