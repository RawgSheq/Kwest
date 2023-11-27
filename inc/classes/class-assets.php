<?php
/**
 * Enqueue theme assets
 * 
 * @package Kwest
 */

 namespace KWEST_THEME\Inc;

 use Kwest_Theme\Inc\Traits\Singleton;

 class Assets {
    use Singleton;

    protected function __construct()
    {

        // load class.

        


        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Actions.
         */

        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        // Register styles.
        wp_register_style('style', get_stylesheet_uri(), [], filemtime(KWEST_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap', KWEST_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        // Enqueue Styles
        wp_enqueue_style('style');
        wp_enqueue_style('bootstrap');
    }

    public function register_scripts()
    {
        // Register Scripts
        wp_register_script('main', KWEST_DIR_URI . '/assets/main.js', [], filemtime(KWEST_DIR_PATH . '/assets/main.js'), true);
        wp_register_script('bootstrap', KWEST_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);


        // Enqueue Scripts.
        wp_enqueue_script('main');
        wp_enqueue_script('bootstrap');
    }



 }