<?php
function dd($value)
{
    echo "<pre>";
    echo  var_dump($value);
    echo "</pre>";
    die();
}
function isCurrent($url)
{
    return $_SERVER['REQUEST_URI'] === $url;
}



function view($name, $data = [])
{
    extract($data);
    return require "views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}
