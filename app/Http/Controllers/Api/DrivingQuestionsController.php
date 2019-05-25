<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DrivingQuestions;


class DrivingQuestionsController extends Controller
{


    public function drivingQuestion(){

        $type = request("type",1);
        $num = request("num",100);
        $page = request("page",1);

        $data = DrivingQuestions::where('type',$type)->paginate($num);
        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $data]
        );

	//$data = $data->toArray();
        //echo "<pre>";print_r($data);
    }

}
