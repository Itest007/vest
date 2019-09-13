<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index(Request $request)
    {
        $os = $request->input('os', '');
        //增加看见全部数据的用户id
        $viewAll=[1];
        $adminUser = Auth::getUser()->toArray();

        $query = new Item();
        if($os){
            $query=$query->where(compact('os'));
        }

        if(!in_array($adminUser['id'],$viewAll)){
            $query=$query->where('create_by',$adminUser['id']);
        }

        $items = $query->orderBy('created_at', 'desc')->paginate(20);


        return view('home', compact('items'));
    }



}
