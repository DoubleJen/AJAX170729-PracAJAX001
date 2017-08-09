<?php
    $upload = $_FILES['uploadFile'];

    //$_FILES["file"]["name"]：上傳檔案的原始名稱。
    //$_FILES["file"]["type"]：上傳的檔案類型。
    //$_FILES["file"]["size"]：上傳的檔案原始大小。
    //$_FILES["file"]["tmp_name"]：上傳檔案後的暫存資料夾位置。
    //$_FILES["file"]["error"]：如果檔案上傳有錯誤，可以顯示錯誤代碼。
    //http://www.webtech.tw/info.php?tid=24

    if($upload['error'] == 0){
        copy($upload['tmp_name'], "upload/{$upload['name']}");
        echo 'upload OK';
    }

?>