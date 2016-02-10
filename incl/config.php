<?php
//$conn = @mysql_connect('localhost','db_akad','akademikfp2013');
$conn = @mysql_connect('localhost','root','recomended');
if (!$conn) {
	die('Could not connect: ' . mysql_error());
}
mysql_select_db('comcom', $conn);
function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        }
        return false;
    }
?>