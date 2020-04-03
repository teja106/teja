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
        #cForm label{
            color:white;
            font-size:13px;
        }
        #cForm input{
            border:none;
            box-shadow:none;
            outline:none;
            background:transparent;
            color:white;
            border-bottom:1px solid white;
            font-size:13px;
        }
        #cForm textarea{
            border:none;
            box-shadow:none;
            outline:none;
            background:transparent;
            color:white;
            border-bottom:1px solid white;
        }
        #sbox{
            border-radius:20px;
-webkit-box-shadow: -14px 10px 30px -10px rgba(0,0,0,0.75);
-moz-box-shadow: -14px 10px 30px -10px rgba(0,0,0,0.75);
box-shadow: -14px 10px 30px -10px rgba(0,0,0,0.75);

        }
        #mbox{
            margin-top:5%;
        }
        #fbox h1{
            color:#2d3436;
        }
        #fbox{
            padding:30px;
        }
        #fbox h1,p {
            margin-top:5%;
        }
        #fbox i{
            font-size:20px;
            color:#b79cfb;
        }
        #fbox ul{
            list-style-type:none;
            padding-left:0px;
        }
        #fbox li{
            float:left;
            margin-right:20px;
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
        <div class="container-fluid" style="height:100vh;background:#dcdde1;display:flex;justify-content:center;align-items:center;">
            <div class="row">
                <div id="mbox" class="" style="position:relative;width:800px;height:400px;">
                    <div id="fbox" class="" style="position:absolute;width:400px;height:400px;left:0;background:white;border-top-left-radius:20px;border-bottom-left-radius:20px;">
                        <h1>CONTACT US</h1>
                        <p><i class="fa fa-map-marker"></i> <span>D.No. 29-5-7, Ground floor 3-2, Rajani Enclave, Vishnuvardhan Street, Suryarao pet, Vijayawada-2</span></p>
                        <p><i class="fa fa-phone"></i> 9848022338</p>
                        <p><i class="fa fa-envelope"></i> sekhar@lipidmarketingllp.com</p>
                        <div>
                            <ul>
                                <li><i class="fa fa-facebook"></i></li>
                                <li><i class="fa fa-twitter"></i></li>
                                <li><i class="fa fa-linkedin"></i></li>
                            </ul>
                        </div>
                    </div>                
                    <div id="sbox" class="" style="position:absolute;width:400px;height:500px;background:#21163f;right:0;top:calc(50% - 250px);padding:20px;">
                        <h1 class="text-white">TEXT US <img src="img/message.svg" class="float-right" width="40" height="40"></h1>
                    <form action="valcontact.php" method="post" id="cForm">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" name="" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" name="" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="number" id="mobile" name="mobile" class="form-control" name="" placeholder="Enter your mobile" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Enter your message" required></textarea>
                        </div>
                        </form>
                        <div class="" style="position:absolute;bottom:-15px;width:270px;left:calc(50% - 135px);">
                            <button type="submit" name="submit" class="btn" style="background:#e80038;color:white;height:30px;font-size:13px;width:100%;outline:none;box-shadow:none;border:none;" form="cForm"><img src="img/lo.gif" width="15" height="15" id="lo">&nbsp;SUBMIT <i class="fa fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <script>$('#lo').hide();</script>
                    <script>
                        $(document).ready(function(e){
                            // $('input,textarea').focus(function(){
                            //     $('.err').text('');
                            //     $('input,textarea').css({'border-bottom':'1px solid white'});
                            //     $('.form-group').css({'margin-bottom':'1rem'});
                            // });
                            $('#sub').on('click',function(e){
                                e.preventDefault();
                                // var form = $('#cForm')[0];
                                // var formdata = new FormData(form);
                                var name = $('#name').val();
                                var email = $('#email').val();
                                var mobile = $('#mobile').val();
                                var message = $('#message').val();
                                // if(name == '' && email == '' && mobile == '' && message == ''){
                                //     $('.err').text('Fields shouldn\'t be empty');
                                //     $('.form-group').css({'margin-bottom':'0rem'});
                                //     $('input,textarea').css({'border-bottom':'1px solid red'});
                                // }
                                // else if(name == ''){
                                //     $('#nerr').text('Name shouldn\'t be empty');
                                //     $('.form-group').css({'margin-bottom':'0rem'});
                                //     $('input,textarea').css({'border-bottom':'1px solid red'});
                                // }
                                // else if(email == ''){
                                //     $('#eerr').text('Email shouldn\'t be empty');
                                //     $('.form-group').css({'margin-bottom':'0rem'});
                                //     $('input,textarea').css({'border-bottom':'1px solid red'});
                                // }
                                // else if(mobile == ''){
                                //     $('#merr').text('Subject shouldn\'t be empty');
                                //     $('.form-group').css({'margin-bottom':'0rem'});
                                //     $('input,textarea').css({'border-bottom':'1px solid red'});
                                // }
                                // else if(message == ''){
                                //     $('#merr').text('Message shouldn\'t be empty');
                                //     $('.form-group').css({'margin-bottom':'0rem'});
                                //     $('input,textarea').css({'border-bottom':'1px solid red'});
                                // }
                                // else{
                                    $.ajax({
                                        url:'valcontact.php',
                                    type:'POST',
                                    // enctype:'multipart/form-data',
                                    // processData:false,
                                    // contentType:false,
                                    // cache:false,
                                    data:{ajax:1,name:name,email:email,mobile:mobile,message:message},
                                    beforeSend:function(){
                                        $('#lo').show();
                                        $('#sub').css({'background':'#b2bec3','color':'black','cursor':'not-allowed'});
                                    },
                                    success:function(data){
                                        console.log(data);
                                        $('#sub').text('Submitted');
                                    }
                                });   
                                // }
                            });
                        });
                    </script>
                </div>
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
<?php
$uri = $_SERVER['REQUEST_URI'];
if(strpos($uri,"empty=name")){
    echo'<script>alert("Username Shouldn\'t be empty");</script>';
}
elseif(strpos($uri,"empty=email")){
    echo'<script>alert("Email Shouldn\'t be empty");</script>';
}
elseif(strpos($uri,"empty=mobile")){
    echo'<script>alert("Mobile Shouldn\'t be empty");</script>';
}
elseif(strpos($uri,"empty=message")){
    echo'<script>alert("Message Shouldn\'t be empty");</script>';
}
elseif(strpos($uri,"mailsent=success")){
echo'<script>alert("Mail sent successfully. We will reach you soon.");</script>';
}
?>