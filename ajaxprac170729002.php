<?php
    //PHP $_GET 接收表單資料
    //http://www.branbibi.com/blog/s.php?n=php-note&tid=PHP_%24_GET_%E6%8E%A5%E6%94%B6%E8%A1%A8%E5%96%AE%E8%B3%87%E6%96%99
    $x = $_GET['x'];
    $y = $_GET['y'];
    $result = $x + $y;
    echo $result;
?>