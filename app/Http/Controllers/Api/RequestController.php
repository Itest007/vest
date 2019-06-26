<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    //发起网络请求
    function call($url, $args=null, $method="post", $timeout = '30', $headers=array()){
        $ret = false;
        $i = 0;
        while($ret === false){
            if($i > 1)
                break;
            if($i > 0){
                sleep(1);
            }
            $ret = self::callOnce($url, $args, $method, false, $timeout, $headers);
            $i++;
        }
        return $ret;
    }

    function callOnce($url, $args=null, $method="post", $withCookie = false, $timeout = '30', $headers=array()){
        $ch = curl_init();
        if($method == "post"){
            $data = self::convert($args);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_POST, 1);
        }else{
            $data = self::convert($args);
            if($data){
                if(stripos($url, "?") > 0){
                    $url .= "&$data";
                }else{
                    $url .= "?$data";
                }
            }
        }
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if(!empty($headers)){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }if($withCookie){
            curl_setopt($ch, CURLOPT_COOKIEJAR, $_COOKIE);
        }
        $r = curl_exec($ch);
        curl_close($ch);
        return $r;
    }

    function convert(&$args){
        $data = '';
        if (is_array($args)){
            foreach ($args as $key=>$val){
                if (is_array($val)){
                    foreach ($val as $k=>$v){
                        $data .= $key.'['.$k.']='.rawurlencode($v).'&';
                    }
                }else{
                    $data .="$key=".rawurlencode($val)."&";
                }
            }
            return trim($data, "&");
        }
        return $args;
    }



//百度翻译入口
    function convertRequest(Request $request){
        $url = $request->input('url', '');
        $args = $request->input('args', '');
        $method = $request->input('method', 'post');
        $timeout = $request->input('timeout', '');
        $headers = $request->input('headers', []);

        try{
            $ret = self::call($url, $args,$method,$timeout,$headers);
            $ret = json_decode($ret, true);

            return response()->json(
                ['code' => 0, 'message' => 'Success', 'data' => $ret]
            );
        }catch(Exception $e){
            return response()->json(
                ['code' => 0, 'message' => $e->getMessage(), 'data' => json_decode($e)]
            );
        }

    }
}
