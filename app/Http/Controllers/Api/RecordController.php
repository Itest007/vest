<?php

namespace App\Http\Controllers\Api;

use App\Record;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecordController extends Controller
{

    public function index(Request $request)
    {
        $day_begin = $request->input('day_begin', '');
        $day_end = $request->input('day_end', $day_begin);
        $time_begin = $request->input('time_begin', '00:00:00');
        $time_end = $request->input('time_end', '00:00:00');
        if ($day_begin) {
          $items = Record::whereDate('created_at', '>=', $day_begin)
          ->whereDate('created_at', '<=', $day_end)
          // ->whereTime('created_at', '>=',$time_begin)
          // ->whereTime('created_at', '<=', $time_end)
          ->get();
      }else{
        $items = Record::orderBy('created_at', 'desc')->get();
    }

    return response()->json( ['code' => 0, 'message' => 'Success','data'=>$items] );;
}

public function record(Request $request)
{
    $ip = $request->getClientIp();
    $rt = $request->input('rt', '') ?: '';
    $rj = $request->input('rj', json_encode([])) ?: json_encode([]);
    $rj = json_encode($request->input('rj',[]) ?: []);
    $res = Record::create(compact('ip', 'rt', 'rj'));

    if ($res) {
     return response()->json( ['code' => 0, 'message' => 'Success']);
 }else{
     return response()->json( ['code' => 1, 'message' => 'faild'] );
 }
}
}
