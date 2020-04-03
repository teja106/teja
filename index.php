<?php
 session_start();
 include_once 'dbconfig.php';
?>
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
    <title>MLM</title>
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
      #memregform
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
        .error
        {
            box-shadow:0px 0px 5px red!important;
        }
        .close
        {
            cursor:pointer;
        }
        .alert
        {
            padding:10px!important;
        }
        input:read-only
        {
            background:white!important;
        }
        input:-webkit-read-only
        {
            background:white!important;
        }
        input:-moz-read-only
        {
            background:white!important;
        }
        input:-ms-read-only
        {
            background:white!important;
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
             $("#memsub").text("Submitting Data. Please wait...");
             var refid=$("#refid").val();
        var level=$("#level").val();
        var legpos=$("#legpos").val();
        var title=$("#title").val();
        var fname=$("#fname").val();
        var lname=$("#lname").val();
        var email=$("#email").val();
        var conno=$("#conno").val();
        var pswd=$("#pswd").val();
        var cpswd=$("#cpswd").val();
        var qualif=$("#qualif").val();
        var country=$("#country").val();
          var state=$("#state").val();
          var city=$("#city").val();
          var addr=$("#addr").val();
          var adrno=$("#adrno").val();
          var panno=$("#panno").val();
          var bname=$("#bname").val();
          var brname=$("#brname").val();
          var ifsc=$("#ifsc").val();
          var accno=$("#accno").val();
          var nomname=$("#nomname").val();
          var memsub=$("#memsub").val();
              $("#msg").load("initajax.php",{
                  refid:refid,
                  level:level,
                  legpos:legpos,
                  title:title,
                  fname:fname,
                  lname:lname,
                  email:email,
                  conno:conno,
                  pswd:pswd,
                  cpswd:cpswd,
                  qualif:qualif,
                  country:country,
                  state:state,
                  city:city,
                  addr:addr,
                  adrno:adrno,
                  panno:panno,
                  bname:bname,
                  brname:brname,
                  ifsc:ifsc,
                  accno:accno,
                  nomname:nomname,
                  memsub:memsub
              },function(responseTxt,statusTxt,xhr){
                  if(statusTxt == 'error')
                  {
                      console.log(xhr.status+": "+xhr.statusText);
                  }
                  else if(statusTxt == 'success')
                  {
                      $("#memsub").text("SUBMIT");
                      console.log(responseTxt);
                      console.log(xhr.status+": "+xhr.statusText);
                  }
              });
          });
          
      });
        
//      $(document).ready(function(){
//        $('input[type="checkbox"]').click(function(){
//            if($(this).prop("checked") == true){
//                $("#refrow").css('display','block');
//                $("#legrow").css('display','block');
//            }
//            else if($(this).prop("checked") == false){
//                $("#refrow").css('display','none');
//                $("#legrow").css('display','none');
//            }
//        });
//    });
    </script>
