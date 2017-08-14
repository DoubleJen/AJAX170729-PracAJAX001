<?php
    $conn = mysqli_connect('127.0.0.1', 'root', 'root', 'doubleprac', 3306);

    $account = $_GET['account'];
    $passwd = $_GET['passwd'];
    $realname = $_GET['realname'];
    $sql = "insert into member(account,passwd,realname)" .
            "values ('{$account}','{$passwd}','{$realname}')";
    echo $sql;
    mysqli_query($conn, $sql);
?>