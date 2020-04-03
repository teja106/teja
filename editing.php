<?php
include_once 'dbconfig.php';
if(isset($_REQUEST['update']))
{
    $idesc=$_POST['idesc'];
    $iwt=$_POST['iwt'];
    $up=$_POST['up'];
     $hsnacs=$_POST['hsnacs'];
     $igst=$_POST['igst'];
     $itemid=$_POST['itemid'];
     
     $sql="update binitems set ItemDescription='".$idesc."',Weight='".$iwt."',UnitPrice=".$up.",HSNACS='".$hsnacs."',GST=".$igst." where ItemCode='".$itemid."';";
     if(mysqli_query($connection,$sql))
     {
         echo '<script type="text/javascript">
           swal("Good Job!!","Updated Successfully","success");
         </script>';
     }
     else
     {
         echo '<script type="text/javascript">
           swal("Error","Failed to Update","error");
         </script>';
     }
}
else if(isset($_REQUEST['updateprofile']))
{
    $uid=$_POST['uid'];
    if(isset($_POST['qual']))
    {
        $qual=$_POST['qual'];
        
        $qualsql="update member set Qualification='".$qual."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$qualsql))
        {
            $getqual="select * from member where MemberID='".$uid."';";
            $qualres=mysqli_query($connection,$getqual);
            $qualrow=mysqli_fetch_assoc($qualres);
            echo '<script>
               $(document).ready(function(){
                  $("#qual").attr("disabled","true")
                  $("#qual").val("'.$qualrow['Qualification'].'");
                  $("#editqual").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updatequal").css("display","none");
                  
                  var qual=$("#qual").val();
                 $("#editqual").click(function(){
                     $("#qual").removeAttr("disabled");
                    var qualelem=$("#qual")[0];
                    var quallen=qual.length;
                    qualelem.selectionStart=quallen;
                    qualelem.selectionEnd=quallen;
                    qualelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    }
    if(isset($_POST['state']))
    {
        $state=$_POST['state'];
        
        $statesql="update member set State='".$state."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$statesql))
        {
            $getst="select * from member where MemberID='".$uid."';";
            $stres=mysqli_query($connection,$getst);
            $strow=mysqli_fetch_assoc($stres);
            echo '<script>
               $(document).ready(function(){
                  $("#state").attr("disabled","true")
                  $("#state").val("'.$strow['State'].'");
                  $("#editstate").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updatestate").css("display","none");
                  
                  var state=$("#state").val();
                 $("#editstate").click(function(){
                     $("#state").removeAttr("disabled");
                    var stateelem=$("#state")[0];
                    var statelen=state.length;
                    stateelem.selectionStart=statelen;
                    stateelem.selectionEnd=statelen;
                    stateelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    }
    if(isset($_POST['city']))
    {
     $city=$_POST['city'];
     
     $citysql="update member set City='".$city."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$citysql))
        {
            $getct="select * from member where MemberID='".$uid."';";
            $ctres=mysqli_query($connection,$getct);
            $ctrow=mysqli_fetch_assoc($ctres);
            echo '<script>
               $(document).ready(function(){
                  $("#city").attr("disabled","true")
                  $("#city").val("'.$ctrow['City'].'");
                  $("#editcity").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updatecity").css("display","none");
                  
                  var city=$("#city").val();
                 $("#editcity").click(function(){
                     $("#city").removeAttr("disabled");
                    var cityelem=$("#city")[0];
                    var citylen=city.length;
                    cityelem.selectionStart=citylen;
                    cityelem.selectionEnd=citylen;
                    cityelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    }
    if(isset($_POST['addr']))
    {
     $addr=$_POST['addr'];
     
     $addrsql="update member set Address='".$addr."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$addrsql))
        {
            $getaddr="select * from member where MemberID='".$uid."';";
            $addrres=mysqli_query($connection,$getaddr);
            $addrrow=mysqli_fetch_assoc($addrres);
            echo '<script>
               $(document).ready(function(){
                  $("#addr").attr("disabled","true")
                  $("#addr").val("'.$addrrow['Address'].'");
                  $("#editaddr").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updateaddr").css("display","none");
                  
                  var addr=$("#addr").val();
                 $("#editaddr").click(function(){
                     $("#addr").removeAttr("disabled");
                    var addrelem=$("#addr")[0];
                    var addrlen=addr.length;
                    addrelem.selectionStart=addrlen;
                    addrelem.selectionEnd=addrlen;
                    addrelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    }
    if(isset($_POST['email']))
    {
     $email=$_POST['email'];
    //  if(preg_match($email,FILTER_VALIDATE_EMAIL,FILTER_SANITIZE_EMAIL))
    //  {
     $emailsql="update member set EmailID='".$email."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$emailsql))
        {
            $getemail="select * from member where MemberID='".$uid."';";
            $emailres=mysqli_query($connection,$getemail);
            $emailrow=mysqli_fetch_assoc($emailres);
            echo '<script>
               $(document).ready(function(){
                  $("#email").attr("disabled","true")
                  $("#email").val("'.$emailrow['EmailID'].'");
                  $("#editemail").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updateemail").css("display","none");
                  
                 var email=$("#email").val();
                 $("#editemail").click(function(){
                     $("#email").removeAttr("disabled");
                    var emailelem=$("#email")[0];
                    var emaillen=email.length;
                    emailelem.selectionStart=emaillen;
                    emailelem.selectionEnd=emaillen;
                    emailelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    //  }
    //  else
    //  {
    //      echo '<script type="text/javascript">
    //           swal("Failed..","Invalid Email ID","error");
    //           $("button").removeClass("spinner-border");
    //         </script>';
    //  }
    }
    if(isset($_POST['mobno']))
    {
     $mobno=$_POST['mobno'];
     
     $mobnosql="update member set ContactNo='".$mobno."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$mobnosql))
        {
            $getmobno="select * from member where MemberID='".$uid."';";
            $mobnores=mysqli_query($connection,$getmobno);
            $mobnorow=mysqli_fetch_assoc($mobnores);
            echo '<script>
               $(document).ready(function(){
                  $("#mobno").attr("disabled","true")
                  $("#mobno").val("'.$mobnorow['ContactNo'].'");
                  $("#editmobno").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updatemobno").css("display","none");
                  
                 var mobno=$("#mobno").val();
                 $("#editmobno").click(function(){
                     $("#mobno").removeAttr("disabled");
                    var mobnoelem=$("#mobno")[0];
                    var mobnolen=mobno.length;
                    mobnoelem.selectionStart=mobnolen;
                    mobnoelem.selectionEnd=mobnolen;
                    mobnoelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    }
    if(isset($_POST['adrno']))
    {
     $adrno=$_POST['adrno'];
     
     $adrnosql="update member set AadharNo='".$adrno."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$adrnosql))
        {
            $getadrno="select * from member where MemberID='".$uid."';";
            $adrnores=mysqli_query($connection,$getadrno);
            $adrnorow=mysqli_fetch_assoc($adrnores);
            echo '<script>
               $(document).ready(function(){
                  $("#adrno").attr("disabled","true")
                  $("#adrno").val("'.$adrnorow['AadharNo'].'");
                  $("#editadrno").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updateadrno").css("display","none");
                  
                 var adrno=$("#adrno").val();
                 $("#editadrno").click(function(){
                     $("#adrno").removeAttr("disabled");
                    var adrnoelem=$("#adrno")[0];
                    var adrnolen=adrno.length;
                    adrnoelem.selectionStart=adrnolen;
                    adrnoelem.selectionEnd=adrnolen;
                    adrnoelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    }
    if(isset($_POST['panno']))
    {
     $panno=$_POST['panno'];
     
     $pannosql="update member set PANNo='".$panno."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$pannosql))
        {
            $getpanno="select * from member where MemberID='".$uid."';";
            $pannores=mysqli_query($connection,$getpanno);
            $pannorow=mysqli_fetch_assoc($pannores);
            echo '<script>
               $(document).ready(function(){
                  $("#panno").attr("disabled","true")
                  $("#panno").val("'.$pannorow['PANNo'].'");
                  $("#editpanno").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updatepanno").css("display","none");
                  
                 var panno=$("#panno").val();
                 $("#editpanno").click(function(){
                     $("#panno").removeAttr("disabled");
                    var pannoelem=$("#panno")[0];
                    var pannolen=panno.length;
                    pannoelem.selectionStart=pannolen;
                    pannoelem.selectionEnd=pannolen;
                    pannoelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    }
    if(isset($_POST['bname']))
    {
     $bname=$_POST['bname'];
     
     $bnamesql="update member set BankName='".$bname."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$bnamesql))
        {
            $getbname="select * from member where MemberID='".$uid."';";
            $bnameres=mysqli_query($connection,$getbname);
            $bnamerow=mysqli_fetch_assoc($bnameres);
            echo '<script>
               $(document).ready(function(){
                  $("#bname").attr("disabled","true")
                  $("#bname").val("'.$bnamerow['BankName'].'");
                  $("#editbname").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updatebname").css("display","none");
                  
                 var bname=$("#bname").val();
                 $("#editbname").click(function(){
                 $("#bname").removeAttr("disabled");
                var bnameelem=$("#bname")[0];
                var bnamelen=bname.length;
                bnameelem.selectionStart=bnamelen;
                bnameelem.selectionEnd=bnamelen;
                bnameelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    }
    if(isset($_POST['brname']))
    {
     $brname=$_POST['brname'];
     
     $brnamesql="update member set BranchName='".$brname."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$brnamesql))
        {
            $getbrname="select * from member where MemberID='".$uid."';";
            $brnameres=mysqli_query($connection,$getbrname);
            $brnamerow=mysqli_fetch_assoc($brnameres);
            echo '<script>
               $(document).ready(function(){
                  $("#brname").attr("disabled","true")
                  $("#brname").val("'.$brnamerow['BranchName'].'");
                  $("#editbrname").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updatebrname").css("display","none");
                  
                 var brname=$("#brname").val();
                 $("#editbrname").click(function(){
                     $("#brname").removeAttr("disabled");
                    var brnameelem=$("#brname")[0];
                    var brnamelen=brname.length;
                    brnameelem.selectionStart=brnamelen;
                    brnameelem.selectionEnd=brnamelen;
                    brnameelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    }
    if(isset($_POST['accno']))
    {
     $accno=$_POST['accno'];
     
     $accnosql="update member set BankAccNo='".$accno."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$accnosql))
        {
            $getaccno="select * from member where MemberID='".$uid."';";
            $accnores=mysqli_query($connection,$getaccno);
            $accnorow=mysqli_fetch_assoc($accnores);
            echo '<script>
               $(document).ready(function(){
                  $("#accno").attr("disabled","true")
                  $("#accno").val("'.$accnorow['BankAccNo'].'");
                  $("#editaccno").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updateaccno").css("display","none");
                  
                 var accno=$("#accno").val();
                 $("#editaccno").click(function(){
                     $("#accno").removeAttr("disabled");
                    var accnoelem=$("#accno")[0];
                    var accnolen=accno.length;
                    accnoelem.selectionStart=accnolen;
                    accnoelem.selectionEnd=accnolen;
                    accnoelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    }
    if(isset($_POST['ifsc']))
    {
     $ifsc=$_POST['ifsc'];
     
     $ifscsql="update member set IFSCcode='".$ifsc."' where MemberID='".$uid."';";
        if(mysqli_query($connection,$ifscsql))
        {
            $getifsc="select * from member where MemberID='".$uid."';";
            $ifscres=mysqli_query($connection,$getifsc);
            $ifscrow=mysqli_fetch_assoc($ifscres);
            echo '<script>
               $(document).ready(function(){
                  $("#ifsc").attr("disabled","true")
                  $("#ifsc").val("'.$ifscrow['IFSCcode'].'");
                  $("#editifsc").addClass("fas fa-pen");
                  $("button").removeClass("spinner-border");
                  $("#updateifsc").css("display","none");
                  
                 var ifsc=$("#ifsc").val();
                 $("#editifsc").click(function(){
                     $("#ifsc").removeAttr("disabled");
                    var ifscelem=$("#ifsc")[0];
                    var ifsclen=ifsc.length;
                    ifscelem.selectionStart=ifsclen;
                    ifscelem.selectionEnd=ifsclen;
                    ifscelem.focus();
                 });
               });
            </script>';
        }
        else
        {
            echo '<script type="text/javascript">
               swal("Failed..","Failed to update. Please try again.","error");
               $("button").removeClass("spinner-border");
            </script>';
        }
    }
}
?>