<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $os = $request->input('os', '');

        if ($os) {
        $items = Item::where(compact('os'))->orderBy('created_at', 'desc')->paginate(20);
        }else{
            $items = Item::orderBy('created_at', 'desc')->paginate(20);
        }
        return view('home', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
          $this->validate($request, [
            'app_id' => 'required',
            'os' => 'required',
            'status' => 'required',
            // 'link' => 'required',
        ]);
        //获取登录用户
        $adminUser = Auth::getUser()->toArray();

        $params = array_merge(request(['app_id', 'os', 'status', 'link']),['channel_id'=>request('channel_id') ?: '','create_by'=>$adminUser['id']]);
        Item::create($params);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return void
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Item $item
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Item $item)
    {
         $this->validate($request, [
            'app_id' => 'required',
            'os' => 'required',
            'status' => 'required',
            // 'link' => 'required',
        ]);

        $item->update(array_merge(request(['app_id', 'os', 'status', 'link']),['channel_id'=>request('channel_id') ?: '']));
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect("/");
    }
}
