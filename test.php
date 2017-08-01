<?php
    //php變數大小寫嚴格區分
    //$_SERVER 是一個包含了諸如頭資訊(header)、
    //路徑(path)、以及腳本位置(script locations)等等資訊的陣列。
    $req = $_SERVER;

//    //forEach
//    foreach($req as $key => $value){
//        echo "{$key} = {$value}<br />";
//    }

    //$_SERVER['HTTP_USER_AGENT'] => 當前請求的 User_Agent: 頭部的內容。
    $agent = $_SERVER['HTTP_USER_AGENT'];
    if ($agent == 'Brad'){
        //
        echo 'Hello, Brad';
    }else if (strpos($agent, 'Chrome') !== false){
        //
        echo 'Hello, Chrome';
    }else {
        //
        echo 'Hello, Browser';
    }
    //偵測瀏覽器類型
    //http://design2u.me/blog/366/php-%E5%81%B5%E6%B8%AC%E7%80%8F%E8%A6%BD%E5%99%A8%E9%A1%9E%E5%9E%8B?%3E
?>