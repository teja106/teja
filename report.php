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
        background-color:#e6e6e6;
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
          height:100%!important;
         z-index:1!important;
         position:relative;
         padding:0!important;
      }
      #navbar ul
      {
          height:100%;
          width:100%;
          position:absolute;
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
          background:#e6e6e6;
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
      .show
      {
          visibility:visible;
      }
       #memlogform
      {
        width:400px;
        height:450px;
        background:white;
        box-shadow:2px 2px 8px 2px rgba(0,0,0,0.2);
        border-radius:15px;
        padding:0px 20px 20px!important;
        position:absolute;
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
                        <li><a href="profile.php" style="all:unset;">View Profile</a></li>
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
      <div class="row" id="cover">
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
                       <li class="active">
                          <a href="report.php">Binary Report</a>
                      </li>
                  </ul>
              </nav>
          </div>
          <div class="col-lg-10" id="data" style="display:flex;justify-content:center;">
              <div class="table-responsive" id="memlogform">
                <div id="header" class="text-center">
                  <h5 style="color:#646464;">Binary Report</h5>
                </div>
                <!--<form action="valmemlogin.php" method="POST">-->
                <!--    <div class="form-group mt-4">-->
                <!--        <input type="text" name="uid" id="uid" placeholder="User ID" class="form-control" pattern="[A-Z0-9]+">-->
                <!--    </div>-->
                <!--    <span id="uidmsg"></span>-->
                <!--    <div class="form-group mt-4" id="lastinp">-->
                <!--        <input type="password" name="pswd" id="pswd" placeholder="Password" class="form-control" pattern="[A-Za-z0-9]{8}" title="Password should contain only 8 characters">-->
                <!--    </div>-->
                <!--    <span id="pswdmsg"></span>-->
                <!--    <div class="form-group text-center mt-4">-->
                <!--        <button type="submit" name="memlogsub" id="memlogsub" class="btn btn-success" style="padding:10px!important;">LOGIN<div class="spinner">-->
                <!--          <div class="bounce1"></div>-->
                <!--          <div class="bounce2"></div>-->
                <!--          <div class="bounce3"></div>-->
                <!--        </div>-->
                <!--        </button>-->
                <!--    </div>-->
                <!--</form>          -->
                <?php
                $sql="select * from member where MemberID='".$_SESSION['uid']."';";
                $result=mysqli_query($connection,$sql);
                $row=mysqli_fetch_assoc($result);
                echo '<table class="table-bordered" style="position:relative;top:60px;">';
                if($row['ReferalID'] == 'SPONSOR')
                {
                    echo '<tr>
                    <td><h6>Designation</h6></td>
                    <td>SPONSOR</td>
                    </tr>';
                    
                }
                else if($row['ReferalID'] == 'SPONSOR')
                {
                   echo '<tr>
                        <td><h6>Referal ID</h6></td>
                        <td>'.$row['ReferalID'].'</td>
                    </tr>
                    <tr>
                        <td><h6>Leg Position</h6></td>
                        <td>'.$row['LegPosition'].'</td>
                    </tr>';   
                }
                    echo '<tr>
                        <td><h6>No of Pairs</h6></td>
                        <td>'.$row['Totpairs'].'</td>
                    </tr>
                    <tr>
                        <td><h6>Pair Commission</h6></td>
                        <td>Rs. '.$row['PairCommission'].'</td>
                    </tr>
                    <tr>
                        <td><h6>Bonus</h6></td>
                        <td>Rs. '.$row['Bonus'].'</td>
                    </tr>
                     <tr>
                        <td><h6>Total Amount</h6></td>
                        <td>Rs. '.$row['TotAmount'].'</td>
                    </tr>
                    <tr>
                        <td><h6>Wallet Amount</h6></td>
                        <td>Rs. '.$row['WalletAmt'].'</td>
                    </tr>
                    <tr>
                        <td><h6>Amount to be Paid</h6></td>
                        <td>Rs. '.$row['AmttobePaid'].'</td>
                    </tr>
                    <tr>
                        <td><h6>Current Week Income</h6></td>
                        <td>Rs. '.$row['WkPrCom'].'</td>
                    </tr>
                </table>';
                ?>
            </div>
          </div>
        </div>
  </div>  
</body>
</html>