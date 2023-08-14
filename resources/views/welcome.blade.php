<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"
            integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"
          integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"
            integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var wow = new WOW({
            offset: 100,        // distance to the element when triggering the animation (default is 0)
            mobile: false       // trigger animations on mobile devices (default is true)
        });
        wow.init();
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css"
          integrity="sha512-phGxLIsvHFArdI7IyLjv14dchvbVkEDaH95efvAae/y2exeWBQCQDpNFbOTdV1p4/pIa/XtbuDCnfhDEIXhvGQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    .lds-ring {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }

    .lds-ring div {
        box-sizing: border-box;
        display: block;
        position: absolute;
        width: 64px;
        height: 64px;
        margin: 8px;
        border: 8px solid #cef;
        border-radius: 50%;
        animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        border-color: red transparent transparent transparent;
    }

    .lds-ring div:nth-child(1) {
        animation-delay: -0.45s;
    }

    .lds-ring div:nth-child(2) {
        animation-delay: -0.3s;
    }

    .lds-ring div:nth-child(3) {
        animation-delay: -0.15s;
    }

    @keyframes lds-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>
<style>
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999; /* Đảm bảo preloader ở trên cùng */
        animation: fadeIn 1s forwards; /* Hiệu ứng hiển thị */
    }

    .content {
        display: none; /* Ẩn nội dung chính ban đầu */
    }

    @keyframes fadeIn {
        to {
            opacity: 0;
        }
    }
</style>
<style>
    .services-block {
        position: relative;
        margin-bottom: 30px;
    }

    .services-block .inner-box {
        position: relative;
    }

    .services-block .inner-box .image {
        position: relative;
        display: block;
        background: #000000;
        overflow: hidden;
    }

    .services-block .inner-box:hover .image {
        -webkit-transition: all 1000ms ease;
        -moz-transition: all 1000ms ease;
        -ms-transition: all 1000ms ease;
        -o-transition: all 1000ms ease;
        transition: all 1000ms ease;
        transform: rotateY(180deg);
    }

    .services-block .inner-box .image a {
        position: relative;
        display: block;
    }

    .services-block .inner-box .image a:before {
        content: "\f1b7";
        font-family: 'FontAwesome';
        font-weight: 400;
        position: absolute;
        left: 50%;
        top: 50%;
        margin: -30px 0px 0px -30px;
        width: 60px;
        height: 60px;
        line-height: 60px;
        text-align: center;
        background: #ffffff;
        color: #e9c37a;
        font-size: 20px;
        border-radius: 50%;
        z-index: 1;
        opacity: 0;
        -webkit-transform: translateY(30px);
        -ms-transform: translateY(30px);
        -moz-transform: translateY(30px);
        transform: translateY(30px);
    }

    .services-block .inner-box .image img {
        display: block;
        width: 100%;
        height: auto;
        -webkit-transition: all 600ms ease;
        -moz-transition: all 600ms ease;
        -ms-transition: all 600ms ease;
        -o-transition: all 600ms ease;
        transition: all 600ms ease;
    }

    .services-block .inner-box:hover .image img {
        opacity: .30;
    }

    .services-block .inner-box:hover .image a:before {
        -webkit-transition: all 700ms ease 700ms;
        -moz-transition: all 700ms ease 700ms;
        -ms-transition: all 700ms ease 700ms;
        -o-transition: all 700ms ease 700ms;
        transition: all 700ms ease 700ms;
        opacity: 1;
        -webkit-transform: translateY(0px);
        -ms-transform: translateY(0px);
        -moz-transform: translateY(0px);
        transform: translateY(0px);
    }

    @-webkit-keyframes shine {
        100% {
            left: 125%;
        }
    }

    @keyframes shine {
        100% {
            left: 125%;
        }
    }

    .services-block .inner-box .lower-box {
        position: relative;
        padding-top: 35px;
        text-align: center;
        padding-bottom: 22px;
    }

    .services-block .inner-box .lower-box:before {
        position: absolute;
        content: '';
        left: 50%;
        bottom: 0px;
        height: 2px;
        width: 50px;
        margin-left: -25px;
        background-color: #e9c37a;
    }

    .services-block .inner-box .lower-box h3 {
        position: relative;
        font-size: 24px;
        font-weight: 700;
        line-height: 1.3em;
    }

    .services-block .inner-box .lower-box h3 a {
        position: relative;
        color: #222222;
        transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -webkit-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
    }

    .services-block .inner-box .lower-box h3 a:hover {
        color: #e9c37a;
    }

    .services-block .inner-box .lower-box .text {
        position: relative;
        color: #666666;
        font-size: 14px;
        margin-top: 4px;

    }
</style>
<script>
    $(document).ready(function () {
        // Ẩn preloader sau 0.5 giây
        setTimeout(function () {
            $(".preloader").fadeOut("slow", function () {
                // Hiển thị nội dung chính sau khi preloader ẩn
                $(".content").fadeIn("slow");
            });
        }, 1000);
    });
</script>
<body>
<div class="preloader">
    <div class="lds-ring">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<div class="content">
    <h1 align="center"> DEMO </h1>
    <div class="container-fluid mt-3 px-5">
        <div class="row  mt-3">

            <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="image">
                        <a href="service-interior.html"><img
                                src="https://th.bing.com/th?id=ORMS.435a728a21a882e882260bd1a1502a83&pid=Wdp&w=300&h=156&qlt=90&c=1&rs=1&dpr=1&p=0"
                                alt=""></a>
                    </div>
                    <div class="lower-box">
                        <h3><a href="service-interior.html">Committed to Work</a></h3>
                        <div class="text"> Duo hinc omnis maluisset</div>
                    </div>
                </div>
            </div>
            <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="image">
                        <a href="service-interior.html"><img
                                src="https://th.bing.com/th?id=ORMS.435a728a21a882e882260bd1a1502a83&pid=Wdp&w=300&h=156&qlt=90&c=1&rs=1&dpr=1&p=0"
                                alt=""></a>
                    </div>
                    <div class="lower-box">
                        <h3><a href="service-interior.html">Committed to Work</a></h3>
                        <div class="text"> Duo hinc omnis maluisset</div>
                    </div>
                </div>
            </div>
            <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                     style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                    <div class="image">
                        <a href="service-interior.html"><img
                                src="https://th.bing.com/th?id=ORMS.435a728a21a882e882260bd1a1502a83&pid=Wdp&w=300&h=156&qlt=90&c=1&rs=1&dpr=1&p=0"
                                alt=""></a>
                    </div>
                    <div class="lower-box">
                        <h3><a href="service-interior.html">Committed to Work</a></h3>
                        <div class="text"> Duo hinc omnis maluisset</div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>

</body>
</html>
