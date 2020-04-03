<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.theme.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.js"></script>
    <script src="js/slider.js"></script>

    <title>MLM!</title>
    <style media="all">
        html {
            height: 100%;
        }

        body {
            min-height: 100%;
            display: flex;
            flex-direction: column;
            background: #f5f6fa;
            font-family: 'Poppins', sans-serif;
        }

        footer {
            margin-top: auto;
        }

        .small-header {
            position:fixed;
            height:30px;
            z-index:100;
            width:100%;
            background:#2f9934;
            font-family: sans-serif;
            color:white!important;
            box-shadow: 1px 1px 3px 2px rgba(0, 0, 0, 0.2);
        }

        .left-ul {
            display: inline-block;
            list-style-type: none;
            position: absolute;
            left: 0;
        }

        .left-ul li {
            float: left;
            /*            margin-right: 20px;*/
            margin-top: 5px;
            font-size: 13px;
        }

        .right-ul {
            display: inline-block;
            list-style-type: none;
            position: absolute;
            right: 20px;
        }

        .right-ul li {
            float: left;
            margin-top: 5px;
            font-size: 13px;
        }

        .middle-header {
            position:relative;
            top:35px;
            z-index:1;
            background: #f5f6fa;
            display: grid;
            place-items: Center;
        }

        .menu-items ul {
            list-style-type: none;
            margin-bottom: 0;
        }

        .menu-items li {
            float: left;
            margin-right: 2em;
            margin-bottom: 1em;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            /*            background-color: #f1f1f1;*/
            /*            background-color: #6c5ce7;*/
            background-color: #ddd;
            min-width: 160px;
            top: 40px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-size: 12px;
        }

        .dropdown-content li {
            width: 100%;
        }

        .mit {
            display: none;
            width: 10px;
            height: 10px;
            position: absolute;
            top: 20px;
            left: 10px;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid transparent;
            border-bottom: 10px solid #ddd;

        }

        .dropdown:hover .mit {
            display: block;
        }

        .dropdown-content a:hover {
            color: red;
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
            transition: all .4s ease;
            -webkit-transition: all .4s ease;

        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }

        .tri {
            width: 20px;
            height: 20px;
            background:#f5f6fa;
            transform: rotate(45deg);
            z-index: 1;
            position: absolute;
            right: 50%;
            left: 50%;
            bottom:-10px;
        }

        .product-catalog {
            background: white;
            box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
            -webkit-box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
            -moz-box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
        }

        .product-catalog .col-md-2 {
            text-align: center;
        }

        .product-catalog h1 {
            font-weight: 300;
            color: #d63031;
            padding: 10px 0px;
        }

        .product-catalog h1::after {
            content: '';
            width: 40px;
            height: 5px;
            background: #55efc4;
            display: block;
            margin: auto;
        }

        .product-catalog i {
            color: #0984e3;
            padding: 5px;
        }

        .product-catalog .icon {
            display: inline-block;
            background: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.3);
        }

        .careers .col-lg-4 {
            border: 1px solid rgba(0, 0, 0, 0.2);
            margin: 20px 0px;
            background: white;
        }

        .careers h1 {
            font-weight: 300;
            color: #d63031;
            padding: 10px 0px;
        }

        .careers h1::after {
            content: '';
            width: 40px;
            height: 5px;
            background: #55efc4;
            display: block;
            margin: auto;
        }

        .careers .boxr {
            margin: 0px auto;
            width: 200px;
            height: 40px;
            background: #74b9ff;
            position: relative;
            display: table;
            text-align: center;
            margin-top: -20px;
        }

        .careers .tria {
            width: 10px;
            height: 10px;
            position: absolute;
            /*            background: #74b9ff;*/
            border-left: 10px solid transparent;
            border-right: 10px solid #0984e3;
            border-top: 10px solid transparent;
            border-bottom: 10px solid #0984e3;
            left: -20px;
            z-index: -1;
        }

        .careers .boxr p {
            display:table-cell;
            vertical-align: middle;
            font-size: 20px;
            color: white;
        }

        .boxr + p{
            margin-top:5px;
            font-family: sans-serif;
            font-weight: 250;
            font-size:13px;
        }

        .footer {
            background: white;
            box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
            -webkit-box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
            -moz-box-shadow: inset 0px 0px 6px rgba(0, 0, 0, .4);
        }

        .footer p {
            font-size: 15px;
        }

        .footer .col-lg-4 {
            text-align: center;
            margin-top: 20px;
        }

        .footer .col-lg-4 form {
            display: inline-block;
        }

        .footer .col-lg-4 form .form-group input {
            outline: none;
            box-shadow: none;
            background: #00b894;
        }

        .footer .input-group-text {
            background: #d63031;
        }

        .footer input::placeholder {
            color: white;
        }

        .footer input:focus {
            color: white;
        }

        .footer .col-lg-4 form .form-group i {
            color: white;
        }

        .footer .col-lg-4 img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .footer ul {
            list-style-type: none;
        }

        .footer li {
            float: left;
            margin-right: 10px;
        }

        .footer li:nth-child(1) {
            padding-right: 10px;
            border-right: 1px solid black;
        }

        .footer li:nth-child(2) {
            padding-right: 10px;
            border-right: 1px solid black;
        }

        .footer li:nth-child(3) {
            padding-right: 10px;
            border-right: 1px solid black;
        }
        .footer li:last-child
        {
            margin-right:0px;
        }
        .footer .cws {
            display: grid;
            display: inline-block;
            place-items: Center;
            margin-top: 15px;
        }

        .footer .cws li {
            /*            border: 1px solid black;*/
            margin-right: 0px;
            padding-right: 0px;
            padding-left: 5px;
            border-right: 0px;
        }

        .footer .of {
            margin: auto 0px;
        }

        .footer .sf {
            margin: auto 0px;
        }
    </style>
