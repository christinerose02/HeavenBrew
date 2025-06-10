<?php 
/* Template Name: Single Menu */
get_header();

$menu_slug = isset($_GET['menu_slug']) ? sanitize_title($_GET['menu_slug']) : '';

// Default values for the SERVING SIZES and ADD ONS
$default_sizes = array(__('Small', 'heaven-brew'), __('Medium', 'heaven-brew'), __('Large', 'heaven-brew')); 
$default_add_ons = array(__('Extra Sugar', 'heaven-brew'), __('Non-Dairy Milk', 'heaven-brew'), __('Caramel Syrup', 'heaven-brew'), __('Whipped Cream', 'heaven-brew'));

// Define menu items
$all_items = [
    [__('Espresso', 'heaven-brew'), __('A strong, concentrated shot of coffee.', 'heaven-brew'), 'espresso.jpg', 'espresso', __('₱100', 'heaven-brew')],
    [__('Doppio', 'heaven-brew'), __('A bold, double shot of espresso.', 'heaven-brew'), 'doppio.webp', 'espresso', __('₱120', 'heaven-brew')],
    [__('Ristretto', 'heaven-brew'), __('A strong, concentrated shot with a richer, bolder flavor.', 'heaven-brew'), 'Ristretto.jpg', 'espresso', __('₱110', 'heaven-brew')],
    [__('Lungo', 'heaven-brew'), __('A smooth, extended shot with a milder, aromatic taste.', 'heaven-brew'), 'Lungo.webp', 'espresso', __('₱115', 'heaven-brew')],
    [__('Cappuccino', 'heaven-brew'), __('A rich with velvety steamed milk and a airy foam layer.', 'heaven-brew'), 'Cappuccino.jpg', 'espresso', __('₱130', 'heaven-brew')],
    [__('Cortado', 'heaven-brew'), __('A bold espresso softened with warm milk.', 'heaven-brew'), 'Cortado.jpg', 'espresso', __('₱125', 'heaven-brew')],

    [__('Drip Coffee', 'heaven-brew'), __('A smooth, slow-brewed coffee with a balanced flavor.', 'heaven-brew'), 'brewedcoffee.webp', 'brew', __('₱90', 'heaven-brew')],
    [__('Pour-Over', 'heaven-brew'), __('A clean, aromatic brewed by hand for a refined taste.', 'heaven-brew'), 'pour.webp', 'brew', __('₱100', 'heaven-brew')],
    [__('French Press', 'heaven-brew'), __('A rich, full-bodied coffee brewed by immersion.', 'heaven-brew'), 'french.webp', 'brew', __('₱110', 'heaven-brew')],
    [__('AeroPress', 'heaven-brew'), __('A smooth, concentrated coffee brewed with pressure.', 'heaven-brew'), 'aero.webp', 'brew', __('₱120', 'heaven-brew')],
    [__('Cold Brew', 'heaven-brew'), __('A smooth, naturally sweet coffee brewed cold and slow.', 'heaven-brew'), 'coldb.jpeg', 'brew', __('₱130', 'heaven-brew')],
    [__('Moka Pot', 'heaven-brew'), __('A bold, espresso-like coffee brewed with steam pressure.', 'heaven-brew'), 'moka.webp', 'brew', __('₱115', 'heaven-brew')],

    [__('Iced Black Coffee', 'heaven-brew'), __('A crisp, refreshing coffee served chilled.', 'heaven-brew'), 'icedcoffee.webp', 'iced', __('₱100', 'heaven-brew')],
    [__('Iced Americano', 'heaven-brew'), __('Espresso with cold water for smooth, refreshing taste.', 'heaven-brew'), 'americano.jpg', 'iced', __('₱110', 'heaven-brew')],
    [__('Iced Coffee', 'heaven-brew'), __('A chilled, smooth coffee served over ice.', 'heaven-brew'), 'ice.jpg', 'iced', __('₱100', 'heaven-brew')],
    [__('Iced Cappuccino', 'heaven-brew'), __('A bold espresso with chilled milk and a frothy, airy top.', 'heaven-brew'), 'icedcap.jpg', 'iced', __('₱130', 'heaven-brew')],
    [__('Iced Flat White', 'heaven-brew'), __('An espresso with chilled milk for a creamy, velvety finish.', 'heaven-brew'), 'flat.jpg', 'iced', __('₱125', 'heaven-brew')],
    [__('Iced Hazelnut Coffee', 'heaven-brew'), __('Iced coffee infused with rich, nutty hazelnut flavor.', 'heaven-brew'), 'hazel.webp', 'iced', __('₱135', 'heaven-brew')],

    [__('Honey Almond Coffee', 'heaven-brew'), __('Coffee with sweet honey and nutty almond flavor.', 'heaven-brew'), 'honey.jpg', 'flavoured', __('₱140', 'heaven-brew')],
    [__('Coconut Mocha', 'heaven-brew'), __('A blend of coffee, chocolate, and creamy coconut.', 'heaven-brew'), 'coconut.jpg', 'flavoured', __('₱145', 'heaven-brew')],
    [__('Lavender Latte', 'heaven-brew'), __('An espresso with creamy milk and a floral hint of lavender.', 'heaven-brew'), 'flavoured.webp', 'flavoured', __('₱150', 'heaven-brew')],
    [__('Rose Coffee', 'heaven-brew'), __('A fragrant coffee infused with delicate rose flavor.', 'heaven-brew'), 'rose.jpg', 'flavoured', __('₱155', 'heaven-brew')],
    [__('Salted Caramel Coffee', 'heaven-brew'), __('Coffee with sweet caramel and a hint of sea salt.', 'heaven-brew'), 'salted.jpg', 'flavoured', __('₱160', 'heaven-brew')],
    [__('Cinnamon Dolce Latte', 'heaven-brew'), __('An espresso with creamy milk and sweet cinnamon spice.', 'heaven-brew'), 'dolce.jpg', 'flavoured', __('₱165', 'heaven-brew')],
];

