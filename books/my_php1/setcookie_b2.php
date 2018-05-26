<?php    
    /*setcookie()限制:
     *必須在所有輸出
     *(echo, print),<html><head>之前使用，
     *否則cookie都會失敗
     */
    echo "功能:立即取消有效cookie<p>";
    if(!empty($_COOKIE["cnt"])){
        $nowcnt=$_COOKIE["cnt"];
    }else{
        $nowcnt=0;
    }
    $nowcnt++;
    setcookie("cnt",$nowcnt,time()+60);
    if ($nowcnt>=5) setcookie("cnt",$nowcnt,time()-60);
        echo "第 $nowcnt 次進入本站";
?>