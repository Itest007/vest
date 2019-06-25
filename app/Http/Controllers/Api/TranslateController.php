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



//百度翻译入口
function dtranslate(Request $request){
    $bd_url = 'https://api.fanyi.baidu.com/api/trans/vip/translate';
    $bd_app_id = '20190625000310291';
    $bd_sec_key = 'ySzwsg9vXa4kFVBmte4I';

    $query = $request->input('str', '');
    $args = array(
        'q' => $query,
        'appid' => $bd_app_id,
        'salt' => rand(10000,99999),
        'from' => 'auto',
        'to' => 'en',
    );
    $args['sign'] = self::buildSign($query, $bd_app_id, $args['salt'], $bd_sec_key);
    $ret = self::call($bd_url, $args);
    $ret = json_decode($ret, true);

    return $ret;
}

//加密
function buildSign($query, $appID, $salt, $secKey){
    $str = $appID . $query . $salt . $secKey;
    $ret = md5($str);
    return $ret;
}

//发起网络请求
function call($url, $args=null, $method="post", $testflag = 0, $timeout = '30', $headers=array()){
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
        $data = convert($args);
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



}
