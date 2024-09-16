@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Details, Reviews, and More | Ghorer Bazar</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #f5f5f5;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    /* <!-- product view container css all section code --> */
    .main-product-view-container {
        padding: 20px 50px;
    }

    .product-view-content {
        background-color: #fff;
        width: 100%;
        display: grid;
        grid-template-columns: 1fr 1fr 0.5fr;
        padding: 0 50px;
    }

    .product-img-content {
        padding: 20px;
    }

    .product-img-content .img-card img {
        width: 100%;
    }

    .product-info-content {
        padding: 15px 5px;
        display: flex;
        flex-direction: column;
        gap: 5px;
        position: relative;
    }

    .product-info-content .title-content {
        text-transform: capitalize;
        font-size: 17px;
        font-weight: 600;
        font-family: "Roboto", sans-serif;
    }

    .product-info-content .title {
        font-size: 15px;
        font-family: "Roboto", sans-serif;
        font-weight: 500;
        font-style: normal;
    }

    .stock-content {
        color: #333;
        font-weight: 500;
        font-size: 14px;
        text-transform: uppercase;
    }

    .price-content {
        font-weight: 500;
        font-size: 16px;
        color: #FF5722;
        padding-top: 5px;
        font-family: "Roboto", sans-serif;
    }

    .content {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        margin-bottom: 10px;
    }

    .form-label {
        color: #333;
        font-weight: 500;
        font-size: 14px;
    }

    .kg-content,
    .quantity-content,
    .size-content {
        display: flex;
        gap: 10px;
    }

    .kg-item,
    .quantity-item,
    .size-item {
        width: 60px;
        background: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 35px;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        transition: background 0.3s;
    }

    .kg-item.active,
    .quantity-item.active,
    .size-item.active {
        background: #f74711;
    }

    .button-content {
        display: flex;
        gap: 5px;
        padding: 10px 0;
    }

    .button-content .btn {
        width: 100%;
        border-radius: 2px;
        font-weight: 500;
    }

    /* -------- products container section css -------------- */
    .main-container {
        padding: 20px 50px;
    }

    .product-container {
        padding: 20px 5px;
        background-color: #fff;
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
            padding: 10px 0;
        }

        /* -------- header container section css -------------- */
        .product-container {
            padding: 10px 5px;
        }

        .product-type h2 {
            font-size: 18px;
        }

        .product-content {
            grid-template-columns: 1fr 1fr;
        }

        .main-product-view-container {
            padding: 0;
        }

        .product-view-content {
            padding: 0;
            grid-template-columns: none;
            grid-template-rows: 0fr 0fr;
        }

        .product-img-content {
            padding: 0;
        }

        .product-img-content .img-card {
            height: 300px;
        }

        .product-img-content .img-card img {
            height: 100%;
            object-fit: fill;
        }

        .product-info-content {
            gap: 0;
            padding: 10px 7px;
        }

        .title-content {
            font-size: 16px;
        }

        .stock-content {
            display: none;
        }

        .quantity-content {
            font-size: 15px;
            text-transform: uppercase;
        }

        .price-content {
            font-size: 18px;
        }
    }
</style>

<body>
    <!-- product view container html all section code -->
    <div class="main-product-view-container">
        <div class="product-view-content">
            <div class="product-img-content">
                <div class="img-card">
                    <img src="{{ asset('Products/veg7.png') }}" alt="Product Image">
                </div>
            </div>
            <div class="product-info-content">
                <div class="title-content">
                    <span>Patacopy (পাতা কপি /বান্দা কপি)</span>
                </div>
                <span class="title">
                    টমেটোতে প্রচুর ভোজ্য বীজ থাকে এবং লাইকোপিন নামক অ্যান্টি-অক্সিডেন্টের কারণে এর রঙ লাল
                    হয়।
                </span>
                <div class="stock-content">
                    <span>Stock: 10</span>
                </div>
                <div class="price-content">
                    <span>BDT:580/=</span>
                </div>
                <div class="quantity-content">
                    <div class="content">
                        {{-- <div class="form-group">
                            <label class="form-label" for="">KG</label>
                            <div class="kg-content">
                                <div class="kg-item">1KG</div>
                                <div class="kg-item">2.5KG</div>
                                <div class="kg-item">3.5KG</div>
                                <div class="kg-item">4KG</div>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label class="form-label" for="">QUANTITY</label>
                            <div class="quantity-content">
                                <div class="quantity-item">1PS</div>
                                <div class="quantity-item">2PS</div>
                                <div class="quantity-item">3PS</div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label class="form-label" for="">SIZE</label>
                            <div class="size-content">
                                <div class="size-item">XL</div>
                                <div class="size-item">XXL</div>
                                <div class="size-item">M</div>
                                <div class="size-item">FREE</div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="button-content">
                    <form action="">
                        <input type="hidden" class="form-control kg" placeholder="KG">
                        <input type="hidden" class="form-control size" placeholder="SIZE">
                        <input type="hidden" class="form-control quantity" placeholder="QUANTITY">
                        <input type="submit" class="btn btn-success" value="AddToCart">
                    </form>
                    <form action="">
                        <input type="hidden" class="form-control kg" placeholder="KG">
                        <input type="hidden" class="form-control size" placeholder="SIZE">
                        <input type="hidden" class="form-control quantity" placeholder="QUANTITY">
                        <input type="submit" class="btn btn-warning" value="BuyNow">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- product container section html code -->
    <div class="main-container">
        <div class="product-container">
            <div class="product-type">
                <h2>Related products</h2>
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
    <script>
        const kgInputs = document.querySelectorAll('.kg');
        const sizeInputs = document.querySelectorAll('.size');
        const quantityInputs = document.querySelectorAll('.quantity');

        const kgItems = document.querySelectorAll('.kg-item');
        const sizeItems = document.querySelectorAll('.size-item');
        const quantityItems = document.querySelectorAll('.quantity-item');

        function handleKgClick() {
            kgItems.forEach(item => {
                item.addEventListener('click', () => {
                    kgInputs.forEach(input => input.value = item.textContent);
                    kgItems.forEach(i => i.classList.remove('active'));
                    item.classList.add('active');
                });
            });
        }

        function handleSizeClick() {
            sizeItems.forEach(item => {
                item.addEventListener('click', () => {
                    sizeInputs.forEach(input => input.value = item.textContent);
                    sizeItems.forEach(i => i.classList.remove('active'));
                    item.classList.add('active');
                });
            });
        }

        function handleQuantityClick() {
            quantityItems.forEach(item => {
                item.addEventListener('click', () => {
                    quantityInputs.forEach(input => input.value = item.textContent);
                    quantityItems.forEach(i => i.classList.remove('active'));
                    item.classList.add('active');
                });
            });
        }

        handleKgClick();
        handleSizeClick();
        handleQuantityClick();
    </script>
    @include('layouts.footer')
</body>

</html>
