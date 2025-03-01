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

    public function login()
    {
        return view('backend.auth.login.index');
    }

    public function register()
    {
        return view('backend.auth.register.index');
    }

    public function billing()
    {
        return view('backend.billing.index');
    }

    public function invoice()
    {
        return view('backend.invoice.index');
    }

    public function security()
    {
        return view('backend.security.index');
    }

    public function pricing()
    {
        return view('backend.pricing.index');
    }

    public function chartjs()
    {
        return view('backend.chartjs.index');
    }

    public function sweet_alert()
    {
        return view('backend.sweet_alert.index');
    }

    public function notification()
    {
        return view('backend.notification.index');
    }

    public function wizard()
    {
        return view('backend.wizard.index');
    }

    public function datatable()
    {
        return view('backend.datatable.index');
    }

    public function calendar()
    {
        return view('backend.calendar.index');
    }
}