</head>

<body>

    <div class="small-header">

        <ul class="left-ul">
            <li class="mr-3"><i class="fa fa-mobile-phone"></i> +918106307498</li>
            <li><i class="fa fa-envelope"></i> swamy@lipidmarketingllp.com</li>
        </ul>

        <ul class="right-ul">
            <li class="mr-3"><i class="fa fa-user-circle"></i> <a href="memlogin.php" style="color:white;">Login</a></li>
            <li><i class="fa fa-user-circle"></i> <a href="index.php" style="color:white;">Register</a></li>
        </ul>

    </div>
    <div class="middle-header">
        <div class="logo">
            <img src="img/logo.png" alt="" width="230" height="60">
        </div>
        <div class="menu-items">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <div class="dropdown" style="">
                    <li><a href="">Business Model </a></li>
                    <div class="mit"></div>
                    <div class="dropdown-content">
                        <li><a href="privacy.php">Privacy Policy</a></li>
                        <li><a href="rules.php">Rules of Conduct</a></li>
                    </div>
                </div>
                <li><a href="">Services</a></li>
                <li><a href="">How it works</a></li>
                <div class="dropdown">
                    <li><a href="">Join LIPID</a></li>
                    <div class="mit"></div>
                    <div class="dropdown-content">
                        <li><a href="admin.php">Admin Login</a></li>
                        <li><a href="memlogin.php">Login</a></li>
                        <li><a href="index.php">Register</a></li>
                    </div>
                </div>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
        <div class="tri"></div>
    </div>

    <main class="">
                <div class="container mb-5" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
            <div class="row mt-4 mb-4 p-4 bg-white">
                <h1 class="">Privacy Policy</h1>
                <p style="font-size:15px;font-weight:400;">We are very delighted that you have shown interest in our enterprise. Data protection is of a particularly high priority for the management of the Feedough. The use of the Internet pages of the Feedough is possible without any indication of personal data; however, if a data subject wants to use special enterprise services via our website, processing of personal data could become necessary. If the processing of personal data is necessary and there is no statutory basis for such processing, we generally obtain consent from the data subject.</p>
<p style="font-size:15px;font-weight:400;">The processing of personal data, such as the name, address, e-mail address, or telephone number of a data subject shall always be in line with the General Data Protection Regulation (GDPR), and in accordance with the country-specific data protection regulations applicable to the Feedough. By means of this data protection declaration, our enterprise would like to inform the general public of the nature, scope, and purpose of the personal data we collect, use and process. Furthermore, data subjects are informed, by means of this data protection declaration, of the rights to which they are entitled.</p>
<p style="font-size:15px;font-weight:400;">As the controller, the Feedough has implemented numerous technical and organizational measures to ensure the most complete protection of personal data processed through this website. However, Internet-based data transmissions may in principle have security gaps, so absolute protection may not be guaranteed. For this reason, every data subject is free to transfer personal data to us via alternative means, e.g. by telephone.</p>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid footer">
            <div class="row">
                <div class="col-lg-4 of">
                    <img src="img/logo.png" alt="" width="200" height="100" class="img-fluid">
                    <p>One of the world's largest direct selling business.</p>
                </div>
                <div class="col-lg-4 sf">
                    <h6 style="color: #d63031;">Links</h6>
                    <ul>
                        <li>Services</li>
                        <li>How it Works</li>
                        <li>Pricing</li>
                        <li>Contact</li>
                    </ul>
                    <div class="text-center cws">
                        <h6 style="color: #d63031;">Connect with us</h6>
                        <ul>
                            <li><a href=""><i class="fa fa-facebook" style="color: darkblue;"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram" style="color: deeppink;"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter" style="color: deepskyblue;"></i></a></li>
                            <li><a href=""><i class="fa fa-google" style="color: red;"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <p style="color: #d63031;">Subscribe Us</p>
                    <form action="">
                        <div class="form-group mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-circle"></i></span></div>
                                <input type="text" name="" class="form-control" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope"></i></span></div>
                                <input type="email" name="" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group mt-3">
                                <button type="button" class="btn btn-danger">Subscribe ></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-3">
                <h6 class="text-center" style="font-size: 15px;font-family: sans-serif;">All copyrights reserved © 2018 - Designed & Developed by <a href="http://www.teckscape.com" target="_blank">Teckscape</a></h6>

            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>