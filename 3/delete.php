<?php

$path=__DIR__.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.$_GET['file'];
unlink ($path);
header ('Location:read.php');