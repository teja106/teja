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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!--Font Awesome-->
<script src="https://kit.fontawesome.com/10e1c1e91f.js" crossorigin="anonymous"></script>
<!--<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">-->
    <title>Document</title>
    <!--Animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />
    <!--Sweet Alerts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
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
          height:100%;
          width:100%;
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
          box-shadow:2px 0px 2px rgba(0,0,0,0.15);
         z-index:3!important;
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
      #data
      {
          padding:50px!important;
      }
      table
      {
          width:100%;
      }
      thead tr th
      {
          
      }
      tr th
      {
          font-size:14px!important;
          text-align:center!important;
      }
      tr td
      {
          text-align:center!important;
          padding:30px 0px 30px 0px;
      }
      tr td i
      {
          font-size:40px;
          cursor:pointer;
      }
      tr td .flash
        {
            font-size:35.5px;
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
          margin-top:16px;
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
      #desc li
      {
          list-style-type:none;
          margin-bottom:5px;
      }
      th span
      {
        visibility:hidden;
      }
        #data h4
        {
            text-align:center;
        }
        .flash
        {
            animation-duration:2s;
            -webkit-animation-duration:2s;
            -moz-animation-duration:2s;
            -ms-animation-duration:2s;
        }
        td #l00
        {
          position:relative;
          left:-260px;
        }
        #l11 i
        {
          position:relative;
          left:-65px;
        }
        #l12 i
        {
          position:relative;
          left:-65px;
        }
        #l13 i
        {
          position:relative;
          left:-65px;
        }
        #moveup
        {
          position:relative;
          left:-260px;
        }
        input[type="file"]
        {
         border:none!important;
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
        body::-webkit-scrollbar
        {
          width:1em;
          height:10em;
        }
        body::-webkit-scrollbar-track
        {
            background:#e6e6e6;
        }
        body::-webkit-scrollbar-thumb
        {
          background:white;
          border-radius:20px;
          box-shadow:2px 2px 4px 2px rgba(0,0,0,0.15);
          height:60px;
        }
        .joining
        {
            color:#fff!important;
            background:green!important;
            box-shadow:none!important;
            border:none!important;
            outline:none!important;
            padding:10px!important;
        }
        /*i::after*/
        /*{*/
        /*    content:attr(name);*/
        /*    color:#a6a195;*/
        /*    font-size:10px;*/
        /*    margin-top:8px;*/
        /*    font-family:Helvetica;*/
        /*    display:block;*/
        /*}*/
        .root
        {
            background:#2ad42a!important;
            background: -webkit-linear-gradient(#1e871e, #2ad42a)!important;
            background: -moz-linear-gradient(#1e871e, #2ad42a)!important;
            background: -o-linear-gradient(#1e871e, #2ad42a)!important;
            background: -ms-linear-gradient(#1e871e, #2ad42a)!important;
            background: linear-gradient(#1e871e, #2ad42a)!important;
			-webkit-background-clip:text!important;
			-moz-background-clip:text!important;
			-ms-background-clip:text!important;
			-o-background-clip:text!important;
			background-clip:text!important;
			-webkit-text-fill-color:transparent!important;
			-moz-text-fill-color:transparent!important;
			-ms-text-fill-color:transparent!important;
			-o-text-fill-color:transparent!important;
			text-fill-color:transparent!important;
        }
        .left
        {
            background:#8f00cc!important;
            background: -webkit-linear-gradient(#8f00cc,#c94dff)!important;
            background: -moz-linear-gradient(#8f00cc,#c94dff)!important;
            background: -o-linear-gradient(#8f00cc,#c94dff)!important;
            background: -ms-linear-gradient(#8f00cc,#c94dff)!important;
            background: linear-gradient(#8f00cc,#c94dff)!important;
			-webkit-background-clip:text!important;
			-moz-background-clip:text!important;
			-ms-background-clip:text!important;
			-o-background-clip:text!important;
			background-clip:text!important;
			-webkit-text-fill-color:transparent!important;
			-moz-text-fill-color:transparent!important;
			-ms-text-fill-color:transparent!important;
			-o-text-fill-color:transparent!important;
			text-fill-color:transparent!important;
        }
        .right
        {
            background:#ff6600!important;
            background: -webkit-linear-gradient(#ff6600,#f5af19)!important;
            background: -moz-linear-gradient(#ff6600,#f5af19)!important;
            background: -o-linear-gradient(#ff6600,#f5af19)!important;
            background: -ms-linear-gradient(#ff6600,#f5af19)!important;
            background: linear-gradient(#ff6600,#f5af19)!important;
			-webkit-background-clip:text!important;
			-moz-background-clip:text!important;
			-ms-background-clip:text!important;
			-o-background-clip:text!important;
			background-clip:text!important;
			-webkit-text-fill-color:transparent!important;
			-moz-text-fill-color:transparent!important;
			-ms-text-fill-color:transparent!important;
			-o-text-fill-color:transparent!important;
			text-fill-color:transparent!important;
        }
        .prl
        {
            background:#2B32B2!important;
            background: -webkit-linear-gradient(#2B32B2, #1488CC)!important;
            background: -moz-linear-gradient(#2B32B2, #1488CC)!important;
            background: -o-linear-gradient(#2B32B2, #1488CC)!important;
            background: -ms-linear-gradient(#2B32B2, #1488CC)!important;
            background: linear-gradient(#2B32B2, #1488CC)!important;
			-webkit-background-clip:text!important;
			-moz-background-clip:text!important;
			-ms-background-clip:text!important;
			-o-background-clip:text!important;
			background-clip:text!important;
			-webkit-text-fill-color:transparent!important;
			-moz-text-fill-color:transparent!important;
			-ms-text-fill-color:transparent!important;
			-o-text-fill-color:transparent!important;
			text-fill-color:transparent!important;
        }
        #poptable td
        {
            padding:5px!important;
            color:white;
        }
        .rootpop,.rootpop .popover-header
        {
            background:#2ad42a!important;
            background: -webkit-linear-gradient(to right, #1e871e, #2ad42a)!important;
            background: -moz-linear-gradient(to right, #1e871e, #2ad42a)!important;
            background: -o-linear-gradient(to right, #1e871e, #2ad42a)!important;
            background: -ms-linear-gradient(to right, #1e871e, #2ad42a)!important;
            background: linear-gradient(to right, #1e871e, #2ad42a)!important;
            color:white;
            text-align:center;
            
        }
        .rootpop .arrow::after
        {
            border-top-color:#2ad42a!important;
            border-bottom-color:#2ad42a!important;
        }
        
        
        .leftpop,.leftpop .popover-header
        {
            background:#8f00cc!important;
            background: -webkit-linear-gradient(to right,#8f00cc,#c94dff)!important;
            background: -moz-linear-gradient(to right,#8f00cc,#c94dff)!important;
            background: -o-linear-gradient(to right,#8f00cc,#c94dff)!important;
            background: -ms-linear-gradient(to right,#8f00cc,#c94dff)!important;
            background: linear-gradient(to right,#8f00cc,#c94dff)!important;
            color:white;
            text-align:center;
        }
        .leftpop .arrow::after
        {
            border-top-color:#8f00cc!important;
            border-bottom-color:#8f00cc!important;
        }
        
        .rightpop,.rightpop .popover-header
        {
            background:#2ad42a!important;
            background: -webkit-linear-gradient(to right,#ff6600,#f5af19)!important;
            background: -moz-linear-gradient(to right,#ff6600,#f5af19)!important;
            background: -o-linear-gradient(to right,#ff6600,#f5af19)!important;
            background: -ms-linear-gradient(to right,#ff6600,#f5af19)!important;
            background: linear-gradient(to right,#ff6600,#f5af19)!important;
            color:white;
            text-align:center;
        }
        .rightpop .arrow::after
        {
            border-top-color:#ff6600!important;
            border-bottom-color:#ff6600!important;
        }
        
        .prlpop,.prlpop .popover-header
        {
            background:#2ad42a!important;
            background: -webkit-linear-gradient(to right,#2B32B2, #1488CC)!important;
            background: -moz-linear-gradient(to right,#2B32B2, #1488CC)!important;
            background: -o-linear-gradient(to right,#2B32B2, #1488CC)!important;
            background: -ms-linear-gradient(to right,#2B32B2, #1488CC)!important;
            background: linear-gradient(to right,#2B32B2, #1488CC)!important;
            color:white;
            text-align:center;
        }
        .prlpop .arrow::after
        {
            border-top-color:#2B32B2!important;
            border-bottom-color:#2B32B2!important;
        }
      </style>
      <script>
        $(document).ready(function(){
          $('.root').popover({
              html:true,
              trigger:'hover',
              template:['<div class="popover rootpop">',
			'<div class="arrow"></div>',
			'<div class="popover-header"></div>', 
			'<div class="popover-body"></div>',
		 '</div>'].join(''),
              content:function() {
                    var content = $(this).attr("data-popover-content");
                    return $(content).html();
                }
          });
          
          $('.left').popover({
              html:true,
              trigger:'hover',
              template:['<div class="popover leftpop">',
			'<div class="arrow"></div>',
			'<div class="popover-header"></div>', 
			'<div class="popover-body"></div>',
		 '</div>'].join(''),
              content:function() {
                    var content = $(this).attr("data-popover-content");
                    return $(content).html();
                }
          });
          
          $('.right').popover({
              html:true,
              trigger:'hover',
              template:['<div class="popover rightpop">',
			'<div class="arrow"></div>',
			'<div class="popover-header"></div>', 
			'<div class="popover-body"></div>',
		 '</div>'].join(''),
              content:function() {
                    var content = $(this).attr("data-popover-content");
                    return $(content).html();
                }
          });
          
          $('.prl').popover({
              html:true,
              trigger:'hover',
              template:['<div class="popover prlpop">',
			'<div class="arrow"></div>',
			'<div class="popover-header"></div>', 
			'<div class="popover-body"></div>',
		 '</div>'].join(''),
              content:function() {
                    var content = $(this).attr("data-popover-content");
                    return $(content).html();
                }
          });
        });
        $(document).ready(function(){
            $("[data-toggle=tooltip]").tooltip();
        });
        $(document).ready(function(){
            $(".notactive").click(function(){
            swal("Not Active","Access Denied to add Member","warning");
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
                  if($_SESSION['uid'] == 'LIPIDMKT')
                  {
                      echo '<li>
                      <a href="" style="all:unset;">Welcome ADMIN</a>&nbsp;<span class="fas fa-caret-down" id="drpdwn"></span>
                      <ul id="submenu">
                        <li>
                        <form action="logout.php" method="post" style="all:unset;">
                        <button type="submit" name="adminlogout" id="logout" style="all:unset;">Logout</button>
                        </form>
                        </li>
                      </ul>
                  </li>';
                  }
                  else
                  {
                  $getName="select * from member where MemberID='".$_SESSION['uid']."';";
                  $nameres=mysqli_query($connection,$getName);
                  $namerow=mysqli_fetch_assoc($nameres);
                  echo '<li>'.$namerow['FirstName'].' '.$namerow['LastName'].'&nbsp;<i class="fas fa-caret-down" id="drpdwn"></i>
                      <ul id="submenu">
                      <li><a href="" style="all:unset;">ID:'.$namerow['MemberID'].'</a></li>
                        <li><a href="profile.php" style="all:unset;">View Profile</a></li>
                        <li>
                        <form action="logout.php" method="post" style="all:unset;">
                        <button type="submit" name="logout" id="logout" style="all:unset;">Logout</button>
                        </form>
                        </li>
                      </ul>
                  </li>';
                  }
                  ?>
              </ul> 
          </div>
      </div>
      <div class="row" style="height:100%;">
          <div class="col-lg-2" id="navbar">
              <nav>
                  <?php
                  if($_SESSION['uid'] == 'LIPIDMKT')
                  {
                      echo '<ul>
                      <li>
                          <a href="admindshb.php">My DashBoard</a>
                      </li>
                      <li class="active">
                          <a href="abptree.php">View Genealogy</a>
                      </li>
                      <li>
                          <a href="additem.php">Add Item</a>
                      </li>
                      <li>
                          <a href="index.php">Add Sponsor</a>
                      </li>
                      <li>
                          <a href="memdata.php">View Member Data</a>
                      </li>
                      <li>
                          <a href="taxreport.php">View Tax Report</a>
                      </li>
                      <li>
                          <a href="mkpayment.php">View Member Income Report</a>
                      </li>
                  </ul>';
                  }
                  else
                  {
                   echo '<ul>
                      <li>
                          <a href="dashboard.php?uid='.base64_encode($_SESSION['uid']).'">My Dashboard</a>
                      </li>
                      <li class="active">
                          <a href="abptree.php">Genealogy</a>
                      </li>
                       <li>
                          <a href="report.php">Binary Report</a>
                      </li>
                   </ul>';
                  }
                  ?>
              </nav>
          </div>
          <div class="col-lg-10" id="data" style="background:#e6e6e6;">
              <?php
                /*if(isset($_REQUEST['uid']))
                {
                    $spid=$_REQUEST['uid'];
                }
                else
                {*/
            //       if(isset($_REQUEST['uid']))
            //       {
            //         $spid=$_REQUEST['uid'];
            //       }
            //       else
            //       {
            //         $spid=$_SESSION['uid'];
            //       }
            //       $checkpair="select * from member where ReferalID='".$spid."' and Active=1;";
            //       $chkres=mysqli_query($connection,$checkpair);
            //       $chkresnum=mysqli_num_rows($chkres);
            //       $chkpos="select * from member where MemberID='".$spid."';";
            //       $chkposres=mysqli_query($connection,$chkpos);
            //       $chkposrow=mysqli_fetch_assoc($chkposres);
            //      // if(strcmp($chkposrow['Legpos'],"Parallel Leg - PLG") != 0)
            //       //{
            //       if($chkresnum == 3)
            //       {
            //       $getname="select * from member where MemberID='".$spid."';";
            //       $nameres=mysqli_query($connection,$getname);
            //       $namerow=mysqli_fetch_assoc($nameres);
            //       //echo 'Count of '.$spid.' ('.$namerow['FirstName'].' '.$namerow['LastName'].')<br>';
            //       //$spid='M474585167';
            //       //$spid='M169175316';
            //     //}
            //     $lcount=0;
            //     $rcount=0;
            //     $pcount=0;
            //     function leftcount($id,$lgpos)
            //     {
            //         global $connection;
            //          $getlcount="select * from member where ReferalID='".$id."' and Legpos='".$lgpos."' and Active=1;";
            //         $lcountres=mysqli_query($connection,$getlcount);
            //         $lcountrow=mysqli_fetch_assoc($lcountres);
            //         //echo $lcountrow['MemberID'].'<br>';
            //         global $lcount;
            //         $lcount+=mysqli_num_rows($lcountres);
            //         //echo $lcount.'<br>';
            //         if(!empty($lcountrow))
            //         {
            //           leftcount($lcountrow['MemberID'],"Left Leg - LLG");
            //           leftcount($lcountrow['MemberID'],"Right Leg - RLG");
            //           leftcount($lcountrow['MemberID'],"Parallel Leg - PLG");
            //         }
            //         return $lcount;
            //     }
            //     leftcount($spid,"Left Leg - LLG");
                
            //     //echo 'Left='.$lcount.'<br>';
                
            //     function rightcount($id,$lgpos)
            //     {
            //         global $connection;
            //          $getrcount="select * from member where ReferalID='".$id."' and Legpos='".$lgpos."' and Active=1;";
            //         $rcountres=mysqli_query($connection,$getrcount);
            //         $rcountrow=mysqli_fetch_assoc($rcountres);
            //         //echo $lcountrow['MemberID'].'<br>';
            //         global $rcount;
            //         $rcount+=mysqli_num_rows($rcountres);
            //         //echo $lcount.'<br>';
            //         if(!empty($rcountrow))
            //         {
            //           rightcount($rcountrow['MemberID'],"Left Leg - LLG");
            //           rightcount($rcountrow['MemberID'],"Right Leg - RLG");
            //           rightcount($rcountrow['MemberID'],"Parallel Leg - PLG");
            //         }
            //         return $rcount;
            //     }
            //     rightcount($spid,"Right Leg - RLG");
                
            //     //echo 'Right='.$rcount.'<br>';
                
            //     function prlcount($id,$lgpos)
            //     {
            //         global $connection;
            //          $getpcount="select * from member where ReferalID='".$id."' and Legpos='".$lgpos."' and Active=1;";
            //         $pcountres=mysqli_query($connection,$getpcount);
            //         $pcountrow=mysqli_fetch_assoc($pcountres);
            //         //echo $lcountrow['MemberID'].'<br>';
            //         global $pcount;
            //         $pcount+=mysqli_num_rows($pcountres);
            //         //echo $lcount.'<br>';
            //         if(!empty($pcountrow))
            //         {
            //           prlcount($pcountrow['MemberID'],"Left Leg - LLG");
            //           prlcount($pcountrow['MemberID'],"Right Leg - RLG");
            //           prlcount($pcountrow['MemberID'],"Parallel Leg - PLG");
            //         }
            //         return $pcount;
            //     }
            //     prlcount($spid,"Parallel Leg - PLG");
                
            //     //echo 'Parallel='.$pcount.'<br>';
            //     $pair=400;
            //     $leftmem=$lcount-1;
            //     $right=$rcount-1;
            //     $parallel=$pcount-1;
            //     $rightmem=$right+$parallel;
            //     if($leftmem == $rightmem)
            //     {
            //         $totpairs=$leftmem;
            //         $paircommission=($totpairs*$pair)+$pair;
            //     }
            //     else if($leftmem > $rightmem)
            //     {
            //         $totpairs=$rightmem;
            //         $paircommission=($totpairs*$pair)+$pair;
            //     }
            //     else if($leftmem < $rightmem)
            //     {
            //         $totpairs=$leftmem;
            //         $paircommission=($totpairs*$pair)+$pair;    
            //     }
            //   }
            //   else if(isset($_REQUEST['uid']) or $_SESSION['uid'] != 'LIPIDMKT')
            //   {
            //       echo 'Warning: You haven\'t completed 2:1 or 1:2 pair, so you won\'t get any commission or pairing bonus...<br><br>';
            //   }
              /*}
              else if()
              {
                  
              }*/
              if($_SESSION['uid'] == 'LIPIDMKT')
              {
                  if($_REQUEST['st'] == 1)
                  {
                      echo '<h4 style="color:#646464;">ABP of Andhra Pradesh</h4>
                        <script>
                        $(document).ready(function(){
                           $("#ap").css("background","darkorange"); 
                        });
                      </script>';
                  }
                  else if($_REQUEST['st'] == 2)
                  {
                      echo '<h4 style="color:#646464;">ABP of Telangana</h4>
                        <script>
                        $(document).ready(function(){
                           $("#tel").css("background","darkorange"); 
                        });
                      </script>';
                  }
                  else if($_REQUEST['st'] == 3)
                  {
                      echo '<h4 style="color:#646464;">ABP of Karnataka</h4>
                        <script>
                        $(document).ready(function(){
                           $("#kt").css("background","darkorange"); 
                        });
                      </script>';
                  }
                  else if($_REQUEST['st'] == 4)
                  {
                      echo '<h4 style="color:#646464;">ABP of Tamilnadu</h4>
                      <script>
                        $(document).ready(function(){
                           $("#tn").css("background","darkorange"); 
                        });
                      </script>';
                  }
                  if(isset($_REQUEST['sts']))
                  {
                      echo '<h4 style="color:#646464;">No Sponsor for this State</h4>';
                  }
              }
              else
              {
                echo '<h4 style="color:#646464;">AUSTRALIAN BINARY TREE</h4>';
              }
             ?>
              <table class="mb-5" style="">
                 <thead>
                     <tr>
                         <th><span>LIPIDMkt</span></th>
                         <th><span>LIPIDMkt</span></th>
                         <th><span>LIPIDMkt</span></th>
                         <th><span>LIPIDMkt</span></th>
                         <th><span>LIPIDMkt</span></th>
                         <th><span>LIPIDMkt</span></th>
                         <th><span>LIPIDMkt</span></th>
                         <th><span>LIPIDMkt</span></th>
                         <th><span>LIPIDMkt</span></th>
                     </tr>
                 </thead>
                  <tbody>
                      <tr>
                          <?php
                          if(isset($_REQUEST['uid']))
                          {
                            $uid=$_REQUEST['uid'];   
                          }
                          else
                          {
                            $uid=$_SESSION['uid'];
                          }
                          $colorpurp="select * from member where MemberID='".$uid."';";
                          $purpres=mysqli_query($connection,$colorpurp);
                          $purprow=mysqli_fetch_assoc($purpres);
                          if($purprow['ReferalID'] == 'SPONSOR')
                          {
                           echo '<td colspan="9">
                           <div class="table-responsive" id="con1" style="display:none!important;"></div>
                            <span data-toggle="modal" data-target="#joinmem" id="root"><i title="'.$purprow['FirstName'].' '.$purprow['LastName'].'" class="fas fa-user-circle root" data-toggle="popover" data-placement="top" data-popover-content="#con1" name="'.$uid.' - Root Node" id="l00"></i></span>
                                 </td>
                                 <script>
                                         $("#root").click(function(){
                                            var refid=$("#l00").attr("name");
                                            var ref=refid.slice(0,10);
                                            $("#parent").val(ref);
                                         });
                                </script>';
                          }
                          else
                          {
                              if($purprow['Legpos'] == 'Left Leg - LLG')
                              {
                                if(strcmp($purprow['MemberID'],$_SESSION['uid']) != 0)
                                {
                                echo '<td colspan="9">';
                                   if($purprow['Active'] == 0)
                                   {
                                       echo '<a href="abptree.php?uid='.$purprow['ReferalID'].'&st='.$_REQUEST['st'].'" style="all:unset;display:block;"><i class="fas fa-angle-double-up animated infinite pulse" style="color:black;" id="moveup"></i></a>
                                       <span class="notactive">
                                         <i title="'.$uid.' - Left Node"  class="fas fa-user-circle" style="color:black;display:block;" data-toggle="tooltip" data-placement="top" id="l00"></i>
                                       </span>';
                                   }
                                   else if($purprow['Active'] == 1)
                                   {
                                    echo '<div class="table-responsive" id="con1" style="display:none!important;"></div>
                                    <a href="abptree.php?uid='.$purprow['ReferalID'].'&st='.$_REQUEST['st'].'" style="all:unset;display:block;"><i class="fas fa-angle-double-up animated infinite pulse" style="color:darkviolet;" id="moveup"></i></a>
                                       <span data-toggle="modal" data-target="#joinmem" id="left">
                                         <i title="'.$purprow['FirstName'].' '.$purprow['LastName'].'"  class="fas fa-user-circle left" style="color:darkviolet;display:block;" data-toggle="popover" data-placement="top" data-popover-content="#con1" name="'.$uid.' - Left Node" id="l00"></i>
                                       </span>';
                                   }
                                      echo '</td>
                                      <script>
                                         $("#left").click(function(){
                                            var refid=$("#l00").attr("name");
                                            var ref=refid.slice(0,10);
                                            $("#parent").val(ref);
                                         });
                                      </script>';
                                }
                                else if(strcmp($purprow['MemberID'],$_SESSION['uid']) == 0)
                                {
                                    echo '<td colspan="9">';
                                    if($purprow['Active'] == 0)
                                    {
                                       echo '<span class="notactive">
                                         <i class="fas fa-user-circle" style="color:black;display:block;" data-toggle="tooltip" data-placement="top" title="'.$uid.' - Left Node" id="l00"></i>
                                         </span>';
                                    }
                                    else if($purprow['Active'] == 1)
                                    {
                                        echo '<div class="table-responsive" id="con1" style="display:none!important;"></div>
                                        <span data-toggle="modal" data-target="#joinmem" id="left">
                                         <i title="'.$purprow['FirstName'].' '.$purprow['LastName'].'"  class="fas fa-user-circle left" style="color:darkviolet;display:block;" data-toggle="popover" data-placement="top" data-popover-content="#con1" name="'.$uid.' - Left Node" id="l00"></i>
                                         </span>';
                                    }
                                      echo '</td>
                                      <script>
                                         $("#left").click(function(){
                                            var refid=$("#l00").attr("name");
                                            var ref=refid.slice(0,10);
                                            $("#parent").val(ref);
                                         });
                                      </script>';
                                }
                              }
                              else if($purprow['Legpos'] == 'Right Leg - RLG')
                              {
                                  if(strcmp($purprow['MemberID'],$_SESSION['uid']) != 0)
                                  {
                                   echo '<td colspan="9">';
                                       if($purprow['Active'] == 0)
                                       {
                                          echo '<a href="abptree.php?uid='.$purprow['ReferalID'].'&st='.$_REQUEST['st'].'" style="all:unset;display:block;"><i class="fas fa-angle-double-up animated infinite pulse" style="color:black;" id="moveup"></i></a>
                                          <span class="notactive">
                                          <i class="fas fa-user-circle" style="color:black;display:block;" data-toggle="tooltip" data-placement="top" title="'.$uid.' - Right Node" id="l00"></i>
                                          </span>';
                                       }
                                       else if($purprow['Active'] == 1)
                                       {
                                           echo '<div class="table-responsive" id="con1" style="display:none!important;"></div>
                                           <a href="abptree.php?uid='.$purprow['ReferalID'].'&st='.$_REQUEST['st'].'" style="all:unset;display:block;"><i class="fas fa-angle-double-up animated infinite pulse" style="color:darkorange;" id="moveup"></i></a>
                                          <span data-toggle="modal" data-target="#joinmem" id="right">
                                          <i title="'.$purprow['FirstName'].' '.$purprow['LastName'].'"  class="fas fa-user-circle right" style="color:darkorange;display:block;" data-toggle="popover" data-placement="top" data-popover-content="#con1" name="'.$uid.' - Right Node" id="l00"></i>
                                          </span>';
                                       }
                                        echo '</td>
                                        <script>
                                         $("#right").click(function(){
                                            var refid=$("#l00").attr("name");
                                            var ref=refid.slice(0,10);
                                            $("#parent").val(ref);
                                         });
                                      </script>';
                                  }
                                  else if(strcmp($purprow['MemberID'],$_SESSION['uid']) == 0)
                                  {
                                      echo '<td colspan="9">';
                                      if($purprow['Active'] == 0)
                                      {
                                          echo '<span class="notactive">
                                            <i class="fas fa-user-circle" style="color:black;display:block;" data-toggle="tooltip" data-placement="top" title="'.$uid.' - Right Node" id="l00"></i>
                                          </span>';
                                      }
                                      else if($purprow['Active'] == 1)
                                      {
                                          echo '<div class="table-responsive" id="con1" style="display:none!important;"></div>
                                          <span data-toggle="modal" data-target="#joinmem" id="right">
                                            <i title="'.$purprow['FirstName'].' '.$purprow['LastName'].'"  class="fas fa-user-circle right" style="color:darkorange;display:block;" data-toggle="popover" data-placement="top" data-popover-content="#con1" name="'.$uid.' - Right Node" id="l00"></i>
                                          </span>';
                                      }
                                        echo'</td>
                                        <script>
                                         $("#right").click(function(){
                                            var refid=$("#l00").attr("name");
                                            var ref=refid.slice(0,10);
                                            $("#parent").val(ref);
                                         });
                                      </script>';
                                  }
                              }
                              else if($purprow['Legpos'] == 'Parallel Leg - PLG')
                              {
                                  if(strcmp($purprow['MemberID'],$_SESSION['uid']) != 0)
                                  {
                                   echo '<td colspan="9">';
                                       if($purprow['Active'] == 0)
                                       {
                                           echo '<a href="abptree.php?uid='.$purprow['ReferalID'].'&st='.$_REQUEST['st'].'" style="all:unset;display:block;"><i class="fas fa-angle-double-up animated infinite pulse" style="color:black;" id="moveup"></i></a>
                                          <span class="notactive">
                                            <i class="fas fa-user-circle" style="color:black;display:block;" data-toggle="tooltip" data-placement="top" title="'.$uid.' - Parallel Node" id="l00"></i>
                                          </span>';
                                       }
                                       else if($purprow['Active'] == 1)
                                       {
                                         echo '<div class="table-responsive" id="con1" style="display:none!important;"></div>
                                         <a href="abptree.php?uid='.$purprow['ReferalID'].'&st='.$_REQUEST['st'].'" style="all:unset;display:block;"><i class="fas fa-angle-double-up animated infinite pulse" style="color:blue;" id="moveup"></i></a>
                                          <span data-toggle="modal" data-target="#joinmem" id="parallel">
                                            <i title="'.$purprow['FirstName'].' '.$purprow['LastName'].'"  class="fas fa-user-circle prl" style="color:blue;display:block;" data-toggle="popover" data-placement="top" data-popover-content="#con1" name="'.$uid.' - Parallel Node" id="l00"></i>
                                          </span>';
                                       }
                                    echo '</td>
                                        <script>
                                         $("#parallel").click(function(){
                                            var refid=$("#l00").attr("name");
                                            var ref=refid.slice(0,10);
                                            $("#parent").val(ref);
                                         });
                                      </script>';
                                  }
                                  else if(strcmp($purprow['MemberID'],$_SESSION['uid']) == 0)
                                  {
                                   echo '<td colspan="9">';
                                       if($purprow['Active'] == 0)
                                       {
                                           echo '<span class="notactive">
                                           <i class="fas fa-user-circle" style="color:black;display:block;" data-toggle="tooltip" data-placement="top" title="'.$uid.' - Parallel Node" id="l00"></i>
                                           </span>';
                                       }
                                       else if($purprow['Active'] == 1)
                                       {
                                          echo '<div class="table-responsive" id="con1" style="display:none!important;"></div>
                                          <span data-toggle="modal" data-target="#joinmem" id="parallel">
                                           <i title="'.$purprow['FirstName'].' '.$purprow['LastName'].'"  class="fas fa-user-circle prl" style="color:blue;display:block;" data-toggle="popover" data-placement="top" data-popover-content="#con1" name="'.$uid.' - Parallel Node" id="l00"></i>
                                           </span>';
                                       }
                                        echo '</td>
                                        <script>
                                         $("#parallel").click(function(){
                                            var refid=$("#l00").attr("name");
                                            var ref=refid.slice(0,10);
                                            $("#parent").val(ref);
                                         });
                                      </script>';   
                                  }
                              }
                          }
                          echo '<script type="text/javascript">
                                $(document).ready(function(){
                                    var uid="'.$uid.'";
                                    $("#con1").load("initajax.php",{
                                        uid:uid
                                    },function(responseTxt,statusTxt,xhr){
                                       if(statusTxt == "success")
                                       {
                                           console.log(responseTxt);
                                       }
                                       else
                                       {
                                           console.log(statusTxt);
                                       }
                                    });
                                    
                                });
                          </script>';
                          echo '<script type="text/javascript">
                                       $(document).ready(function(){
                                         $("#joinform").submit(function(e){
                                           event.preventDefault();
                                            $("#joinsub'.$i.'").addClass("joining");
                                            $("#joinsub'.$i.'").text("Joining...");
                                          var refid=$("#parent").val();
                                          var title=$("#title").val();
                                          var fname=$("#fname").val();
                                          var lname=$("#lname").val();
                                          var mobno=$("#mobno").val();
                                          var pay=new FormData();
                                          var files=$("#pay")[0].files[0];
                                          pay.append(\'file\',files);
                                          var email=$("#email").val();
                                          var legpos=$("#legpos").val();
                                          var joinsub=$("#joinsub").val();
                                         $("#msg").load("initajax.php",{
                                            refid:refid,
                                            title:title,
                                            fname:fname,
                                            lname:lname,
                                            mobno:mobno,
                                            email:email,
                                            legpos:legpos,
                                            joinsub:joinsub
                                         },function(responseTxt,statusTxt,xhr){
                                            if(statusTxt == "error")
                                            {
                                              console.log(xhr.status+": "+xhr.statusText);
                                            }
                                            else if(statusTxt == "success")
                                            {
                                               console.log(statusTxt);
                                            }
                                           });
                                         });
                                       });
                                </script>
                                <div class="modal fade" id="joinmem">
                                      <div class="modal-dialog">
                                         <div class="modal-content">
                                            <div class="modal-header">
                                                  <h5 style="color:#646464;">Join Member</h5>
                                                  <span class="close" data-dismiss="modal" id="close" style="color:#646464;position:absolute;right:20px;cursor:pointer;" onclick="location.reload(true);">&times;</span>
                                            </div>
                                            <div class="modal-body">
                                               <form action="" method="POST" id="joinform">
                                               <div class="form-group mt-4" id="msg">
                                                        
                                               </div>
                                               <div class="form-group mt-4">
                                                     <input type="text" name="refid" id="parent" class="form-control" readonly placeholder="Referal ID">
                                               </div>
                                               <div class="form-group mt-4">
                                                     <select class="form-control" name="title" id="title" style="">
                                                            <option value="SELECT TITLE">SELECT TITLE</option>
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                            <option value="M/s">M/s</option>
                                                            <option value="Ms">Ms</option>
                                                            <option value="Smt.">Smt.</option>
                                                      </select>
                                               </div>
                                               <div class="form-row">
                                                  <div class="col">
                                                     <input type="text" name="fname" id="fname" class="form-control" placeholder="Firstname" pattern="[A-Za-z ]+" title="Example: John">
                                                  </div>
                                                  <div class="col">
                                                     <input type="text" name="lname" id="lname" class="form-control" placeholder="Lastname" pattern="[A-Za-z ]+" title="Example: Mark">
                                                  </div>
                                               </div>
                                               <div class="form-group mt-4">
                                                     <input type="text" name="mobno" id="mobno" class="form-control" placeholder="Mobile Number" pattern="[0-9]{10}" title="Example:10 Digit Format - 8888888888">
                                               </div>
                                               <div class="form-group mt-4">
                                                     <input type="email" name="email" id="email" class="form-control" placeholder="Email ID">
                                               </div>';
                                                    echo '<div class="form-group mt-4">
                                                        <select class="form-control" name="legpos" id="legpos" style="">
                                                            <option value="SELECT LEG POSITION">SELECT LEG POSITION</option>
                                                            <option value="Left Leg - LLG">Left Leg - LLG</option>
                                                            <option value="Right Leg - RLG">Right Leg - RLG</option>
                                                            <option value="Parallel Leg - PLG">Parallel Leg - PLG</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group mt-4" style="">
                                                      <input type="file" name="pay" id="pay" class="form-control" style="display:none;" onchange="getmsg()">
                                                      <button type="button" class="btn btn-primary" onclick="document.getElementById(\'pay\').click();">UPLOAD PAYMENT PROOF</button>
                                                      <div class="input-group-append">
                                                        <span class="input-group-text" id="stsmsg" style="background:transparent;border:none;outline:none;box-shadow:none!important;"></span>
                                                      </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                              <div class="form-group text-center" style="width:100%;">
                                                <button type="submit" name="joinsub" id="joinsub" class="btn btn-success">JOIN</button>
                                              </div>
                                              </form>
                                            </div>
                                         </div>
                                      </div>
                                </div>
                                <script>
                                   function getmsg()
                                   {
                                       var file=document.getElementById("pay").value;
                                       if(file != "")
                                       {
                                           document.getElementById("stsmsg").innerHTML="File Uploaded";
                                           document.getElementById("stsmsg").style.color="black";
                                       }
                                       else
                                       {
                                           document.getElementById("stsmsg").innerHTML="";
                                       }
                                   }
                                </script>';
                      echo '</tr>
                      <tr>
                         <td colspan="3" id="l11"></td>
                         <td colspan="3" id="l12"></td>
                         <td colspan="3" id="l13"></td>';
                          
                            $getchildnodes="select * from member where ReferalID='".$uid."';";
                            $chnodesres=mysqli_query($connection,$getchildnodes);
                            $chnoderescheck=mysqli_num_rows($chnodesres);
                          if($chnoderescheck > 0)
                          {
                              $arr0=array();
                              $i=1;
                              $j=2;
                            while($childrow=mysqli_fetch_assoc($chnodesres))
                            {
                                array_push($arr0,$childrow['Legpos']);
                                if($childrow['Legpos'] == 'Left Leg - LLG')
                                {
                                  if($childrow['Active'] == 0)
                                  {
                                      echo '<script>
                                  $("#l11").html(\'<span class="notactive"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Left Node"></i></span>\');
                                  </script>';
                                  }
                                  else if($childrow['Active'] == 1)
                                  {
                                  echo '<script>
                                  $("#l11").html(\'<span id="left'.$i.'" data-toggle="modal" data-target="#joinmem'.$i.'" style=""><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'"  class="fas fa-user-circle left" data-toggle="popover" data-placement="top" data-popover-content="#con'.$j.'" id="leftic'.$i.'" name="'.$childrow['MemberID'].' - Left Node"></i></span><div class="table-responsive" id="con'.$j.'" style="display:none!important;"></div>\');
                                    $("#left'.$i.'").click(function(){
                                    var refid=$("#leftic'.$i.'").attr("name");
                                    var ref=refid.slice(0,10);
                                    $("#parent'.$i.'").val(ref);
                                    });
                                  </script>';
                                  $l11=$childrow['MemberID'];
                                  }
                                }
                                else if($childrow['Legpos'] == 'Right Leg - RLG')
                                {
                                    if($childrow['Active'] == 0)
                                    {
                                        echo '<script>
                                         $("#l12").html(\'<span class="notactive"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Right Node"></i></span>\');
                                        </script>';
                                    }
                                    else if($childrow['Active'] == 1)
                                    {
                                     echo '<script>
                                      $("#l12").html(\'<span id="right'.$i.'" data-toggle="modal" data-target="#joinmem'.$i.'"><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'"  class="fas fa-user-circle right" data-toggle="popover" data-popover-content="#con'.$j.'" data-placement="top" id="rightic'.$i.'" name="'.$childrow['MemberID'].' - Right Node"></i></span><div class="table-responsive" id="con'.$j.'" style="display:none!important;"></div>\');
                                      $("#right'.$i.'").click(function(){
                                        var refid=$("#rightic'.$i.'").attr("name");
                                        var ref=refid.slice(0,10);
                                        $("#parent'.$i.'").val(ref);
                                        });
                                      </script>';
                                      $l12=$childrow['MemberID'];
                                    }
                                }
                                else if($childrow['Legpos'] == 'Parallel Leg - PLG')
                                {
                                    if($childrow['Active'] == 0)
                                    {
                                        echo '<script>
                                      $("#l13").html(\'<span class="notactive"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Parallel Node"></i></span>\');
                                        </script>';
                                    }
                                    else if($childrow['Active'] == 1)
                                    {
                                    echo '<script>
                                      $("#l13").html(\'<span id="parallel'.$i.'" data-toggle="modal" data-target="#joinmem'.$i.'"><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'"  class="fas fa-user-circle prl" style="color:blue;" data-toggle="popover" data-popover-content="#con'.$j.'" data-placement="top" id="paric'.$i.'" name="'.$childrow['MemberID'].' - Parallel Node"></i></span><div class="table-responsive" id="con'.$j.'" style="display:none!important;"></div>\');
                                       $("#parallel'.$i.'").click(function(){
                                            var refid=$("#paric'.$i.'").attr("name");
                                            var ref=refid.slice(0,10);
                                            $("#parent'.$i.'").val(ref);
                                       });
                                        </script>';
                                        $l13=$childrow['MemberID'];
                                    }
                                }
                                echo '<script type="text/javascript">
                                $(document).ready(function(){
                                    var uid="'.$childrow['MemberID'].'";
                                    $("#con'.$j.'").load("initajax.php",{
                                        uid:uid
                                    },function(responseTxt,statusTxt,xhr){
                                       if(statusTxt == "success")
                                       {
                                           console.log(responseTxt);
                                       }
                                       else
                                       {
                                           console.log(statusTxt);
                                       }
                                    });
                                    
                                    });
                              </script>';
                                echo '<script type="text/javascript">
                                      $(document).ready(function(){
                                         $("#joinform'.$i.'").submit(function(e){
                                           event.preventDefault();
                                           $("#joinsub'.$i.'").addClass("joining");
                                            $("#joinsub'.$i.'").text("Joining...");
                                              var pay=new FormData(this);
                                              $.ajax({
                                                 url:"initajax.php",
                                                 type:"POST",
                                                 data:pay,
                                                 contentType:false,
                                                 cache:false,
                                                 processData:false,
                                                 success:function(result,status,xhr){
                                                     console.log(status);
                                                     console.log(result);
                                                     $("#msg'.$i.'").html(result);
                                                 }
                                              });
                                         });
                                      });
                                    </script>';
                                echo '<div class="modal fade" id="joinmem'.$i.'">
                                      <div class="modal-dialog">
                                         <div class="modal-content">
                                            <div class="modal-header">
                                                  <h5 style="color:#646464;">Join Member</h5>
                                                  <span class="close" data-dismiss="modal" id="close" style="color:#646464;position:absolute;right:20px;cursor:pointer;" onclick="location.reload(true);">&times;</span>
                                            </div>
                                            <div class="modal-body">
                                               <form action="" method="POST" id="joinform'.$i.'" enctype="multipart/form-data">
                                               <div class="form-group mt-4" id="msg'.$i.'">
                                                        
                                               </div>
                                               <div class="form-group mt-4">
                                                     <input type="text" name="refid" id="parent'.$i.'" class="form-control" readonly placeholder="Referal ID">
                                               </div>
                                               <div class="form-group mt-4">
                                                     <select class="form-control" name="title" id="title'.$i.'" style="">
                                                            <option value="SELECT TITLE">SELECT TITLE</option>
                                                            <option value="Mr.">Mr.</option>
                                                            <option value="Mrs.">Mrs.</option>
                                                                                <option value="M/s">M/s</option>
                                                            <option value="Ms">Ms</option>
                                                            <option value="Smt.">Smt.</option>
                                                      </select>
                                               </div>
                                               <div class="form-row">
                                                  <div class="col">
                                                     <input type="text" name="fname" id="fname'.$i.'" class="form-control" placeholder="Firstname" pattern="[A-Za-z ]+" title="Example: John">
                                                  </div>
                                                  <div class="col">
                                                     <input type="text" name="lname" id="lname'.$i.'" class="form-control" placeholder="Lastname" pattern="[A-Za-z ]+" title="Example: Mark">
                                                  </div>
                                               </div>
                                               <div class="form-group mt-4">
                                                     <input type="text" name="mobno" id="mobno'.$i.'" class="form-control" placeholder="Mobile Number" pattern="[0-9]{10}" title="Example:10 Digit Format - 8888888888">
                                               </div>
                                               <div class="form-group mt-4">
                                                     <input type="email" name="email" id="email'.$i.'" class="form-control" placeholder="Email ID">
                                               </div>';
                                                    echo '<div class="form-group mt-4">
                                                        <select class="form-control" name="legpos" id="legpos'.$i.'" style="">
                                                            <option value="SELECT LEG POSITION">SELECT LEG POSITION</option>
                                                            <option value="Left Leg - LLG">Left Leg - LLG</option>
                                                            <option value="Right Leg - RLG">Right Leg - RLG</option>
                                                            <option value="Parallel Leg - PLG">Parallel Leg - PLG</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group mt-4" style="">
                                                      <input type="file" name="pay" id="pay'.$i.'" class="form-control" style="display:none;" onchange="getmsg'.$i.'()">
                                                      <button type="button" class="btn btn-primary" onclick="document.getElementById(\'pay'.$i.'\').click();">UPLOAD PAYMENT PROOF</button>
                                                      <div class="input-group-append">
                                                        <span class="input-group-text" id="stsmsg'.$i.'" style="background:transparent;border:none;outline:none;box-shadow:none!important;"></span>
                                                      </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                              <div class="form-group text-center" style="width:100%;">
                                                <button type="submit" name="joinsub" id="joinsub'.$i.'" class="btn btn-success">JOIN</button>
                                              </div>
                                              </form>
                                            </div>
                                         </div>
                                      </div>
                                </div>
                                <script>
                                   function getmsg'.$i.'()
                                   {
                                       var file=document.getElementById("pay'.$i.'").value;
                                       if(file != "")
                                       {
                                           document.getElementById("stsmsg'.$i.'").innerHTML="File Uploaded";
                                           document.getElementById("stsmsg'.$i.'").style.color="black";
                                       }
                                       else
                                       {
                                           document.getElementById("stsmsg'.$i.'").innerHTML="";
                                       }
                                   }
                                </script>';
                                $i++;
                                $j++;
                            }
                            //print_r($arr0);
                              if(in_array("Left Leg - LLG",$arr0) == false)
                              {
                                   echo '<script>
                                      $("#l11").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Left Node" ></i>\');
                                      $("#l11 i").on("mouseover",function(){
                                          $("#l11 i").removeClass("animated");
                                      });
                                      $("#l11 i").on("mouseout",function(){
                                          $("#l11 i").addClass("animated");
                                      });
                                    </script>';
                              }
                              if(in_array("Right Leg - RLG",$arr0) == false)
                              {
                                   echo '<script>
                                      $("#l12").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Right Node" ></i>\');
                                      $("#l12 i").on("mouseover",function(){
                                          $("#l12 i").removeClass("animated");
                                      });
                                      $("#l12 i").on("mouseout",function(){
                                          $("#l12 i").addClass("animated");
                                      });
                                    </script>';
                              }
                              if(in_array("Parallel Leg - PLG",$arr0) == false)
                              {
                                   echo '<script>
                                      $("#l13").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Parallel Node" ></i>\');
                                      $("#l13 i").on("mouseover",function(){
                                          $("#l13 i").removeClass("animated");
                                      });
                                      $("#l13 i").on("mouseout",function(){
                                          $("#l13 i").addClass("animated");
                                      });
                                    </script>';
                              }
                        
                      echo '</tr>
                      <tr>
                         <td colspan="1" id="l21"></td>
                         <td colspan="1" id="l22"></td>
                         <td colspan="1" id="l23"></td>
                         <td colspan="1" id="l24"></td>
                         <td colspan="1" id="l25"></td>
                         <td colspan="1" id="l26"></td>
                         <td colspan="1" id="l27"></td>
                         <td colspan="1" id="l28"></td>
                         <td colspan="1" id="l29"></td>';
                          if(isset($l11))
                          {
                              $getchildnodes="select * from member where ReferalID='".$l11."';";
                            $chnodesres=mysqli_query($connection,$getchildnodes);
                              $arr1=array();
                              $k=5;
                            while($childrow=mysqli_fetch_assoc($chnodesres))
                            {
                                array_push($arr1,$childrow['Legpos']);
                                if($childrow['Legpos'] == 'Left Leg - LLG')
                                {
                                  if($childrow['Active'] == 0)
                                  {
                                      echo '<script>
                                  $("#l21").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Left Node"></i></a>\');
                                  </script>';
                                  }
                                  else if($childrow['Active'] == 1)
                                  {
                                  echo '<script>
                                  $("#l21").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'" class="fas fa-user-circle left" data-toggle="popover" data-popover-content="#con'.$k.'" data-placement="top"></i></a><div class="table-responsive" id="con'.$k.'" style="display:none!important;"></div>\');
                                  </script>';
                                  }
                                }
                                else if($childrow['Legpos'] == 'Right Leg - RLG')
                                {
                                    if($childrow['Active'] == 0)
                                    {
                                      echo '<script>
                                      $("#l22").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Right Node"></i></a>\');
                                      </script>';
                                    }
                                    else if($childrow['Active'] == 1)
                                    {
                                        echo '<script>
                                      $("#l22").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'"  class="fas fa-user-circle right" data-toggle="popover" data-placement="top" data-popover-content="#con'.$k.'"></i></a><div class="table-responsive" id="con'.$k.'" style="display:none!important;"></div>\');
                                      </script>';
                                    }
                                }
                                else if($childrow['Legpos'] == 'Parallel Leg - PLG')
                                {
                                    if($childrow['Active'] == 0)
                                    {
                                        echo '<script>
                                  $("#l23").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Parallel Node"></i></a>\');
                                    </script>';
                                    }
                                    else if($childrow['Active'] == 1)
                                    {
                                     echo '<script>
                                  $("#l23").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'"  class="fas fa-user-circle prl" data-toggle="popover" data-placement="top" data-popover-content="#con'.$k.'"></i></a><div class="table-responsive" id="con'.$k.'" style="display:none!important;"></div>\');
                                    </script>';   
                                    }
                                }
                                echo '<script type="text/javascript">
                                $(document).ready(function(){
                                    var uid="'.$childrow['MemberID'].'";
                                    $("#con'.$k.'").load("initajax.php",{
                                        uid:uid
                                    },function(responseTxt,statusTxt,xhr){
                                       if(statusTxt == "success")
                                       {
                                           console.log(responseTxt);
                                       }
                                       else
                                       {
                                           console.log(statusTxt);
                                       }
                                    });
                                    
                                    });
                              </script>';
                              $k++;
                            }
                              //print_r($arr1);
                              if(in_array("Left Leg - LLG",$arr1) == false)
                              {
                                   echo '<script>
                                      $("#l21").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Left Node" ></i>\');
                                      $("#l21 i").on("mouseover",function(){
                                          $("#l21 i").removeClass("animated");
                                      });
                                      $("#l21 i").on("mouseout",function(){
                                          $("#l21 i").addClass("animated");
                                      });
                                    </script>';
                              }
                              if(in_array("Right Leg - RLG",$arr1) == false)
                              {
                                   echo '<script>
                                      $("#l22").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Right Node" ></i>\');
                                      $("#l22 i").on("mouseover",function(){
                                          $("#l22 i").removeClass("animated");
                                      });
                                      $("#l22 i").on("mouseout",function(){
                                          $("#l22 i").addClass("animated");
                                      });
                                    </script>';
                              }
                              if(in_array("Parallel Leg - PLG",$arr1) == false)
                              {
                                   echo '<script>
                                      $("#l23").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Parallel Node" ></i>\');
                                      $("#l23 i").on("mouseover",function(){
                                          $("#l23 i").removeClass("animated");
                                      });
                                      $("#l23 i").on("mouseout",function(){
                                          $("#l23 i").addClass("animated");
                                      });
                                    </script>';
                              }
                              
                          }
                          if(isset($l12))
                          {
                            $getchildnodes="select * from member where ReferalID='".$l12."';";
                            $chnodesres=mysqli_query($connection,$getchildnodes);
                              $arr2=array();
                              $l=8;
                            while($childrow=mysqli_fetch_assoc($chnodesres))
                            {
                                array_push($arr2,$childrow['Legpos']);
                                if($childrow['Legpos'] == 'Left Leg - LLG')
                                {
                                    if($childrow['Active'] == 0)
                                    {
                                        echo '<script>
                                          $("#l24").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Left Node"></i></a>\');
                                          </script>';
                                    }
                                    else if($childrow['Active'] == 1)
                                    {
                                      echo '<script>
                                      $("#l24").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'"  class="fas fa-user-circle left" data-toggle="popover" data-placement="top" data-popover-content="#con'.$l.'"></i></a><div class="table-responsive" id="con'.$l.'" style="display:none!important;"></div>\');
                                      </script>';
                                    }
                                }
                                else if($childrow['Legpos'] == 'Right Leg - RLG')
                                {
                                  if($childrow['Active'] == 0)
                                  {
                                      echo '<script>
                                      $("#l25").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Right Node"></i></a>\');
                                      </script>';
                                  }
                                  else if($childrow['Active'] == 1)
                                  {
                                      echo '<script>
                                      $("#l25").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'"  class="fas fa-user-circle right" data-toggle="popover" data-placement="top" data-popover-content="#con'.$l.'"></i></a><div class="table-responsive" id="con'.$l.'" style="display:none!important;"></div>\');
                                      </script>';
                                  }
                                }
                                else if($childrow['Legpos'] == 'Parallel Leg - PLG')
                                {
                                    if($childrow['Active'] == 0)
                                    {
                                        echo '<script>
                                      $("#l26").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Parallel Node"></i></a>\');
                                        </script>';
                                    }
                                    else if($childrow['Active'] == 1)
                                    {
                                        echo '<script>
                                          $("#l26").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'"  class="fas fa-user-circle prl" data-toggle="popover" data-placement="top" data-popover-content="#con'.$l.'"></i></a><div class="table-responsive" id="con'.$l.'" style="display:none!important;"></div>\');
                                            </script>';
                                    }
                                }
                                echo '<script type="text/javascript">
                                $(document).ready(function(){
                                    var uid="'.$childrow['MemberID'].'";
                                    $("#con'.$l.'").load("initajax.php",{
                                        uid:uid
                                    },function(responseTxt,statusTxt,xhr){
                                       if(statusTxt == "success")
                                       {
                                           console.log(responseTxt);
                                       }
                                       else
                                       {
                                           console.log(statusTxt);
                                       }
                                    });
                                    
                                        });
                                  </script>';
                                  $l++;
                            }
                             // print_r($arr2);
                              if(in_array("Left Leg - LLG",$arr2) == false)
                              {
                                   echo '<script>
                                      $("#l24").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Left Node" ></i>\');
                                      $("#l24 i").on("mouseover",function(){
                                          $("#l24 i").removeClass("animated");
                                      });
                                      $("#l24 i").on("mouseout",function(){
                                          $("#l24 i").addClass("animated");
                                      });
                                    </script>';
                              }
                              if(in_array("Right Leg - RLG",$arr2) == false)
                              {
                                   echo '<script>
                                      $("#l25").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Right Node" ></i>\');
                                      $("#l25 i").on("mouseover",function(){
                                          $("#l25 i").removeClass("animated");
                                      });
                                      $("#l25 i").on("mouseout",function(){
                                          $("#l25 i").addClass("animated");
                                      });
                                    </script>';
                              }
                              if(in_array("Parallel Leg - PLG",$arr2) == false)
                              {
                                   echo '<script>
                                      $("#l26").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Parallel Node" ></i>\');
                                      $("#l26 i").on("mouseover",function(){
                                          $("#l26 i").removeClass("animated");
                                      });
                                      $("#l26 i").on("mouseout",function(){
                                          $("#l26 i").addClass("animated");
                                      });
                                    </script>';
                              }
                          }
                          if(isset($l13))
                          {
                           $getchildnodes="select * from member where ReferalID='".$l13."';";
                            $chnodesres=mysqli_query($connection,$getchildnodes);
                              $arr3=array();
                              $m=11;
                            while($childrow=mysqli_fetch_assoc($chnodesres))
                            {
                                array_push($arr3,$childrow['Legpos']);
                                if($childrow['Legpos'] == 'Left Leg - LLG')
                                {
                                  if($childrow['Active'] == 0)
                                  {
                                      echo '<script>
                                      $("#l27").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Left Node"></i></a>\');
                                      </script>';
                                  }
                                  else if($childrow['Active'] == 1)
                                  {
                                      echo '<script>
                                      $("#l27").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'"  class="fas fa-user-circle left" data-toggle="popover" data-placement="top" data-popover-content="#con'.$m.'"></i></a><div class="table-responsive" id="con'.$m.'" style="display:none!important;"></div>\');
                                      </script>';
                                  }
                                }
                                else if($childrow['Legpos'] == 'Right Leg - RLG')
                                {
                                    if($childrow['Active'] == 0)
                                    {
                                        echo '<script>
                                          $("#l28").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Right Node"></i></a>\');
                                          </script>';
                                    }
                                    else if($childrow['Active'] == 1)
                                    {
                                         echo '<script>
                                      $("#l28").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'"  class="fas fa-user-circle right" data-toggle="popover" data-placement="top" data-popover-content="#con'.$m.'"></i></a><div class="table-responsive" id="con'.$m.'" style="display:none!important;"></div>\');
                                      </script>';   
                                    }
                                }
                                else if($childrow['Legpos'] == 'Parallel Leg - PLG')
                                {
                                    if($childrow['Active'] == 0)
                                    {
                                        echo '<script>
                                      $("#l29").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i class="fas fa-user-circle" style="color:black;" data-toggle="tooltip" data-placement="top" title="'.$childrow['MemberID'].' - Parallel Node"></i></a>\');
                                      </script>';
                                    }
                                    else if($childrow['Active'] == 1)
                                    {
                                        echo '<script>
                                      $("#l29").html(\'<a href="abptree.php?uid='.$childrow['MemberID'].'&st='.$_REQUEST['st'].'" style="all:unset;"><i title="'.$childrow['FirstName'].' '.$childrow['LastName'].'"  class="fas fa-user-circle prl" data-toggle="popover" data-placement="top" data-popover-content="#con'.$m.'"></i></a><div class="table-responsive" id="con'.$m.'" style="display:none!important;"></div>\');
                                      </script>';
                                    }
                                }
                                echo '<script type="text/javascript">
                                $(document).ready(function(){
                                    var uid="'.$childrow['MemberID'].'";
                                    $("#con'.$m.'").load("initajax.php",{
                                        uid:uid
                                    },function(responseTxt,statusTxt,xhr){
                                       if(statusTxt == "success")
                                       {
                                           console.log(responseTxt);
                                       }
                                       else
                                       {
                                           console.log(statusTxt);
                                       }
                                    });
                                    
                                    });
                              </script>';
                              $m++;
                            }
                              //print_r($arr3);
                              if(in_array("Left Leg - LLG",$arr3) == false)
                              {
                                   echo '<script>
                                      $("#l27").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Left Node" ></i>\');
                                      $("#l27 i").on("mouseover",function(){
                                          $("#l27 i").removeClass("animated");
                                      });
                                      $("#l27 i").on("mouseout",function(){
                                          $("#l27 i").addClass("animated");
                                      });
                                    </script>';
                              }
                              if(in_array("Right Leg - RLG",$arr3) == false)
                              {
                                   echo '<script>
                                      $("#l28").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Right Node" ></i>\');
                                      $("#l28 i").on("mouseover",function(){
                                          $("#l28 i").removeClass("animated");
                                      });
                                      $("#l28 i").on("mouseout",function(){
                                          $("#l28 i").addClass("animated");
                                      });
                                    </script>';
                              }
                              if(in_array("Parallel Leg - PLG",$arr3) == false)
                              {
                                   echo '<script>
                                      $("#l29").html(\'<i class="fas fa-user-slash animated infinite flash" style="color:#bdb7b7;" data-toggle="tooltip" data-placement="top" title="Parallel Node" ></i>\');
                                      $("#l29 i").on("mouseover",function(){
                                          $("#l29 i").removeClass("animated");
                                      });
                                      $("#l29 i").on("mouseout",function(){
                                          $("#l29 i").addClass("animated");
                                      });
                                    </script>';
                              }
                          }
                          }
                          else if(isset($_REQUEST['uid']) or $_SESSION['uid'] != 'LIPIDMKT')
                          {
                              echo '<h4 style="color:#646464;">This ID doesn\'t have members in it\'s downline!!</h4>';
                          }
                          ?>
                      </tr>
                  </tbody>
              </table>
              <div class="mb-3" style="display:flex;justify-content:center;">
                  <?php
                  if($_SESSION['uid'] == 'LIPIDMKT')
                  {
                  $getap="select * from member where ReferalID='SPONSOR' and State='Andhra Pradesh';";
                  $apres=mysqli_query($connection,$getap);
                  $apreschk=mysqli_num_rows($apres);
                  $aprow=mysqli_fetch_assoc($apres);
                  if($apreschk > 0)
                  {
                      echo '<a href="abptree.php?uid='.$aprow['MemberID'].'&st=1"><button type="button" id="ap" class="btn btn-primary" style="padding:6px;margin-right:10px;">Andhra Pradesh</button></a>';
                  }
                  else
                  {
                      echo '<a href="abptree.php?sts=0&st=1"><button type="button" id="ap" class="btn btn-primary" style="padding:6px;margin-right:10px;">Andhra Pradesh</button></a>';
                  }
                  $gettel="select * from member where ReferalID='SPONSOR' and State='Telangana';";
                  $telres=mysqli_query($connection,$gettel);
                  $telreschk=mysqli_num_rows($telres);
                  $telrow=mysqli_fetch_assoc($telres);
                  if($telreschk > 0)
                  {
                      echo '<a href="abptree.php?uid='.$telrow['MemberID'].'&st=2"><button type="button" id="tel" class="btn btn-primary" style="padding:6px;margin-right:10px;">Telangana</button></a>';
                  }
                  else
                  {
                      echo '<a href="abptree.php?sts=0&st=2"><button type="button" id="tel" class="btn btn-primary" style="padding:6px;margin-right:10px;">Telangana</button></a>';
                  }
                  $getkt="select * from member where ReferalID='SPONSOR' and State='Karnataka';";
                  $ktres=mysqli_query($connection,$getkt);
                  $ktreschk=mysqli_num_rows($ktres);
                  $ktrow=mysqli_fetch_assoc($ktres);
                  if($ktreschk > 0)
                  {
                    echo '<a href="abptree.php?uid='.$ktrow['MemberID'].'&st=3"><button type="button" id="kt" class="btn btn-primary" style="padding:6px;margin-right:10px;">Karnataka</button></a>';    
                  }
                  else
                  {
                      echo '<a href="abptree.php?sts=0&st=3"><button type="button" id="kt" class="btn btn-primary" style="padding:6px;margin-right:10px;">Karnataka</button></a>';
                  }
                  $gettn="select * from member where ReferalID='SPONSOR' and State='TamilNadu';";
                  $tnres=mysqli_query($connection,$gettn);
                  $tnreschk=mysqli_num_rows($tnres);
                  $tnrow=mysqli_fetch_assoc($tnres);
                  if($tnreschk > 0)
                  {
                      echo '<a href="abptree.php?uid='.$tnrow['MemberID'].'&st=4"><button type="button" id="tn" class="btn btn-primary" style="padding:6px;">Tamilnadu</button></a>';
                  }
                  else
                  {
                      echo '<a href="abptree.php?sts=0&st=4"><button type="button" id="tn" class="btn btn-primary" style="padding:6px;">Tamilnadu</button></a>';
                  }
                 }
                 ?>
              </div>
              <div class="" style="display:flex;justify-content:center;">
              <ul id="desc" style="margin-right:10px;">
                  <li style="width:30px;height:30px;background:green;"></li>
                  <li style="width:30px;height:30px;background:darkviolet;"></li>
                  <li style="width:30px;height:30px;background:darkorange;"></li>
                  <li style="width:30px;height:30px;background:blue;"></li>
                  <li style="width:30px;height:30px;background:black;"></li>
                  <li style="width:30px;height:30px;display:flex;justify-content:center;align-items:center;"><span class="fas fa-user-slash" style="color:#646464;font-size:22px;"></span></li>
              </ul>
              <ul id="desc" style="">
                  <li style="height:30px;">Sponsor or Root Node</li>
                  <li style="height:30px;">Left Node</li>
                  <li style="height:30px;">Right Node</li>
                  <li style="height:30px;">Parallel or Optional Node</li>
                  <li style="height:30px;">Inactive</li>
                  <li style="height:30px;">Not yet Member</li>
              </ul>
              </div>
          </div>
        </div>
  </div>  
</body>
</html>