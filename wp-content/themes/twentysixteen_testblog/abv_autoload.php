<?php
if (!defined('ABSPATH')) exit;
function abvTestBlogLoader($className){
    $path = __DIR__.DIRECTORY_SEPARATOR.$className.'.php';
    if(file_exists($path)){
        require ($path);
    }
}
spl_autoload_register('abvTestBlogLoader');