<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Store;

class StoreController extends Controller
{
  public function store(Request $request)
  {
    $key = $request->input('key', '') ?: '';
    $rj = json_encode($request->input());
    $res = Store::create(compact('key', 'rj'));

    if ($res) {
       return response()->json( ['code' => 0, 'message' => 'Success']);
   }else{
       return response()->json( ['code' => 1, 'message' => 'faild'] );
   }
}



 public function getstore(Request $request)
  {
    $key = $request->input('key', '') ?: '';
    $items = Store::where('key', $key)->select(['rj'])->get('rj');

    if ($items) {
       return response()->json( ['code' => 0, 'message' => 'Success','data'=>$items]);
   }else{
       return response()->json( ['code' => 1, 'message' => 'faild'] );
   }
}
}
