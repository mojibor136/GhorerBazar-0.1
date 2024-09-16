@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop Page</title>
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

    /* mian banner-container css all section */
    .main-container {
        padding: 20px 50px;
    }

    /* -------- banner container section css -------------- */
    .banner-content .banner-img {
        border-radius: 5px;
        overflow: hidden;
        height: 340px;
    }

    .banner-content .banner-img img {
        width: 100%;
        height: 100%;
    }

    /* -------- products container section css -------------- */
    .product-container {
        padding: 20px 0;
    }

    .product-type {
        padding: 15px 0;
        padding-top: 0;
    }

    .product-type h2 {
        font-size: 20px;
        font-weight: 600;
        text-transform: uppercase;
        margin: 0px;
        color: #333;
    }

    .product-content {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        row-gap: 20px;
        column-gap: 15px;
    }

    .product-content a {
        text-decoration: none;
        color: #333;
    }

    .product-content a:hover {
        color: #333;
    }

    .product-card {
        border-radius: 5px;
        overflow: hidden;
        border: 1px solid #eee;
    }

    .product-card .title-content {
        text-transform: capitalize;
        font-weight: 600;
        display: flex;
        text-align: center;
        flex-direction: column;
        padding: 5px 3px;
        font-size: 14px;
    }

    .product-card .title-content .title {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .product-card .title-content .price {
        font-weight: 600;
        font-size: 16px;
        color: #FF5722;
    }

    .product-card form {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .product-card form button {
        width: 100%;
        text-transform: capitalize;
        border-radius: 0;
        font-weight: 600;
        background-color: #f74711;
        color: #eee;
    }

    .product-card form button:hover {
        background-color: #FF5722;
        color: #ddd;
    }

    .product-card .img-card img {
        width: 100%;
    }

    @media (max-width: 640px) {
        .main-container {
            padding: 10px 5px;
        }

        .banner-content .banner-img {
            height: 200px;
        }

        .product-container {
            padding: 10px 0;
        }

        .product-content {
            grid-template-columns: 1fr 1fr;
        }
    }
</style>

<body>
    <!-- main-container html all section  -->
    <div class="main-container">
        <!-- banner container section html code -->
        <div class="banner-container">
            <div class="banner-content">
                <div class="banner-img">
                    <img src="Products/Untitled design (10).png" alt="">
                </div>
            </div>
        </div>
        <!-- product container section html code -->
        <div class="product-container">
            <div class="product-type">
                <h2>all products</h2>
            </div>
            <div class="product-content">
                <a href="{{ route('product.view') }}">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="{{ asset('Products/veg9.png') }}" alt="">
                        </div>
                        <div class="title-content">
                            <span class="title">হাইব্রিড বাংলাদেশী সবজি মোম করলা, শীতের মেলন, জালি কুমড়া কুমড়া 10
                                বীজ</span>
                            <span class="price">BDT:680/=</span>
                        </div>
                        <form action="">
                            <button type="submit" class="btn">AddToCart</button>
                        </form>
                    </div>
                </a>
                <a href="">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="{{ asset('Products/veg1.png') }}" alt="">
                        </div>
                        <div class="title-content">
                            <span class="title">সুন্দরবনের গহীন অরণ্যের চাক থেকে সংগৃহীত খাঁটি মধু</span>
                            <span class="price">BDT:680/=</span>
                        </div>
                        <form action="">
                            <button type="submit" class="btn">AddToCart</button>
                        </form>
                    </div>
                </a>
                <a href="">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="{{ asset('Products/veg2.png') }}" alt="">
                        </div>
                        <div class="title-content">
                            <span class="title">মূলা সাদা (মুলি)- পাতা ছাড়া</span>
                            <span class="price">BDT:680/=</span>
                        </div>
                        <form action="">
                            <button type="submit" class="btn">AddToCart</button>
                        </form>
                    </div>
                </a>
                <a href="">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="{{ asset('Products/elish.png') }}" alt="">
                        </div>
                        <div class="title-content">
                            <span class="title">ইলিশ হল সরিষার পেস্ট, কাঁচা মরিচ এবং সরিষার তেল দিয়ে তৈরি একটি
                                ক্লাসিক
                                বাংলাদেশী রেসিপি। একজন বাঙালি যে থালা বানায়, আমি ব্যক্তিগতভাবে মনে করি</span>
                            <span class="price">BDT:680/=</span>
                        </div>
                        <form action="">
                            <button type="submit" class="btn">AddToCart</button>
                        </form>
                    </div>
                </a>
                <a href="">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="{{ asset('Products/veg4.png') }}" alt="">
                        </div>
                        <div class="title-content">
                            <span class="title">Patacopy (পাতা কপি /বান্দা কপি)</span>
                            <span class="price">BDT:680/=</span>
                        </div>
                        <form action="">
                            <button type="submit" class="btn">AddToCart</button>
                        </form>
                    </div>
                </a>
                <a href="">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="{{ asset('Products/veg5.png') }}" alt="">
                        </div>
                        <div class="title-content">
                            <span class="title">হাইব্রিড ফুলকপি বীজ/ White Cauliflower Seeds- মিনি প্যাক</span>
                            <span class="price">BDT:680/=</span>
                        </div>
                        <form action="">
                            <button type="submit" class="btn">AddToCart</button>
                        </form>
                    </div>
                </a>
                <a href="">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="{{ asset('Products/oil1.jpeg') }}" alt="">
                        </div>
                        <div class="title-content">
                            <span class="title">ওজন কমানোর জন্য সরিষার তেল: কেন ওজন কমানোর জন্য সরিষার তেল বেছে নেওয়া
                                উচিত</span>
                            <span class="price">BDT:680/=</span>
                        </div>
                        <form action="">
                            <button type="submit" class="btn">AddToCart</button>
                        </form>
                    </div>
                </a>
                <a href="">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="{{ asset('Products/veg6.png') }}" alt="">
                        </div>
                        <div class="title-content">
                            <span class="title">Vegetable – Organic Red Spinach (লালশাক – অর্গানিক) Lal Shak</span>
                            <span class="price">BDT:680/=</span>
                        </div>
                        <form action="">
                            <button type="submit" class="btn">AddToCart</button>
                        </form>
                    </div>
                </a>
                <a href="">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="{{ asset('Products/veg7.png') }}" alt="">
                        </div>
                        <div class="title-content">
                            <span class="title">
                                টমেটোতে প্রচুর ভোজ্য বীজ থাকে এবং লাইকোপিন নামক অ্যান্টি-অক্সিডেন্টের কারণে এর রঙ লাল
                                হয়।</span>
                            <span class="price">BDT:680/=</span>
                        </div>
                        <form action="">
                            <button type="submit" class="btn">AddToCart</button>
                        </form>
                    </div>
                </a>
                <a href="">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="{{ asset('Products/veg8.png') }}" alt="">
                        </div>
                        <div class="title-content">
                            <span class="title">
                                মিস্টি কুমড়া (মিষ্টি কুমড়া) বীজ - 20 পিসি</span>
                            <span class="price">BDT:680/=</span>
                        </div>
                        <form action="">
                            <button type="submit" class="btn">AddToCart</button>
                        </form>
                    </div>
                </a>
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
    </script>
    @include('layouts.footer')
</body>

</html>
