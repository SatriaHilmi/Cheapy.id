<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer; // Import model Customer

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Ambil data customer dari database
        $customer = Customer::all();

        // Definisi variabel profit (atau ambil dari mana Anda mendapatkannya)
        $profit = 1000; // Contoh saja, gantilah dengan nilai sesuai kebutuhan Anda

        // Definisi variabel totalTransaction (atau ambil dari mana Anda mendapatkannya)
        $totalTransaction = 500; // Contoh saja, gantilah dengan nilai sesuai kebutuhan Anda

        // Render view home.blade.php dan kirim data customer, profit, dan totalTransaction ke dalam view
        return view('home', ['customer' => $customer, 'profit' => $profit, 'totalTransaction' => $totalTransaction]);
    }
}