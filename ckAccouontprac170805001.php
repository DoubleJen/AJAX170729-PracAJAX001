<?php

    //Http request error, such as no account
    if(!isset($_GET['account'])){
        //用 isset 來檢查一個被設置為 NULL 的變數會回傳 false，但該變數如果是字串 NULL 則會回傳 true。
        //http://www.wibibi.com/info.php?tid=237
        $return = array('result' => -1);
        echo json_encode($return);
            //php內建的函式json_encode: 陣列轉成JSON格式
            //https://pjchender.blogspot.tw/2016/04/phparrayjson-jsonencodeutf8.html
        return;
    }

    //mysql server error, such as error password
    $account = $_GET['account'];
    $conn = mysqli_connect('127.0.0.1', 'root', 'root', 'doubleprac', 3306);
    //echo mysqli_connect_error();
    if(mysqli_connect_error()){
        //mysqli_connect_error(): 從最後的連接錯誤返回一個錯誤的描述，如果有的話
        //http://www.w3im.com/zh-TW/php/func_mysqli_connect_error.html
        $return = array('result' => -2);
        echo json_encode($return);
        return;
    }

    //Account Repeated =>1 else => 0
    $sql = "select * from member where account = '{$account}'";
    $rs = mysqli_query($conn, $sql);
        //mysqli_query( connection,query,resultmode ): 執行對數據庫的查詢
        //http://www.w3im.com/zh-TW/php/func_mysqli_query.html
    if(mysqli_num_rows($rs)>0){
        //mysqli_num_rows( result ): 返回一個結果集的行數
        //http://www.w3im.com/zh-TW/php/func_mysqli_num_rows.html

    //Repeat
        $return = array('result' => 1);
        echo json_encode($return);
        return;
    }else{
    //No Repeat
        $return = array('result' => 0);
        echo json_encode($return);
        return;
    }
?>