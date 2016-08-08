<?php


function addPOST ($text)
{
    
   //exit;
    $mysqli = new mysqli ("localhost","root","","epic");
    $mysqli->query("INSERT INTO `messages`(`name`) VALUES ('$text') ");
    return ($mysqli->error == NULL) ? true : $mysqli->error;
}

function getPOSTs ()
{
    $mysqli = new mysqli ("localhost","root","","epic");
    $result = $mysqli ->query ("SELECT * FROM `messages`");
    $data = [];
    while ($row=$result -> fetch_array (MYSQLI_ASSOC))
    {
        $data[] = $row;
    }
return $data;
}

function removePOST ($id)
{
    $mysqli= new mysqli ("localhost","root","","epic");
    $mysqli -> query ("DELETE FROM `messages` WHERE `id`=".$id);
    return ($mysqli->error==NULL);
}

function getPOST ($id)
{
    $mysqli = new mysqli ("localhost","root","","epic");
    $result = $mysqli ->query ("SELECT * FROM `messages`WHERE 'id'=".$id);
    if ($mysqli ->error == NULL)
    { 
        return $result -> fetch_array (MYSQLI_ASSOC);    
    }
return false;
}

function updatePOST ($id,$name)
{
    $mysqli = new mysqli ("localhost","root","","epic");
    $mysqli->query("UPDATE `messages` SET `name` = '$name' where `id` = $id");
        return ($mysqli->error== NULL);
}

/*$mysqli= new mysqli ("localhost","root","", "epic"); //3 -логин
if (mysqli_connect_errno ()){
echo "NO CONNECT:". mysqli_connect_error ();
    exit();
}
//делаем запрос
/*?*if (!$result = $mysqli->query("INSERT INTO `messages` (`name`) VALUES ('ein zwei drei')"))
{
    echo "Error on line".__LINE__.": ".$mysqli->error;
    exit;
} 
if (!$result=$mysqli->query("SELECT * from `messages`"))
{
    echo "ERROR ON".__LINE__.": ".$mysqli->error;
    exit;
}
while ($row=$result->fetch_array(MYSQLI_ASSOC))
    {
  var_dump($row);
    
    } */
    