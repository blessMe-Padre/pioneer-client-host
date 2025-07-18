<?php

add_action( 'after_setup_theme', 'inside_setup' );
function inside_setup() {
  load_theme_textdomain( 'insideTheme', get_template_directory() . '/languages' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'responsive-embeds' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'custom-logo');
  add_theme_support( 'html5', array( 'search-form', 'navigation-widgets' ) );
  add_theme_support( 'woocommerce' );
  global $content_width;

  ///Регистрация меню
  if ( !isset( $content_width ) ) { $content_width = 1920; }
    register_nav_menus( array( 'main-menu' => esc_html__( 'Главное меню', 'inside' ) ) );
    register_nav_menus( array( 'tocart' => esc_html__( 'Для корзины', 'inside' ) ) );
}
add_action( 'admin_notices', 'inside_notice' );
function inside_notice() {
  $user_id = get_current_user_id();
  $admin_url = ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http' ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $param = ( count( $_GET ) ) ? '&' : '?';
}
add_action( 'admin_init', 'inside_notice_dismissed' );
function inside_notice_dismissed() {
  $user_id = get_current_user_id();
  if ( isset( $_GET['dismiss'] ) )
  add_user_meta( $user_id, 'inside_notice_dismissed_7', 'true', true );
}
add_action( 'wp_enqueue_scripts', 'inside_enqueue' );
function inside_enqueue() {
  wp_enqueue_style( 'inside-style', get_stylesheet_uri() );
  wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'inside_footer' );
function inside_footer() {
?>
  <script>
  jQuery(document).ready(function($) {
  let deviceAgent = navigator.userAgent.toLowerCase();
  if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
  $("html").addClass("ios");
  $("html").addClass("mobile");
  }
  if (deviceAgent.match(/(Android)/)) {
  $("html").addClass("android");
  $("html").addClass("mobile");
  }
  if (navigator.userAgent.search("MSIE") >= 0) {
  $("html").addClass("ie");
  }
  else if (navigator.userAgent.search("Chrome") >= 0) {
  $("html").addClass("chrome");
  }
  else if (navigator.userAgent.search("Firefox") >= 0) {
  $("html").addClass("firefox");
  }
  else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
  $("html").addClass("safari");
  }
  else if (navigator.userAgent.search("Opera") >= 0) {
  $("html").addClass("opera");
  }
  });
  </script>
<?php
}

add_filter( 'document_title_separator', 'inside_document_title_separator' );
function inside_document_title_separator( $sep ) {
  $sep = esc_html( '|' );
  return $sep;
  }
  add_filter( 'the_title', 'inside_title' );
  function inside_title( $title ) {
  if ( $title == '' ) {
  return esc_html( '...' );
  } else {
  return esc_attr( $title );
  }
}

