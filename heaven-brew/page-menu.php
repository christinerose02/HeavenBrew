<?php /* Template Name: Menu */ ?>
<?php get_header(); ?>

<main class="container my-5" id="main-content" role="main">
<h1 class="text-center mb-4"><?php echo __('Our Menu', 'heaven-brew'); ?></h1>

    <!-- Categories Navigation -->
    <ul class="nav nav-pills justify-content-center mb-4" id="menu-categories">
        <li class="nav-item"><a class="nav-link active" href="#all" data-category="all"><?php echo esc_html__('All', 'heaven-brew'); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#espresso" data-category="espresso"><?php echo esc_html__('Espresso-Based Coffees', 'heaven-brew'); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#brew" data-category="brew"><?php echo esc_html__('Brewed & Specialty Coffees', 'heaven-brew'); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#iced" data-category="iced"><?php echo esc_html__('Iced Coffees & Variations', 'heaven-brew'); ?></a></li>
        <li class="nav-item"><a class="nav-link" href="#flavoured" data-category="flavoured"><?php echo esc_html__('Flavored & Specialty Lattes', 'heaven-brew'); ?></a></li>
    </ul>



    <!-- List of Menu Items -->
    <section class="top-menus py-5">
        <div class="container text-center menus-container">
            <div class="row row-cols-1 row-cols-md-3 g-2 rowMenu" id="menu-items">
                <?php 
                    $all_items = [
                        [__("Espresso", "heaven-brew"), __("A strong, concentrated shot of coffee.", "heaven-brew"), "espresso.jpg", "espresso", "₱100"],
                        [__("Doppio", "heaven-brew"), __("A bold, double shot of espresso.", "heaven-brew"), "doppio.webp", "espresso", "₱120"],
                        [__("Ristretto", "heaven-brew"), __("A strong, concentrated shot with a richer, bolder flavor.", "heaven-brew"), "Ristretto.jpg", "espresso", "₱110"],
                        [__("Lungo", "heaven-brew"), __("A smooth, extended shot with a milder, aromatic taste.", "heaven-brew"), "Lungo.webp", "espresso", "₱115"],
                        [__("Cappuccino", "heaven-brew"), __("A rich with velvety steamed milk and a airy foam layer.", "heaven-brew"), "Cappuccino.jpg", "espresso", "₱130"],
                        [__("Cortado", "heaven-brew"), __("A bold espresso softened with warm milk.", "heaven-brew"), "Cortado.jpg", "espresso", "₱125"],

                        [__("Drip Coffee", "heaven-brew"), __("A smooth, slow-brewed coffee with a balanced flavor.", "heaven-brew"), "brewedcoffee.webp", "brew", "₱90"],
                        [__("Pour-Over", "heaven-brew"), __("A clean, aromatic brewed by hand for a refined taste.", "heaven-brew"), "pour.webp", "brew", "₱100"],
                        [__("French Press", "heaven-brew"), __("A rich, full-bodied coffee brewed by immersion.", "heaven-brew"), "french.webp", "brew", "₱110"],
                        [__("AeroPress", "heaven-brew"), __("A smooth, concentrated coffee brewed with pressure.", "heaven-brew"), "aero.webp", "brew", "₱120"],
                        [__("Cold Brew", "heaven-brew"), __("A smooth, naturally sweet coffee brewed cold and slow.", "heaven-brew"), "coldb.jpeg", "brew", "₱130"],
                        [__("Moka Pot", "heaven-brew"), __("A bold, espresso-like coffee brewed with steam pressure.", "heaven-brew"), "moka.webp", "brew", "₱115"],

                        [__("Iced Black Coffee", "heaven-brew"), __("A crisp, refreshing coffee served chilled.", "heaven-brew"), "icedcoffee.webp", "iced", "₱100"],
                        [__("Iced Americano", "heaven-brew"), __("Espresso with cold water for smooth, refreshing taste.", "heaven-brew"), "americano.jpg", "iced", "₱110"],
                        [__("Iced Coffee", "heaven-brew"), __("A chilled, smooth coffee served over ice.", "heaven-brew"), "ice.jpg", "iced", "₱100"],
                        [__("Iced Cappuccino", "heaven-brew"), __("A bold espresso with chilled milk and a frothy, airy top.", "heaven-brew"), "icedcap.jpg", "iced", "₱130"],
                        [__("Iced Flat White", "heaven-brew"), __("An espresso with chilled milk for a creamy, velvety finish.", "heaven-brew"), "flat.jpg", "iced", "₱125"],
                        [__("Iced Hazelnut Coffee", "heaven-brew"), __("Iced coffee infused with rich, nutty hazelnut flavor.", "heaven-brew"), "hazel.webp", "iced", "₱135"],

                        [__("Honey Almond Coffee", "heaven-brew"), __("Coffee with sweet honey and nutty almond flavor.", "heaven-brew"), "honey.jpg", "flavoured", "₱140"],
                        [__("Coconut Mocha", "heaven-brew"), __("A blend of coffee, chocolate, and creamy coconut.", "heaven-brew"), "coconut.jpg", "flavoured", "₱145"],
                        [__("Lavender Latte", "heaven-brew"), __("An espresso with creamy milk and a floral hint of lavender.", "heaven-brew"), "flavoured.webp", "flavoured", "₱150"],
                        [__("Rose Coffee", "heaven-brew"), __("A fragrant coffee infused with delicate rose flavor.", "heaven-brew"), "rose.jpg", "flavoured", "₱155"],
                        [__("Salted Caramel Coffee", "heaven-brew"), __("Coffee with sweet caramel and a hint of sea salt.", "heaven-brew"), "salted.jpg", "flavoured", "₱160"],
                        [__("Cinnamon Dolce Latte", "heaven-brew"), __("An espresso with creamy milk and sweet cinnamon spice.", "heaven-brew"), "dolce.jpg", "flavoured", "₱165"]
                    ];

                    foreach ($all_items as $item) {
                        $image_url = wp_get_attachment_url($item[2]);

                        if (!$image_url) {
                            $image_url = get_theme_file_uri("/img/" . esc_attr($item[2]));
                        }
                ?>
                    <div class="col menu-item" data-category="<?php echo esc_attr($item[3]); ?>">
                        <div class="card shadow p-3 text-center h-100 menu-card">
                            <img src="<?php echo esc_url($image_url); ?>" class="menu-img card-img-top" alt="<?php echo esc_attr($item[0]); ?>">
                            <div class="card-body">
                                <h3 class="card-title mt-2 d-flex justify-content-between align-items-center">
                                    <span class="menu-name"><?php echo esc_html($item[0]); ?></span>
                                    <span class="text-muted"><?php echo esc_html($item[4]); ?></span>
                                </h3>
                                <p class="card-text"><?php echo esc_html($item[1]); ?></p>
                                <a href="<?php echo esc_url(home_url('/single-menu/?menu_slug=' . sanitize_title($item[0]))); ?>" class="btn btn-primary custom-btn"><?php echo esc_html(__('View Menu', 'heaven-brew')); ?></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>



</main>


<script>
    document.addEventListener("DOMContentLoaded", function () {
    const categoryLinks = document.querySelectorAll("#menu-categories .nav-link");
    const menuItems = document.querySelectorAll(".menu-item");

    console.log("Category Links Found:", categoryLinks.length);
    console.log("Menu Items Found:", menuItems.length);

    const filterMenu = (category) => {
        console.log("Filtering for category:", category);
        menuItems.forEach(item => {
            const itemCategory = item.getAttribute("data-category").trim();
            console.log(`Item: ${itemCategory} | Match: ${itemCategory === category || category === "all"}`);
            if (category === "all" || itemCategory === category) {
                item.classList.remove("d-none");
            } else {
                item.classList.add("d-none");
            }
        });
    };

    filterMenu("all");

        categoryLinks.forEach(link => {
            link.addEventListener("click", function (event) {
                event.preventDefault();
                const selectedCategory = this.getAttribute("data-category").trim();
                console.log("Clicked category:", selectedCategory);

                document.querySelector("#menu-categories .active")?.classList.remove("active");
                this.classList.add("active");

                filterMenu(selectedCategory);
            });
        });
    });

</script>



<?php get_footer(); ?>
