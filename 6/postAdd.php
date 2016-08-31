<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title> Занятие 3 </title>
</head>
<body>
    <form action = "index.php?c=post&a=addSave" method="post">
        <input type ="hidden" name "_aft" value="<?=$_aft; ?>" />
        <input name "text" placeholder = "Text" />
        <button> Save </button>
    </form>
    
    
    </body>
</html>