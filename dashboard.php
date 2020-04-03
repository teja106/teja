<?php
session_start();
include_once 'dbconfig.php';
$data=$_REQUEST['uid'];
$uid=base64_decode($data);
$_SESSION['uid']=$uid;
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
<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->
    <title>MLM</title>
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
          background:#e6e6e6;
      }
      .active a
      {
          color:black!important;
          font-weight:bold!important;
      }
      /*#data*/
      /*{*/
      /*    padding:50px!important;*/
      /*}*/
      table
      {
          background:white;
      }
      thead tr th
      {
        font-size:12px!important;  
      }
      td
      {
          font-size:11px!important;
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
      #reportbox
      {
        height:auto;
        background:white;
        box-shadow:2px 2px 8px 2px rgba(0,0,0,0.2);
        border-radius:15px;
        padding:0!important;
        padding-bottom:10px!important;
      }
      #reportbox table
      {
          padding:0px 20px 20px!important;
          border-color:white!important;
      }
      table td,th
      {
          text-align:center;
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
        }
      .dataTables_length {
        padding-left:10px;
        font-size:13px;
        }
        .dataTables_filter {
        padding-right:10px;
        font-size:13px;
        }
        .dataTables_paginate {
        margin-bottom:10px;
        font-size:13px;
        }
        .dataTables_info{
        padding-left:10px;
        font-size:13px;
        }
        body::-webkit-scrollbar
        {
          width:1.2em;
        }
        body::-webkit-scrollbar-track
        {
            background:#e6e6e6;
        }
        body::-webkit-scrollbar-thumb
        {
          background:white;
          border-radius:20px;
          box-shadow:inset 0 0 2px rgba(0,0,0,0.15);
        }
        #userrow td
        {
            background:lightgreen;
        }
      </style>
    <link rel="stylesheet" href="tables.css">
    <script src="tables.js"></script>
      <script type="text/javascript">
          $(document).ready(function(){
             $("#drpdwn").click(function(){
                 $("#submenu").toggleClass("show");
             }); 
          });
      </script>
      <script>
        $(document).ready( function () {
            $('table.display').DataTable({
                "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]]
            });
        });
    </script>
</head>
<body>
  <div class="container-fluid" id="cover" style="background:red;">
      <div class="row">
          <div class="col-lg-12" id="bar">
              <img src="img/logo.png" class="img-responsive" width="230" height="50" style="position:relative;bottom:10px;">
              <ul id="mainmenu">
                  <?php
                  $getName="select * from member where MemberID='".$_SESSION['uid']."';";
                  $nameres=mysqli_query($connection,$getName);
                  $namerow=mysqli_fetch_assoc($nameres);
                  echo '<li>'.$namerow['FirstName'].' '.$namerow['LastName'].'&nbsp;<i class="fas fa-caret-down" id="drpdwn"></i>
                      <ul id="submenu">
                        <li><a href="" style="all:unset;">ID: '.$namerow['MemberID'].'</a></li>
                        <li><a href="profile.php" style="all:unset;">View Profile</a></li>
                        <li>
                        <form action="logout.php" method="post">
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
                      <li class="active">
                          <a href="">My DashBoard</a>
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
          <div class="col-lg-10" id="data" style="background:#e6e6e6;">
              <div class="container mt-5">
                  <div class="row">
                      <div class="col-lg-12" id="reportbox">
                         <div id="header" class="mb-3">
                             <h5 style="color:#646464;">Downline Member Data</h5>
                         </div>
             <div class="table-responsive">
              <table class="display table-bordered">
                  <thead>
                  <tr>
                      <th>Member ID</th>
                      <th>Name</th>
                      <th>Leg Position</th>
                      <!--<th>Left Leg Count</th>-->
                      <!--<th>Right Leg Count</th>-->
                      <!--<th>Parallel Leg Count</th>-->
                      <th>No. of Pairs</th>
                      <th>Pair Commission (A)</th>
                      <th>Bonus (B)</th>
                      <th>Cader</th>
                      <!--<th>Spilling</th>-->
                      <th>Total Amount (C=A+B)</th>
                      <th>TDS Tax (D)</th>
                      <th>Wallet Amount (E)</th>
                      <th>Amount to be Paid (C-(D+E))</th>
                      <th>Current Week Income</th>
                      <th>Amount Paid</th>
                      <th>Amount Paid Date</th>
                      <th>Balance Amount</th>
                      <th>Contact No</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $pair=400;
                $sql="select * from member;";
                    $result=mysqli_query($connection,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $curdt=date("d-m-Y");
                         $joiningdt=$row['DtofJoining'];
                         $start=date_create($joiningdt);
                         $end=date_create($curdt);
                         $dtdiff=date_diff($end,$start);
                         $diff=$dtdiff->format("%a");
                         if($diff == 7 and $row['FinishedReview'] != '1W')
                         {
                             if($row['Totpairs'] >= 5)
                             {
                                 $bonus=$row['Bonus']+500;
                                 $pairdiff=$row['Totpairs'] - 5;
                                 if($pairdiff > 0)
                                 {
                                     $carryforward=$pairdiff;
                                 }
                                 else
                                 {
                                     $carryforward=0;
                                 }
                                 $totamt=$row['PairCommission']+$bonus;
                                 $tdstax=0.04*$totamt;
                                 $getwamt=$totamt-$tdstax;
                                 $walletamt=0.1*$getwamt;
                                 $getminus=$walletamt+$tdstax;
                                 $amttobepaid=$totamt - $getminus;
                                 $cader='PEARL DISTRIBUTOR';
                                 $reviewatpaircnt=$row['Totpairs'];
                             }
                             else if($row['Totpairs'] < 5)
                             {
                                 $bonus=$row['Bonus'];
                                 $totamt=$row['PairCommission']+$bonus;
                                 $tdstax=0.04*$totamt;
                                 $getwamt=$totamt-$tdstax;
                                 $walletamt=0.1*$getwamt;
                                 $getminus=$walletamt+$tdstax;
                                 $amttobepaid=$totamt - $getminus;
                                 $carryforward=0;
                                 $cader='MEMBER';
                                 $reviewatpaircnt=$row['Totpairs'];
                             }
                             $update="update member set FinishedReview='1W',ReviewAtPairCnt=".$reviewatpaircnt.",Bonus=".$bonus.",TotAmount=".$totamt.",TdsTax=".$tdstax.",WalletAmt=".$walletamt.",AmttobePaid=".$amttobepaid.",Cader='".$cader."',CarryForward=".$carryforward." where MemberID='".$row['MemberID']."';";
                             mysqli_query($connection,$update);
                         }
                         else if($diff == 14 and $row['FinishedReview'] != '2W')
                         {
                             $imppair=$row['ReviewAtPairCnt'];
                                 $curwkpairs=$row['Totpairs'] - $imppair;
                                 if($curwkpairs >=15)
                                 {
                                     $bonus=$row['Bonus']+3000;
                                     $pairdiff=$curwkpairs - 15;
                                     if($pairdiff > 0)
                                     {
                                         $carryforward=$row['CarryForward']+$pairdiff;
                                     }
                                     else
                                     {
                                         $carryforward=$row['CarryForward'];
                                     }
                                     $totamt=$row['PairCommission']+$bonus;
                                     $tdstax=0.04*$totamt;
                                     $getwamt=$totamt-$tdstax;
                                     $walletamt=0.1*$getwamt;
                                     $getminus=$walletamt+$tdstax;
                                     $amttobepaid=$totamt - $getminus;
                                     $cader='SILVER DISTRIBUTOR';
                                     $reviewatpaircnt=$imppair+$curwkpairs;
                                 }
                                 else if($curwkpairs < 15)
                                 {
                                     if($row['CarryForward'] > 0)
                                     {
                                         $pairs=$curwkpairs+$row['CarryForward'];
                                         if($pairs >=15)
                                         {
                                             $bonus=$row['Bonus']+3000;
                                             $pairdiff=$pairs - 15;
                                             if($pairdiff > 0)
                                             {
                                                 $carryforward=$pairdiff;
                                             }
                                             else
                                             {
                                                 $carryforward=0;
                                             }
                                             $totamt=$row['PairCommission']+$bonus;
                                             $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                             $cader='SILVER DISTRIBUTOR';
                                             $reviewatpaircnt=$imppair+$pairs;
                                         }
                                         else if($pairs < 15)
                                         {
                                             $bonus=$row['Bonus'];
                                             $totamt=$row['PairCommission']+$bonus;
                                              $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                             $carryforward=$row['CarryForward'];
                                             $cader=$row['Cader'];
                                             $reviewatpaircnt=$imppair+$pairs;
                                         }
                                         
                                     }
                                     else
                                     {
                                         $bonus=$row['Bonus'];
                                         $totamt=$row['PairCommission']+$bonus;
                                          $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                         $carryforward=0;
                                         $cader=$row['Cader'];
                                         $reviewatpaircnt=$imppair+$curwkpairs;
                                     }
                                 }
                             $update="update member set FinishedReview='2W',ReviewAtPairCnt=".$reviewatpaircnt.",Bonus=".$bonus.",TotAmount=".$totamt.",TdsTax=".$tdstax.",WalletAmt=".$walletamt.",AmttobePaid=".$amttobepaid.",Cader='".$cader."',CarryForward=".$carryforward." where MemberID='".$row['MemberID']."';";
                             mysqli_query($connection,$update);
                         }
                         else if($diff == 21 and $row['FinishedReview'] != '3W')
                         {
                             $imppair=$row['ReviewAtPairCnt'];
                             if($row['Totpairs'] >=45)
                             {
                                 $curwkpairs=$row['Totpairs'] - $imppair;
                                 if($curwkpairs >=45)
                                 {
                                     $bonus=$row['Bonus']+13500;
                                     $pairdiff=$curwkpairs - 45;
                                     if($pairdiff > 0)
                                     {
                                         $carryforward=$row['CarryForward']+$pairdiff;
                                     }
                                     else
                                     {
                                         $carryforward=$row['CarryForward'];
                                     }
                                     $totamt=$row['PairCommission']+$bonus;
                                      $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                     $cader='GOLD DISTRIBUTOR';
                                     $reviewatpaircnt=$imppair+$curwkpairs;
                                 }
                                 else if($curwkpairs < 45)
                                 {
                                     if($row['CarryForward'] > 0)
                                     {
                                         $pairs=$curwkpairs+$row['CarryForward'];
                                         if($pairs >=45)
                                         {
                                             $bonus=$row['Bonus']+13500;
                                             $pairdiff=$pairs - 45;
                                             if($pairdiff > 0)
                                             {
                                                 $carryforward=$pairdiff;
                                             }
                                             else
                                             {
                                                 $carryforward=0;
                                             }
                                             $totamt=$row['PairCommission']+$bonus;
                                              $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                             $cader='GOLD DISTRIBUTOR';
                                             $reviewatpaircnt=$imppair+$pairs;
                                         }
                                         else if($pairs < 45)
                                         {
                                             $bonus=$row['Bonus'];
                                             $totamt=$row['PairCommission']+$bonus;
                                              $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                             $carryforward=$row['CarryForward'];
                                             $cader=$row['Cader'];
                                             $reviewatpaircnt=$imppair+$pairs;
                                         }
                                     }
                                     else
                                     {
                                         $bonus=$row['Bonus'];
                                         $totamt=$row['PairCommission']+$bonus;
                                             $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                         $carryforward=0;
                                         $cader=$row['Cader'];
                                         $reviewatpaircnt=$imppair+$curwkpairs;
                                     }
                                 }
                             }
                             $update="update member set FinishedReview='3W',ReviewAtPairCnt=".$reviewatpaircnt.",Bonus=".$bonus.",TotAmount=".$totamt.",TdsTax=".$tdstax.",WalletAmt=".$walletamt.",AmttobePaid=".$amttobepaid.",Cader='".$cader."',CarryForward=".$carryforward." where MemberID='".$row['MemberID']."';";
                             mysqli_query($connection,$update);
                         }
                         else if($diff == 28 and $row['FinishedReview'] != '4W')
                         {
                             $imppair=$row['ReviewAtPairCnt'];
                                 $curwkpairs=$row['Totpairs'] - $imppair;
                                 if($curwkpairs >=135)
                                 {
                                     $bonus=$row['Bonus']+54000;
                                     $pairdiff=$curwkpairs - 135;
                                     if($pairdiff > 0)
                                     {
                                         $carryforward=$row['CarryForward']+$pairdiff;
                                     }
                                     else
                                     {
                                         $carryforward=$row['CarryForward'];
                                     }
                                     $totamt=$row['PairCommission']+$bonus;
                                      $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                     $cader='RUBY DISTRIBUTOR';
                                     $reviewatpaircnt=$imppair+$curwkpairs;
                                 }
                                 else if($curwkpairs < 135)
                                 {
                                     if($row['CarryForward'] > 0)
                                     {
                                         $pairs=$curwkpairs+$row['CarryForward'];
                                         if($pairs >=135)
                                         {
                                             $bonus=$row['Bonus']+54000;
                                             $pairdiff=$pairs - 135;
                                             if($pairdiff > 0)
                                             {
                                                 $carryforward=$pairdiff;
                                             }
                                             else
                                             {
                                                 $carryforward=0;
                                             }
                                             $totamt=$row['PairCommission']+$bonus;
                                              $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                             $cader='RUBY DISTRIBUTOR';
                                             $reviewatpaircnt=$imppair+$pairs;
                                         }
                                         else if($pairs < 135)
                                         {
                                             $bonus=$row['Bonus'];
                                             $totamt=$row['PairCommission']+$bonus;
                                              $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                             $carryforward=$row['CarryForward'];
                                             $cader=$row['Cader'];
                                             $reviewatpaircnt=$imppair+$pairs;
                                         }
                                     }
                                     else
                                     {
                                         $bonus=$row['Bonus'];
                                         $totamt=$row['PairCommission']+$bonus;
                                          $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                         $carryforward=0;
                                         $cader=$row['Cader'];
                                         $reviewatpaircnt=$imppair+$curwkpairs;
                                     }
                                 }
                                 $update="update member set FinishedReview='4W',ReviewAtPairCnt=".$reviewatpaircnt.",Bonus=".$bonus.",TotAmount=".$totamt.",TdsTax=".$tdstax.",WalletAmt=".$walletamt.",AmttobePaid=".$amttobepaid.",Cader='".$cader."',CarryForward=".$carryforward." where MemberID='".$row['MemberID']."';";
                                 mysqli_query($connection,$update);
                         }
                         else if(($diff < 7 and $row['FinishedReview'] == NULL) or $diff > 0)
                         {
                             $bonus=$row['Bonus'];
                                         $totamt=$row['PairCommission']+$bonus;
                                          $tdstax=0.04*$totamt;
                                             $getwamt=$totamt-$tdstax;
                                             $walletamt=0.1*$getwamt;
                                             $getminus=$walletamt+$tdstax;
                                             $amttobepaid=$totamt - $getminus;
                                         $carryforward=0;
                                         $cader='Member';
                                         $reviewatpaircnt=0;
                             $update="update member set ReviewAtPairCnt=".$reviewatpaircnt.",Bonus=".$bonus.",TotAmount=".$totamt.",TdsTax=".$tdstax.",WalletAmt=".$walletamt.",AmttobePaid=".$amttobepaid.",Cader='".$cader."',CarryForward=".$carryforward." where MemberID='".$row['MemberID']."';";
                                 mysqli_query($connection,$update);
                         }
                         
                    }
                    //CW
                    $sql="select * from member;";
                            $result=mysqli_query($connection,$sql);
                            $resultcheck=mysqli_num_rows($result);
                            $timesec=$resultcheck*5;
                            $timems=$timesec*1000;
                            while($row=mysqli_fetch_assoc($result))
                            {
                                echo '<script type="text/javascript">
                                   $(document).ready(function(){
                                     var memid="'.$row['MemberID'].'";
                                   $.ajax({
                                      url:"wkmemcount.php",
                                      type:"POST",
                                      data:{memberid:memid},
                                      async:false,
                                      success:function(result,status,xhr){
                                          if(status == "success")
                                          {
                                              console.log(status);
                                              //console.log(result);
                                          }
                                          else
                                          {
                                              console.log(status);
                                          }
                                      }
                                   });
                                 });
                                </script>';
                            }
                            //Display data
                   $getdlmem="select * from member where ReferalID='".$_SESSION['uid']."';";
                    $dlmemres=mysqli_query($connection,$getdlmem);
                    while($dlmemrow=mysqli_fetch_assoc($dlmemres))
                    {
                        echo '<tr>
                         <td>'.$dlmemrow['MemberID'].'</td>
                          <td>'.$dlmemrow['FirstName'].' '.$dlmemrow['LastName'].'</td>
                          <td>'.$dlmemrow['Legpos'].'</td>';
                        //   echo '<td>'.$dlmemrow['LeftCount'].'</td>
                        //   <td>'.$dlmemrow['RightCount'].'</td>
                        //   <td>'.$dlmemrow['ParallelCount'].'</td>
                          echo '<td>'.$dlmemrow['Totpairs'].'</td>
                         <td>Rs. '.$dlmemrow['PairCommission'].'</td>';
                         echo '<td>Rs. '.$dlmemrow['Bonus'].'</td>';
                         if($dlmemrow['Cader'] == NULL)
                         {
                          echo '<td>MEMBER</td>';   
                         }
                         else
                         {
                             echo '<td>'.$dlmemrow['Cader'].'</td>';
                         }
                          echo '<td>Rs. '.$dlmemrow['TotAmount'].'</td>
                          <td>Rs. '.$dlmemrow['TdsTax'].'</td>
                          <td>Rs. '.$dlmemrow['WalletAmt'].'</td>
                         <td>Rs. '.$dlmemrow['AmttobePaid'].'</td>';
                          echo '<td>Rs. '.$dlmemrow['WkPrCom'].'</td>
                          <td>---</td>
                          <td>---</td>
                          <td>---</td>
                          <td>'.$dlmemrow['ContactNo'].'</td>
                      </tr>';
                    }
                  ?>
                  </tbody>
              </table>
              </div>
                </div>
               </div>
              </div>
          </div>
      </div>
  </div>  

</body>
</html>