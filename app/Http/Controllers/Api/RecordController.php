<?php

namespace App\Http\Controllers\Api;

use App\Record;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RecordController extends Controller
{
    public function record(Request $request)
    {
        $ip = $request->getClientIp();
        $rt = $request->input('rt', '') ?: '';
        $rj = $request->input('rj', json_encode([])) ?: json_encode([]);
        $res = Record::create(compact('ip', 'rt', 'rj'));

        if ($res) {
             return response()->json( ['code' => 0, 'message' => 'Success']);
        }else{
             return response()->json( ['code' => 1, 'message' => 'faild'] );
        }

    }
}
