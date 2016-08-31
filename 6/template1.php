<?php
function template ($name, array $vars = [])
{
    if(!is_file($name)) {
        throw new exception ("Impossible to load template file {$name}");
    }

//var_dump ($name);exit;
ob_start ();
extract ($vars);
require ($name); $contents = ob_get_contents ();
ob_end_clean ();
return $contents;
}
echo template (__DIR__ . "/template.php", array ("c" => 1, "b" => 2));
    
    
?>