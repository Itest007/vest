<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

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
        $os = $request->input('os', '');
        if ($os) {
        $items = Item::where(compact('os'))->orderBy('created_at', 'desc')->paginate(20);
        }else{
            $items = Item::orderBy('created_at', 'desc')->paginate(20);
        }
        return view('home', compact('items'));
    }



}
