<?php
     //  Main Sidebar
     if(function_exists('register_sidebar'))
          register_sidebar(array(
          'name' => 'Main Sidebar',
           'before_widget' => '<hr>',
            'after_widget' => '',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
     ));

//Habilitar thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 150, true);
?>