// Find the selected menu item
$selected_item = null;
foreach ($all_items as $item) {
    if (sanitize_title($item[0]) === $menu_slug) {
        $selected_item = $item;
        break;
    }
}
?>

<main class="menu-containers my-5" id="main-content" role="main">
    <?php if (!empty($selected_item)) : ?>
        <div class="menu-content">
            <div class="menu-image">
                <?php 
                    $image_url = esc_url(get_template_directory_uri() . '/img/' . sanitize_file_name($selected_item[2]));
                ?>
                <img src="<?php echo $image_url; ?>" alt="<?php echo esc_attr($selected_item[0]); ?>">
            </div>
            <div class="menu-details">
                <h1>
                    <?php echo esc_html($selected_item[0]); ?>
                    <span class="menu-price">
                        <?php echo esc_html($selected_item[4]); ?>
                    </span>
                </h1>
                <p class="menu-description"><?php echo esc_html($selected_item[1]); ?></p>
                <h4 class="first-option"><?php _e('Choose Serving Size:', 'heaven-brew'); ?></h4>
                <div class="menu-options">
                    <?php foreach ($default_sizes as $size) : ?>
                        <label class="menu-option">
                            <input type="radio" name="size" value="<?php echo esc_attr($size); ?>"> 
                            <?php echo esc_html($size); ?>
                        </label>
                    <?php endforeach; ?>
                </div>
                <h4 class="mt-3"><?php _e('Add Extra:', 'heaven-brew'); ?></h4>
                <div class="menu-options">
                    <?php foreach ($default_add_ons as $addon) : ?>
                        <label class="menu-option">
                            <input type="radio" name="add_on" value="<?php echo esc_attr($addon); ?>"> 
                            <?php echo esc_html($addon); ?>
                        </label>
                    <?php endforeach; ?>
                </div>
                <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="btn"><?php _e('Back to Menu', 'heaven-brew'); ?></a>
            </div>
        </div>
    <?php else : ?>
        <p class="text-center"><?php _e('Menu item not found.', 'heaven-brew'); ?></p>
    <?php endif; ?>
</main>

<section class="best-sellers py-5">
    <div class="container text-center">
        <h2 class="mb-4"><?php _e('Our Best Sellers', 'heaven-brew'); ?></h2>
        <div class="row justify-content-center row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-5">
            <?php 
                $best_sellers = [
                    [__('Espresso', 'heaven-brew'), __('A strong, concentrated shot of coffee.', 'heaven-brew'), 'espresso.jpg', 'espresso', __('₱100', 'heaven-brew')],
                    [__('Drip Coffee', 'heaven-brew'), __('A smooth, slow-brewed coffee with a balanced flavor.', 'heaven-brew'), 'brewedcoffee.webp', 'brew', __('₱90', 'heaven-brew')],
                    [__('Iced Cappuccino', 'heaven-brew'), __('A bold espresso with chilled milk and a frothy, airy top.', 'heaven-brew'), 'icedcap.jpg', 'iced', __('₱130', 'heaven-brew')],
                    [__('Lavender Latte', 'heaven-brew'), __('An espresso with creamy milk and a floral hint of lavender.', 'heaven-brew'), 'flavoured.webp', 'flavoured', __('₱150', 'heaven-brew')],
                ];
                foreach ($best_sellers as $item) {
                    $image = esc_url(get_template_directory_uri() . '/img/' . sanitize_file_name($item[2]));
            ?>
                <div class="col menu-item" data-category="<?php echo esc_attr($item[3]); ?>">
                    <div class="card shadow p-3 text-center h-100 best-cards">
                        <img src="<?php echo $image; ?>" class="best-img card-img-top" alt="<?php echo esc_attr($item[0]); ?>">
                        <div class="card-body">
                            <h3 class="card-title mt-2 d-flex justify-content-between align-items-center">
                                <span class="menu-name"><?php echo esc_html($item[0]); ?></span>
                                <span class="text-muted"><?php echo esc_html($item[4]); ?></span>
                            </h3>
                            <p class="card-text"><?php echo esc_html($item[1]); ?></p>
                            <a href="<?php echo esc_url(home_url('/single-m/?menu_slug=' . sanitize_title($item[0]))); ?>" class="btn btn-primary"><?php _e('View Menu', 'heaven-brew'); ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
