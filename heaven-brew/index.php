<?php get_header(); ?>

<main id="main-content" role="main">
     <!--HERO SECTION-->
    <section class="hero text-center d-flex align-items-center justify-content-center py-5 text-white" 
        style="background-image: url('<?php echo esc_url(get_theme_mod('hero_background', get_template_directory_uri() . '/img/coffe.jpg')); ?>'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            position: relative; 
            height: 70vh;">

        <div class="overlay"></div>

        <div class="container position-relative" style="z-index: 1;">

        <?php 
            $hero_title = get_theme_mod('hero_title', '');
            $hero_description = get_theme_mod('hero_description', '');
            $hero_button_text = get_theme_mod('hero_button_text', '');
            
            // Fallback to translatable default values if empty
            if (!$hero_title) { 
                $hero_title = __('Welcome to Heaven Brew', 'heaven-brew'); 
            }
            if (!$hero_description) { 
                $hero_description = __('Enjoy the best coffee experience', 'heaven-brew'); 
            }
            if (!$hero_button_text) { 
                $hero_button_text = __('Explore Menu', 'heaven-brew'); 
            }
        ?>


            <h1><?php echo esc_html($hero_title); ?></h1>
            <p><?php echo esc_html($hero_description); ?></p>
            <a href="<?php echo esc_url(get_theme_mod('hero_button_url', home_url('/menu'))); ?>" 
                class="btn btn-primary" 
                aria-label="<?php echo esc_attr($hero_button_text); ?>">
                <?php echo esc_html($hero_button_text); ?>
            </a>

        </div>
    </section>









    <!--COFFEE SELECTION-->
    <section class="container py-5 d-flex flex-column align-items-center coffeeSelection">
        <div class="d-flex justify-content-center w-100 h2">
            <h2 class="text-center mb-4"><?php echo esc_html__('Our Coffee Selection', 'heaven-brew'); ?></h2>
        </div>
        <div class="row text-center justify-content-center">
            <?php
            $coffee_items = [
                'espresso'   => esc_html__('A strong, rich coffee brewed by forcing hot water through finely-ground coffee beans.', 'heaven-brew'),
                'cappuccino' => esc_html__('A perfect balance of espresso, steamed milk, and foam for a smooth and creamy taste.', 'heaven-brew'),
                'latte'      => esc_html__('A comforting blend of espresso and steamed milk with a light layer of foam on top.', 'heaven-brew'),
            ];
            
            foreach ($coffee_items as $coffee => $default_description) {
                $title = esc_html__( ucfirst($coffee), 'heaven-brew' ); // Translate coffee names here
                $image = get_theme_mod("coffee_{$coffee}_image", get_template_directory_uri() . '/img/transparent.png');
                $description = get_theme_mod("coffee_{$coffee}_description", $default_description);
            ?>
                <div class="col-md-3 mb-4">
                    <div class="card shadow p-3">
                        <img src="<?php echo esc_url($image); ?>" 
                            alt="<?php echo esc_attr($title); ?>" 
                            class="img-fluid mb-3 mx-auto" 
                            style="width: 80px; height: auto;">
                        <h4 class="mb-2"><?php echo esc_html($title); ?></h4>
                        <p class="text-muted small"><?php echo esc_html($description); ?></p>
                    </div>
                </div>
            <?php } ?>
            
        </div>
    </section>






    
    <!--ABOUT SECTION-->
    <section class="about py-5">
        <div class="container">
            <div class="row custom-flex align-items-center">
                <div class="col-md-6 aboutdetails">
                    <h2><?php echo esc_html(get_theme_mod('about_us_title', __('About Us', 'heaven-brew'))); ?></h2>
                    <p class="mb-3 text-justify">
                        <?php echo wp_kses_post(get_theme_mod('about_us_desc_1', __('At Brew Haven, we bring you the finest coffee sourced from around the world. Our expert baristas craft each cup with precision and passion to give you the best coffee experience.', 'heaven-brew'))); ?>
                    </p>
                    <p class="mb-4 text-justify">
                        <?php echo wp_kses_post(get_theme_mod('about_us_desc_2', __('Visit us and savor the art of coffee in a warm, inviting atmosphere.', 'heaven-brew'))); ?>
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="<?php echo esc_url(get_theme_mod('about_us_image', get_template_directory_uri() . '/img/haven-brew-logo.png')); ?>" 
                        class="img-fluid" width="350" height="350" alt="<?php echo esc_attr(__('Brew Haven Logo', 'heaven-brew')); ?>">
                </div>
            </div>
        </div>
    </section>






   <!-- TOP MENUS SECTION -->
   <section class="top-menus py-5 selection">
    <div class="container text-center">
        <h2 class="mb-4"><?php echo esc_html__('Our Top Coffee Selections', 'heaven-brew'); ?></h2>
        <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-5">
            <?php 
                $best_sellers = [
                    ['espresso', esc_html__('A strong, concentrated shot of coffee with aromatic flavor.', 'heaven-brew'), 'espresso.jpg'],
                    ['drip-coffee', esc_html__('A smooth, slow-brewed coffee with a balanced flavor.', 'heaven-brew'), 'brewedcoffee.webp'],
                    ['iced-cappuccino', esc_html__('A bold espresso with chilled milk and a frothy, airy top.', 'heaven-brew'), 'icedcap.jpg'],
                ];

                foreach ($best_sellers as $item) {
                    $title = esc_html__(ucwords(str_replace('-', ' ', $item[0])), 'heaven-brew'); // Translate coffee name
                    $image = get_theme_file_uri('/img/' . $item[2]);
                    $menu_url = add_query_arg(['menu_slug' => sanitize_title($item[0])], home_url('/single-m/'));
            ?>
                <div class="col d-flex flex-column align-items-center">
                    <div class="card shadow p-3 text-center h-120 top-card">
                        <img src="<?php echo esc_url($image); ?>" class="top-img" alt="<?php echo esc_attr($title); ?>">
                        <h3 class="mt-2"><?php echo esc_html($title); ?></h3>
                        <p><?php echo esc_html($item[1]); ?></p>
                        <a href="<?php echo esc_url($menu_url); ?>" class="btn btn-primary"><?php echo esc_html__('View Menu', 'heaven-brew'); ?></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>



                <style>
                    
                   .tight-gap {
                        --bs-gutter-x: 0px !important; 
                        --bs-gutter-y: 0px !important; 
                        margin-left: 0 !important; 
                        margin-right: 0 !important;
                    }

                    .tight-gap > .col {
                        padding-left: -20px !important;
                        padding-right: -20px !important;
                    }

                    .top-menus .container, .row {
                        padding: 0 !important;
                        margin: 0 !important;
                    }
                </style>



    <!-- BEST SECTION -->
    <section class="best-section">
        <h2><?php echo esc_html(__('🌟 Best – Heaven Brew at Your Doorstep!', 'heaven-brew')); ?></h2>
        <div class="cards forBest">
            
            <!-- 10-Minute Coffee -->
            <div class="best-card">
                <h3><?php echo esc_html(__('🚀 10-Minute Coffee, Now!', 'heaven-brew')); ?></h3>
                <p><?php echo esc_html(__('Craving a fresh brew? Get your favorite coffee delivered to your doorstep in just minutes!', 'heaven-brew')); ?></p>
            </div>

            <!-- Best Prices & Offers -->
            <div class="best-card">
                <h3><?php echo esc_html(__('💰 Best Prices & Offers', 'heaven-brew')); ?></h3>
                <p><?php echo esc_html(__('Enjoy premium coffee at the best prices, plus exclusive discounts and cashback deals.', 'heaven-brew')); ?></p>
            </div>

            <!-- Wide Selection -->
            <div class="best-card">
                <h3><?php echo esc_html(__('🌟 Wide Selection', 'heaven-brew')); ?></h3>
                <p><?php echo esc_html(__('Explore a variety of handcrafted coffees, teas, pastries, and more—crafted to perfection.', 'heaven-brew')); ?></p>
            </div>

            <!-- Easy Returns -->
            <div class="best-card">
                <h3><?php echo esc_html(__('🔄 Easy Returns', 'heaven-brew')); ?></h3>
                <p><?php echo esc_html(__('Not satisfied? Get a hassle-free refund or replacement, no questions asked!', 'heaven-brew')); ?></p>
            </div>

            <!-- Freshly Brewed Every Time -->
            <div class="best-card">
                <h3><?php echo esc_html(__('☕ Freshly Brewed Every Time', 'heaven-brew')); ?></h3>
                <p><?php echo esc_html(__('We ensure every cup is made fresh upon order, giving you the perfect taste and aroma in every sip.', 'heaven-brew')); ?></p>
            </div>

            <!-- Available Near You -->
            <div class="best-card">
                <h3><?php echo esc_html(__('📍 Available Near You', 'heaven-brew')); ?></h3>
                <p><?php echo esc_html(__('With multiple locations, we guarantee fast delivery and the freshest ingredients straight to your cup!', 'heaven-brew')); ?></p>
            </div>

        </div>
    </section>




    <!-- NEWSLETTER SECTION -->
    <section class="newsletter py-1 text-white" style="background: url('<?php echo esc_url(get_template_directory_uri() . "/img/newsletter.jpg"); ?>') no-repeat center center; background-size: cover; min-height: 60px;">
        <div class="container text-center">
            <h2 class="mb-2"><?php echo esc_html(__('Stay Updated with Our Latest Coffee Blends!', 'heaven-brew')); ?></h2>
            <p class="mb-3"><?php echo esc_html(__('Subscribe to our newsletter and never miss an update on our special brews, offers, and more.', 'heaven-brew')); ?></p>
            <form class="newsletter-form d-flex justify-content-center">
                <input type="email" class="form-control w-50 w-md-50 me-1" placeholder="<?php echo esc_attr(__('Enter your email', 'heaven-brew')); ?>" aria-label="<?php echo esc_attr(__('Enter your email for subscription', 'heaven-brew')); ?>" required style="height: 40px;">
                <button type="submit" class="btn btn-primary" style="height: 40px; font-size: 13px;"><?php echo esc_html(__('Subscribe', 'heaven-brew')); ?></button>
            </form>
        </div>
    </section>





    <!-- CONTACT US SECTION -->
    <section class="contact py-5">
    <div class="container">
        <h2 class="text-center"><?php echo esc_html(__('Get in Touch', 'heaven-brew')); ?></h2>
        <p class="text-center"><?php echo esc_html(__('Have any questions? Reach out to us through our contact page or visit us at our nearest outlet.', 'heaven-brew')); ?></p>
        <div class="row text-center mb-4">
            
            <div class="col-12 col-md-4">
                <div class="card p-3">
                    <h3><?php echo esc_html(__('Our Location', 'heaven-brew')); ?></h3>
                    <p><?php echo esc_html(__('123 Coffee Street, Brewtown', 'heaven-brew')); ?></p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card p-3">
                    <h3><?php echo esc_html(__('Call Us', 'heaven-brew')); ?></h3>
                    <p><?php echo esc_html(__(' +1 234 567 890', 'heaven-brew')); ?></p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card p-3">
                    <h3><?php echo esc_html(__('Email Us', 'heaven-brew')); ?></h3>
                    <p><?php echo esc_html(__('contact@brewhaven.com', 'heaven-brew')); ?></p>
                </div>
            </div>

        </div>
    </div>
</section>


</main>



<?php get_footer(); ?>

