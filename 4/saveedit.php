<?php


/*header ("Content-Type: text/html; charset=utf-8;");
$path=dirname(_FILE_).'/data/'.$_POST['filename'].'.txt';// или $path
file_put_contents ($path,$_POST['data'].PHP_EOL.$_POST['age']);
header('Location:form.php'); */





include_once ("data.php");
var_dump(updatePOST($_POST['id'], $_POST['name']));






  


  //  FILE_APPEND - файл будет дописан
    
// file_put_contents - create file   

 //заголовок , с локейшн переадресацией

//2 способ дозапись файла file_put_contents($path.'/data/newFile.txt',$_POST['data'],FILE_APPEND)
    
//3 перезапись содержимого файла
/*$h=fopen(path. '/data/newFile2.txt','w');
    fwrite($h,$_POST[data]);
    fclose($h);*/

