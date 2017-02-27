<?php
//Scripts and styles
function load_style_script() {
    wp_enqueue_script('jquery-3.1.1.min.js', get_template_directory_uri() . '/js/lib/jquery-3.1.1.min.js');
    wp_enqueue_script('masonry.js', get_template_directory_uri() . '/js/lib/masonry.js');
    wp_enqueue_script('bootstrap.min.js', get_template_directory_uri() . '/js/lib/bootstrap.min.js');
    wp_enqueue_script('slick.min.js', get_template_directory_uri() . '/js/lib/slick.min.js');
    wp_enqueue_script('main.js', get_template_directory_uri() . '/js/main.js');
    wp_enqueue_style('bootstrap.min.css', get_template_directory_uri() . '/style/stylesheets/lib/bootstrap.min.css');
    wp_enqueue_style('bootstrap-grid.min.css', get_template_directory_uri() . '/style/stylesheets/lib/bootstrap-grid.min.css');
    wp_enqueue_style('bootstrap-reboot.min.css', get_template_directory_uri() . '/style/stylesheets/lib/bootstrap-reboot.min.css');
    wp_enqueue_style('slick.css', get_template_directory_uri() . '/style/stylesheets/lib/slick.css');
    wp_enqueue_style('slick-theme.css', get_template_directory_uri() . '/style/stylesheets/lib/slick-theme.css');
    wp_enqueue_style('main.css', get_template_directory_uri() . '/style/stylesheets/main.css');
}

add_action('wp_enqueue_scripts', 'load_style_script');
//Scripts and styles end
//MENU
register_nav_menu('nav-bar', 'menu');
//MENU-END

//Register sidebar
function true_register_wp_sidebars() {

    /* В боковой колонке - первый сайдбар */
    register_sidebar(
        array(
            'id' => 'true_side', // уникальный id
            'name' => 'Боковая колонка', // название сайдбара
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
            'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
            'after_title' => '</h3>'
        )
    );

}

add_action( 'widgets_init', 'true_register_wp_sidebars' );
//Register sidebar end

add_theme_support('post-thumbnails');

?>