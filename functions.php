<?php
    function nav_menu(){
        register_nav_menus(array(
            'primary'=>__('Primary menu'),
            'footer' =>__('Footer menu')
            )
        );
    }
    add_action('after_setup_theme','nav_menu');

    function featureImg(){
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(300,300);
    }
    add_action('after_setup_theme','featureImg');

?>