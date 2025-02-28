<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.index');
    }

    public function automative()
    {
        return view('backend.automative.index');
    }

    public function crm()
    {
        return view('backend.crm.index');
    }

    public function setting()
    {
        return view('backend.setting.index');
    }

    public function widget()
    {
        return view('backend.widget.index');
    }
}
