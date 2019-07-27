<?php

namespace App\Http\Controllers\Api;

use App\Kq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KqController extends Controller
{
    public function swift(Request $request)
    {

        $key = $request->input('key', '');

        if ($key) {
            $items = Kq::where(compact('key'))->orderBy('created_at', 'desc')->paginate(10);
        }else{
            $items = Kq::orderBy('created_at', 'desc')->paginate(10);
        }

        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $items]
        );
    }
}
