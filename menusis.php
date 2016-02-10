<?php

// echo "<div class=posmenu>";
$sid = session_id();
$agent = $_SERVER['HTTP_USER_AGENT'];

include_once "xth.mnu.php";

$modul = array();
$modul = GetUserModule();

//var_dump($modul); exit;
// Buat Menu
StartMenu($modul);

foreach ($modul as $submenu) {
    GetModule($submenu);
}

RunMenu();
//echo "</div>";
?>