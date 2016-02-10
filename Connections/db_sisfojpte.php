<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_db_sisfojpte = "localhost";
$database_db_sisfojpte = "com_jptefptkupi";
$username_db_sisfojpte = "root";
$password_db_sisfojpte = "recomended";
$db_sisfojpte = mysql_pconnect($hostname_db_sisfojpte, $username_db_sisfojpte, $password_db_sisfojpte) or trigger_error(mysql_error(),E_USER_ERROR); 
?>