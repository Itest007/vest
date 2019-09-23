<?php

namespace App\Http\Controllers\Api;

use App\YpItemIntegral;
use App\YpMenu;
use App\YpOrder;
use App\YpOrderItem;
use Faker\Provider\Uuid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class YpCookingController extends Controller
{
    //
    public $menuMap=[
        '0' =>'2019-09-17',
        '1' =>'2019-09-18',
        '2' =>'2019-09-19',
    ];

    public function getFoods(Request $request){

        $type= $request->input('type',"");

        //循环三天菜单，取3的余数
        $todayDay = date('d',strtotime($request->input('date','+ 1 day')));
        $numMap = $todayDay%3;

        $todayDate = $request->input('date' ,date('Y-m-d'));



        $inmenu =YpMenu::select('item_code')
            ->where('item_type',$type)
            ->where('date',$this->menuMap[$numMap])
            ->orWhere('date',$todayDate)
            ->get()->toArray();

        $inmenu =array_column($inmenu,'item_code');


        $foods = YpItemIntegral::where('type',$type)->get()->toArray();



        $res = array_filter($foods,function ($v,$k) use ($inmenu){

            return !in_array($v['item_code'],$inmenu);
        },ARRAY_FILTER_USE_BOTH);


        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => array_values($res)]
        );
    }

    public function addMenu(Request $request){
        $item_code  = $request->input('item_code',"");
        $item_type  = $request->input('item_type',"");
        $nowdate  = $request->input('date' ,date('Y-m-d'));

        $data = [
            'item_code'=>$item_code,
            'item_type'=>$item_type,
            'date'=>$nowdate,
            ];
        $bol = YpMenu::insert($data);

        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $bol]
        );
    }


    public function getMenu(Request $request){
        //循环三天菜单，取3的余数
        $todayDay = date('d',strtotime($request->input('date','+ 1 day')));
        $numMap = $todayDay%3;

        $todayDate = $request->input('date' ,date('Y-m-d'));


        $inmenu =YpMenu::select('*')
            ->leftJoin('yp_item_integrals','yp_menus.item_code','=','yp_item_integrals.item_code')
            ->where('date',$this->menuMap[$numMap])
            ->orWhere('date',$todayDate)
            ->get()->toArray();

        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $inmenu]
        );
    }


    public function addOrder(Request $request){
        $this->validate($request, [
            'user_id' => 'required',
            'items' => 'required',
            'date' => 'required',
        ]);

        $userId  = $request->input('user_id',"");
        $date  = $request->input('date',date('Y-m-d'));
        $items  = json_decode($request->input('items',""),true);
        $orderId = Uuid::uuid();
        $integral =0;
        $insertItem=[];

        if($items){

            foreach ($items as $k => $item ){

                $insertItem[]=[
                    'order_id'=>$orderId,
                    'item_code'=>$item['item_code'],
                    'num'=>$item['num'],
                    'integral'=>$item['integral'] * $item['num'],
                ];

            }
            if($insertItem){
                $integral = array_sum(array_column($insertItem,'integral'));
            }
        }

        $data = [
            'order_id'=>$orderId,
            'create_by'=>$userId,
            'items'=>json_encode($items),
            'integral'=>$integral,
            'date'=>$date
        ];
        $bol = YpOrder::insert($data);


        $bol2 = YpOrderItem::insert($insertItem);

        return response()->json(
            ($bol && $bol2) ? ['code' => 0, 'message' => 'Success', 'data' => true ] :['code' => 0, 'message' => 'Success', 'data' => false]
        );

    }


    public function getOrderItems(Request $request){
        $todayDate =  $request->input('date' ,date('Y-m-d'));
        $user_id =  $request->input('user_id' ,'');

        $query = YpOrderItem::leftJoin('yp_orders','yp_order_items.order_id','=','yp_orders.order_id');

        if($user_id){
            $query = $query->where('yp_orders.create_by',$user_id);
        }

        $orderItems = $query->where('yp_orders.date',$todayDate)
            ->groupBy('yp_order_items.item_code','yp_order_items.status')
            ->select('yp_order_items.item_code','yp_order_items.status')
            ->selectRaw('sum(yp_order_items.num) as totalnum , sum(yp_order_items.integral) as totalIntragel')
            ->get()->toArray();

        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $orderItems]
        );
    }



    public function confirmOrderItem(Request $request){
        $this->validate($request, [
            'item_code' => 'required',
        ]);

        $item_code = $request->input('item_code');

       $bol =  YpOrderItem::where('item_code',$item_code)->updated(['status'=>100]);
        return response()->json(
            ['code' => 0, 'message' => 'Success', 'data' => $bol]
        );
    }
}
