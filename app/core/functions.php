<?php

function show($smth)
{
    echo "<pre>";
    print_r($smth);
    echo "</pre>";
}

function esc($str)
{
    return htmlspecialchars($str);
}

function redirect($path)
{
    header("Location: " .ROOT. "/".$path);
    die();
}
