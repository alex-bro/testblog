<?php
if (!defined('ABSPATH')) exit;

require('abv_autoload.php');
$testblog = new AbvTestBlog();
$testblog->run();