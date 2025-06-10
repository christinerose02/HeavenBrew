

<?php


function heaven_brew_load_theme_textdomain() {
    $locale = get_locale(); // Get the current locale
    $path = get_template_directory() . '/languages/heaven-brew-' . $locale . '.mo';

    $loaded = load_textdomain('heaven-brew', $path);
    
    if ($loaded) {
        error_log('✅ heaven-brew textdomain loaded for locale: ' . $locale);
    } else {
        error_log('❌ heaven-brew textdomain NOT loaded for locale: ' . $locale);
    }
}
add_action('after_setup_theme', 'heaven_brew_load_theme_textdomain');




add_action('init', function() {
    error_log('Current Locale: ' . get_locale());
});


// function custom_load_polylang() {
//     $polylang_path = get_template_directory() . '/plugins/polylang/polylang.php';

//     if (file_exists($polylang_path)) {
//         require_once $polylang_path;
//     } else {
//         error_log('Polylang not found at: ' . $polylang_path);
//     }
// }
// add_action('init', 'custom_load_polylang'); 



// function custom_polylang_css() {
//     if ( function_exists( 'pll_the_languages' ) ) {
//         wp_enqueue_style( 'polylang-flags', plugin_dir_url( __FILE__ ) . 'wp-content/plugins/polylang/include/flags.css' );
//     }
// }
// add_action( 'wp_enqueue_scripts', 'custom_polylang_css' );



function theme_enqueue_bootstrap() {
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_bootstrap' );




function heaven_brew_theme_setup() {
    add_theme_support( 'automatic-feed-links' ); // Enables RSS feed links in the head
}
add_action( 'after_setup_theme', 'heaven_brew_theme_setup' );


function heaven_brew_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'heaven-brew' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here.', 'heaven-brew' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'heaven_brew_widgets_init' );

function heaven_brew_load_textdomain() {
    load_theme_textdomain('heaven-brew', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'heaven_brew_load_textdomain');












function enqueue_fontawesome() {
    wp_enqueue_style('font-awesome-6.4.2', get_template_directory_uri() . '/assets/css/all.min.css', array(), null, 'all');
    wp_enqueue_style('font-awesome-6.5.1', get_template_directory_uri() . '/assets/css/6.5.1-all.min.css', array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_fontawesome');


function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');



function brew_haven_scripts() {
    wp_enqueue_style('heaven-brew-style', get_stylesheet_uri());  
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/styles.css');  

    if (is_page(array('account', 'privacy-policy'))) { // Load only on Account & Privacy Policy pages
        wp_enqueue_script('jquery');
        wp_enqueue_script(
            'heaven-brew-script', 
            get_template_directory_uri() . '/script.js', 
            array('jquery'), 
            null, 
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'brew_haven_scripts');




function brew_haven_setup() {
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'heaven-brew'),
    ));

    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'brew_haven_setup');

// Register widget area
function brew_haven_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'heaven-brew'),
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'brew_haven_widgets_init');





//Activation privacy policy notice
function heaven_brew_activation_notice() {
    echo '<div class="updated"><p>' . __('By using this theme, you agree to its Privacy Policy. You can adjust settings in Appearance > Customize.', 'heaven-brew') . '</p></div>';
}
add_action('admin_notices', 'heaven_brew_activation_notice');


//Admin notices
function myth_admin_notice() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e('Thank you for using Heaven Brew!', 'heaven-brew'); ?></p>
    </div>
    <?php
}
add_action('admin_notices', 'myth_admin_notice');


//preventing redirects and modifications on activation
function myth_theme_activation() {
    // No redirection or forced page load
}
add_action('after_switch_theme', 'myth_theme_activation');


//TGM Plugin Activation
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';
require_once get_template_directory() . '/inc/recommended-plugins.php'; 



function remove_custom_fields_meta_box() {
    remove_meta_box('postcustom', 'post', 'normal');
    remove_meta_box('postcustom', 'page', 'normal');
}
add_action('admin_menu', 'remove_custom_fields_meta_box');















