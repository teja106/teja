<?php
session_start();
include_once 'dbconfig.php';
if(!isset($_SESSION['uid']))
{
    header("Location:index.php");
    exit();
}
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
<!--Font Awesome-->
<script src="https://kit.fontawesome.com/10e1c1e91f.js" crossorigin="anonymous"></script>
<!--Animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />
        <!--Sweet Alerts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
    <title>Document</title>
    <style type="text/css" media="all">
     *
     {
        margin:0;
        padding:0;
        box-sizing:border-box!important;
     }
     
     html,body
     {
        width:100%;
         height:100%;
     }
      #cover
      {
         width:100%;
         height:100%;
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
      #navbar
      {
          background:white;
          box-shadow:2px 0px 2px 2px rgba(0,0,0,0.15);
         z-index:1!important;
         padding:0!important;
      }
      #navbar ul
      {
          height:100%;
          width:100%;
      }
      #navbar ul li
      {
          display:block;
          list-style-type:none;
          padding:10px!important;
          text-align:center;
          cursor:pointer;
          transition:background .5s;
      }
      #navbar ul li a
      {
          all:unset;
          color:black;
          font-size:14px;
      }
      #navbar ul li:hover
      {
          background:#e6e6e6;
      }
      #navbar ul li:hover > a
      {
          color:black;
          font-weight:500;
      }
      .active
      {
          background:#e6e6e6!important;
      }
      .active a
      {
          color:black!important;
          font-weight:bold!important;
      }
      #data
      {
          padding:50px!important;
      }
      table
      {
          background:white;
          width:100%;
      }
      #bar #mainmenu li
      {
          display:inline-block;
          list-style-type:none;
          text-align:center;
          cursor:pointer;
      }
      #bar #mainmenu li i
      {
          color:black;
          cursor:pointer;
      }
      #bar #mainmenu li a
      {
          color:black;
      }
      #mainmenu
      {
       position:absolute;
       right:20px;
       top:10px;
      }
      #mainmenu li:hover > #submenu
      {
          visibility:visible;
      }
      #submenu
      {
          visibility:hidden;
          margin-top:17px;
      }
      #submenu li
      {
          display:block!important;
          list-style-type:none;
          background:white;
          padding:10px!important;
          text-align:center;
          cursor:pointer;
          transition:background .5s;
      }
      #submenu li:hover
      {
          background:#e6e6e6!important;
      }
       #editbox
      {
        width:1000px;
        height:850px;
        padding-bottom:20px!important;
        background:white;
        box-shadow:2px 2px 8px 2px rgba(0,0,0,0.2);
        border-radius:15px;
        position:relative;
        overflow:hidden;
      }
      #picbox
      {
          width:100%;
          height:350px;
          background:linear-gradient(to right,#00c6ff,#0072ff);
          position:absolute;
          top:-175px;
          overflow:hidden;
          border-top-left-radius:15px;
          border-top-right-radius:15px;
          border-bottom-left-radius:50%;
          border-bottom-right-radius:50%;
          display:flex;
          justify-content:center;
          align-items:center;
          /*box-shadow:0px 2px 2px rgba(0,0,0,0.12);*/
          box-shadow:2px 2px 8px 2px rgba(0,0,0,0.2);
      }
      #profbox
      {
          width:135px;
          height:135px;
          border:5px solid white;
          border-radius:50%;
          background:white;
          position:absolute;
          bottom:20px;
          background-image:url('img/defaultpic.png');
          background-size:cover;
          background-position:center center;
          background-repeat:no-repeat;
      }
      #filebtn
      {
          position:absolute;
          right:-7px;
          padding:8px 10.5px 8px 10.5px!important;
          background:white;
          color:#00ccff;
          border-radius:50%;
          border:none!important;
          outline:none!important;
          box-shadow:none!important;
          font-size:16px;
          cursor:pointer;
      }
      #filebtn i
      {
          cursor:pointer!important;
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
            border:none!important;
            outline:none!important;
            font-size:13px!important;
        }
        input::placeholder
        {
            color:black!important;
        }
         input:disabled
         {
             background:white!important;
         }
         textarea:disabled
         {
             background:white!important;
         }
         input:read-only
         {
             background:white!important;
         }
         textarea
         {
             box-shadow:none!important;
            border:none!important;
            outline:none!important;
            resize:none!important;
            font-size:13px!important;
         }
         .input-group-text
         {
             background:white!important;
             border:none!important;
             outline:none!important;
             cursor:pointer!important;
             font-size:14px!important;
         }
         #txtarea
         {
            display:flex!important;
            align-items:flex-start!important;
            padding-top:unset!important;
         }
         #addr
         {
             padding-top:.5px!important;
         }
        table tr td
        {
            text-align:center;
            font-size:12px;
            padding:10px;
        }
        table tr td h6
        {
            font-size:13px;
        }
        .card
        {
            border:none!important;
            box-shadow:2px 2px 8px 2px rgba(0,0,0,0.2);
        }
        .card-header
        {
            background:linear-gradient(to right,#00c6ff,#0072ff);
            padding:10px!important;
        }
        .spinner-border
        {
            border-color:transparent!important;
            border:none!important;
        }
        .input-group-text button
        {
            outline:none;!important;
            border:none!important;
            background:transparent!important;
        }
      </style>
      <script type="text/javascript">
          $(document).ready(function(){
             $("#drpdwn").click(function(){
                 //$("#submenu").toggleClass("show");
             });
          });
      </script>
</head>
<body>
  <div class="container-fluid" id="cover">
      <div class="row">
          <div class="col-lg-12" id="bar">
            <img src="img/logo.png" class="img-responsive" width="230" height="50" style="position:relative;bottom:10px;">
              <ul id="mainmenu">
                  <?php
                  $getName="select * from member where MemberID='".$_SESSION['uid']."';";
                  $nameres=mysqli_query($connection,$getName);
                  $namerow=mysqli_fetch_assoc($nameres);
                  echo '<li>
                      <a href="" style="all:unset;">'.$namerow['FirstName'].' '.$namerow['LastName'].'</a>&nbsp;<i class="fas fa-caret-down" id="drpdwn"></i>
                      <ul id="submenu">
                      <li><a href="" style="all:unset;">ID: '.$namerow['MemberID'].'</a></li>
                        <li class="active"><a href="profile.php" style="all:unset;">View Profile</a></li>
                        <li>
                        <form action="logout.php" method="post" style="all:unset;">
                        <button type="submit" name="logout" id="logout" style="all:unset;">Logout</button>
                        </form>
                        </li>
                      </ul>
                  </li>';
                  ?>
              </ul> 
          </div>
      </div>
      <div class="row" style="height:100%;">
          <div class="col-lg-2" id="navbar">
              <nav>
                  <ul>
                      <li>
                          <?php
                          echo '<a href="dashboard.php?uid='.base64_encode($_SESSION['uid']).'">My Dashboard</a>';
                          ?>
                      </li>
                      <li>
                          <a href="abptree.php">Genealogy</a>
                      </li>
                       <li>
                          <a href="report.php">Binary Report</a>
                      </li>
                  </ul>
              </nav>
          </div>
          <div class="col-lg-10" id="data" style="display:flex;justify-content:center;background:#e6e6e6;">
              <div id="editbox">
                  <div id="picbox">
                      <div id="profbox">
                          <button type="button" name="filebtn" id="filebtn"><i class="fas fa-camera" style="font-size:15px;color:#00ccff;"></i></button>
                      </div>
                  </div>
                  <div id="details" class="container" style="position:relative!important;top:180px;">
                      <div class="row" style="height:100%;">
                          <div class="col-lg-6" style="padding:20px!important;">
                              <!--Acc Details-->
                             <div class="card mb-4">
                                 <div class="card-header">
                                     <span class="card-title" style="color:white!important;font-weight:bold!important;">Account Details</span>
                                 </div>
                                 <div class="card-body">
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">User ID   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="uid" id="uid" form="editfrm" value="'.$_SESSION['uid'].'" readonly>';
                                         ?>
                                     </div>
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">Password   :   </span>
                                         </div>
                                         <input type="password" name="pswd" id="pswd" form="editfrm" value="12345678" disabled>
                                          <div class="input-group-append">
                                             <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;"></i></span>
                                         </div>
                                         <script type="text/javascript">
                                             
                                         </script>
                                     </div>
                                 </div>
                             </div>
                             <!--Personal Details-->
                              <div class="card mb-4">
                                 <div class="card-header">
                                     <span class="card-title" style="color:white!important;font-weight:bold!important;">Personal Details</span>
                                 </div>
                                 <div class="card-body">
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">Name   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="uname" id="uname" form="editfrm" value="'.$namerow['FirstName'].' '.$namerow['LastName'].'" disabled style="width:300px;">';
                                         ?>
                                     </div>
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">Qualification   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="qual" id="qual" form="editfrm" value="'.$namerow['Qualification'].'" disabled>';
                                         ?>
                                       <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editqual"></i>
                                        <button type="button" id="updatequal" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>
                                        </span>
                                         </div>
                                         <script type="text/javascript">
                                       $(document).ready(function(){
                                         var qual=$("#qual").val();
                                         $("#editqual").click(function(){
                                             $("#qual").removeAttr("disabled");
                                            var qualelem=$("#qual")[0];
                                            var quallen=qual.length;
                                            qualelem.selectionStart=quallen;
                                            qualelem.selectionEnd=quallen;
                                            qualelem.focus();
                                            $("#editqual").removeClass("fas fa-pen");
                                            $("#updatequal").css("display","inline");
                                         });
                                         $("#updatequal").click(function(){
                                           $("#editfrm").submit(function(){
                                             $("#updatequal").addClass("spinner-border");
                                            });
                                            $("#updateprofile").click();
                                         });
                                       });
                                     </script>
                                     </div>
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">State   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="state" id="state" form="editfrm" value="'.$namerow['State'].'" disabled>';
                                         ?>
                                          <div class="input-group-append">
                                             <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editstate"></i>
                                        <button type="button" id="updatestate" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>     
                                        </span>
                                         </div>
                                         <script type="text/javascript">
                                       $(document).ready(function(){
                                         var state=$("#state").val();
                                         $("#editstate").click(function(){
                                             $("#state").removeAttr("disabled");
                                            var stateelem=$("#state")[0];
                                            var statelen=state.length;
                                            stateelem.selectionStart=statelen;
                                            stateelem.selectionEnd=statelen;
                                            stateelem.focus();
                                            $("#editstate").removeClass("fas fa-pen");
                                            $("#updatestate").css("display","inline");
                                         });
                                         $("#updatestate").click(function(){
                                             $("#editfrm").submit(function(){
                                             $("#updatestate").addClass("spinner-border");
                                             });
                                             $("#updateprofile").click();
                                         });
                                       });
                                       </script>
                                     </div>
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">City   :   </span>
                                         </div>
                                         <?php
                                          echo '<input type="text" name="city" id="city" form="editfrm" value="'.$namerow['City'].'" disabled>';
                                         ?>
                                          <div class="input-group-append">
                                             <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editcity"></i>
                                        <button type="button" id="updatecity" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>     
                                        </span>
                                         </div>
                                         <script type="text/javascript">
                                       $(document).ready(function(){
                                         var city=$("#city").val();
                                         $("#editcity").click(function(){
                                             $("#city").removeAttr("disabled");
                                            var cityelem=$("#city")[0];
                                            var citylen=city.length;
                                            cityelem.selectionStart=citylen;
                                            cityelem.selectionEnd=citylen;
                                            cityelem.focus();
                                            $("#editcity").removeClass("fas fa-pen");
                                            $("#updatecity").css("display","inline");
                                         });
                                         $("#updatecity").click(function(){
                                             $("#editfrm").submit(function(){
                                             $("#updatecity").addClass("spinner-border");
                                             });
                                             $("#updateprofile").click();
                                         });
                                       });
                                       </script>
                                     </div>
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text" id="txtarea">Address   :   </span>
                                         </div>
                                         <?php
                                           echo '<textarea rows="2" cols="40"name="addr" id="addr" form="editfrm" disabled>'.$namerow['Address'].'</textarea>';
                                         ?>
                                          <div class="input-group-append">
                                             <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editaddr"></i>
                                        <button type="button" id="updateaddr" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>     
                                        </span>
                                         </div>
                                         <script type="text/javascript">
                                       $(document).ready(function(){
                                         var addr=$("#addr").val();
                                         $("#editaddr").click(function(){
                                             $("#addr").removeAttr("disabled");
                                            var addrelem=$("#addr")[0];
                                            var addrlen=addr.length;
                                            addrelem.selectionStart=addrlen;
                                            addrelem.selectionEnd=addrlen;
                                            addrelem.focus();
                                            $("#editaddr").removeClass("fas fa-pen");
                                            $("#updateaddr").css("display","inline");
                                         });
                                         $("#updateaddr").click(function(){
                                             $("#editfrm").submit(function(){
                                             $("#updateaddr").addClass("spinner-border");
                                             });
                                             $("#updateprofile").click();
                                         });
                                       });
                                       </script>
                                     </div>
                                     
                                 </div>
                             </div>
                             <!--Contact Details-->
                             <div class="card mb-4">
                                 <div class="card-header">
                                     <span class="card-title" style="color:white!important;font-weight:bold!important;">Contact Details</span>
                                 </div>
                                 <div class="card-body">
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">Email ID   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="email" id="email" form="editfrm" value="'.$namerow['EmailID'].'" disabled style="width:200px;" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Invalid email address">';
                                         ?>
                                         <div class="input-group-append">
                                           <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editemail"></i>
                                         <button type="button" id="updateemail" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>   
                                        </span>
                                         </div>
                                        <script type="text/javascript">
                                       $(document).ready(function(){
                                         var email=$("#email").val();
                                         $("#editemail").click(function(){
                                             $("#email").removeAttr("disabled");
                                            var emailelem=$("#email")[0];
                                            var emaillen=email.length;
                                            emailelem.selectionStart=emaillen;
                                            emailelem.selectionEnd=emaillen;
                                            emailelem.focus();
                                            $("#editemail").removeClass("fas fa-pen");
                                            $("#updateemail").css("display","inline");
                                         });
                                         $("#updateemail").click(function(){
                                             $("#editfrm").submit(function(){
                                             $("#updateemail").addClass("spinner-border");
                                             });
                                             $("#updateprofile").click();
                                         });
                                       });
                                       </script>
                                     </div>
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">Mobile No.   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="mobno" id="mobno" form="editfrm" value="'.$namerow['ContactNo'].'" disabled pattern="[+][0-9]{12}" title="Add country code. Ex: +91">';
                                         ?>
                                          <div class="input-group-append">
                                             <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editmobno"></i>
                                        <button type="button" id="updatemobno" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>
                                        </span>
                                         </div>
                                         <script type="text/javascript">
                                       $(document).ready(function(){
                                         var mobno=$("#mobno").val();
                                         $("#editmobno").click(function(){
                                             $("#mobno").removeAttr("disabled");
                                            var mobnoelem=$("#mobno")[0];
                                            var mobnolen=mobno.length;
                                            mobnoelem.selectionStart=mobnolen;
                                            mobnoelem.selectionEnd=mobnolen;
                                            mobnoelem.focus();
                                            $("#editmobno").removeClass("fas fa-pen");
                                            $("#updatemobno").css("display","inline");
                                         });
                                         $("#updatemobno").click(function(){
                                             $("#editfrm").submit(function(){
                                             $("#updatemobno").addClass("spinner-border");
                                             });
                                             $("#updateprofile").click();
                                         });
                                       });
                                       </script>
                                     </div>
                                 </div>
                             </div>
                          </div>
                          <div class="col-lg-6" style="padding:20px!important;">
                              <div class="card mb-4">
                                 <div class="card-header">
                                     <span class="card-title" style="color:white!important;font-weight:bold!important;">Identity Proof</span>
                                 </div>
                                 <div class="card-body">
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">Aadhar No.   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="adrno" id="adrno" form="editfrm" value="'.$namerow['AadharNo'].'" disabled pattern="[0-9]{12}" title="Aadhar No should contain 12 digits">';
                                         ?>
                                         <div class="input-group-append">
                                             <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editadrno"></i>
                                        <button type="button" id="updateadrno" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>
                                        </span>
                                         </div>
                                         <script type="text/javascript">
                                       $(document).ready(function(){
                                         var adrno=$("#adrno").val();
                                         $("#editadrno").click(function(){
                                             $("#adrno").removeAttr("disabled");
                                            var adrnoelem=$("#adrno")[0];
                                            var adrnolen=adrno.length;
                                            adrnoelem.selectionStart=adrnolen;
                                            adrnoelem.selectionEnd=adrnolen;
                                            adrnoelem.focus();
                                            $("#editadrno").removeClass("fas fa-pen");
                                            $("#updateadrno").css("display","inline");
                                         });
                                         $("#updateadrno").click(function(){
                                             $("#editfrm").submit(function(){
                                             $("#updateadrno").addClass("spinner-border");
                                             });
                                             $("#updateprofile").click();
                                         });
                                       });
                                       </script>
                                     </div>
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">Pan No.   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="panno" id="panno" form="editfrm" value="'.$namerow['PANNo'].'" disabled pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" title="The first five characters are letters (in uppercase by default), followed by four numerals, and the last (tenth) character is a letter. Ex: AAAPL1234C">';
                                         ?>
                                          <div class="input-group-append">
                                             <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editpanno"></i>
                                         <button type="button" id="updatepanno" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>
                                        </span>
                                         </div>
                                         <script type="text/javascript">
                                       $(document).ready(function(){
                                         var panno=$("#panno").val();
                                         $("#editpanno").click(function(){
                                             $("#panno").removeAttr("disabled");
                                            var pannoelem=$("#panno")[0];
                                            var pannolen=panno.length;
                                            pannoelem.selectionStart=pannolen;
                                            pannoelem.selectionEnd=pannolen;
                                            pannoelem.focus();
                                            $("#editpanno").removeClass("fas fa-pen");
                                            $("#updatepanno").css("display","inline");
                                         });
                                         $("#updatepanno").click(function(){
                                             $("#editfrm").submit(function(){
                                             $("#updatepanno").addClass("spinner-border");
                                             });
                                             $("#updateprofile").click();
                                         });
                                       });
                                       </script>
                                     </div>
                                 </div>
                             </div>
                             <!--Bank Details-->
                             <div class="card mb-4">
                                 <div class="card-header">
                                     <span class="card-title" style="color:white!important;font-weight:bold!important;">Bank Details</span>
                                 </div>
                                 <div class="card-body">
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">Bank Name   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="bname" id="bname" form="editfrm" value="'.$namerow['BankName'].'" disabled>';
                                         ?>
                                         <div class="input-group-append">
                                             <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editbname"></i>
                                        <button type="button" id="updatebname" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>
                                        </span>
                                         </div>
                                         <script type="text/javascript">
                                       $(document).ready(function(){
                                         var bname=$("#bname").val();
                                         $("#editbname").click(function(){
                                             $("#bname").removeAttr("disabled");
                                            var bnameelem=$("#bname")[0];
                                            var bnamelen=bname.length;
                                            bnameelem.selectionStart=bnamelen;
                                            bnameelem.selectionEnd=bnamelen;
                                            bnameelem.focus();
                                            $("#editbname").removeClass("fas fa-pen");
                                            $("#updatebname").css("display","inline");
                                         });
                                         $("#updatebname").click(function(){
                                             $("#editfrm").submit(function(){
                                             $("#updatebname").addClass("spinner-border");
                                             });
                                             $("#updateprofile").click();
                                         });
                                       });
                                       </script>
                                     </div>
                                     
                                     <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">Branch Name   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="brname" id="brname" form="editfrm" value="'.$namerow['BranchName'].'" disabled>';
                                         ?>
                                          <div class="input-group-append">
                                             <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editbrname"></i>
                                        <button type="button" id="updatebrname" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>
                                        </span>
                                         </div>
                                         <script type="text/javascript">
                                       $(document).ready(function(){
                                         var brname=$("#brname").val();
                                         $("#editbrname").click(function(){
                                             $("#brname").removeAttr("disabled");
                                            var brnameelem=$("#brname")[0];
                                            var brnamelen=brname.length;
                                            brnameelem.selectionStart=brnamelen;
                                            brnameelem.selectionEnd=brnamelen;
                                            brnameelem.focus();
                                            $("#editbrname").removeClass("fas fa-pen");
                                            $("#updatebrname").css("display","inline");
                                         });
                                         $("#updatebrname").click(function(){
                                             $("#editfrm").submit(function(){
                                             $("#updatebrname").addClass("spinner-border");
                                             });
                                             $("#updateprofile").click();
                                         });
                                       });
                                       </script>
                                     </div>
                                     
                                    <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">Acc No.   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="accno" id="accno" form="editfrm" value="'.$namerow['BankAccNo'].'" disabled pattern="[0-9]{1,20}" title="Enter a valid Acc No.">';
                                         ?>
                                          <div class="input-group-append">
                                             <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editaccno"></i>
                                        <button type="button" id="updateaccno" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>
                                        </span>
                                         </div>
                                         <script type="text/javascript">
                                       $(document).ready(function(){
                                         var accno=$("#accno").val();
                                         $("#editaccno").click(function(){
                                             $("#accno").removeAttr("disabled");
                                            var accnoelem=$("#accno")[0];
                                            var accnolen=accno.length;
                                            accnoelem.selectionStart=accnolen;
                                            accnoelem.selectionEnd=accnolen;
                                            accnoelem.focus();
                                            $("#editaccno").removeClass("fas fa-pen");
                                            $("#updateaccno").css("display","inline");
                                         });
                                         $("#updateaccno").click(function(){
                                             $("#editfrm").submit(function(){
                                             $("#updateaccno").addClass("spinner-border");
                                             });
                                             $("#updateprofile").click();
                                         });
                                       });
                                       </script>
                                     </div>
                                     
                                    <div class="input-group">
                                         <div class="input-group-prepend">
                                             <span class="input-group-text">IFSC Code   :   </span>
                                         </div>
                                         <?php
                                         echo '<input type="text" name="ifsc" id="ifsc" form="editfrm" value="'.$namerow['IFSCcode'].'" disabled maxlength="11">';
                                         ?>
                                          <div class="input-group-append">
                                             <span class="input-group-text"><i class="fas fa-pen" style="font-size:14px;color:#00ccff;" id="editifsc"></i>
                                         <button type="button" id="updateifsc" style="display:none;">
                                            <i class="fas fa-sync-alt" style="font-size:14px;color:#00ccff;"></i>
                                        </button>
                                         </span>
                                         </div>
                                         <script type="text/javascript">
                                       $(document).ready(function(){
                                         var ifsc=$("#ifsc").val();
                                         $("#editifsc").click(function(){
                                             $("#ifsc").removeAttr("disabled");
                                            var ifscelem=$("#ifsc")[0];
                                            var ifsclen=ifsc.length;
                                            ifscelem.selectionStart=ifsclen;
                                            ifscelem.selectionEnd=ifsclen;
                                            ifscelem.focus();
                                            $("#editifsc").removeClass("fas fa-pen");
                                            $("#updateifsc").css("display","inline");
                                         });
                                         $("#updateifsc").click(function(){
                                             $("#editfrm").submit(function(){
                                             $("#updateifsc").addClass("spinner-border");
                                             });
                                             $("#updateprofile").click();
                                         });
                                       });
                                       </script>
                                     </div>
                                 </div>
                             </div>
                             <!--end of profile-->
                             <form action="editing.php" method="POST" style="visibility:hidden;display:inline;" id="editfrm">
                              <button type="submit" name="updateprofile" id="updateprofile">SUBMIT</button>
                            </form>
                            <script type="text/javascript">
                                $("#editfrm").submit(function(e){
                                   event.preventDefault();
                                   var updateprofile=$("#updateprofile").val();
                                   $.ajax({
                                      url:"editing.php",
                                      type:"POST",
                                      data:$("#editfrm").serialize() + "&updateprofile=" + updateprofile,
                                      success:function(result,status,xhr){
                                          console.log(result);
                                         $("#editfrm").after(result);
                                      }
                                   });
                                });
                            </script>
                          </div>
                      </div>
                  </div>
              </div> 
          </div>
        </div>
  </div>  
</body>
</html>