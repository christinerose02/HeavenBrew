<?php
/*
Template Name: Privacy Policy
*/

get_header(); ?>

<div class="privacy-container">
    <h1><?php _e('Privacy Policy', 'heaven-brew'); ?></h1>
    
    <p class="last-updated"><?php _e('Last updated:', 'heaven-brew'); ?> <?php echo date('F j, Y'); ?></p>

    <div class="policy-section">
        <h2 data-section="section1"><?php _e('1. Information We Collect', 'heaven-brew'); ?> <span class="toggle-icon">+</span></h2>
        <div class="section-content" id="section1">
            <p><?php _e('This theme does not collect personal data by default. However, if you enable optional features, we may collect:', 'heaven-brew'); ?></p>
            <ul>
                <li><?php _e('Contact information (if provided in forms)', 'heaven-brew'); ?></li>
                <li><?php _e('Cookies for website functionality', 'heaven-brew'); ?></li>
            </ul>
        </div>
    </div>

    <div class="policy-section">
        <h2 data-section="section2"><?php _e('2. How We Use Your Information', 'heaven-brew'); ?> <span class="toggle-icon">+</span></h2>
        <div class="section-content" id="section2">
            <p><?php _e('Any data collected is used solely to improve user experience and website functionality.', 'heaven-brew'); ?></p>
        </div>
    </div>

    <div class="policy-section">
        <h2 data-section="section3"><?php _e('3. Cookies', 'heaven-brew'); ?> <span class="toggle-icon">+</span></h2>
        <div class="section-content" id="section3">
            <p><?php _e('Our website may use cookies for analytics and functionality. You can disable cookies in your browser settings.', 'heaven-brew'); ?></p>
        </div>
    </div>
    
    <div class="policy-section">
        <h2 data-section="section4"><?php _e('4. Third-Party Services', 'heaven-brew'); ?> <span class="toggle-icon">+</span></h2>
        <div class="section-content" id="section4">
            <p><?php _e('If this theme integrates third-party services, they may collect data. Please refer to their privacy policies.', 'heaven-brew'); ?></p>
        </div>
    </div>

    <div class="policy-section">
        <h2 data-section="section5"><?php _e('5. Your Rights', 'heaven-brew'); ?> <span class="toggle-icon">+</span></h2>
        <div class="section-content" id="section5">
            <p><?php _e('You have the right to request access, correction, or deletion of any personal data collected.', 'heaven-brew'); ?></p>
        </div>
    </div>

    <div class="policy-section">
        <h2 data-section="section6"><?php _e('6. Contact Us', 'heaven-brew'); ?> <span class="toggle-icon">+</span></h2>
        <div class="section-content" id="section6">
            <p><?php _e('If you have any questions about this privacy policy, contact us at:', 'heaven-brew'); ?> <strong>your@email.com</strong></p>
        </div>
    </div>
</div>
<?php get_footer(); ?>

