<?php
session_start();
include_once 'dbconfig.php';
$data=$_REQUEST['uid'];
$uid=base64_decode($data);
if($_SESSION['uid']!='LIPIDMKT')
{
    header("Location:index.php");
    exit();
}
if(isset($_POST['stname']))
{
    $stname=$_POST['stname'];
    $getstcode="select * from gst where state_name='".$stname."';";
    $stcoderes=mysqli_query($connection,$getstcode);
    $stcoderow=mysqli_fetch_assoc($stcoderes);
    echo $stcoderow['state_code'];
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
<!--Sweet Alerts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
    <title>MLM</title>
    <style type="text/css" media="all">
     *
     {
         margin:0;
         padding:0;
         box-sizing:border-box;
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
        .activate
        {
            padding:5px!important;
            color:white;
            background:#396afc;
            border:none;
            outline:none;
            font-size:13px!important;
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
        .proofbox
        {
          border:5px ridge white;
          border-radius:10px;
          box-shadow:2px 2px 4px 2px rgba(0,0,0,0.15);
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
        input:-o-read-only
        {
            background:white!important;
        }
        input:-ms-read-only
        {
            background:white!important;
        }
        input
        {
            box-shadow:none!important;
        }
        .error
        {
            box-shadow:0px 0px 5px red!important;
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
         /* $(document).ready(function(){
              swal("Good Job!!","You have successfully activated the member...","success");
          });*/
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
  <div class="container-fluid" id="cover">
      <div class="row">
          <div class="col-lg-12" id="bar">
        <img src="img/logo.png" class="img-responsive" width="230" height="50" style="position:relative;bottom:10px;">
              <ul id="mainmenu">
                  <?php
                  echo '<li>Welcome ADMIN&nbsp;<i class="fas fa-caret-down" id="drpdwn"></i>
                      <ul id="submenu">
                        <li>
                        <form action="logout.php" method="post">
                        <button type="submit" name="adminlogout" id="logout" style="all:unset;">Logout</button>
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
                      <li class="active">
                          <a href="admindshb.php">My DashBoard</a>
                      </li>
                      <li>
                          <a href="abptree.php">View Genealogy</a>
                      </li>
                      <li>
                          <a href="additem.php">View/Add Item</a>
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
                  </ul>
              </nav>
          </div>
          <div class="col-lg-10" id="data">
              <div class="container mt-5">
                  <div class="row">
                      <div class="col-lg-12" id="reportbox">
                         <div id="header" class="mb-3">
                             <h6 style="color:#646464;">Inactive Member Data</h6>
                         </div>
               <div class="table-responsive">
              <table class="display table-bordered" style="">
                  <thead>
                  <tr>
                      <th>Sno.</th>
                      <th>Member ID</th>
                      <th>Referal ID</th>
                      <th>Name</th>
                      <th>Contact No</th>
                      <th>Payment Proof</th>
                      <th>Activate</th>
                  </tr>
                  </thead>
                <tbody>
                  <?php
                   $getdlmem="select * from member where Active=0 and ReferalID <> 'SPONSOR';";
                    $dlmemres=mysqli_query($connection,$getdlmem);
                    $i=1;
                    while($dlmemrow=mysqli_fetch_assoc($dlmemres))
                    {
                        echo '<tr>
                          <td>'.$i.'</td>
                          <td>'.$dlmemrow['MemberID'].'</td>
                          <td>'.$dlmemrow['ReferalID'].'</td>
                          <td>'.$dlmemrow['FirstName'].' '.$dlmemrow['LastName'].'</td>
                          <td>'.$dlmemrow['ContactNo'].'</td>';
                          if($dlmemrow['FilePath'] != NULL)
                          {
                            echo '<td><button type="button" data-target="#viewproof'.$i.'" data-toggle="modal" style="all:unset;text-decoration:underline;color:blue;cursor:pointer;">View Proof</button></td>';
                          }
                          else
                          {
                           echo '<td><p style="color:red;margin-bottom:0!important;">Not Uploaded</p></td>';   
                          }
                         echo '<td><button type="button" class="btn activate" style="" id="activate'.$i.'" data-toggle="modal" data-target="#invoice'.$i.'">ACTIVATE</button></td>
                        </tr>
                        <div class="modal fade" id="viewproof'.$i.'">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header" style="position:relative;">
                                     <div class="modal-title">
                                       <h5 style="color:#646464;">Payment Proof</h5>
                                       <span class="close" data-dismiss="modal" style="position:absolute;right:20px;bottom:30px;color:#646464;cursor:pointer;">&times;</span>
                                     </div> 
                                  </div>
                                  <div class="modal-body" style="display:flex;justify-content:center;align-items:center;">
                                      <div id="proofbox'.$i.'" class="proofbox" style="width:400px;height:400px;">
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      
                                  </div>
                              </div>
                          </div>
                      </div>';
                      $imgpath=$dlmemrow['FilePath'];
                      echo '<script>
                      $(document).ready(function(){
                        $("#proofbox'.$i.'").css({"background-image":"url(\''.$imgpath.'\')",
                            "background-size":"cover",
                            "background-repeat":"no-repeat",
                            "background-position":"center center"
                        });
                       });
                      </script>
                      <div class="modal fade" id="invoice'.$i.'">
                      <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header" style="position:relative;">
                                     <div class="modal-title">
                                       <h5 style="color:#646464;">Create Invoice</h5>
                                       <span class="close" data-dismiss="modal" style="position:absolute;right:20px;bottom:30px;color:#646464;cursor:pointer;" onclick="location.reload(true);">&times;</span>
                                     </div> 
                                  </div>
                                  <script>
                                     $(document).ready(function(){
                                      $("#invform'.$i.'").submit(function(e){
                                        event.preventDefault();
                                        var sub=$("#subinv'.$i.'").val();
                                        $.ajax({
                                           url:"itempurpose.php",
                                           type:"POST",
                                           data:$("#invform'.$i.'").serialize() + "&sub=" + sub,
                                           beforeSend:function(){
                                               $("#subinv'.$i.'").text("Sending Invoice. Please wait...");
                                           },
                                           success:function(result,status,xhr){
                                               $("#subinv'.$i.'").text("SUBMIT");
                                               $("#invmsg'.$i.'").html(result);
                                               console.log(result);
                                               console.log(status);
                                           }
                                        });
                                      });
                                     });
                                  </script>
                                  <div class="modal-body" style="">
                                  <form action="itempurpose.php" method="POST" id="invform'.$i.'">
                                      <div class="form-group" id="invmsg'.$i.'">
                                      </div>
                                      <div class="form-group">
                                         <h6>Invoice Details</h6>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                          <input type="text" name="revno" id="revno'.$i.'" class="form-control" placeholder="Reverse Charge No.">
                                        </div>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                         <select name="invst" id="invst'.$i.'" class="form-control">
                                            <option value="SELECT STATE">SELECT STATE</option>';
                                
                                  
                                  $getst="select * from gst;";
                                  $stres=mysqli_query($connection,$getst);
                                  while($strow=mysqli_fetch_assoc($stres))
                                  {
                                      echo '<option value="'.$strow['state_name'].'">'.$strow['state_name'].'</option>';
                                  }
                                          echo '</select>
                                        </div>
                                        <div class="col">
                                          <input type="text" name="invstcode" id="invstcode'.$i.'" class="form-control" placeholder="State Code">
                                        </div>';
                                        echo '<script>
                                    $(document).ready(function(){
                                        $("#invst'.$i.'").change(function(){
                                          var stname=$("#invst'.$i.'").val();
                                          $.ajax({
                                              url:"admindshb.php",
                                              type:"POST",
                                              data:{stname:stname},
                                              success:function(result,status,xhr){
                                                 console.log(result);
                                                 
                                                 $("#invstcode'.$i.'").val(result); 
                                              },
                                          });
                                        });
                                    });
                                  </script>';
                                     echo '</div>
                                      <div class="form-group">
                                         <h6>Transportation Details</h6>
                                      </div>
                                      <div class="form-row mb-3">
                                         <div class="col">
                                            <select name="transmode" id="transmode'.$i.'" class="form-control">
                                              <option value="SELECT TRANSPORTATION MODE">SELECT TRANSPORTATION MODE</option>
                                              <option value="By Hand">By Hand</option>
                                              <option value="DTDC">DTDC</option>
                                              <option value="Franch Express">Franch Express</option>
                                              <option value="VRL Logistics LTD">VRL Logistics LTD</option>
                                              <option value="Others">Others</option>
                                            </select>
                                         </div>
                                         <div class="col">
                                            <input type="text" name="vehno" id="vehno'.$i.'" class="form-control" placeholder="Vehicle Number">
                                         </div>
                                      </div>
                                      <div class="form-row mb-3">
                                         <div class="col">
                                            <input type="text" name="dtsup" id="dtsup'.$i.'" class="form-control" placeholder="Date of Supply (dd-mm-yyyy)" pattern="[0-9]{1,2}-[0-9]{1,2}-[0-9]{4}" title="Example: DD-MM-YYYY">
                                         </div>
                                         <div class="col">
                                            <input type="text" name="plsup" id="plsup'.$i.'" class="form-control" placeholder="Place of Supply">
                                         </div>
                                      </div>
                                      <div class="form-group">
                                         <h6>Billed To</h6>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                          <input type="text" name="bname" id="bname'.$i.'" class="form-control" placeholder="Name" pattern="[A-Za-z ]+" value="'.$dlmemrow['FirstName'].' '.$dlmemrow['LastName'].'">
                                        </div>
                                        <div class="col">
                                          <input type="text" name="bgst" id="bgst'.$i.'" class="form-control" placeholder="GSTIN">
                                        </div>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                          <input type="text" name="baddr" id="baddr'.$i.'" class="form-control" placeholder="Address" value="'.$dlmemrow['Address'].'">
                                        </div>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                          <select name="bstate" id="bstate'.$i.'" class="form-control">
                                            <option value="SELECT STATE">SELECT STATE</option>';
                                            $getst="select * from gst;";
                                  $stres=mysqli_query($connection,$getst);
                                  while($strow=mysqli_fetch_assoc($stres))
                                  {
                                      if(strcmp($dlmemrow['State'],$strow['state_name']) == 0)
                                      {
                                          echo '<option value="'.$strow['state_name'].'" selected>'.$strow['state_name'].'</option>';
                                      }
                                      else
                                      {
                                       echo '<option value="'.$strow['state_name'].'">'.$strow['state_name'].'</option>';
                                      }
                                  }
                                          echo '</select>
                                        </div>
                                        <div class="col">
                                          <input type="text" name="bstcode" id="bstcode'.$i.'" class="form-control" placeholder="State Code">
                                        </div>
                                      </div>';
                                      echo '<script>
                                    $(document).ready(function(){
                                      var stname=$("#bstate'.$i.'").val();
                                      if(stname != "")
                                      {
                                          $.ajax({
                                              url:"admindshb.php",
                                              type:"POST",
                                              data:{stname:stname},
                                              success:function(result,status,xhr){
                                                 
                                            $("#bstcode'.$i.'").val(result); 
                                              },
                                          });
                                      }
                                        $("#bstate'.$i.'").change(function(){
                                          var stname=$("#bstate'.$i.'").val();
                                          $.ajax({
                                              url:"admindshb.php",
                                              type:"POST",
                                              data:{stname:stname},
                                              success:function(result,status,xhr){
                                                 
                                                 
                                                 $("#bstcode'.$i.'").val(result); 
                                              },
                                          });
                                        });
                                    });
                                  </script>';
                                      echo '<div class="form-group">
                                         <h6>Shipped To</h6>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                          <input type="text" name="sname" id="sname'.$i.'" class="form-control" placeholder="Name" pattern="[A-Za-z ]+">
                                        </div>
                                        <div class="col">
                                          <input type="text" name="sgst" id="sgst'.$i.'" class="form-control" placeholder="GSTIN">
                                        </div>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                          <input type="text" name="saddr" id="saddr'.$i.'" class="form-control" placeholder="Address">
                                        </div>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                          <select name="sstate" id="sstate'.$i.'" class="form-control">
                                             <option value="SELECT STATE">SELECT STATE</option>';
                                      $getst="select * from gst;";
                                      $stres=mysqli_query($connection,$getst);
                                      while($strow=mysqli_fetch_assoc($stres))
                                      {
                                          echo '<option value="'.$strow['state_name'].'">'.$strow['state_name'].'</option>';
                                      }
                                             
                                          echo '</select>
                                        </div>
                                        <div class="col">
                                          <input type="text" name="sstcode" id="sstcode'.$i.'" class="form-control" placeholder="State Code">
                                        </div>';
                                        echo '<script>
                                    $(document).ready(function(){
                                        $("#sstate'.$i.'").change(function(){
                                          var stname=$("#sstate'.$i.'").val();
                                          $.ajax({
                                              url:"admindshb.php",
                                              type:"POST",
                                              data:{stname:stname},
                                              success:function(result,status,xhr){
                                                 console.log(result);
                                                 
                                                 $("#sstcode'.$i.'").val(result); 
                                              },
                                          });
                                        });
                                    });
                                  </script>';
                                      echo '</div>
                                      <div class="form-group">
                                         <h6>Item 1</h6>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                         <input list="itemcodes'.$i.'" name="itemcode1" id="itemcode1'.$i.'" class="form-control" placeholder="Item Code" pattern="[0-9]{10}">
                                        <datalist id="itemcodes'.$i.'">';
                                        $getilist="select * from binitems;";
                                        $ilistres=mysqli_query($connection,$getilist);
                                        while($ilistrow=mysqli_fetch_assoc($ilistres))
                                        {
                                             echo '<option value="'.$ilistrow['ItemCode'].'">'.$ilistrow['ItemDescription'].'</option>';
                                        }
                                         echo '</datalist>
                                        </div>
                                        <div class="col">
                                         <div class="input-group">
                                          <input type="text" name="itemdesc1" id="itemdesc1'.$i.'" class="form-control" placeholder="Item Description" style="border-right:none!important;" readonly>
                                          <div class="input-group-append">
                                             <div class="input-group-text" style="background:white!important;">
                                              <div class="spinner-border-sm" role="status" id="spin01'.$i.'">
                                              </div>
                                             </div>
                                          </div>
                                         </div>
                                        </div>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                        <div class="input-group">
                                         <input type="text" name="up1" id="up1'.$i.'" class="form-control" placeholder="Unit Price" style="border-right:none!important;" readonly>
                                         <input type="hidden" id="uph1'.$i.'">
                                         <div class="input-group-append">
                                             <div class="input-group-text" style="background:white!important;">
                                              <div class="spinner-border-sm" role="status" id="spin11'.$i.'">
                                              </div>
                                             </div>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="col">
                                         <input type="text" name="quan1" id="quan1'.$i.'" class="form-control" placeholder="Quantity" pattern="[0-9]+">
                                        </div>
                                      </div>
                                      <div class="form-group mb-3">
                                         <input type="text" name="" id="amt1'.$i.'" class="form-control" placeholder="Amount" readonly>
                                         <input type="hidden" name="amt1" id="amount1'.$i.'" value=0>
                                      </div>
                                      <script>
                                          $(document).ready(function(){
                                             $("#quan1'.$i.'").on("input",function(){
                                                var up1=$("#uph1'.$i.'").val();
                                                var quan1=$("#quan1'.$i.'").val();
                                                var amt1=up1*quan1;
                                                $("#amt1'.$i.'").val(amt1+" "+"INR");
                                                $("#amount1'.$i.'").val(amt1);
                                             }); 
                                          });
                                        </script>
                                      <div class="form-group">
                                         <h6>Item 2</h6>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                         <input list="itemcodes'.$i.'" name="itemcode2" id="itemcode2'.$i.'" class="form-control" placeholder="Item Code" pattern="[0-9]{10}">
                                        <datalist id="itemcodes'.$i.'">';
                                        $getilist="select * from binitems;";
                                        $ilistres=mysqli_query($connection,$getilist);
                                        while($ilistrow=mysqli_fetch_assoc($ilistres))
                                        {
                                             echo '<option value="'.$ilistrow['ItemCode'].'">'.$ilistrow['ItemDescription'].'</option>';
                                        }
                                         echo '</datalist>
                                        </div>
                                        <div class="col">
                                        <div class="input-group">
                                         <input type="text" name="itemdesc2" id="itemdesc2'.$i.'" class="form-control" style="border-right:none!important;" placeholder="Item Description" readonly>
                                         <div class="input-group-append">
                                             <div class="input-group-text" style="background:white!important;">
                                              <div class="spinner-border-sm" role="status" id="spin02'.$i.'">
                                              </div>
                                             </div>
                                          </div>
                                         </div>
                                        </div>
                                      </div>
                                      <div class="form-row mb-3">
                                        <div class="col">
                                        <div class="input-group">
                                         <input type="text" name="up2" id="up2'.$i.'" class="form-control" placeholder="Unit Price" style="border-right:none!important;" readonly>
                                         <input type="hidden" id="uph2'.$i.'">
                                         <div class="input-group-append">
                                             <div class="input-group-text" style="background:white!important;">
                                              <div class="spinner-border-sm" role="status" id="spin12'.$i.'">
                                              </div>
                                             </div>
                                          </div>
                                         </div>
                                        </div>
                                        <div class="col">
                                         <input type="text" name="quan2" id="quan2'.$i.'" class="form-control" placeholder="Quantity" pattern="[0-9]+">
                                        </div>
                                      </div>
                                      <div class="form-group mb-3">
                                         <input type="text" name="" id="amt2'.$i.'" class="form-control" placeholder="Amount" readonly>
                                         <input type="hidden" name="amt2" id="amount2'.$i.'" value=0>
                                      </div>
                                      <script>
                                          $(document).ready(function(){
                                             $("#quan2'.$i.'").on("input",function(){
                                                var up2=$("#uph2'.$i.'").val();
                                                var quan2=$("#quan2'.$i.'").val();
                                                var amt2=up2*quan2;
                                                $("#amt2'.$i.'").val(amt2+" "+"INR");
                                                $("#amount2'.$i.'").val(amt2);
                                             }); 
                                          });
                                        </script>
                                      <div class="form-group">
                                         <h6>Total Invoice Amount</h6>
                                      </div>
                                      <div class="form-group mb-3">
                                         <input type="text" name="" id="totamt'.$i.'" class="form-control" placeholder="Total Amount" readonly>
                                         <input type="hidden" name="totamt" id="totalamt'.$i.'">
                                      </div>
                                      <script>
                                       $(document).ready(function(){
                                           $("#quan1'.$i.',#quan2'.$i.'").on("input",function(){
                                               var amtone=$("#amount1'.$i.'").val();
                                               var amttwo=$("#amount2'.$i.'").val();
                                               var totamt=parseInt(amtone)+parseInt(amttwo);
                                               $("#totamt'.$i.'").val(totamt+" "+"INR");
                                               $("#totalamt'.$i.'").val(totamt);
                                           });
                                       });
                                      </script>
                                      <input type="hidden" name="memid" id="memid'.$i.'" value="'.$dlmemrow['MemberID'].'">
                                  </div>
                                  <div class="modal-footer">
                                    <div class="form-group text-center" style="width:100%;">
                                        <button type="submit" name="subinv" id="subinv'.$i.'" class="btn btn-success">SUBMIT</button>
                                    </div>
                                    </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <script>
                        $(document).ready(function(){
                         $("#itemcode1'.$i.'").on("input change",function(){
                          var ic1=$("#itemcode1'.$i.'").val();
                           if(ic1.length == 10)
                           {
                               $.ajax({
                                   url:"itempurpose.php",
                                   type:"POST",
                                   data:{itemcode1:ic1},
                                   beforeSend:function(){
                                     $("#spin01'.$i.',#spin11'.$i.'").addClass("spinner-border");  
                                   },
                                   success:function(result,status,xhr){
                                     var obj=JSON.parse(result);
                                       $("#itemdesc1'.$i.'").val(obj.ItemDescription);
                                       $("#up1'.$i.'").val(obj.UnitPrice+" "+"INR");
                                       $("#uph1'.$i.'").val(obj.UnitPrice);
                                       $("#spin01'.$i.',#spin11'.$i.'").removeClass("spinner-border");
                                       console.log(result);
                                       console.log(status);
                                   }
                               });
                           }
                          });
                          $("#itemcode2'.$i.'").on("input change",function(){
                           var ic2=$("#itemcode2'.$i.'").val();
                           if(ic2.length == 10)
                           {
                                $.ajax({
                                   url:"itempurpose.php",
                                   type:"POST",
                                   data:{itemcode2:ic2},
                                   beforeSend:function(){
                                     $("#spin02'.$i.',#spin12'.$i.'").addClass("spinner-border");  
                                   },
                                   success:function(result,status,xhr){
                                     var obj=JSON.parse(result);
                                       $("#itemdesc2'.$i.'").val(obj.ItemDescription);
                                       $("#up2'.$i.'").val(obj.UnitPrice+" "+"INR");
                                       $("#uph2'.$i.'").val(obj.UnitPrice);
                                       $("#spin02'.$i.',#spin12'.$i.'").removeClass("spinner-border");
                                       console.log(result);
                                       console.log(status);
                                   }
                               });
                           }
                          });
                        });
                      </script>';
                      $i++;
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
<!--<div class="" id="myrow'.$i.'" style="">
                                      </div>
                                      <div class="form-group">
                                         <button type="button" id="additem'.$i.'" class="btn btn-primary">Add Item</button>
                                      </div>
                                      <script>
                                       $(document).ready(function(){
                                          $("#additem'.$i.'").click(function(){
                                             $("#myrow'.$i.'").prepend("<div class=\"form-row mb-3\"><div class=\"col\"><input type=\"text\" name=\"itemcode[]\" class=\"form-control\" placeholder=\"Item Code\"></div><div class=\"col\"><input type=\"number\" name=\"quan[]\" class=\"form-control\" placeholder=\"Quantity\"></div></div>");
                                          }); 
                                       });
                                      </script>
                                      
                                      
                                      $.ajax({
                                   url:"initajax.php",
                                   type:"POST",
                                   data:{itemcode1:ic1},
                                   success:function(result,status,xhr){
                                       console.log(result);
                                       console.log(status);
                                   }
                               });
                           }
                           else if(ic2.length == 10)
                           {
                                $.ajax({
                                   url:"initajax.php",
                                   type:"POST",
                                   data:{itemcode2:ic2},
                                   success:function(result,status,xhr){
                                       console.log(result);
                                       console.log(status);
                                   }
                               });
                           }-->
                           
                           
                          <!-- <script>
                                              $("#dtsup'.$i.'").on("focus",function(){
                                                  $("#dtsup'.$i.'").attr("type","date");
                                              });
                                            </script>-->