//CUSTOMIZER SUPPORT
function heavenbrew_customize_register( $wp_customize ) {
    // Footer Section
    $wp_customize->add_section( 'heavenbrew_footer_section', [
        'title'    => __( 'Footer Settings', 'heaven-brew' ),
        'priority' => 130,
    ]);

    $wp_customize->add_setting( 'heavenbrew_footer_text', [
        'default'           => get_bloginfo('name') . '. All Rights Reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ]);

    $wp_customize->add_control( 'heavenbrew_footer_text', [
        'label'   => __( 'Footer Text', 'heaven-brew' ),
        'section' => 'heavenbrew_footer_section',
        'type'    => 'text',
    ]);

    // Hero Section
    $wp_customize->add_section( 'hero_section', [
        'title'    => __( 'Hero Section', 'heaven-brew' ),
        'priority' => 30,
    ]);

    $wp_customize->add_setting( 'hero_background', [
        'default'           => get_template_directory_uri() . '/img/coffe.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ]);

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_background', [
        'label'    => __( 'Hero Background Image', 'heaven-brew' ),
        'section'  => 'hero_section',
        'settings' => 'hero_background',
    ]));

    $hero_fields = [
        'hero_title'       => [ 'default' => __('Welcome to Heaven Brew', 'heaven-brew'), 'type' => 'text' ],
        'hero_description' => [ 'default' => __('Enjoy the best coffee experience', 'heaven-brew'), 'type' => 'textarea' ],
        'hero_button_text' => [ 'default' => __('Explore Menu', 'heaven-brew'), 'type' => 'text' ],
        'hero_button_url'  => [ 'default' => home_url('/menu'), 'type' => 'url' ],
    ];
    

    foreach ( $hero_fields as $key => $data ) {
        $wp_customize->add_setting( $key, [
            'default'           => $data['default'],
            'sanitize_callback' => $data['type'] === 'url' ? 'esc_url_raw' : 'sanitize_text_field',
        ]);

        $wp_customize->add_control( $key, [
            'label'   => __( ucfirst( str_replace('_', ' ', $key) ), 'heaven-brew' ),
            'section' => 'hero_section',
            'type'    => $data['type'],
        ]);
    }

    // Coffee Selection Section
    $wp_customize->add_section( 'coffee_selection_section', [
        'title'       => __( 'Coffee Selection', 'heaven-brew' ),
        'priority'    => 30,
        'description' => __( 'Customize the coffee selection images and descriptions.', 'heaven-brew' ),
    ]);

    $coffee_items = [
        'espresso'    => 'A strong, rich coffee brewed by forcing hot water through finely-ground coffee beans.',
        'cappuccino'  => 'A perfect balance of espresso, steamed milk, and foam for a smooth and creamy taste.',
        'latte'       => 'A comforting blend of espresso and steamed milk with a light layer of foam on top.',
    ];

    foreach ( $coffee_items as $coffee => $default_description ) {
        $wp_customize->add_setting( "coffee_{$coffee}_image", [
            'default'           => get_template_directory_uri() . '/img/transparent.png',
            'sanitize_callback' => 'esc_url_raw',
        ]);

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, "coffee_{$coffee}_image", [
            'label'    => ucfirst( $coffee ) . ' ' . __( 'Image', 'heaven-brew' ),
            'section'  => 'coffee_selection_section',
            'settings' => "coffee_{$coffee}_image",
        ]));

        $wp_customize->add_setting( "coffee_{$coffee}_description", [
            'default'           => $default_description,
            'sanitize_callback' => 'sanitize_textarea_field',
        ]);

        $wp_customize->add_control( "coffee_{$coffee}_description", [
            'label'   => ucfirst( $coffee ) . ' ' . __( 'Description', 'heaven-brew' ),
            'section' => 'coffee_selection_section',
            'type'    => 'textarea',
        ]);
    }
}
add_action( 'customize_register', 'heavenbrew_customize_register' );

































