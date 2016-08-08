<?php

header ("Content-Type: text/html; charset=utf-8;");
$path = dirname(_FILE_);

  
    include_once ($path."/auth.php");
    
    
$dir=$path.'/data/';
$list=scandir($dir);

echo "<ul>";
foreach ($list as $filename){
    $file=$dir.$filename;
    if(is_file($file)){
        echo "<li>".file_get_contents($file)."</li>";
        echo  "<li>".basename($file)." : ".file_get_contents($file)." | "."<a href=\"delete.php?file=".$filename."\">Delete this file</a></li>";//дает имя+удаление
        echo "<li> <a href=\"edit.php?file=".$filename."\">Редактировать</a></li>";
    }
}
echo "</li>";
