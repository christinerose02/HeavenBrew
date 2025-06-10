<?php get_header(); ?>

<div id="main-wrapper" class="error-page">
    <main id="content">
        <h1><?php _e("Oops! That page can't be found.", "heaven-brew"); ?></h1>
        <p><?php _e("It looks like nothing was found at this location.", "heaven-brew"); ?></p>
    </main>
</div>



<style>
    #main-wrapper {
    flex: 1; /* Pushes the footer down */
    display: flex;
    align-items: center; /* Centers content */
    justify-content: center; /* Centers content */
    text-align: center;
    padding: 20px;
    min-height: calc(100vh - 100px); /* Adjust 100px based on your footer height */
    margin-bottom: -250px;
}
    .error-page {
        position: relative;
        text-align: center;
        padding: 50px 10%;
        width: 45%;
        margin: 50px auto;
        margin-top: 80px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        margin-bottom: 10% !important;
    }

    .error-page h1 {
        font-size: 24px;
        color: #333;
    }

    .error-page p {
        margin-top: 20px;
        font-size: 16px;
        color: #6f4e37;
    }

    .error-page form {
        align-items: center;
        justify-content: center;
        margin-top: 50px;
        position:relative;
    }

    .error-page input[type="search"] {
        padding: 12px;
        width: 100%;
        max-width: 400px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .error-page input[type="submit"] {
        margin-left: 10px;
        margin-top: 10px;
        width: 30%;
        padding: 12px 20px;
        border: none;
        background-color: #6f4e37;
        color: white;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        border: 1px solid #6f4e37;

    }

    .error-page input[type="submit"]:hover {
        border: 1px solid #6f4e37;
        background: none;
        color: #6f4e37;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .error-page {
            width: 70% !important;
            height: 50% !important;
        }
    }

    
</style>


<?php get_footer(); ?>


