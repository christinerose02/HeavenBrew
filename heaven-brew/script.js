jQuery(document).ready(function ($) {
    $("#showSignUp").click(function (e) {
        e.preventDefault();
        $("#signInForm").addClass("d-none");
        $("#signUpForm").removeClass("d-none");
    });

    $("#showSignIn").click(function (e) {
        e.preventDefault();
        $("#signUpForm").addClass("d-none");
        $("#signInForm").removeClass("d-none");
    });
});




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


document.addEventListener('DOMContentLoaded', function() {
    const firstSection = document.querySelector('.policy-section h2');
    const firstContent = document.getElementById(firstSection.getAttribute('data-section'));
    
    firstSection.classList.add('active');
    firstContent.classList.add('active');
    firstSection.querySelector('.toggle-icon').textContent = '−'; 
    
    const sectionHeaders = document.querySelectorAll('.policy-section h2');
    
    sectionHeaders.forEach(function(header) {
        header.addEventListener('click', function() {
            const sectionId = this.getAttribute('data-section');
            const content = document.getElementById(sectionId);
            const toggleIcon = this.querySelector('.toggle-icon');
            
            this.classList.toggle('active');
            content.classList.toggle('active');
            
            if (this.classList.contains('active')) {
                toggleIcon.textContent = '−'; 
            } else {
                toggleIcon.textContent = '+'; 
            }
        });
    });
});