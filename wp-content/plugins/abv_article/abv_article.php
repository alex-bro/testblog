<?php
/*
Plugin Name: ABV Widget
Plugin URI: http://siteprosto.ks.ua/
Description: ABV Widget.
Version: 1.0
Author: Alex Bronnikov
Author URI: http://alexbro.siteprosto.ks.ua
*/

if (!defined('ABSPATH')) exit;

include_once('abv_autoload.php');

register_activation_hook( __FILE__, array( 'AbvArticle', 'activation' ) );
register_deactivation_hook( __FILE__, array( 'AbvArticle', 'deactivation' ) );


$abvNewPost = new AbvArticle();
$abvNewPost->run();




