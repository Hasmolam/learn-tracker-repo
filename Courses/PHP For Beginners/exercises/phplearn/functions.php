<?php

function urlIS($value){
    return $_SERVER['REQUEST_URI']===$value;
}

function dd($key){
    echo '<pre>';
    var_dump($key);
    echo '</pre>';
}