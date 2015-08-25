<?php
if ( !function_exists( 'hannan_setup' ) ) {
    function hannan_setup() {
        /* fitur untuk title */
        add_theme_support( 'title-tag' );

        // menyembunyikan bar admin pada tampilan depan
        // hide admin bar in front end
        add_filter('show_admin_bar', '__return_false');

        //fitur untuk post thumbnail
        // for thumbnail images
        add_theme_support( 'post-thumbnails' );
    }

    add_action( 'after_setup_theme', 'hannan_setup' );
}

if ( !function_exists( 'hannan_scripts' ) ) {

    function hannan_scripts() {

        //memuat css bootstrap dan css lainnya
        wp_enqueue_style( 'bootstrap_style', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.4' );
        wp_enqueue_style( 'common_style', get_template_directory_uri() . '/css/common.css', array(), '1.0.0' );
        wp_enqueue_style( 'style5_style', get_template_directory_uri() . '/css/style5.css', array(), '1.0.0' );
        wp_enqueue_style( 'swipebox_style', get_template_directory_uri() . '/css/swipebox.css', array(), '1.0.0' );


        //memuat file style.css
        wp_enqueue_style( 'hannan_style', get_stylesheet_uri(), array(), '1.0' );

        //memuat jQuery dan
        //memuat js bootstrap di footer
        wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) , '1.11.1', true );
        
        //memuat file script.js yang di directory js/
        wp_enqueue_script( 'hannan_script', get_template_directory_uri() . '/js/easyResponsiveTabs.js', array( ), '1.0');
        wp_enqueue_script( 'hannan_script', get_template_directory_uri() . '/js/jquery.flexisel.js', array( ), '1.0');
        wp_enqueue_script( 'hannan_script', get_template_directory_uri() . '/js/jquery.swipebox.min.js', array( ), '1.0');
        wp_enqueue_script( 'hannan_script', get_template_directory_uri() . '/js/responsiveslides.min.js', array( ), '1.0');
        //memuat core / costum js
        wp_enqueue_script( 'hannan_script', get_template_directory_uri() . '/js/core.js', array( ), '1.0');
        wp_enqueue_script( 'hannan_script', get_template_directory_uri() . '/js/custom.js', array( ), '1.0');

    }
    add_action( 'wp_enqueue_scripts', 'hannan_scripts' );
} // akhir function header

// membuat function menu bootstrap
if ( !function_exists( 'hannan_register_nav' ) ) {
    function hannan_register_nav() {
        register_nav_menus( array(
            'primary' => 'Navigasi Utama'
        ) );
    }
    add_action( 'after_setup_theme', 'hannan_register_nav' );
}
// untuk navwalker agar menggunakan navbar nya bootstrap

require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

// untuk mendaftarkan sidebar

if ( !function_exists( 'hannan_sidebar_widget' ) ) {

    function hannan_sidebar_widget(){
        $args = array(
            'name' => "Sidebar Widgets",
            'id' => "sidebar-widgets",
            'description' => 'ini sidebar nya',
            'class' => 'sidebar-widgets',
            'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar-widget-title-wrap"><h3 class="sidebar-widget-title">',
            'after_title' => '</h3></div>',
        );
        register_sidebar( $args );
    }
    
    add_action( 'widgets_init', 'hannan_sidebar_widget' );
    
}

// footer widget
if ( !function_exists( 'hannan_footer_widget' ) ) {

    function hannan_footer_widget(){
        $args = array(
            'name' => "footer Widgets",
            'id' => "footer-widgets",
            'description' => 'ini untuk widget di footer sebelah kiri tengah',
            'class' => 'sidebar-widgets',
            'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar-widget-title-wrap"><h3 class="sidebar-widget-title">',
            'after_title' => '</h3></div>',
        );
        register_sidebar( $args );
    }
    
    add_action( 'widgets_init', 'hannan_footer_widget' );
    
}

// footer widget 1 functions

if ( !function_exists( 'hannan_footer_1_widget' ) ) {

    function hannan_footer_1_widget(){
        $args = array(
            'name' => "footer 1 Widgets",
            'id' => "footer-1-widgets",
            'description' => 'ini widget di footer sebelah kanan tengah',
            'class' => 'sidebar-widgets',
            'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="sidebar-widget-title-wrap"><h3 class="sidebar-widget-title">',
            'after_title' => '</h3></div>',
        );
        register_sidebar( $args );
    }
    
    add_action( 'widgets_init', 'hannan_footer_1_widget' );
    
}

// comment functions
if (!function_exists('hannan_comment')) {

    function hannan_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);

        if ('div' == $args['style']) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
        ?>
        <?php echo $tag ?> <?php comment_class(empty($args['has_children']) ? 'media' : 'media parent' ) ?> id="comment-<?php comment_ID() ?>">
        <?php if ('div' != $args['style']) : ?>
            <div id="div-comment-<?php comment_ID() ?>" class="comments-top-top">
            <?php endif; ?>
            <div class="top-comment-left">
                <div class="media-object">
                    <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, $args['avatar_size']); ?>
                </div>
            </div>
            <div class="media-body">

                <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)); ?>">
                        <?php
                        /* translators: 1: date, 2: time */
                        printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time());
                        ?></a><?php edit_comment_link(__('(Edit)'), '  ', '');
                        ?>
                </div>

                <?php printf(__('<div class="fn comment-author">%s</div>'), get_comment_author_link()); ?>
                <?php if ($comment->comment_approved == '0') : ?>
                    <div class="comment-awaiting-moderation alert alert-warning"><?php _e('Your comment is awaiting moderation.'); ?></div>
                <?php endif; ?>

                <div class="comment-text">
                    <?php comment_text(); ?>
                    <div class="reply">
                        <?php comment_reply_link(array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                    </div>
                </div>


                <?php if ('div' != $args['style']) : ?>
                <?php endif; ?>
                <?php
    }
}

if (!function_exists('hannan_end_comment')) {

    function hannan_end_comment() {
        echo "</div></div>";
    }

}

// untuk costum background
add_custom_background();
?>