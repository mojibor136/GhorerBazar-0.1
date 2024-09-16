<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    /* search container box css code section */
    .search-container {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #fff;
        z-index: 9999;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px 0;
        padding-bottom: 30px;
        visibility: hidden;
    }

    .close-icon {
        padding-bottom: 5px;
        cursor: pointer;
    }

    .close-icon i {
        font-size: 24px;
        color: #333;
    }

    .close-icon i:hover {
        color: red;

    }

    .search-content {
        width: 400px;
    }

    .search-box .form-control {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        border-radius: 20px;
        box-shadow: 1px 1px 3px 0px #ddd, -1px -1px 3px 0px #ddd;
        padding: 7px 10px;
    }

    .search-box .form-control .search {
        width: 100%;
        display: flex;
        align-items: center;
        padding: 2px 0;
    }

    .search-box .form-control input {
        width: -webkit-fill-available;
        border: none;
        outline: none;
        color: #444;
    }

    .search-box .form-control #search-icon {
        cursor: pointer;
        margin-right: 8px;
        margin-left: 3px;
        font-size: 14px;
        font-weight: 700;
        color: #444;
    }

    .search-list-content {
        border-radius: 10px;
        padding: 5px 0;
        width: 100%;
        display: none;
        max-height: 182px;
        overflow: auto;
    }

    .search-list-content a {
        text-decoration: none;
        text-transform: capitalize;
        color: #333;
        display: block;
        padding: 5px;
    }

    .search-list-content a:hover {
        background-color: #ddd;
        border-radius: 7px;
    }

    .search-list-content a i {
        font-size: 14px;
        margin-right: 3px;
    }

    .search-list-content a span {
        font-size: 14px;
    }

    /* -------- header container section css -------------- */
    .header {
        background-color: #f74711;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 50px;
        position: relative;
    }

    .side-category-container i {
        font-size: 24px;
        color: #ddd;
        cursor: pointer;
    }

    .logo-container {
        text-align: center;
    }

    .logo-container a {
        text-decoration: none;
        color: #ddd;
    }

    .logo-container a:hover {
        text-decoration: none;
        color: #ddd;
    }

    .logo-container h2 {
        margin: 0;
        font-size: 24px;
    }

    .cart-container {
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .cart-container i {
        font-size: 22px;
        color: #ddd;
        cursor: pointer;
    }

    /* side content cart and category css section */

    .side-category-card {
        position: absolute;
        width: 200px;
        height: 87.5vh;
        background-color: #fff;
        top: 100%;
        left: 0;
        padding: 0 10px;
        display: none;
    }

    .side-category-card .type {
        width: 100%;
        padding: 15px 0px;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 600;
    }

    .side-category-content {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .side-category-content .main-category-content {
        width: 100%;
    }

    .side-category-content .main-category-content .main-category {
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: space-between;
        text-transform: capitalize;
        font-weight: 500;
        font-size: 16px;
    }

    .side-category-content .main-category-content .sub-category {
        font-size: 14px;
        text-transform: capitalize;
        display: flex;
        flex-direction: column;
        padding: 0 3px;
        font-weight: 500;
        gap: 4px;
        display: none;
    }

    .side-category-content .main-category-content .sub-category a {
        text-decoration: none;
        color: #333;
    }

    .side-category-content .main-category-content .sub-category a:hover {
        color: #FF5722;
    }

    /* side cart all section css code */

    .side-cart-card {
        position: absolute;
        width: 250px;
        flex-grow: 1;
        background-color: #fff;
        top: 100%;
        right: 0;
        padding: 0 10px;
        display: none;
    }

    .side-cart-card .type {
        width: 100%;
        padding: 15px 0px;
        text-transform: uppercase;
        font-size: 16px;
        font-weight: 600;
    }

    .side-cart-container {
        display: flex;
        flex-direction: column;
    }

    .side-cart-content {
        display: flex;
        gap: 5px;
        align-items: center;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 5px;
        margin: 3px 0;
        cursor: pointer;
    }

    .side-cart-content .cart-img {
        width: 65px;
        border-radius: 5px;
        overflow: hidden;
    }

    .side-cart-content .cart-img img {
        width: 100%;
    }

    .cart-info-content {
        line-height: 1.3;
        text-transform: capitalize;
        font-size: 13px;
        font-weight: 600;
    }

    .cart-info-content strong {
        font-size: 12px;
        color: #f74711;
        font-weight: 700;
    }

    .cart-info-content .price-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-right: 12px;
    }

    .cart-button {
        position: absolute;
        bottom: 20px;
        width: -webkit-fill-available;
    }

    .cart-button form {
        padding-right: 10px;
    }

    .cart-button form button {
        width: 100%;
        background-color: #f74711;
        font-weight: 600;
        color: #eee;
    }

    .cart-button form button:hover {
        background-color: #FF5722;
        color: #ddd;
    }

    @media (max-width: 1280px) {
        .side-cart-card {
            height: 87vh;
        }
    }

    @media (max-width: 640px) {
        .search-content {
            width: 330px;
        }

        .side-cart-card {
            height: 85vh;
        }

        /* -------- header container section css -------------- */
        .header {
            padding: 5px 10px;
        }

        .logo-container h2 {
            font-size: 20px;
        }
    }
</style>

<body>
    <!-- search container box html code section -->
    <div class="search-container">
        <div class="close-icon">
            <i class="ri-close-line"></i>
        </div>
        <div class="search-content">
            <form action="" id="search-form">
                <div class="search-box">
                    <div class="form-control">
                        <div class="search">
                            <i class="ri-search-line" id="search-icon"></i>
                            <input type="text" placeholder="Search by ghorer bazar">
                        </div>
                        <div class="search-list-content">
                            <a href="">
                                <i class="ri-search-line"></i>
                                <span>beauty product list</span>
                            </a>
                            <a href="">
                                <i class="ri-search-line"></i>
                                <span>ghorer bazar product list</span>
                            </a>
                            <a href="">
                                <i class="ri-search-line"></i>
                                <span>daraz product list</span>
                            </a>
                            <a href="">
                                <i class="ri-search-line"></i>
                                <span>beauty product list</span>
                            </a>
                            <a href="">
                                <i class="ri-search-line"></i>
                                <span>ghorer bazar product list</span>
                            </a>
                            <a href="">
                                <i class="ri-search-line"></i>
                                <span>daraz product list</span>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- header container section html code -->
    <div class="header-container">
        <div class="header">
            <div class="side-category-container">
                <i class="ri-menu-line" id="menu"></i>
            </div>
            <div class="logo-container">
                <a href="{{ route('home') }}">
                    <h2>Ghorer <br> Bazar</h2>
                </a>
            </div>
            <div class="cart-container">
                <i class="search-icon ri-search-line" id="search"></i>
                <i class="ri-shopping-cart-line " id="cart"></i>
            </div>

            <!-- side content click show hide to icons -->
            <div class="side-category-card">
                <div class="type">
                    <span>All Category</span>
                </div>
                <div class="side-category-content">
                    <div class="main-category-content">
                        <div class="main-category">
                            <span>shak sobji</span>
                            <i class="ri-arrow-drop-right-line"></i>
                        </div>
                        <div class="sub-category">
                            <a href="">lal shak</a>
                            <a href="">pui shak</a>
                        </div>
                    </div>
                    <div class="main-category-content">
                        <div class="main-category">
                            <span>ghorer bazar</span>
                            <i class="ri-arrow-drop-right-line"></i>
                        </div>
                        <div class="sub-category">
                            <a href="">5kg mango</a>
                            <a href="">lal shak</a>
                            <a href="">pui shak</a>
                            <a href="">2kg elish</a>
                        </div>
                    </div>
                    <div class="main-category-content">
                        <div class="main-category">
                            <span>ghorer bazar</span>
                            <i class="ri-arrow-drop-right-line"></i>
                        </div>
                        <div class="sub-category">
                            <a href="">5kg mango</a>
                            <a href="">2kg elish</a>
                            <a href="">lal shak</a>
                            <a href="">pui shak</a>
                        </div>
                    </div>
                    <div class="main-category-content">
                        <div class="main-category">
                            <span>ghorer bazar</span>
                            <i class="ri-arrow-drop-right-line"></i>
                        </div>
                        <div class="sub-category">
                            <a href="">5kg mango</a>
                            <a href="">2kg elish</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-cart-card">
                <div class="type">
                    <span>AddToCart</span>
                </div>
                <div class="side-cart-container">
                    <div class="side-cart-content">
                        <div class="cart-img">
                            <img src="{{ asset('Products/veg6.png') }}" alt="">
                        </div>
                        <div class="cart-info-content">
                            <span>(লালশাক – অর্গানিক) Lal Shak <br><strong>X3</strong></span><br>
                            <div class="price-content">
                                <span>BDT: 500</span>
                                <input type="checkbox">
                            </div>
                        </div>
                    </div>
                    <div class="side-cart-content">
                        <div class="cart-img">
                            <img src="{{ asset('Products/veg7.png') }}" alt="">
                        </div>
                        <div class="cart-info-content">
                            <span>টমেটোতে প্রচুর ভোজ্য বীজ <br><strong>X3</strong></span><br>
                            <div class="price-content">
                                <span>BDT: 500</span>
                                <input type="checkbox">
                            </div>
                        </div>
                    </div>
                    <div class="side-cart-content">
                        <div class="cart-img">
                            <img src="{{ asset('Products/veg4.png') }}" alt="">
                        </div>
                        <div class="cart-info-content">
                            <span>পাতা কপি /বান্দা কপি কপি <br> <strong>X3</strong></span><br>
                            <div class="price-content">
                                <span>BDT: 500</span>
                                <input type="checkbox">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-button">
                    <form action="">
                        <button type="submit" class="btn">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        let m_category = document.querySelectorAll('.main-category');
        let s_category = document.querySelectorAll('.sub-category');

        m_category.forEach(function(button, index) {
            button.addEventListener('click', function() {
                var computedStyle = window.getComputedStyle(s_category[index]);
                if (computedStyle.display === "none" || computedStyle.display === "") {
                    s_category[index].style.display = "flex";
                } else {
                    s_category[index].style.display = "none";
                }
            });
        });

        // side content hide show side category and cart item js code

        let side_category_contetn = document.querySelector('.side-category-card');
        let side_cart_card = document.querySelector('.side-cart-card');
        let search_container = document.querySelector('.search-container');
        let close_button = document.querySelector('.close-icon i');
        let cart_button = document.querySelector('#cart');
        let menu_button = document.querySelector('#menu');
        let search_button = document.querySelector('#search');
        let search_icon = document.querySelector('#search-icon');
        let search_form = document.querySelector('#search-form');
        let side_cart_content = document.querySelectorAll('.side-cart-content');
        let checked = document.querySelectorAll('.price-content input');
        let body = document.querySelector('body');
        let i = true;

        search_icon.addEventListener('click', function() {
            search_form.submit();
        });

        side_cart_content.forEach(function(side_content, index) {
            side_content.addEventListener('click', function() {});
        });

        cart_button.addEventListener('click', function() {
            if (i == true) {
                side_cart_card.style.display = 'block';
                side_cart_card.style.zIndex = '999';
                body.style.overflow = 'hidden';
            } else {
                side_cart_card.style.display = 'none';
                body.style.overflow = 'auto';
            }
            i = !i;
        });

        search_button.addEventListener('click', function() {
            search_container.style.visibility = 'visible';
        });

        close_button.addEventListener('click', function() {
            search_container.style.visibility = 'hidden';
        });

        menu_button.addEventListener('click', function() {
            if (i == true) {
                side_category_contetn.style.display = 'block';
                side_category_contetn.style.zIndex = '999';
                body.style.overflow = 'hidden';
            } else {
                side_category_contetn.style.display = 'none';
                body.style.overflow = 'auto';
            }
            i = !i;
        })
        // search product section js code and technology
        let search = document.querySelector('.search input');
        let search_list = document.querySelector('.search-list-content');
        search.addEventListener('focus', function() {
            search_list.style.display = 'block';
        });
        search.addEventListener('blur', function() {
            search_list.style.display = 'none';
        });

        // checked system js code 

        let cartInfoContents = document.querySelectorAll('.cart-info-content');

        cartInfoContents.forEach(function(content) {
            content.addEventListener('click', function() {
                let checkbox = this.querySelector('input[type="checkbox"]');
                checkbox.checked = !checkbox.checked;
            });
        });
    </script>
</body>

</html>
