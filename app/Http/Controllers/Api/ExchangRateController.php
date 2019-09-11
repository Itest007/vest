<?php

namespace App\Http\Controllers\Api;

use App\RateRecord;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExchangRateController extends Controller
{
    //

    public function getRate(Request $request){

//        $this->validate($request, [
//            'hour' => 'required|max:24',
//            'date' => 'required',
//        ]);
        $hour= $request->input('hour',"");
        $recordDate= $request->input('date',"");
        $type= $request->input('type',"");
        $subtype= $request->input('sub',"");

        $query =RateRecord::select('*');
        if($type && $subtype){
            $query->where('type',$type)->where('subtype',$subtype);
        }
        $arr = $query->where('hour',$hour)
            ->where('record_date',$recordDate)
            ->get()->toArray();

        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $arr]
        );
    }

    public function createRate(Request $request){

        $startDate = config('exchangerate.startDate');
        $rateCycle = config('exchangerate.rateCycle');
        $rateRange = config('exchangerate.rateRange');

        foreach ($rateRange as $k => $items) {
            foreach ($items as $_k => $item){
                for ($i = 0; $i < $rateCycle; $i++) {
                    $insertData = [];
                    $recordDate = date('Y-m-d', strtotime($startDate) + $i * 3600 * 24);
                    for ($j = 1; $j <= 24; $j++) {
                        $insertData[$j]['record_date']= $recordDate;
                        $insertData[$j]['rate']= $this->calculatingRate($item,$rateCycle,$j);
                        $insertData[$j]['hour']= $j;
                        $insertData[$j]['subtype']= $_k;
                        $insertData[$j]['type']= $k;
                    }

                    $insertData[24]['rate'] = $item[1];

                    RateRecord::insert($insertData);

                }
            }

        }



    }

    protected function calculatingRate($item,$rateCycle,$hour){

        $multiple = rand(1,round($item[1]*10000/($item[0]*10000),0)) ;
        $randomNum = round(rand(1000,1000 + $hour <10 ? $hour * 100 : $hour *10)/1000,3);
        $symbol = 1 - rand(0,2) ?: -1;
        $res = round($item[0] + $symbol * round((($item[1]-$item[0]) * 1000)/ 45 * 24/1000,3) * $randomNum * $multiple,3);

        echo $res < 0 ? -$res : $res." | ".$randomNum.' | '.$multiple. ' | '.$item[0].' | '.$hour.'<br />';
        return $res < 0 ? -$res : $res;
    }
}
