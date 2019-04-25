<?php

namespace App\Http\Controllers\Api;

use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function swift(Request $request)
    {

        $app_id = $request->input('app_id', '');
        $channel_id = $request->input('channel_id', '') ?: '';
        $os = $request->input('os', '');

        $item = Item::where(compact('app_id', 'channel_id', 'os'))->first(['status','link']);
        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $item]
        );
    }
}
