<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_php0614 = "127.0.0.1";
$database_php0614 = "php2018_06";
$username_php0614 = "root";
$password_php0614 = "";
$php0614 = mysql_pconnect($hostname_php0614, $username_php0614, $password_php0614) or trigger_error(mysql_error(),E_USER_ERROR); 
?>