<?php
namespace app/Http/Controllers;
use Illuminate/Http/Request;

class DashboardController exteneds Controller {
    public function index() {
        return view('dashboard');
    }
}
