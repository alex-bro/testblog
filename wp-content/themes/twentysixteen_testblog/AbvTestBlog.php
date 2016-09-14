<?php

if (!defined('ABSPATH')) exit;
class AbvTestBlog
{
    /**
     * theme Kolokolo directory
     *
     * @var
     */
    public $themeDir;
    /**
     * theme Kolokolo url
     *
     * @var
     */
    public $themeUrl;

    /**
     * when creating an instance of class
     */
    function __construct(){
        $this->themeDir = dirname( __FILE__ );
        $this->themeUrl = get_stylesheet_directory_uri() ;
    }

    /**
     * run theme script
     */
    function run(){
        $this->enqueueStyles();
        $this->wpActionsFilters();
        $this->setup();
    }

    function setup(){
    }

    /**
     * add styles and js
     */
    private function enqueueStyles(){
        wp_register_script('abvBootstrap', $this->themeUrl . "/js/bootstrap.min.js",false,false);

        wp_enqueue_script('jquery');
        wp_enqueue_script('abvBootstrap');

        wp_enqueue_style('abvTestblogStyles', $this->themeUrl . '/css/styles.css');
        wp_enqueue_style('abvTestblogStyle', $this->themeUrl . '/css/style.css');
    }

    /**
     * add hooks and filters WP
     */
    private function wpActionsFilters(){
        add_action( 'after_setup_theme', array($this,'addLanguage'));
        add_action( 'init', array($this, 'init' ));
        add_shortcode('abv_shortcode', array($this, 'shortcode'));
    }

    function shortcode($atts){
        extract(shortcode_atts(array(
            'id' => 0,
        ), $atts));
        $post = get_post($id);
        $content = apply_filters('the_content', $post->post_content);
        $content = str_replace(']]>', ']]>', $content);
        return $content;
    }

    /**
     * init setting theme
     */
    function init(){

    }

    /**
     * add translate
     */
    function addLanguage(){
        load_theme_textdomain('testblog', $this->themeDir. '/languages');
    }

}