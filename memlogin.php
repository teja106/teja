<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style type="text/css" media="all">
     *
     {
        margin:0!important;
        padding:0!important;
        box-sizing:border-box!important;
     }
     html,body
     {
        width:100%;
         height:100%;
     }
      #cover
      {
        background-color:#e6e6e6;
      }
      #memlogform
      {
        height:auto;
        background:white;
        box-shadow:2px 2px 8px 2px rgba(0,0,0,0.2);
        border-radius:15px;
        padding:0px 20px 20px!important;
        position:relative;
      }
        #header
        {
            width:100%;
            background:white;
            height:50px;
            display:flex;
            justify-content:center;
            align-items:center;
            box-shadow:0px 2px 8px 2px rgba(0,0,0,0.12);
            border-top-left-radius:15px;
            border-top-right-radius:15px;
            position:absolute;
            top:0;
            left:0;
            right:0;
        }
        form
        {
            margin-top:80px!important;
        }
        .form-row
        {
            margin-top:15px!important;
        }
        select
        {
            box-shadow:none!important;
            padding:5px!important;
        }
        input
        {
            box-shadow:none!important;
            padding:10px!important;
        }
        input::placeholder
        {
            color:black!important;
        }
        /*Huge thanks to @tobiasahlin at http://tobiasahlin.com/spinkit/ */
.spinner {
  margin: 100px auto 0;
  width: 50px;
  text-align: center;
  display:none;
}

.spinner > div {
  width:6px;
  height:6px;
  background-color: #333;

  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0) }
  40% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bouncedelay {
  0%, 80%, 100% { 
    -webkit-transform: scale(0);
    transform: scale(0);
  } 40% { 
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
  }
}
.authenticate
{
    color:#333;
    background:#e6e6e6!important;
    box-shadow:none!important;
    border:none!important;
    outline:none!important;
    padding:10px!important;
}
        #bar
      {
          position:relative;
          height:50px;
          background:white;
          padding:10px!important;
          z-index:2!important;
         box-shadow:0px 2px 5px 2px rgba(0,0,0,0.2);
      }
    </style>
    <script type="text/javascript">
         $(document).ready(function(){
             $("form").submit(function(e){
                 event.preventDefault();
                 $("#memlogsub").text("Authenticating...");
                    $("#memlogsub").addClass("authenticate");
                    $("#memlogsub").removeClass("btn btn-success");
                     $(".spinner").css('display','inline-block');
                 var uid=$("#uid").val();
                var pswd=$("#pswd").val();
                 var memlogsub=$("#memlogsub").val();
                 $.post("valmemlogin.php",{
                    uid:uid,
                    pswd:pswd,
                     memlogsub:memlogsub
                 },function(data,status){
                     if(status == 'success')
                     {
                       $("#memlogsub").text("Login Successful. Redirecting...");
                       $("#memlogsub").addClass("bg-success");
                       $("#memlogsub").css("color","white");
                       //$("#memlogsub").removeClass("authenticate");
                       //$("#memlogsub").addClass("btn btn-success");
                       $(".spinner").css('display','none');
                       //console.log(status);
                       if(data == uid)
                       {
                           var encuid=window.btoa(data);
                           window.location.replace("dashboard.php?login=success&uid="+encuid);
                       }
                       else if(data != uid)
                       {
                           $("#lastinp").after(data);
                       }
                     }
                 });
             });
         });
    </script>
</head>
<body>
    <div id="cover" class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center" id="bar">
              <img src="img/logo.png" class="img-responsive" width="230" height="50" style="position:relative;bottom:10px;">
          </div>
      </div>
        <div class="row d-flex" style="justify-content:center;align-items:center;height:750px;position:relative;top:calc(50% - 150px);">
            <div class="col-lg-3" id="memlogform">
                <div id="header" class="text-center">
                  <h5 style="color:#646464;">Member Login</h5>
                </div>
                <form action="valmemlogin.php" method="POST">
                    <div class="form-group mt-4">
                        <input type="text" name="uid" id="uid" placeholder="User ID" class="form-control" pattern="[A-Z0-9]+">
                    </div>
                    <span id="uidmsg"></span>
                    <div class="form-group mt-4" id="lastinp">
                        <input type="password" name="pswd" id="pswd" placeholder="Password" class="form-control" pattern="[A-Za-z0-9]{8}" title="Password should contain only 8 characters">
                    </div>
                    <span id="pswdmsg"></span>
                    <div class="form-group text-left mt-2">
                        <span><a href="index.php">Forgot Password?</a></span>
                    </div>
                    <div class="form-group text-center mt-3">
                        <button type="submit" name="memlogsub" id="memlogsub" class="btn btn-success" style="padding:10px!important;">LOGIN<div class="spinner">
                          <div class="bounce1"></div>
                          <div class="bounce2"></div>
                          <div class="bounce3"></div>
                        </div>
                        </button>
                    </div>
                    <div class="form-group text-center mt-2">
                        <span>Don't have an account? <a href="index.php">SIGN UP</a></span>
                    </div>
                </form>          
            </div>
        </div>
    </div>
</body>
</html>