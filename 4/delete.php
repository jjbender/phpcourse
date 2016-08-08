<?php

include_once ("data.php");
$id=$_GET['id'];
removePOST($id);
header ("Location:read.php");
