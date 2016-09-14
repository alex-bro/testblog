<?php
if (!defined('ABSPATH')) exit;


class AbvArticle
{
    /**
     * plugin directory
     *
     * @var string
     */
    public $pluginDir;

    /**
     * plugin URL
     *
     * @var
     */
    public $pluginUrl;

    /**
     * constructor class
     */
    function __construct()
    {
        $this->pluginDir = dirname(__FILE__);
        $this->pluginUrl = plugin_dir_url(__FILE__);
    }

    /**
     * run plugin
     */
    function run()
    {
        require('AbvWidget.php');
        $this->wpActionsFilters();
    }

    /**
     * init settings
     */
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
        wp_enqueue_style('abvArticleStyle', $this->pluginUrl . '/css/style.css');
    }

    /**
     * add transcription to plugin
     */
    function addLanguage()
    {
        load_plugin_textdomain('abv-article', false, $this->pluginDir . '/languages/');
    }

    /**
     * add hooks and filters WP
     */
    private function wpActionsFilters()
    {
        add_action('init', array($this, 'init'));
        add_action('wp_enqueue_scripts', array($this, 'enqueueStyles'));
        add_action('after_setup_theme', array($this, 'addLanguage'));
        add_action('widgets_init', array($this, 'registerAbvWidget'));
    }

    /**
     * register widget
     */
    function registerAbvWidget()
    {
        register_widget('AbvWidget');
    }


}