<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            background-color: #eee;
            display: grid;
            width: 100%;
            position: fixed;
            grid-template-columns: 220px 1fr;
            grid-template-rows: 70px 1fr;
            grid-template-areas:
                "sidebar header"
                "sidebar main";
        }

        .header {
            grid-area: header;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #fff;
            position: relative;
        }

        .search-box {
            border: 1px solid #ddd;
            padding: 7px;
            border-radius: 7px;
            color: #aaa;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .search-box input {
            border: none;
            outline: none;
            width: 200px;
            color: #555;
            font-size: 15px;
            font-family: 'Roboto', sans-serif;
        }

        .menu-bar {
            display: none;
        }

        .admin-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .admin-content .admin-icons {
            display: flex;
            gap: 10px;
        }

        .admin-content .admin-icons a {
            text-decoration: none;
            color: #555;
            background: #f2f3f4;
            display: flex;
            border-radius: 5px;
            width: 30px;
            height: 30px;
            justify-content: center;
            align-items: center;
        }

        .admin-content .admin-img {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .admin-content .admin-img .img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
        }

        .admin-content .admin-img .img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .admin-content .admin-img .admin-info {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            display: flex;
            gap: 10px;
            align-items: center;
            text-transform: capitalize;
            cursor: pointer;
        }

        .phone-sider {
            display: none;
        }

        .sidebar {
            grid-area: sidebar;
            background-color: #343a40;
            height: 100vh;
        }

        .sidebar .logo-content {
            height: 70px;
            display: flex;
            align-items: center;
            padding-left: 18px;
            border-bottom: 1px solid #555;
        }

        .sidebar .logo-content .name {
            display: flex;
            align-items: center;
        }

        .sidebar .logo-content .name h2 {
            margin: 0;
        }

        .sidebar .logo-content .name h3 {
            margin: 0;
        }

        .sidebar .link-container {
            width: 100%;
            height: calc(100vh - 70px);
            padding: 15px 10px;
            overflow: auto;
        }

        .sidebar .link-container::-webkit-scrollbar {
            display: none;
        }

        .link-content {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .link-content .link-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 12px;
            color: #eee;
            text-transform: capitalize;
            border-radius: 8px;
            cursor: pointer;
        }

        .link-content .link-item.active,
        .link-content .link-item:hover {
            background-color: #008eff;
            color: #fff;
        }

        .link-content .link-item .item {
            display: flex;
            align-items: center;
            gap: 7px;
            font-family: 'Robot', sans-serif;
            width: 100%;
        }

        .link-content .link-item .item a {
            display: flex;
            align-items: center;
            font-family: 'Robot', sans-serif;
            gap: 6px;
            text-decoration: none;
            color: #eee;
            width: 100%;
        }

        .link-content .link-item .item i {
            font-size: 15px;
        }

        .link-content .link-item .item span {
            font-size: 15px;
        }

        .sub-link {
            padding: 0 22px;
            display: none;
        }

        .sub-link .sub-item {
            display: flex;
            flex-direction: column;
        }

        .sub-link .sub-item a {
            display: flex;
            align-items: center;
            gap: 7px;
            color: #eee;
            text-decoration: none;
            padding: 8px;
            font-family: 'Robot', sans-serif;
            text-transform: capitalize;
            font-size: 14px;
            transition: color 0.3s;
        }

        .main {
            grid-area: main;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .main-content {
            background-color: #fff;
            width: 100%;
            height: 100%;
            border-radius: 3px;
        }

        @media (max-width: 640px) {
            body {
                grid-template-columns: 1fr;
                grid-template-rows: 60px 1fr;
                grid-template-areas:
                    "header"
                    "main";
            }

            .header {
                padding: 0 10px;
            }

            .phone-sider {
                position: fixed;
                top: 0;
                left: 0;
            }

            .phone-sider .sidebar {
                display: block;
                width: 250px;
            }

            .phone-sider .sidebar .logo-content {
                padding: 0 15px;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .sidebar .logo-content .name h2 {
                margin: 0;
                font-size: 30px;
            }

            .sidebar .logo-content .name h3 {
                margin: 0;
            }

            .phone-sider .sidebar .logo-content .close {
                font-size: 20px;
                width: 30px;
                height: 30px;
                border: 1px solid #fff;
                border-radius: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #fff;
            }

            .phone-sider .sidebar .logo-content .close:hover {
                color: red;
                border-color: red;
            }

            .link-content .link-item .item i {
                font-size: 16px;
            }

            .link-content .link-item .item span {
                font-size: 16px;
            }

            .sub-link .sub-item a {
                font-size: 15px;
            }

            .main {
                padding: 10px;
            }

            .sidebar {
                display: none;
            }

            .sidebar .logo-content {
                width: 100%;
            }

            .sidebar .logo-content img {
                width: 150px;
            }

            .search-content {
                display: none;
            }

            .menu-bar {
                display: block;
                font-weight: 600;
                font-size: 20px;
                color: #555;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="search-content">
            <div class="search-box">
                <i class="ri-search-line"></i>
                <input type="text" placeholder="Search..">
            </div>
        </div>
        <div class="menu-bar">
            <i class="ri-menu-fill"></i>
        </div>
        <div class="admin-content">
            <div class="admin-icons">
                <a href=""><i class="ri-message-3-line"></i></a>
                <a href=""><i class="ri-notification-4-line"></i></a>
            </div>
            <div class="admin-img">
                <div class="img">
                    <img src="{{ asset('Logo/man.jpg') }}" alt="">
                </div>
                <div class="admin-info">
                    <span>admin</span>
                    <i class="ri-arrow-down-s-line"></i>
                </div>
            </div>
        </div>

        <div class="phone-sider">
            <div class="sidebar">
                <div class="logo-content">
                    <div class="name">
                        <h2 style="color: #ff8400">G</h2>
                        <h3 style="color: #ff8400">horer</h3>
                        <h3 style="color: #fff;margin-left:5px">Bazar</h3>
                    </div>
                    {{-- <img src="{{ asset('Logo/G (1).png') }}" alt=""> --}}
                    <div class="close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>
                <div class="link-container">
                    <div class="link-content">
                        <div class="link-item">
                            <div class="item">
                                <a href="{{ route('admin') }}">
                                    <i class="ri-computer-line"></i>
                                    <span>dashboard</span>
                                </a>
                            </div>
                        </div>
                        <div class="link-box">
                            <div class="link-item">
                                <div class="item">
                                    <i class="ri-price-tag-3-line"></i>
                                    <span>categories</span>
                                </div>
                                <div class="arrow">
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                            <div class="sub-link">
                                <div class="sub-item">
                                    <a href="">
                                        <i class="ri-add-line"></i>
                                        <span>add category</span>
                                    </a>
                                    <a href="{{route('category.list')}}">
                                        <i class="ri-list-unordered"></i>
                                        <span>category list</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="link-box">
                            <div class="link-item">
                                <div class="item">
                                    <i class="ri-apps-line"></i>
                                    <span>sub categories</span>
                                </div>
                                <div class="arrow">
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                            <div class="sub-link">
                                <div class="sub-item">
                                    <a href="">
                                        <i class="ri-add-line"></i>
                                        <span>add subcategory</span>
                                    </a>
                                    <a href="">
                                        <i class="ri-list-unordered"></i>
                                        <span>subcategory list</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="link-box">
                            <div class="link-item">
                                <div class="item">
                                    <i class="ri-shopping-bag-line"></i>
                                    <span>products</span>
                                </div>
                                <div class="arrow">
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                            <div class="sub-link">
                                <div class="sub-item">
                                    <a href="{{ route('add.product') }}">
                                        <i class="ri-add-line"></i>
                                        <span>add product</span>
                                    </a>
                                    <a href="{{ route('product.list') }}">
                                        <i class="ri-list-unordered"></i>
                                        <span>product list</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="link-box">
                            <div class="link-item">
                                <div class="item">
                                    <i class="ri-file-list-2-line"></i>
                                    <span>orders</span>
                                </div>
                                <div class="arrow">
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                            <div class="sub-link">
                                <div class="sub-item">
                                    <a href="">
                                        <i class="ri-list-unordered"></i>
                                        <span>order list</span>
                                    </a>
                                    <a href="">
                                        <i class="ri-caravan-line"></i>
                                        <span>management</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="link-box">
                            <div class="link-item">
                                <div class="item">
                                    <i class="ri-money-dollar-box-line"></i>
                                    <span>sales</span>
                                </div>
                                <i class="ri-arrow-right-s-line"></i>
                            </div>
                            <div class="sub-link">
                                <div class="sub-item">
                                    <a href="#">
                                        <i class="ri-money-dollar-circle-line"></i>
                                        <span>income</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="link-box">
                            <div class="link-item">
                                <div class="item">
                                    <i class="ri-price-tag-3-line"></i>
                                    <span>banner</span>
                                </div>
                                <div class="arrow">
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                            <div class="sub-link">
                                <div class="sub-item">
                                    <a href="">
                                        <i class="ri-add-circle-line"></i>
                                        <span>add banner</span>
                                    </a>
                                    <a href="">
                                        <i class="ri-list-unordered"></i>
                                        <span>banner list</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="link-box">
                            <div class="link-item">
                                <div class="item">
                                    <i class="ri-group-line"></i>
                                    <span>Customers</span>
                                </div>
                                <div class="arrow">
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                            <div class="sub-link">
                                <div class="sub-item">
                                    <a href="">
                                        <i class="ri-user-add-line"></i>
                                        <span>add Customers</span>
                                    </a>
                                    <a href="">
                                        <i class="ri-list-unordered"></i>
                                        <span>Customers list</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="link-box">
                            <div class="link-item">
                                <div class="item">
                                    <i class="ri-settings-line"></i>
                                    <span>settings</span>
                                </div>
                                <div class="arrow">
                                    <i class="ri-arrow-right-s-line"></i>
                                </div>
                            </div>
                            <div class="sub-link">
                                <div class="sub-item">
                                    <a href="">
                                        <i class="ri-money-dollar-circle-line"></i>
                                        <span>delivery charge</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="link-item">
                            <div class="item">
                                <i class="ri-user-settings-line"></i>
                                <span>profile</span>
                            </div>
                        </div>
                        <div class="link-item">
                            <div class="item">
                                <i class="ri-logout-circle-r-line"></i>
                                <span>logout</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="sidebar">
        <div class="logo-content">
            <div class="name">
                <h2 style="color: #ff8400">G</h2>
                <h3 style="color: #ff8400">horer</h3>
                <h3 style="color: #fff;margin-left:5px;">Bazar</h3>
            </div>
            {{-- <img src="{{ asset('Logo/G (1).png') }}" alt=""> --}}
        </div>
        <div class="link-container">
            <div class="link-content">
                <div class="link-item">
                    <div class="item">
                        <a href="{{ route('admin') }}">
                            <i class="ri-computer-line"></i>
                            <span>dashboard</span>
                        </a>
                    </div>
                </div>
                <div class="link-box">
                    <div class="link-item">
                        <div class="item">
                            <i class="ri-price-tag-3-line"></i>
                            <span>categories</span>
                        </div>
                        <div class="arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                    </div>
                    <div class="sub-link">
                        <div class="sub-item">
                            <a href="">
                                <i class="ri-add-circle-line"></i>
                                <span>add category</span>
                            </a>
                            <a href="{{route('category.list')}}">
                                <i class="ri-list-unordered"></i>
                                <span>category list</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="link-box">
                    <div class="link-item">
                        <div class="item">
                            <i class="ri-apps-line"></i>
                            <span>sub categories</span>
                        </div>
                        <div class="arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                    </div>
                    <div class="sub-link">
                        <div class="sub-item">
                            <a href="">
                                <i class="ri-add-circle-line"></i>
                                <span>add subcategory</span>
                            </a>
                            <a href="">
                                <i class="ri-list-unordered"></i>
                                <span>subcategory list</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="link-box">
                    <div class="link-item">
                        <div class="item">
                            <i class="ri-shopping-bag-line"></i>
                            <span>products</span>
                        </div>
                        <div class="arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                    </div>
                    <div class="sub-link">
                        <div class="sub-item">
                            <a href="{{ route('add.product') }}">
                                <i class="ri-add-circle-line"></i>
                                <span>add product</span>
                            </a>
                            <a href="{{ route('product.list') }}">
                                <i class="ri-list-unordered"></i>
                                <span>product list</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="link-box">
                    <div class="link-item">
                        <div class="item">
                            <i class="ri-file-list-2-line"></i>
                            <span>orders</span>
                        </div>
                        <div class="arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                    </div>
                    <div class="sub-link">
                        <div class="sub-item">
                            <a href="">
                                <i class="ri-list-unordered"></i>
                                <span>order list</span>
                            </a>
                            <a href="">
                                <i class="ri-caravan-line"></i>
                                <span>management</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="link-box">
                    <div class="link-item">
                        <div class="item">
                            <i class="ri-money-dollar-box-line"></i>
                            <span>sales</span>
                        </div>
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <div class="sub-link">
                        <div class="sub-item">
                            <a href="#">
                                <i class="ri-money-dollar-circle-line"></i>
                                <span>income</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="link-box">
                    <div class="link-item">
                        <div class="item">
                            <i class="ri-price-tag-3-line"></i>
                            <span>banner</span>
                        </div>
                        <div class="arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                    </div>
                    <div class="sub-link">
                        <div class="sub-item">
                            <a href="">
                                <i class="ri-add-circle-line"></i>
                                <span>add banner</span>
                            </a>
                            <a href="">
                                <i class="ri-list-unordered"></i>
                                <span>banner list</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="link-box">
                    <div class="link-item">
                        <div class="item">
                            <i class="ri-group-line"></i>
                            <span>Customers</span>
                        </div>
                        <div class="arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                    </div>
                    <div class="sub-link">
                        <div class="sub-item">
                            <a href="">
                                <i class="ri-user-add-line"></i>
                                <span>add Customers</span>
                            </a>
                            <a href="">
                                <i class="ri-list-unordered"></i>
                                <span>Customers list</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="link-box">
                    <div class="link-item">
                        <div class="item">
                            <i class="ri-settings-line"></i>
                            <span>settings</span>
                        </div>
                        <div class="arrow">
                            <i class="ri-arrow-right-s-line"></i>
                        </div>
                    </div>
                    <div class="sub-link">
                        <div class="sub-item">
                            <a href="">
                                <i class="ri-money-dollar-circle-line"></i>
                                <span>delivery charge</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="link-item">
                    <div class="item">
                        <i class="ri-user-settings-line"></i>
                        <span>profile</span>
                    </div>
                </div>
                <div class="link-item">
                    <div class="item">
                        <i class="ri-logout-circle-r-line"></i>
                        <span>logout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="main-content">
            @yield('content')
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const linkItems = document.querySelectorAll('.link-item');
            const subLinks = document.querySelectorAll('.sub-link');

            linkItems.forEach(item => {
                item.addEventListener('click', function() {
                    const nextElement = this.nextElementSibling;

                    if (nextElement && nextElement.classList.contains('sub-link')) {
                        // Hide all sub-links except the clicked one
                        subLinks.forEach(subLink => {
                            if (subLink !== nextElement) {
                                subLink.style.display = 'none';
                            }
                        });

                        // Toggle the sub-link visibility
                        nextElement.style.display = nextElement.style.display === 'block' ? 'none' :
                            'block';

                        // Remove active class from all link items except the clicked one
                        linkItems.forEach(linkItem => {
                            if (linkItem !== this) {
                                linkItem.classList.remove('active');
                            }
                        });

                        // Toggle active class on the clicked item
                        this.classList.toggle('active');
                    }
                });
            });
        });
    </script>
    <script>
        let menuButton = document.querySelector('.menu-bar');
        let closeButton = document.querySelector('.close');
        let phoneSide = document.querySelector('.phone-sider');
        let body = document.querySelector('body');
        let f = 0;

        closeButton.addEventListener('click', function() {
            if (f == 1) {
                body.style.position = '';
                phoneSide.style.display = 'none';
                f = 0;
            }
        });

        menuButton.addEventListener('click', function() {
            if (f == 0) {
                body.style.position = 'fixed';
                phoneSide.style.display = 'block';
                f = 1;
            }
        });
    </script>
</body>

</html>
