<?php
if (!defined('ABSPATH')) exit;


class AbvArticle
{
    public $pluginDir;
    public $pluginUrl;

    function __construct()
    {
        $this->pluginDir = dirname(__FILE__);
        $this->pluginUrl = plugin_dir_url(__FILE__);
    }

    function run()
    {
        $this->wpActionsFilters();
    }

    function init()
    {

    }

    /**
     *  activation method
     */
    function activation()
    {

    }

    /**
     * deactivation method
     */
    function deactivation()
    {

    }

    /**
     * add styles and js
     */
    function enqueueStyles()
    {
        wp_enqueue_style('abvNewPostStyle', $this->pluginUrl . '/css/styles.css');
    }

    /**
     * add hooks and filters WP
     */
    private function wpActionsFilters()
    {
        add_action('init', array($this, 'init'));
        add_action('wp_enqueue_scripts', array($this, 'enqueueStyles'));
        add_action('after_setup_theme', array($this, 'addLanguage'));
    }


    /**
     * add transcription to plugin
     */
    function addLanguage()
    {
        load_plugin_textdomain('abv-article', false, dirname(plugin_basename(__FILE__)) . '/languages/');
    }

}