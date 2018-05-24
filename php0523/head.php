<?php
    session_start();
    $tt = strtotime("now");
    $now_Time=date("Y-m-d H:i:s",$tt);
    $link = mysqli_connect('localhost','root','','php2018');
    if($link)
    {        
        mysqli_query($link,'SET names UTF8');        //echo $now_Time;        
    }
    else
    {
        echo mysqli_connect_errno() . ":" . mysqli_connect_error();
        exit;
    }
    // try
    // {
    //     $link = mysqli_connect('localhost','root','','php2018');
    //     mysqli_query($link,'SET names UTF8');        //echo $now_Time;
    // }
    // catch(Exception $exception)
    // {
    //     echo "錯誤內容:{$exception->getCode()},錯誤訊息:{$exception->getMessage()}";
        
    // }
    // finally
    // {
    //     exit;
    // }
?>