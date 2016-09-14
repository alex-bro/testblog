<?php
if (!defined('ABSPATH')) exit;
class AbvWidget extends WP_Widget {

    /**
     * constructor class
     */
    function __construct() {
        parent::__construct(
            'abv_widget',
            'Newest Articles',
            array('description'=>'Show 5 newest posts from only one category')
        );
    }

    /**
     * showing widget
     *
     * @param array $args
     * @param array $instance
     */
    function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        include('tpl'.DIRECTORY_SEPARATOR.'widget.php');

    }

    /**
     * admin page form
     *
     * @param array $instance
     * @return false
     */
    function form( $instance ) {
        $title = @ $instance['title'] ?: 'Newest Articles';
        $category = @ $instance['category'] ?: '';

        include('tpl'.DIRECTORY_SEPARATOR.'admin_form.php');
    }

    /**
     * save widget settings
     *
     * @param array $new_instance
     * @param array $old_instance
     * @return array
     */
    function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['category'] = ( ! empty( $new_instance['category'] ) ) ? strip_tags( $new_instance['category'] ) : '';

        return $instance;
    }

    /**
     * show articles in widget
     *
     * @param $category
     */
    function getCategory($category){
        $posts = get_posts( array(
            'numberposts'     => 5,
            'offset'          => 0,
            'category_name'        => $category,
            'orderby'         => 'post_date',
            'order'           => 'DESC',
            'post_type'       => 'post',
            'post_status'     => 'publish'
        ) );
        if ($posts){
            $posts = array_reverse($posts);
        } else {
            return;
        }
        foreach($posts as $post){ setup_postdata($post);
            include('tpl'.DIRECTORY_SEPARATOR.'article.php');
        }
        wp_reset_postdata();
    }
}