</head>
<body>
    <div id="cover" class="container-fluid">
        <div class="row">
          <div class="col-lg-12 text-center" id="bar">
              <?php
              if(isset($_SESSION['uid']) and $_SESSION['uid'] == 'LIPIDMKT')
              {
               echo '<button type="button" class="btn btn-primary" onclick="history.back();" style="position:absolute;left:20px;bottom:8px;padding:5px!important;">Go Back</button>';
              }
              ?>
              <img src="img/logo.png" class="img-responsive" width="230" height="50" style="position:relative;bottom:10px;">
          </div>
      </div>
       <!--<div class="row d-flex" style="justify-content:center;align-items:center;height:50px;">-->
       <!--    <div class="col-lg-5" id="msg">-->
               
       <!--    </div>-->
       <!--</div>-->
        <div class="row d-flex mt-4" style="justify-content:center;">
            <div class="col-lg-5 mb-4" id="memregform">
                <div id="header" class="text-center">
                  <?php
                  if(!isset($_SESSION['uid']) or $_SESSION['uid'] != 'LIPIDMKT')
                  {
                   echo '<h5 style="color:#646464;">Member Registration</h5>';
                  }
                  else if(isset($_SESSION['uid']) and $_SESSION['uid'] == 'LIPIDMKT')
                  {
                      echo '<h5 style="color:#646464;">Sponsor Registration</h5>';
                  }
                   ?>
                </div>
                <form action="initajax.php" method="POST" id="regform">
                    <div class="form-group">
                        <div class="" id="msg">
                                 
                        </div>
                    </div>
                    <?php
                    $getmemdata="select * from member;";
                    $res=mysqli_query($connection,$getmemdata);
                    $row=mysqli_fetch_assoc($res);
                    $rescheck=mysqli_num_rows($res);
                    if(!isset($_SESSION['uid']) or $_SESSION['uid'] != 'LIPIDMKT')
                    {
                     echo '<div class="form-group mt-4" style="" id="refrow">
                            <input type="text" name="refid" id="refid" placeholder="Referral ID" class="form-control">
                    </div>
                    <div class="form-row">
                        <div class="col mr-3" style="" id="legrow">
                            <select class="form-control" name="legpos" id="legpos" style="">
                                <option value="SELECT LEG POSITION">SELECT LEG POSITION</option>
                                <option value="Left Leg - LLG">Left Leg - LLG</option>
                                <option value="Right Leg - RLG">Right Leg - RLG</option>
                                <option value="Parallel Leg - PLG">Parallel Leg - PLG</option>
                            </select>
                        </div>
                        <div class="col ml-3">
                             <select class="form-control" name="title" id="title" style="">
                                    <option value="SELECT TITLE">SELECT TITLE</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="M/s">M/s</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Smt.">Smt.</option>
                              </select>
                       </div>
                    </div>';
                    }
                    else if(isset($_SESSION['uid']) and $_SESSION['uid'] == 'LIPIDMKT')
                    {
                        echo '<input type="hidden" name="refid" id="refid" class="form-control" value="SPONSOR" readonly>
                        <div class="form-group mt-4">
                             <select class="form-control" name="title" id="title" style="">
                                    <option value="SELECT TITLE">SELECT TITLE</option>
                                    <option value="Mr.">Mr.</option>
                                    <option value="Mrs.">Mrs.</option>
                                    <option value="M/s">M/s</option>
                                    <option value="Ms">Ms</option>
                                    <option value="Smt.">Smt.</option>
                              </select>
                       </div>';
                    }
                    ?>
                    
                    <div class="form-row">
                        <div class="col mr-3">
                            <input type="text" name="fname" id="fname" placeholder="Firstname" class="form-control" pattern="[A-Za-z ]+" title="Example: John">
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="lname" id="lname" placeholder="Lastname" class="form-control" pattern="[A-Za-z ]+" title="Example: Mark">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mr-3">
                            <input type="email" name="email" id="email" placeholder="Email ID" class="form-control">
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="conno" id="conno" placeholder="Contact No" class="form-control"  pattern="[0-9]{10}" title="Example:10 Digit Format - 8888888888">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mr-3">
                            <input type="password" name="pswd" id="pswd" placeholder="Password" class="form-control" pattern="[A-Za-z0-9]{8}" title="Password should contain 8 characters">
                        </div>
                        <div class="col ml-3">
                            <input type="password" name="cpswd" id="cpswd" placeholder="Confirm Password" class="form-control"  pattern="[A_Za-z0-9]{8}" title="Password should contain 8 characters">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mr-3">
                            <input list="qual" name="qualif" id="qualif" placeholder="Qualification" class="form-control">
                            <datalist id="qual">
                                <option value="10th">
                                <option value="Inter">
                                <option value="Diploma">
                                <option value="Degree">
                                <option value="UG/PG">
                            </datalist>
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="country" id="country" placeholder="Country" class="form-control" pattern="[A-Za-z ]+" title="Example: India">
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="col mr-3">
                            <select name="state" id="state" class="form-control">
                                <option value="SELECT STATE">SELECT STATE</option>
                                <?php
                                  
                                  $getst="select * from gst;";
                                  $stres=mysqli_query($connection,$getst);
                                  while($strow=mysqli_fetch_assoc($stres))
                                  {
                                      echo '<option value="'.$strow['state_name'].'">'.$strow['state_name'].'</option>';
                                  }
                                ?>
                            </select>
                    </div>
                    <div class="col ml-3">
                            <input type="text" name="city" id="city" placeholder="City" class="form-control" pattern="[A-Za-z ]+" title="Example: Guntur">
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="addr" id="addr" placeholder="Address" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                       <div class="col mr-3">
                            <input type="text" name="adrno" id="adrno" placeholder="Aadhar No" class="form-control" pattern="[0-9]{12}" title="Example: Aadhar No should contain only 12 digits">
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="panno" id="panno" placeholder="PAN No" class="form-control" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" title="Example: AAAPL1234C">
                        </div>
                    </div>
                    <div class="form-row">
                       <div class="col mr-3">
                            <input type="text" name="bname" id="bname" placeholder="Bank Name" class="form-control" pattern="[A-Za-z ]+">
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="brname" id="brname" placeholder="Branch Name" class="form-control" pattern="[A-Za-z ]+">
                        </div>
                    </div>
                    <div class="form-row">
                       <div class="col mr-3">
                            <input type="text" name="ifsc" id="ifsc" placeholder="IFSC Code" class="form-control" pattern="[A-Z0-9]*">
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="accno" id="accno" placeholder="Bank Account No" class="form-control" pattern="[0-9]{1,20}">
                        </div>
                    </div>
                    <div class="form-row">
                       <div class="col">
                            <input type="text" name="nomname" id="nomname" placeholder="Nominee Name" class="form-control" pattern="[A-Za-z ]+">
                        </div>
                    </div>
                    <div class="form-group text-center mt-4">
                            <button type="submit" name="memsub" id="memsub" class="btn btn-success" style="padding:10px!important;">SUBMIT</button>
                    </div>
                    <?php
                    if(!isset($_SESSION['uid']) or $_SESSION['uid'] != 'LIPIDMKT')
                    {
                    echo '<div class="form-group text-center mt-4">
                        <span>Already have an account? <a href="memlogin.php">SIGN IN</a></span>
                    </div>';
                    }
                    ?>
                </form>          
            </div>
        </div>
    </div>
</body>
</html>