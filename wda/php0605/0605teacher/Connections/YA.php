<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_YA = "localhost";
$database_YA = "myphp_2018_05";
$username_YA = "root";
$password_YA = "";
$YA = mysql_pconnect($hostname_YA, $username_YA, $password_YA) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("SET NAMES 'UTF8'"); 
?>