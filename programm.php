<?php


function autoload($className) 
{

    $prefix = "App";
    $dir = "./src";

    $clss = substr($className, strlen($prefix));
    $clss = str_replace("\\", "/", $clss);
    
    if(file_exists("{$dir}/{$className}.php")) :
        require("{$dir}{$className}.php");
    endif;
}

spl_autoload_register("autoload");

$post = new App\Blog\Post;
var_dump($post);


$post2 = new App\Forum\Post;
var_dump($post2);

/*

function autoload($className) 
{
    if(file_exists("./src/{$className}.php")) :
        require("./src/{$className}.php");
    endif;
}

spl_autoload_register("autoload");

$h = new Post;
var_dump($h);

*/

?>