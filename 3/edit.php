<?php

$filename=dirname(_NAME_).'/data/'.$_GET['file'];
$data=file_get_contents($filename);
?>

<form action="save.php" method="post" >
    <input name="filename" value="<?=$_GET['file']; ?>">
    <input name="data" value="<?=$data; ?>" placeholder="строка 1"> <!--placeholder - типсы-->
    <input name="age" value="<?=$data;?>" placeholder="строка 2"> 
    <input type="submit">

</form>


