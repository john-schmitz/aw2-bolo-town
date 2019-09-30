<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) {
        return view('index', ['title' => 'Página Inicial']);
    }

    public function request(Request $request) {
        return view('requestSoftware');
    }

    public function list_softwares(Request $request) {
        return view('listSoftwares');
    }

    public function dashboard(Request $request) {
        return view('dashboard');
    }

    public function createLab(Request $request) {

    }

    public function createSoftware(Request $request) {
    }
}
