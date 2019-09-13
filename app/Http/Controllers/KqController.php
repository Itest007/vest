<?php

namespace App\Http\Controllers;

use App\Kq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class KqController extends Controller
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
        $key = $request->input('key', '');
        $item = [];

        //增加看见全部数据的用户id
        $viewAll=[1];
        $adminUser = Auth::getUser()->toArray();

        $query = new Kq();
        if($key){
            $query=$query->where(compact('key'));
        }

        if(!in_array($adminUser['id'],$viewAll)){
            $query=$query->where('create_by',$adminUser['id']);
        }
        $items =$query->orderBy('created_at', 'desc')->paginate(10);

//        if ($key) {
//            $items = Kq::where(compact('key'))->orderBy('created_at', 'desc')->paginate(10);
//        }else{
//            $items = Kq::orderBy('created_at', 'desc')->paginate(10);
//        }

        return view('kq', compact('items'));
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
            'title' => '',
            'content' => 'required',
        ]);
        //获取登录用户
        $adminUser = Auth::getUser()->toArray();

        $params = array_merge(request(['title', 'content']),['key'=>md5(time()),'create_by'=>$adminUser['id']]);

        Kq::create($params);

        return redirect('/kq');
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
    public function update(Request $request, Kq $kq)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $kq->update(request(['title', 'content']));
        return redirect("/kq");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Kq $kq)
    {
        $kq->delete();
        return redirect("/kq");
    }
}
