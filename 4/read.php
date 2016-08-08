<?php

header ("Content-Type: text/html; charset=utf-8;");

include_once ("data.php");
$data=getPOSTS();
?>

<ul>
    <?
        foreach ($data as $post)
        {
            echo "<li>".$post['name']."<a href='delete.php?id=".$post['id']." '>Удалить </a><a href='edit.php?id=".$post['id']." '>Редактировать </a></li>" ;  
        }
    ?>
</ul>

