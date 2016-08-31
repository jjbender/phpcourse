<?php
header ("Content-Type: text/html; charset=utf-8;");//передали в заголовке,какую кодировку ставить

session_start();
//проверка на существование
if ( !isset /*существует*/ ($_SESSION['user_id'])){
    echo '<a href="login.html">логин</a>';
}
else {
    echo'<a href="logout.php">Ваш id - '.$_SESSION ['user_id'].'(выйти) </a>';
}