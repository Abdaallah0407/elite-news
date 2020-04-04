<?php
    // Подключаем правильно стили
    add_action('wp_enqueue_scripts', 'add_styles');
    require_once('includes/add_styles.php');

    // Подключаем правильно скрипты
    add_action('wp_enqueue_scripts', 'add_scripts');
    require_once('includes/add_scripts.php');
    
    //Решимтрируем меню
    add_action('after_setup_theme', 'register_menu');
    require_once('includes/register_menu.php');

    // add_filter( 'loginout', 'my_loginout' );
    // function my_loginout() {
    //     return str_replace('href', 'class="top__nav__link" href', <a>);
    // }
    add_theme_support( 'post-thumbnails');
    add_image_size( 'my_size', 400, 300, true );


  function get_short_title($maxchar = 70){
    $title = get_the_title();
    if( iconv_strlen($title, 'utf-8') < $maxchar )
      return $title;
    $title = iconv_substr( $title, 0, $maxchar, 'utf-8' );
    $title = preg_replace('@(.*)\s[^\s]*$@s', '\\1 ...', $title); //убираем последнее слово, ибо оно в 99% случаев неполное
  
    return $title;
  }

      //Задаём ограничение описанию
  add_filter( 'excerpt_length', function(){
	return 10;
  } );
  add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '<a href="'. get_permalink($post) . '"> Читать дальше...</a>';
}
        function add_class_to_all_menu_anchors( $atts ) {
            $atts['class'] = 'top__nav__link';
        
            return $atts;
        }
        add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );