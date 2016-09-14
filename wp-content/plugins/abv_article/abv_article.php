<?php
include_once('abv_autoload.php');

register_activation_hook( __FILE__, array( 'AbvArticle', 'activation' ) );
register_deactivation_hook( __FILE__, array( 'AbvArticle', 'deactivation' ) );

$abvNewPost = new AbvArticle();
$abvNewPost->run();