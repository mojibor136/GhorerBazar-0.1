@include('layouts.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ghorer Bazar - Your Online Shopping Destination</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
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

    /* -------- category container section css -------------- */
    .category-container {
        padding: 20px 0;
    }

    .category-type {
        padding: 15px 0;
        padding-top: 0;
    }

    .category-type h2 {
        font-size: 20px;
        font-weight: 600;
        text-transform: uppercase;
        margin: 0;
        color: #333;
    }

    .category-content {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
        gap: 15px;
    }

    .category-content a .img-card {
        border-radius: 5px;
        overflow: hidden;
    }

    .category-content a .img-card img {
        width: 100%;
    }

    /* -------- products container section css -------------- */
    .product-container {
        padding: 20px 0;
    }

    .product-type {
        padding: 15px 0;
        padding-top: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .product-type h2 {
        font-size: 20px;
        font-weight: 600;
        text-transform: uppercase;
        margin: 0px;
        color: #333;
    }

    .product-type a {
        text-decoration: none;
        color: #f74711;
        font-size: 14px;
        font-weight: 600;
    }

    .product-type a:hover {
        color: #f74711;
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

        .category-content {
            grid-template-columns: 1fr 1fr 1fr 1fr;
            height: 80px;
            overflow: hidden;
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
                    <img src="Products/banner3.png" alt="">
                </div>
            </div>
        </div>
        <!-- category container section html code -->
        <div class="category-container">
            <div class="category-type">
                <h2>all category</h2>
            </div>
            <div class="category-content">
                <a href="">
                    <div class="img-card">
                        <img src="Products/veg1.png" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="img-card">
                        <img src="Products/veg5.png" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="img-card">
                        <img src="Products/elish.png" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="img-card">
                        <img src="Products/veg4.png" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="img-card">
                        <img src="Products/Untitled design (16).png" alt="">
                    </div>
                </a>
                <a href="">
                    <div class="img-card">
                        <img src="Products/Untitled design (15).png" alt="">
                    </div>
                </a>
            </div>
        </div>
        <!-- product container section html code -->
        <div class="product-container">
            <div class="product-type">
                <h2>all products</h2>
                <a href="{{ route('shop') }}">
                    <span>See more</span>
                    <i class="ri-arrow-left-right-line"></i>
                </a>
            </div>
            <div class="product-content">
                <a href="{{ route('product.view') }}">
                    <div class="product-card">
                        <div class="img-card">
                            <img src="Products/veg9.png" alt="">
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
                            <img src="Products/veg1.png" alt="">
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
                            <img src="Products/veg2.png" alt="">
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
                            <img src="Products/elish.png" alt="">
                        </div>
                        <div class="title-content">
                            <span class="title">ইলিশ হল সরিষার পেস্ট, কাঁচা মরিচ এবং সরিষার তেল দিয়ে তৈরি একটি ক্লাসিক
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
                            <img src="Products/veg4.png" alt="">
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
                            <img src="Products/veg5.png" alt="">
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
                            <img src="Products/oil1.jpeg" alt="">
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
                            <img src="Products/veg6.png" alt="">
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
                            <img src="Products/veg7.png" alt="">
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
                            <img src="Products/veg8.png" alt="">
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
</body>

</html>
@include('layouts.footer')
