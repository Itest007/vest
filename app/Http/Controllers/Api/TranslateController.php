<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateController extends Controller
{
    public function googleTranslate(Request $request){

        $str = $request->input('str', '');

        if (!$str) {
            return response()->json(
                ['code' => 1, 'message' => 'error', 'data' => '']
            );
        }


        try{
          $tr = new GoogleTranslate();
          $tr->setSource();
          $tr->setTarget('en');
          $str = $tr->translate($str);
      }catch(\EXCEPTION $e){
        return response()->json(
            ['code' => 1, 'message' => 'error', 'data' => $e->getMessage()]
        );
    }



    return response()->json(
        ['code' => 0, 'message' => 'Success', 'data' => $str]
    );
}
}
