<?php
if (!defined('ABSPATH')) exit;

function abvArticleAutoLoader($className){
    $path = __DIR__.DIRECTORY_SEPARATOR.$className.'.php';
    if(file_exists($path)){
        require ($path);
    } else {
        return false;
    }
}

spl_autoload_register('abvArticleAutoLoader', true, false);