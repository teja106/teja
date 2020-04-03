<?php
session_start();
include_once 'dbconfig.php';
if($_SESSION['uid'] != 'LIPIDMKT')
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
    <!--Sweet Alerts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha256-KsRuvuRtUVvobe66OFtOQfjP8WA2SzYsmm4VPfMnxms=" crossorigin="anonymous"></script>
<!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">-->
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
        #itemform
      {
        height:auto;
        background:white;
        box-shadow:2px 2px 8px 2px rgba(0,0,0,0.2);
        border-radius:15px;
        padding:0px 20px 20px!important;
        position:relative;
      }
        #header1
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
        input:-webkit-read-only
        {
            background:transparent!important;
        }
        input:-moz-read-only
        {
            background:transparent!important;
        }
        input:read-only
        {
          background:transparent!important;    
        }
        table td input
        {
            border:none!important;
            outline:none!important;
            text-align:center!important;
            background:transparent!important;
            padding:5px!important;
        }
        .stsmsg
        {
            background:transparent!important;
            border:none!important;
            outline:none!important;
            color:black;
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
        
         $(document).ready(function(){
             $("#additem").submit(function(e){
                 event.preventDefault();
                 var hsn=$("#hsn").val();
                 var up=$("#up").val();
                 var gst=$("#gst").val();
                 var units=$("#units").val();
                 var wt=$("#wt").val();
                 var item=$("#item").val();
                 var itemsub=$("#itemsub").val();
                 $.ajax({
                     url:"itempurpose.php",
                     type:"POST",
                     data:{
                         gst:gst,
                         hsn:hsn,
                         units:units,
                         item:item,
                         wt:wt,
                         up:up,
                         itemsub:itemsub
                     },
                     beforeSend:function(){
                        $("#itemsub").text("Adding Item...");
                     },
                     success:function(result,status,xhr){
                       $("#itemsub").text("Add Item");
                       $("#msg").html(result);
                       console.log(status);
                       console.log(result);
                     }
                 });
             });
        });
    </script>
</head>
<body>
  <div class="container-fluid" id="cover" style="">
      <div class="row">
          <div class="col-lg-12" id="bar">
              <img src="img/logo.png" class="img-responsive" width="230" height="50" style="position:relative;bottom:10px;">
              <ul id="mainmenu">
                  <?php
                  echo '<li>
                      <a href="" style="all:unset;">Welcome ADMIN</a>&nbsp;<i class="fas fa-caret-down" id="drpdwn"></i>
                      <ul id="submenu">
                        <li>
                        <form action="logout.php" method="post" style="all:unset;">
                        <button type="submit" name="adminlogout" id="logout" style="all:unset;">Logout</button>
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
                          <a href="admindshb.php">My DashBoard</a>
                      </li>
                      <li>
                          <a href="abptree.php">View Genealogy</a>
                      </li>
                      <li class="active">
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
          <div class="col-lg-10" id="data" style="background:#e6e6e6;">
              <div class="container mt-5">
                  <div class="row d-flex mb-3" style="justify-content:center;">
                    <div class="col-lg-6" id="itemform">
                        <div id="header1" class="text-center">
                          <h5 style="color:#646464;">Add Binary Item</h5>
                        </div>
                        <form action="itempurpose.php" method="POST" id="additem">
                           <div class="form-group mt-4" id="msg">
                                                        
                           </div>
                           <div class="form-row">
                            <div class="col">
                                <input type="text" name="item" id="item" placeholder="Item Name" class="form-control" pattern="[A-Za-z ]+" title="Ex: Aloevera">
                            </div>
                            <div class="col">
                                <input type="text" name="up" id="up" placeholder="Unit Price" class="form-control">
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="col">
                                <input type="text" name="wt" id="wt" placeholder="Weight" class="form-control" pattern="[0-9]+" title="Ex: 25">
                            </div>
                            <div class="col">
                                <select class="form-control" name="units" id="units">
                                    <option value="SELECT UNIT">SELECT UNIT</option>
                                    <option value="LTR">LTR</option>
                                    <option value="ML">ML</option>
                                    <option value="GMS">GMS</option>
                                    <option value="KGS">KGS</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-row">
                            <div class="col">
                                <input type="text" name="hsn" id="hsn" placeholder="HSN ACS" class="form-control" pattern="[0-9]+" title="Ex: 3042">
                            </div>
                            <div class="col">
                                <input type="text" name="gst" id="gst" placeholder="GST in %" class="form-control" pattern="[0-9]+" title="Ex:5 or 12 or 18 or 28" readonly>
                            </div>
                            </div>
                            <div class="form-group text-center mt-3">
                             <button type="submit" name="itemsub" id="itemsub" class="btn btn-primary" style="padding:10px!important;">Add Item</button>
                            </div>
                        </form>
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-12" id="reportbox">
                         <div id="header" class="mb-3">
                             <h5 style="color:#646464;">Binary Item Data</h5>
                         </div>
             <div class="table-responsive">
              <table class="display table-bordered">
                  <thead>
                  <tr>
                      <th>Sno.</th>
                      <th>Item Code</th>
                      <th>Item Description</th>
                      <th>Weight</th>
                      <th>Units</th>
                      <th>GST(%)</th>
                      <th>HSN ACS</th>
                      <th>Unit Price</th>
                      <th>Edit Data</th>
                  </tr>
                  </thead>
                  <tbody>
                <?php
                      $getitem="select * from binitems;";
                    $itemres=mysqli_query($connection,$getitem);
                    $i=1;
                    while($itemrow=mysqli_fetch_assoc($itemres))
                    {
                        echo '<tr>
                          <td>'.$i.'</td>
                          <td>'.$itemrow['ItemCode'].'</td>
                          <td><input type="text" name="idesc" id="idesc'.$i.'" value="'.$itemrow['ItemDescription'].'" readonly form="editfrm'.$i.'"></td>
                          <td><input type="text" name="iwt" id="iwt'.$i.'" value="'.$itemrow['Weight'].'" readonly form="editfrm'.$i.'"></td>
                          <td>'.$itemrow['Units'].'</td>
                          <td><input type="text" name="igst" id="igst'.$i.'" value="'.$itemrow['GST'].'" readonly form="editfrm'.$i.'"></td>';
                          echo '<td><input type="text" name="hsnacs" id="hsnacs'.$i.'" value="'.$itemrow['HSNACS'].'" readonly form="editfrm'.$i.'"></td>
                         <td><input type="text" name="up" id="up'.$i.'" value="'.$itemrow['UnitPrice'].'" readonly form="editfrm'.$i.'" style="display:inline!important;"> INR</td>
                         <td>
                         <button type="button" name="edit" id="edit'.$i.'" class="btn btn-success" style="padding:3px!important;font-size:14px!important;width:50px!important;">Edit</button>
                        <form action="editing.php" method="POST" id="editfrm'.$i.'" style="display:none;">
                        <input type="hidden" name="itemid" id="itemid'.$i.'" value="'.$itemrow['ItemCode'].'" form="editfrm'.$i.'">
                         <button type="submit" name="update" id="update'.$i.'" class="btn btn-primary" style="padding:3px!important;font-size:14px!important;width:60px!important;">Update</button>
                         </form>
                         </td>
                      </tr>
                      <script type="text/javascript">
                        $(document).ready(function(){
                             var idescval=$("#idesc'.$i.'").val();
                             var iwtval=$("#iwt'.$i.'").val();
                             var up=$("#up'.$i.'").val();
                             var hsnacs=$("#hsnacs'.$i.'").val();
                             var igst=$("#igst'.$i.'").val();
                            $("#edit'.$i.'").click(function(){
                            
                                $("#idesc'.$i.'").removeAttr("readonly");
                                $("#iwt'.$i.'").removeAttr("readonly");
                                $("#igst'.$i.'").removeAttr("readonly");
                                $("#hsnacs'.$i.'").removeAttr("readonly");
                                $("#up'.$i.'").removeAttr("readonly");
                                
                                var descstart=idescval.length;
                                var element=$("#idesc'.$i.'")[0];
                                
                                element.selectionStart=descstart;
                                element.selectionEnd=descstart;
                                element.focus();
                                
                                $("#edit'.$i.'").css("display","none");
                                $("#editfrm'.$i.'").css("display","inline");
                            });
                            
                        });
                        
                        
                        $(document).ready(function(){
                        var update=$("#update'.$i.'").val();
                           $("#editfrm'.$i.'").submit(function(e){
                                event.preventDefault();
                                $.ajax({
                                    url:"editing.php",
                                    type:"POST",
                                    data:$("#editfrm'.$i.'").serialize() + "&update=" + update,
                                    beforeSend:function(){
                                       $("#update'.$i.'").text("Updating...");
                                       $("#update'.$i.'").removeClass("btn btn-primary");
                                       $("#update'.$i.'").addClass("stsmsg");
                                    },
                                    success:function(result,status,xhr){
                                        console.log(result);
                                        
                                        $("#editfrm'.$i.'").after(result);
                                        $("#update'.$i.'").text("Update");
                                       $("#update'.$i.'").addClass("btn btn-primary");
                                       $("#update'.$i.'").removeClass("stsmsg");
                                        $(".swal-button").click(function(){
                                            location.reload(true);
                                        });
                                    }
                                });
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