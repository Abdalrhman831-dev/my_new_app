<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StoresController;
use App\Models\Stores;
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
        return view('home');
    }


     public function storess()
    {
        $stor = Stores::All();
        return view('contr.index',compact('stor'));
    }


     public function users()
    {
        return view('users');
    }

     public function contr()
    {
         $stor = Stores::All();
        return view('contr.index',compact('stor'));
    }
}
