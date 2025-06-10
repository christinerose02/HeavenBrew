<?php get_header(); ?>

<main>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
    <a href="index.php">
        <img src='<?php echo esc_url(get_template_directory_uri()); ?>/img/haven-brew-logo.png' width='100px'>
    </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item">
                <a class='nav-link' href='<?php echo esc_url(home_url('/menu')); ?>'>Menu</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                <li class="nav-item">
                    <a class="nav-link" href="user_account.php">
                        <i class="fas fa-shopping-cart"></i> <!-- Font Awesome User Icon -->
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_account.php">
                        <i class="fas fa-user"></i> <!-- Font Awesome User Icon -->
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    
    <!-- Coffee Shop Menu Section -->
    <div class="container mt-5">
        <h2 class="text-center">Heaven Brew Coffee Shop Menu</h2>
        <div class="row">
            <!-- Beverages Section -->
            <div class="col-md-6">
                <h4>Coffee & Beverages</h4>
                <ul class="list-unstyled">
                    <li><strong>Heavenly Espresso</strong> - $3.50</li>
                    <li><strong>Pure Americano</strong> - $3.75</li>
                    <li><strong>Heavenly Latte</strong> - $4.25</li>
                    <li><strong>Creamy Cappuccino</strong> - $4.25</li>
                    <li><strong>Chocolate Mocha</strong> - $4.75</li>
                    <li><strong>Silky Flat White</strong> - $4.25</li>
                    <li><strong>Iced Bliss Coffee</strong> - $4.75</li>
                    <li><strong>Cold Brew Magic</strong> - $5.25</li>
                    <li><strong>Velvety Hot Chocolate</strong> - $4.25</li>
                </ul>
            </div>

            <!-- Pastries & Snacks Section -->
            <div class="col-md-6">
                <h4>Pastries & Snacks</h4>
                <ul class="list-unstyled">
                    <li><strong>Heavenly Chocolate Croissant</strong> - $2.75</li>
                    <li><strong>Fresh Blueberry Muffin</strong> - $2.25</li>
                    <li><strong>Cinnamon Swirl Roll</strong> - $2.75</li>
                    <li><strong>Bagels with Cream Cheese</strong> - $3.25</li>
                    <li><strong>Avocado Heaven Toast</strong> - $4.50</li>
                    <li><strong>Heavenly Churros</strong> - $3.75</li>
                </ul>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Specialty Drinks Section -->
            <div class="col-md-6">
                <h4>Signature Specialty Drinks</h4>
                <ul class="list-unstyled">
                    <li><strong>Heavenly Caramel Macchiato</strong> - $4.75</li>
                    <li><strong>Hazelnut Dream Latte</strong> - $4.75</li>
                    <li><strong>Iced Chocolate Mocha</strong> - $5.25</li>
                    <li><strong>Matcha Paradise Latte</strong> - $5.25</li>
                    <li><strong>Golden Turmeric Latte</strong> - $5.25</li>
                    <li><strong>Heavenly Chai Latte</strong> - $4.25</li>
                </ul>
            </div>

            <!-- Cold Drinks Section -->
            <div class="col-md-6">
                <h4>Chilled Refreshments</h4>
                <ul class="list-unstyled">
                    <li><strong>Iced Heavenly Latte</strong> - $4.75</li>
                    <li><strong>Iced Matcha Delight</strong> - $5.25</li>
                    <li><strong>Frozen Coffee Dream</strong> - $5.75</li>
                    <li><strong>Chilled Iced Tea</strong> - $3.25</li>
                    <li><strong>Fruit Fusion Smoothie</strong> - $5.25</li>
                    <li><strong>Iced Lemonade Bliss</strong> - $3.75</li>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
