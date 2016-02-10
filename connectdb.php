<?php
  // file: connectdb.php
  // author: Eksansilus, Oktober 2012

//  $db_username = "root";
//  $db_hostname = "localhost";
//  $db_password = "recomended";
//  $db_name = "sisfoapp";

//  $con = _connect($db_hostname, $db_username, $db_password);
//  $db  = _select_db($db_name, $con);
  
  
 $con = _connect('127.10.133.2', 'admintVbGcz6', 'rrwK5lEZpKs-');
 $db  = _select_db('sisfoapp', $con);

/*                                                   
  $linksvr = mysql_connect($db_hostname, $db_username, $db_password)
    or die ("Tidak dapat berhubungan dengan database server");

  $linkdb = mysql_select_db($db_name, $linksvr)
    or die ("Tidak dapat membuka database <b>$db_name</b>.");
*/

?>