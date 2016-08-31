<?php

include_once ("data.php");
$post=getpost ($_GET ['id']);


?>

<form action="saveedit.php" method="post" >
    
    <input name="name" value="<?= $_GET ['name']; ?>" placeholder="name">
    <input name="id" type="hidden" value="<?= $_GET['id']; ?>";
    <input type="submit">

</form>
