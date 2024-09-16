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

    /* footer contanet css all section code */
    footer {
        background: #444;
        width: 100%;
        padding: 50px 0 20px 0;
        position: absolute;
    }

    .follow-us {
        width: 100%;
    }

    .follow-us h3 {
        text-align: center;
        color: #eee;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .footer-icons {
        width: 100%;
        display: flex;
        justify-content: center;
        padding: 20px 0;
    }

    .footer-icons a {
        text-decoration: none;
        width: 40px;
        height: 40px;
        margin: 3px;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50px;
    }

    .footer-icons .facebook {
        background-color: #2d56c5;
    }

    .footer-icons .instagram {
        background: #af0f46;
    }

    .footer-icons .twitter {
        background-color: #2196F3;
    }

    .footer-icons .youtube {
        background-color: #d50e0e;
    }

    .footer-icons .tiktok {
        background-color: #222;
    }

    .footer-icons .whatsapp {
        background-color: #47ab2c;
    }

    .footer-icons a i {
        color: #eee;
        font-size: 24px;
    }

    /* Added styles for centering and styling copyright */
    .copyright {
        text-align: center;
        margin-top: 5px;
        color: #ddd;
        font-size: 15px;
        font-weight: bolder;
        padding: 20px 0;
        border-top: 1px solid #ddd;
        position: relative;
        font-family: "Roboto", sans-serif;
        font-style: normal;
    }

    .copyright:before {
        content: "\f1f9";
        font-family: "RemixIcon";
        position: absolute;
        left: 50%;
        top: -10px;
        transform: translateX(-50%);
        font-size: 18px;
    }
</style>

<body>
    <!-- footer contanet html all section code -->
    <footer>
        <div class="follow-us">
            <h3>FOLLOW US</h3>
        </div>
        <div class="footer-icons">
            <a href="" class="facebook">
                <i class="ri-facebook-circle-fill"></i>
            </a>
            <a href="" class="instagram">
                <i class="ri-instagram-line"></i>
            </a>
            <a href="" class="twitter">
                <i class="ri-twitter-fill"></i>
            </a>
            <a href="" class="youtube">
                <i class="ri-youtube-fill"></i>
            </a>
            <a href="" class="tiktok">
                <i class="ri-tiktok-fill"></i>
            </a>
            <a href="" class="whatsapp">
                <i class="ri-whatsapp-line"></i>
            </a>
        </div>
        <div class="copyright">
            <span>Copyright &#169; 2024 Ghorer Bazar | Version 0.1</span>
        </div>
    </footer>
</body>

</html>
