<?php /* Template Name: Page Account */ ?>

<?php get_header(); ?>


<main class="d-flex align-items-center justify-content-center vh-100 account" id="main-content" role="main"> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8"> <!-- Responsive column width -->

                <!-- Sign In Form -->
                <div id="signInForm" class="card p-4 shadow-lg">
                    <h2 class="text-center"><?php echo esc_html__('Log in with your account', 'heaven-brew'); ?></h2>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                        <?php wp_nonce_field('user_login_action', 'user_login_nonce'); ?>
                        <input type="hidden" name="action" value="user_login_action">
                        
                        <div class="mb-3">
                            <label for="email" class="form-label"><?php echo esc_html__('Email Address', 'heaven-brew'); ?></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="<?php echo esc_attr__('Email Address', 'heaven-brew'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label"><?php echo esc_html__('Password', 'heaven-brew'); ?></label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="<?php echo esc_attr__('Password', 'heaven-brew'); ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100"><?php echo esc_html__('Sign In', 'heaven-brew'); ?></button>
                    </form>
                    <p class="text-center mt-3">
                        <?php echo esc_html__("Don't have an account?", 'heaven-brew'); ?> 
                        <a href="#" id="showSignUp"><?php echo esc_html__('Sign Up', 'heaven-brew'); ?></a>
                    </p>
                </div>

                <!-- Sign Up Form -->
                <div id="signUpForm" class="card p-4 shadow-lg d-none">
                    <h2 class="text-center"><?php echo esc_html__('Create an account', 'heaven-brew'); ?></h2>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
                        <?php wp_nonce_field('user_register_action', 'user_register_nonce'); ?>
                        <input type="hidden" name="action" value="user_register_action">

                        <div class="mb-3">
                            <label for="fullname" class="form-label"><?php echo esc_html__('Full Name', 'heaven-brew'); ?></label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="<?php echo esc_attr__('Full Name', 'heaven-brew'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email-signup" class="form-label"><?php echo esc_html__('Email Address', 'heaven-brew'); ?></label>
                            <input type="email" class="form-control" id="email-signup" name="email" placeholder="<?php echo esc_attr__('Email Address', 'heaven-brew'); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="password-signup" class="form-label"><?php echo esc_html__('Password', 'heaven-brew'); ?></label>
                            <input type="password" class="form-control" id="password-signup" name="password" placeholder="<?php echo esc_attr__('Password', 'heaven-brew'); ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100"><?php echo esc_html__('Sign Up', 'heaven-brew'); ?></button>
                    </form>
                    <p class="text-center mt-3">
                        <?php echo esc_html__('Already have an account?', 'heaven-brew'); ?> 
                        <a href="#" id="showSignIn"><?php echo esc_html__('Sign In', 'heaven-brew'); ?></a>
                    </p>
                </div>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