function inside_schema_type() {
  $schema = 'https://schema.org/';
  if ( is_single() ) {
  $type = "Article";
  } elseif ( is_author() ) {
  $type = 'ProfilePage';
  } elseif ( is_search() ) {
  $type = 'SearchResultsPage';
  } else {
  $type = 'WebPage';
}
echo 'itemscope itemtype="' . esc_url( $schema ) . esc_attr( $type ) . '"';
}
add_filter( 'nav_menu_link_attributes', 'inside_schema_url', 10 );
  function inside_schema_url( $atts ) {
  $atts['itemprop'] = 'url';
  return $atts;
}
if ( !function_exists( 'inside_wp_body_open' ) ) {
function inside_wp_body_open() {
  do_action( 'wp_body_open' );
  }
}
add_action( 'wp_body_open', 'inside_skip_link', 5 );
  function inside_skip_link() {
  echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__( 'Skip to the content', 'inside' ) . '</a>';
}
add_filter( 'the_content_more_link', 'inside_read_more_link' );
function inside_read_more_link() {
  if ( !is_admin() ) {
  return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( '...%s', 'inside' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
  }
}
add_filter( 'excerpt_more', 'inside_excerpt_read_more_link' );
function inside_excerpt_read_more_link( $more ) {
  if ( !is_admin() ) {
    global $post;
    return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . sprintf( __( '...%s', 'inside' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
  }
}

add_filter( 'big_image_size_threshold', '__return_false' );
add_filter( 'intermediate_image_sizes_advanced', 'inside_image_insert_override' );
function inside_image_insert_override( $sizes ) {
  unset( $sizes['medium_large'] );
  unset( $sizes['1536x1536'] );
  unset( $sizes['2048x2048'] );
  return $sizes;
}

//РЕГИСТРАЦИЯ ВИДЖЕТОВ
add_action( 'widgets_init', 'inside_widgets_init' );
function inside_widgets_init() {

  register_sidebar( array(
  'name' => esc_html__( 'Шапка Меню', 'inside' ),
  'id' => 'primary-widget-area',
  'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
  'after_widget' => '</li>',
  'before_title' => '<h3 class="widget-title">',
  'after_title' => '</h3>',
  ) );
  register_sidebar( array(
       'name'          => 'Шапка сайта справа', //название виджета в админ-панели
       'id'            => 'header_rwidget', //идентификатор виджета
       'description'   => 'контент для шапки', //описание виджета в админ-панели
       'before_widget' => '<div id="%1$s" class="inside_widget widget %2$s">', //открывающий тег виджета с динамичным идентификатором
       'after_widget'  => '<div class="clear"></div></div>', //закрывающий тег виджета с очищающим блоком
       'before_title'  => '<span class="widget-title inside_widget">', //открывающий тег заголовка виджета
       'after_title'   => '</span>',//закрывающий тег заголовка виджета
       ) );
   register_sidebar( array(
        'name'          => 'Шапка сайта верх 1', //название виджета в админ-панели
        'id'            => 'header_upwidget1', //идентификатор виджета
        'description'   => 'контент для шапки сверху возле номеров', //описание виджета в админ-панели
        'before_widget' => '<div id="%1$s" class="inside_widget widget %2$s">', //открывающий тег виджета с динамичным идентификатором
        'after_widget'  => '<div class="clear"></div></div>', //закрывающий тег виджета с очищающим блоком
        'before_title'  => '<span class="widget-title inside_widget">', //открывающий тег заголовка виджета
        'after_title'   => '</span>',//закрывающий тег заголовка виджета
        ) );
    register_sidebar( array(
         'name'          => 'Шапка сайта верх 2', //название виджета в админ-панели
         'id'            => 'header_upwidget2', //идентификатор виджета
         'description'   => 'контент для шапки сверху возле номеров 2', //описание виджета в админ-панели
         'before_widget' => '<div id="%1$s" class="inside_widget widget %2$s">', //открывающий тег виджета с динамичным идентификатором
         'after_widget'  => '<div class="clear"></div></div>', //закрывающий тег виджета с очищающим блоком
         'before_title'  => '<span class="widget-title inside_widget">', //открывающий тег заголовка виджета
         'after_title'   => '</span>',//закрывающий тег заголовка виджета
         ) );
  register_sidebar( array(
      'name'          => 'Подвал 1', //название виджета в админ-панели
      'id'            => 'footer_widget1', //идентификатор виджета
      'description'   => 'контент для шапки', //описание виджета в админ-панели
      'before_widget' => '<div id="%1$s" class="inside_widget widget %2$s">', //открывающий тег виджета с динамичным идентификатором
      'after_widget'  => '<div class="clear"></div></div>', //закрывающий тег виджета с очищающим блоком
      'before_title'  => '<span class="widget-title inside_widget">', //открывающий тег заголовка виджета
      'after_title'   => '</span>',//закрывающий тег заголовка виджета
      ) );
  register_sidebar( array(
       'name'          => 'Подвал 2', //название виджета в админ-панели
       'id'            => 'footer_widget2', //идентификатор виджета
       'description'   => 'контент для шапки', //описание виджета в админ-панели
       'before_widget' => '<div id="%1$s" class="inside_widget widget %2$s">', //открывающий тег виджета с динамичным идентификатором
       'after_widget'  => '<div class="clear"></div></div>', //закрывающий тег виджета с очищающим блоком
       'before_title'  => '<span class="widget-title inside_widget">', //открывающий тег заголовка виджета
       'after_title'   => '</span>',//закрывающий тег заголовка виджета
       ) );
  register_sidebar( array(
        'name'          => 'Подвал 3', //название виджета в админ-панели
        'id'            => 'footer_widget3', //идентификатор виджета
        'description'   => 'контент для шапки', //описание виджета в админ-панели
        'before_widget' => '<div id="%1$s" class="inside_widget widget %2$s">', //открывающий тег виджета с динамичным идентификатором
        'after_widget'  => '<div class="clear"></div></div>', //закрывающий тег виджета с очищающим блоком
        'before_title'  => '<span class="widget-title inside_widget">', //открывающий тег заголовка виджета
        'after_title'   => '</span>',//закрывающий тег заголовка виджета
        ) );
  register_sidebar( array(
         'name'          => 'Подвал 4', //название виджета в админ-панели
         'id'            => 'footer_widget4', //идентификатор виджета
         'description'   => 'контент для шапки', //описание виджета в админ-панели
         'before_widget' => '<div id="%1$s" class="inside_widget widget %2$s">', //открывающий тег виджета с динамичным идентификатором
         'after_widget'  => '<div class="clear"></div></div>', //закрывающий тег виджета с очищающим блоком
         'before_title'  => '<span class="widget-title inside_widget">', //открывающий тег заголовка виджета
         'after_title'   => '</span>',//закрывающий тег заголовка виджета
         ) );
}

add_action( 'wp_head', 'inside_pingback_header' );
function inside_pingback_header() {
  if ( is_singular() && pings_open() ) {
    printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
  }
}

add_action( 'comment_form_before', 'inside_enqueue_comment_reply_script' );
function inside_enqueue_comment_reply_script() {
  if ( get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
function inside_custom_pings( $comment ) {
  ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo esc_url( comment_author_link() ); ?></li>
  <?php
}
add_filter( 'get_comments_number', 'inside_comment_count', 0 );
function inside_comment_count( $count ) {
  if ( !is_admin() ) {
    global $id;
    $get_comments = get_comments( 'status=approve&post_id=' . $id );
    $comments_by_type = separate_comments( $get_comments );
    return count( $comments_by_type['comment'] );
  } else {
    return $count;
  }
}

add_action('wp_enqueue_scripts','inside_css_loading');
function inside_css_loading() {
  wp_enqueue_style('inside_css',get_stylesheet_directory_uri() . '/css/inside.css');
  wp_enqueue_style('pages_css',get_stylesheet_directory_uri() . '/css/pages.css');
  wp_enqueue_style('woo_css',get_stylesheet_directory_uri() . '/css/woo.css');
  wp_enqueue_style('rewrite_css',get_stylesheet_directory_uri() . '/css/rewrite.css');
  wp_enqueue_script('inside_js',get_stylesheet_directory_uri() . '/js/insidePopUp.js');
  wp_enqueue_script('buttons_js',get_stylesheet_directory_uri() . '/js/editCartButton.js');
}

function my_upload_size_limit( $limit ) {
add_filter( 'upload_size_limit', 'my_upload_size_limit' );
    return wp_convert_hr_to_bytes( '12M' );
}

///////////////WOOOOOOOOOOOOCOMMERCE////////////////

//Убираем отображение кол-ва товаров в категории

add_filter('woocommerce_subcategory_count_html','remove_count');

function remove_count(){
 $html='';
 return $html;
}


//Делаем поиск по категориям

add_action('pre_get_posts', 'search_by_cat');
function  search_by_cat() {
    global $wp_query;

    if (is_search()) {
        $cat =  intval($_GET['cat']);

        if($cat<0){
            $wp_query->query_vars['product_cat'] =  '';
        }else{
            $term = get_term_by('id',$cat,'product_cat');
            $wp_query->query_vars['cat'] = '';
            $wp_query->query_vars['product_cat'] =  $term->slug;
        }

    }
}