class Brew_Haven_Customizer {
    public static function register( $wp_customize ) {
        $wp_customize->add_section('brew_haven_social_links', array(
            'title'    => __('Social Links', 'heaven-brew'),
            'priority' => 30,
        ));

        $social_networks = array('facebook', 'twitter', 'instagram', 'linkedin');

        foreach ($social_networks as $key) {
            $wp_customize->add_setting("brew_haven_{$key}_label", array(
                'default'   => '',
                'sanitize_callback' => 'sanitize_text_field',
            ));

            $wp_customize->add_control("brew_haven_{$key}_label", array(
                'label'    => sprintf(__(' %s Label', 'heaven-brew'), ucfirst($key)),
                'section'  => 'brew_haven_social_links',
                'type'     => 'text',
            ));

            $wp_customize->add_setting("brew_haven_{$key}_url", array(
                'default'   => '',
                'sanitize_callback' => 'esc_url_raw',
            ));

            $wp_customize->add_control("brew_haven_{$key}_url", array(
                'label'    => sprintf(__(' %s URL', 'heaven-brew'), ucfirst($key)),
                'section'  => 'brew_haven_social_links',
                'type'     => 'url',
            ));
        }
    }
}
add_action('customize_register', array('Brew_Haven_Customizer', 'register'));

// Add recommended theme support features
function brew_haven_theme_support() {
    add_theme_support('wp-block-styles'); // Enables block styles
    add_theme_support('responsive-embeds'); // Ensures embedded content is responsive
    add_theme_support('custom-header', array( // Allows custom header images
        'width'       => 1200,
        'height'      => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('custom-background', array( // Enables custom background colors or images
        'default-color' => 'ffffff',
        'default-image' => '',
    ));
    add_theme_support('align-wide'); // Enables wide/full alignment for blocks
    add_editor_style('editor-style.css'); // Matches the editor styling with the front-end
}
add_action('after_setup_theme', 'brew_haven_theme_support');

// Register block styles
function brew_haven_register_block_styles() {
    register_block_style(
        'core/paragraph',
        array(
            'name'  => 'custom-style',
            'label' => __('Custom Style', 'heaven-brew'),
            'inline_style' => '.wp-block-paragraph.is-style-custom-style { color: red; font-weight: bold; }'
        )
    );
}
add_action('init', 'brew_haven_register_block_styles');

// Register a custom block pattern
function brew_haven_register_block_patterns() {
    if (function_exists('register_block_pattern')) {
        register_block_pattern(
            'heaven-brew/custom-cta',
            array(
                'title'       => __('Custom Call to Action', 'heaven-brew'),
                'description' => __('A simple call-to-action section with a heading, text, and a button.', 'heaven-brew'),
                'content'     => '<!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"white","layout":{"type":"constrained"}} -->
                                <div class="wp-block-group alignfull has-white-color has-primary-background-color has-text-color has-background">
                                    <!-- wp:heading {"textAlign":"center"} -->
                                    <h2 class="has-text-align-center">' . __('Join Us Today!', 'heaven-brew') . '</h2>
                                    <!-- /wp:heading -->

                                    <!-- wp:paragraph {"align":"center"} -->
                                    <p class="has-text-align-center">' . __('Subscribe to our newsletter for exclusive updates and offers.', 'heaven-brew') . '</p>
                                    <!-- /wp:paragraph -->

                                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                                    <div class="wp-block-buttons">
                                        <!-- wp:button {"backgroundColor":"secondary","textColor":"white"} -->
                                        <div class="wp-block-button"><a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background">' . __('Subscribe Now', 'heaven-brew') . '</a></div>
                                        <!-- /wp:button -->
                                    </div>
                                    <!-- /wp:buttons -->
                                </div>
                                <!-- /wp:group -->',
                'categories'  => array('custom'),
                'keywords'    => array('cta', 'subscribe', 'call to action'),
            )
        );
    }
}
add_action('init', 'brew_haven_register_block_patterns');


//comment reply
function brew_haven_enqueue_comment_reply() {
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'brew_haven_enqueue_comment_reply');


// Enable Featured Image Support
add_theme_support('post-thumbnails');

// Set default sizes (optional)
set_post_thumbnail_size(150, 150, true); // Width, Height, Crop

// Custom image sizes (optional)
add_image_size('blog-thumbnail', 400, 250, true); // Custom size for blog archives
add_image_size('single-post', 800, 500, true); // Custom size for single posts



add_theme_support('html5', array('caption', 'gallery'));



















































function custom_menu_rewrite_rules() {
    add_rewrite_rule('^menu-item/([^/]*)/?', 'index.php?pagename=single-menu&menu_slug=$matches[1]', 'top');
}
add_action('init', 'custom_menu_rewrite_rules');

function add_menu_query_vars($vars) {
    $vars[] = 'menu_slug';
    return $vars;
}
add_filter('query_vars', 'add_menu_query_vars');



?>







