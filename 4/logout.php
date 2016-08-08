<?php

header ("Content-Type: text/html; charset=utf-8;");
session_start();
unset ($_SESSION['user_id']);// если destroy - все удаляется

header('Location:read.php');


