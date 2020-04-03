<html>
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
<!--<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">-->
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />
</head>
<body>
<?php
$bonus=0;
$active=0;
$payrec=0;
$balamt=0;
$carryfrwrd=0;
if(isset($_POST['uid']))
{
    include_once 'dbconfig.php';
    $uid=$_POST['uid'];
    $colorpurp="select * from member where MemberID='".$uid."';";
    $purpres=mysqli_query($connection,$colorpurp);
    $purprow=mysqli_fetch_assoc($purpres);
    echo '<table id="poptable">
             <tr>
              <td>Member ID</td>
              <td>:</td>
              <td>'.$purprow['MemberID'].'</td>
             </tr>
             <tr>
              <td>Position</td>
              <td>:</td>';
              if($purprow['ReferalID'] == "SPONSOR")
              {
               echo '<td>Root</td>';
              }
              else if($purprow['Legpos'] == "Left Leg - LLG")
              {
               echo '<td>Left</td>';
              }
              else if($purprow['Legpos'] == "Right Leg - RLG")
              {
               echo '<td>Right</td>';
              }
              else if($purprow['Legpos'] == "Parallel Leg - PLG")
              {
               echo '<td>Parallel</td>';
              }
            echo '</tr>
             <tr>
              <td>Left</td>
              <td>:</td>
              <td>'.$purprow['LeftCount'].'</td>
             </tr>
             <tr>
              <td>Right</td>
              <td>:</td>
              <td>'.$purprow['RightCount'].'</td>
             </tr>
             <tr>
              <td>Parallel</td>
              <td>:</td>
              <td>'.$purprow['ParallelCount'].'</td>
             </tr>
             <tr>
              <td>Pair Commission</td>
              <td>:</td>
              <td>Rs. '.$purprow['PairCommission'].'</td>
             </tr>
           </table>';
}
else if(isset($_POST['joinsub']) || isset($_FILES['pay']['name']))
{
    include_once 'dbconfig.php';
    $refid=$_POST['refid'];
    $title=$_POST['title'];
    if($title == 'Mr.')
    {
        $gender="His";
    }
    else if($title == 'Mrs.' or $title == 'Smt.')
    {
        $gender="Her";
    }
    $fname=mysqli_real_escape_string($connection,$_POST['fname']);
    $lname=mysqli_real_escape_string($connection,$_POST['lname']);
    $conno='+91'.mysqli_real_escape_string($connection,$_POST['mobno']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $legpos=mysqli_real_escape_string($connection,$_POST['legpos']);
    $filename=$_FILES['pay']['name'];
    $filetmp=$_FILES['pay']['tmp_name'];
    $filetype=$_FILES['pay']['type'];
    $fileerror=$_FILES['pay']['error'];
    $filesize=$_FILES['pay']['size'];
    $getext=explode('.',$filename);
    $fileext=strtolower(end($getext));
    if($title == 'SELECT TITLE')
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Title is required</p>
        </div>
        <script type="text/javascript">
           $("[name=\'title\']").addClass("error");
           $("[name=\'joinsub\']").removeClass("joining");
           $("[name=\'joinsub\']").text("JOIN");
        </script>';
    }
    else if(empty($fname))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Firstname is required</p>
        </div>
        <script type="text/javascript">
           $("[name=\'fname\']").addClass("error");
           $("[name=\'joinsub\']").removeClass("joining");
           $("[name=\'joinsub\']").text("JOIN");
        </script>';
    }
    else if(empty($lname))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Lastname is required</p>
        </div>
        <script type="text/javascript">
           $("[name=\'lname\']").addClass("error");
           $("[name=\'joinsub\']").removeClass("joining");
           $("[name=\'joinsub\']").text("JOIN");
        </script>';
    }
    else if(empty($conno))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Mobile Number is required</p>
        </div>
        <script type="text/javascript">
           $("[name=\'mobno\']").addClass("error");
           $("[name=\'joinsub\']").removeClass("joining");
           $("[name=\'joinsub\']").text("JOIN");
        </script>';
    }
    else if(empty($email))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Email ID is required</p>
        </div>
        <script type="text/javascript">
           $("[name=\'email\']").addClass("error");
           $("[name=\'joinsub\']").removeClass("joining");
           $("[name=\'joinsub\']").text("JOIN");
        </script>';
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_SANITIZE_EMAIL))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Invalid Email ID</p>
        </div>
        <script type="text/javascript">
           $("[name=\'email\']").addClass("error");
           $("[name=\'joinsub\']").removeClass("joining");
           $("[name=\'joinsub\']").text("JOIN");
        </script>';
    }
    else if($legpos == 'SELECT LEG POSITION')
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Legposition is required</p>
        </div>
        <script type="text/javascript">
           $("[name=\'legpos\']").addClass("error");
           $("[name=\'joinsub\']").removeClass("joining");
           $("[name=\'joinsub\']").text("JOIN");
        </script>';
    }
    else
    {
        $errleg=false;
        $getrefdata="select * from member where ReferalID='".$refid."';";
        $refres=mysqli_query($connection,$getrefdata);
        $refrescheck=mysqli_num_rows($refres);
        if($refrescheck == 3)
        {
            echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">This Referal ID has already 3 members in it\'s downline. Please select another Ref ID.</p>
            </div>
            <script type="text/javascript">
               $("[name=\'refid\']").addClass("error");
               $("[name=\'joinsub\']").removeClass("joining");
               $("[name=\'joinsub\']").text("JOIN");
            </script>';
        }
        else if($refrescheck < 3)
        {
            if($refrescheck == 2)
            {
                while($refrow=mysqli_fetch_assoc($refres))
                {
                    if(strcmp($refrow['Legpos'],$legpos) == 0)
                    {
                       $errleg=true; 
                    }
                }
                if($errleg == true)
                {
                    echo '<div class="alert alert-danger alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-danger">This Referal ID has already a '.$legpos.'. Please select another leg position.</p>
                    </div>
                    <script type="text/javascript">
                       $("[name=\'legpos\']").addClass("error");
                       $("[name=\'joinsub\']").removeClass("joining");
                       $("[name=\'joinsub\']").text("JOIN");
                    </script>';
                }
                else
                {
                     $randid=mt_rand(100000001,999999999);
                    $mid="M".$randid;
                    $checkmid="select * from member;";
                    $midres=mysqli_query($connection,$checkmid);
                    while($midrow=mysqli_fetch_assoc($midres))
                    {
                        if($midrow['MemberID'] == $mid)
                        {
                            $rid=mt_rand(100000001,999999999);
                            $regenmid="M".$rid;
                            $mid=$regenmid;
                        }
                    }
                    
                    if($_FILES['pay']['name'] != '')
                    {
                    $allowedfiletypes=array('jpg','jpeg');
                    //if(in_array($fileext,$allowedfiletypes))
                    //{
                        //if($fileerr === 0)
                        //{
                            if($filesize < 1048576)
                            {
                                $filenewname=uniqid($mid,true).'.'.$fileext;
                                $fileloc="scrshots/".$filenewname;
                                if(move_uploaded_file($filetmp,$fileloc))
                                {
                                    $randpswd=mt_rand(1001,9999);
                                    $pswd="LPDM".$randpswd;
                                    $checkpswd="select * from member;";
                                    $pswdres=mysqli_query($connection,$checkpswd);
                                    while($pswdrow=mysqli_fetch_assoc($pswdres))
                                    {
                                        if(password_verify($pswd,$pswdrow['Password']) == true)
                                        {
                                            $rpswd=mt_rand(1001,9999);
                                            $regenpswd="LPDM".$rpswd;
                                            $pswd=$regenpswd;
                                        }
                                    }
                                    $hashedpswd=password_hash($pswd,PASSWORD_DEFAULT);
                                    $dtj=date("d-m-Y");
                                    $insdata="insert into member(MemberID,ReferalID,Legpos,Title,FirstName,LastName,EmailID,ContactNo,Password,DtofJoining,Bonus,CarryForward,PaymentReceived,BalAmt,Active,FilePath)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
                                    $stmt=mysqli_stmt_init($connection);
                                    mysqli_stmt_prepare($stmt,$insdata);
                                    mysqli_stmt_bind_param($stmt,"ssssssssssdiddis",$mid,$refid,$legpos,$title,$fname,$lname,$email,$conno,$hashedpswd,$dtj,$bonus,$carryfrwrd,$payrec,$balamt,$active,$fileloc);
                                    
                                    if(mysqli_stmt_execute($stmt))
                                    {
                                        $to=$email;
                                        $from="career@motleyjobs.com";
                                        $subject="You have joined successfully as a LIPID MKT Member.";
                                        $message="Your Login ID: ".$mid."\n"."Your Password: ".$pswd;
                                        $headers="From: ".$from."\nTo:".$to;
                                        if(mail($to,$subject,$message,$headers))
                                        {
                                           echo '<div class="alert alert-success alert-dismissible">
                                              <span class="close" data-dismiss="alert">&times;</span>
                                              <p class="text-success" style="font-weight:bold;">You have successfully joined a member!!</p>
                                              <p class="text-success" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                                        </div>
                                        <script type="text/javascript">
                                        $("form").trigger("reset");
                                        $("[name=\'refid\']").val("'.$refid.'");
                                        $("input").removeClass("error");
                                        $("select").removeClass("error");
                                        $("[name=\'joinsub\']").removeClass("joining");
                                        $("[name=\'joinsub\']").text("JOIN");
                                        </script>';   
                                        }
                                        else
                                        {
                                            echo '<div class="alert alert-danger alert-dismissible">
                                              <span class="close" data-dismiss="alert">&times;</span>
                                              <p class="text-danger" style="font-weight:bold;">Member joined successfully, but failed to send mail to the member. Inform about ID and Password to the member manually.</p>
                                              <p class="text-danger" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                                        </div>
                                        <script type="text/javascript">
                                        $("form").trigger("reset");
                                        $("[name=\'refid\']").val("'.$refid.'");
                                        $("input").removeClass("error");
                                        $("select").removeClass("error");
                                        $("[name=\'joinsub\']").removeClass("joining");
                                        $("[name=\'joinsub\']").text("JOIN");
                                        </script>';
                                        }
                                    }
                                    else
                                    {
                                        echo '<div class="alert alert-danger alert-dismissible">
                                              <span class="close" data-dismiss="alert">&times;</span>
                                              <p class="text-danger" style="font-weight:bold;">Registered Failed</p>
                                        </div>
                                        <script>
                                            $("[name=\'joinsub\']").removeClass("joining");
                                           $("[name=\'joinsub\']").text("JOIN");
                                        </script>';
                                    }
                                    //err
                                }
                                else
                                {
                                    echo '<div class="alert alert-danger alert-dismissible">
                                      <span class="close" data-dismiss="alert">&times;</span>
                                      <p class="text-danger">File is not uploaded. Please try it again.</p>
                                    </div>
                                    <script type="text/javascript">
                                       $("[name=\'pay\']").addClass("error");
                                       $("[name=\'joinsub\']").removeClass("joining");
                                       $("[name=\'joinsub\']").text("JOIN");
                                    </script>';
                                }
                            }
                            else
                            {
                                echo '<div class="alert alert-danger alert-dismissible">
                                      <span class="close" data-dismiss="alert">&times;</span>
                                      <p class="text-danger">File size is too large, only files of 1MB or less than that are allowed to upload.</p>
                                    </div>
                                    <script type="text/javascript">
                                       $("[name=\'pay\']").addClass("error");
                                       $("[name=\'joinsub\']").removeClass("joining");
                                       $("[name=\'joinsub\']").text("JOIN");
                                    </script>';   
                            }
                        //}
                        // else
                        // {
                        //     echo '<div class="alert alert-danger alert-dismissible">
                        //               <span class="close" data-dismiss="alert">&times;</span>
                        //               <p class="text-danger">Some error has occurred while uploading. Please try it again.</p>
                        //             </div>
                        //             <script type="text/javascript">
                        //               $("[name=\'pay\']").addClass("error");
                        //             </script>';   
                        // }
                    //}
                    //else
                    //{
                        /*echo '<div class="alert alert-danger alert-dismissible">
                                      <span class="close" data-dismiss="alert">&times;</span>
                                      <p class="text-danger">Invalid file type. Only JPG or JPEG formaats are allowed to upload.</p>
                                    </div>
                                    <script type="text/javascript">
                                       $("[name=\'pay\']").addClass("error");
                                    </script>';  */ 
                    //}
                }
                else if($_FILES['pay']['name'] == '')
                {
                    $randpswd=mt_rand(1001,9999);
                    $pswd="LPDM".$randpswd;
                    $checkpswd="select * from member;";
                    $pswdres=mysqli_query($connection,$checkpswd);
                    while($pswdrow=mysqli_fetch_assoc($pswdres))
                    {
                        if(password_verify($pswd,$pswdrow['Password']) == true)
                        {
                            $rpswd=mt_rand(1001,9999);
                            $regenpswd="LPDM".$rpswd;
                            $pswd=$regenpswd;
                        }
                    }
                    $hashedpswd=password_hash($pswd,PASSWORD_DEFAULT);
                    $dtj=date("d-m-Y");
                    $insdata="insert into member(MemberID,ReferalID,Legpos,Title,FirstName,LastName,EmailID,ContactNo,Password,DtofJoining,Bonus,CarryForward,PaymentReceived,BalAmt,Active)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
                    $stmt=mysqli_stmt_init($connection);
                    mysqli_stmt_prepare($stmt,$insdata);
                    mysqli_stmt_bind_param($stmt,"ssssssssssdiddi",$mid,$refid,$legpos,$title,$fname,$lname,$email,$conno,$hashedpswd,$dtj,$bonus,$carryfrwrd,$payrec,$balamt,$active);
                    
                    if(mysqli_stmt_execute($stmt))
                    {
                        $to=$email;
                        $from="career@motleyjobs.com";
                        $subject="You have joined successfully as a LIPID MKT Member.";
                        $message="Your Login ID: ".$mid."\n"."Your Password: ".$pswd;
                        $headers="From: ".$from."\nTo:".$to;
                        if(mail($to,$subject,$message,$headers))
                        {
                           echo '<div class="alert alert-success alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-success" style="font-weight:bold;">You have successfully joined a member!!</p>
                              <p class="text-success" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                        </div>
                        <script type="text/javascript">
                        $("form").trigger("reset");
                        $("[name=\'refid\']").val("'.$refid.'");
                        $("input").removeClass("error");
                        $("select").removeClass("error");
                        $("[name=\'joinsub\']").removeClass("joining");
                       $("[name=\'joinsub\']").text("JOIN");
                        </script>';   
                        }
                        else
                        {
                            echo '<div class="alert alert-danger alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-danger" style="font-weight:bold;">Member joined successfully, but failed to send mail to the member. Inform about ID and Password to the member manually.</p>
                              <p class="text-danger" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                        </div>
                        <script type="text/javascript">
                        $("form").trigger("reset");
                        $("[name=\'refid\']").val("'.$refid.'");
                        $("input").removeClass("error");
                        $("select").removeClass("error");
                        $("[name=\'joinsub\']").removeClass("joining");
                        $("[name=\'joinsub\']").text("JOIN");
                        </script>';
                        }
                    }
                    else
                    {
                        echo '<div class="alert alert-danger alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-danger" style="font-weight:bold;">Registered Failed</p>
                        </div>
                        <script>
                           $("[name=\'joinsub\']").removeClass("joining");
                           $("[name=\'joinsub\']").text("JOIN");
                        </script>';
                    }
                }
              }
            }
            else if($refrescheck == 1)
            {
                $refrow=mysqli_fetch_assoc($refres);
                if(strcmp($refrow['Legpos'],$legpos) == 0)
                {
                  echo '<div class="alert alert-danger alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-danger">This Referal ID has already a '.$legpos.'. Please select another leg position.</p>
                    </div>
                    <script type="text/javascript">
                       $("#legpos").addClass("error");
                       $("[name=\'joinsub\']").removeClass("joining");
                       $("[name=\'joinsub\']").text("JOIN");
                    </script>';
                }
                else
                {
                    $randid=mt_rand(100000001,999999999);
                    $mid="M".$randid;
                    $checkmid="select * from member;";
                    $midres=mysqli_query($connection,$checkmid);
                    while($midrow=mysqli_fetch_assoc($midres))
                    {
                        if($midrow['MemberID'] == $mid)
                        {
                            $rid=mt_rand(100000001,999999999);
                            $regenmid="M".$rid;
                            $mid=$regenmid;
                        }
                    }
                    if($_FILES['pay']['name'] != '')
                    {
                     $allowedfiletypes=array('jpg','jpeg');
                            if($filesize < 1048576)
                            {
                              $filenewname=uniqid($mid,true).'.'.$fileext;
                              $fileloc="scrshots/".$filenewname;
                              if(move_uploaded_file($filetmp,$fileloc))
                              {
                                    $randpswd=mt_rand(1001,9999);
                                    $pswd="LPDM".$randpswd;
                                    $checkpswd="select * from member;";
                                    $pswdres=mysqli_query($connection,$checkpswd);
                                    while($pswdrow=mysqli_fetch_assoc($pswdres))
                                    {
                                        if(password_verify($pswd,$pswdrow['Password']) == true)
                                        {
                                            $rpswd=mt_rand(1001,9999);
                                            $regenpswd="LPDM".$rpswd;
                                            $pswd=$regenpswd;
                                        }
                                    }
                                    $hashedpswd=password_hash($pswd,PASSWORD_DEFAULT);
                                    $dtj=date("d-m-Y");
                                    $insdata="insert into member(MemberID,ReferalID,Legpos,Title,FirstName,LastName,EmailID,ContactNo,Password,DtofJoining,Bonus,CarryForward,PaymentReceived,BalAmt,Active,FilePath)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
                                    $stmt=mysqli_stmt_init($connection);
                                    mysqli_stmt_prepare($stmt,$insdata);
                                    mysqli_stmt_bind_param($stmt,"ssssssssssdiddis",$mid,$refid,$legpos,$title,$fname,$lname,$email,$conno,$hashedpswd,$dtj,$bonus,$carryfrwrd,$payrec,$balamt,$active,$fileloc);
                                    
                                    if(mysqli_stmt_execute($stmt))
                                    {
                                        $to=$email;
                                        $from="career@motleyjobs.com";
                                        $subject="You have joined successfully as a LIPID MKT Member.";
                                        $message="Your Login ID: ".$mid."\n"."Your Password: ".$pswd;
                                        $headers="From: ".$from."\nTo:".$to;
                                        if(mail($to,$subject,$message,$headers))
                                        {
                                           echo '<div class="alert alert-success alert-dismissible">
                                              <span class="close" data-dismiss="alert">&times;</span>
                                              <p class="text-success" style="font-weight:bold;">You have successfully joined a member!!</p>
                                              <p class="text-success" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                                        </div>
                                        <script type="text/javascript">
                                        $("form").trigger("reset");
                                        $("[name=\'refid\']").val("'.$refid.'");
                                        $("input").removeClass("error");
                                        $("select").removeClass("error");
                                        $("[name=\'joinsub\']").removeClass("joining");
                                       $("[name=\'joinsub\']").text("JOIN");
                                        </script>';   
                                        }
                                        else
                                        {
                                            echo '<div class="alert alert-danger alert-dismissible">
                                              <span class="close" data-dismiss="alert">&times;</span>
                                              <p class="text-danger" style="font-weight:bold;">Member joined successfully, but failed to send mail to the member. Inform about ID and Password to the member manually.</p>
                                              <p class="text-danger" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                                        </div>
                                        <script type="text/javascript">
                                        $("form").trigger("reset");
                                        $("[name=\'refid\']").val("'.$refid.'");
                                        $("input").removeClass("error");
                                        $("select").removeClass("error");
                                        $("[name=\'joinsub\']").removeClass("joining");
                                       $("[name=\'joinsub\']").text("JOIN");
                                        </script>';
                                        }
                                    }
                                    else
                                    {
                                        echo '<div class="alert alert-danger alert-dismissible">
                                              <span class="close" data-dismiss="alert">&times;</span>
                                              <p class="text-danger" style="font-weight:bold;">Registered Failed</p>
                                        </div>
                                        <script>
                                            $("[name=\'joinsub\']").removeClass("joining");
                                           $("[name=\'joinsub\']").text("JOIN");
                                        </script>';
                                    }
                    }//move file
                    else
                    {
                        echo '<div class="alert alert-danger alert-dismissible">
                          <span class="close" data-dismiss="alert">&times;</span>
                          <p class="text-danger">File is not uploaded. Please try it again.</p>
                        </div>
                        <script type="text/javascript">
                           $("[name=\'pay\']").addClass("error");
                           $("[name=\'joinsub\']").removeClass("joining");
                           $("[name=\'joinsub\']").text("JOIN");
                        </script>';
                    }
                   }//file size
                    else
                    {
                        echo '<div class="alert alert-danger alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-danger">File size is too large, only files of 1MB or less than that are allowed to upload.</p>
                            </div>
                            <script type="text/javascript">
                               $("[name=\'pay\']").addClass("error");
                               $("[name=\'joinsub\']").removeClass("joining");
                               $("[name=\'joinsub\']").text("JOIN");
                            </script>';   
                    }
                  }
                  else if($_FILES['pay']['name'] == '')
                  {
                     $randpswd=mt_rand(1001,9999);
                    $pswd="LPDM".$randpswd;
                    $checkpswd="select * from member;";
                    $pswdres=mysqli_query($connection,$checkpswd);
                    while($pswdrow=mysqli_fetch_assoc($pswdres))
                    {
                        if(password_verify($pswd,$pswdrow['Password']) == true)
                        {
                            $rpswd=mt_rand(1001,9999);
                            $regenpswd="LPDM".$rpswd;
                            $pswd=$regenpswd;
                        }
                    }
                    $hashedpswd=password_hash($pswd,PASSWORD_DEFAULT);
                    $dtj=date("d-m-Y");
                    $insdata="insert into member(MemberID,ReferalID,Legpos,Title,FirstName,LastName,EmailID,ContactNo,Password,DtofJoining,Bonus,CarryForward,PaymentReceived,BalAmt,Active)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
                    $stmt=mysqli_stmt_init($connection);
                    mysqli_stmt_prepare($stmt,$insdata);
                    mysqli_stmt_bind_param($stmt,"ssssssssssdiddi",$mid,$refid,$legpos,$title,$fname,$lname,$email,$conno,$hashedpswd,$dtj,$bonus,$carryfrwrd,$payrec,$balamt,$active);
                    
                    if(mysqli_stmt_execute($stmt))
                    {
                        $to=$email;
                        $from="career@motleyjobs.com";
                        $subject="You have joined successfully as a LIPID MKT Member.";
                        $message="Your Login ID: ".$mid."\n"."Your Password: ".$pswd;
                        $headers="From: ".$from."\nTo:".$to;
                        if(mail($to,$subject,$message,$headers))
                        {
                           echo '<div class="alert alert-success alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-success" style="font-weight:bold;">You have successfully joined a member!!</p>
                              <p class="text-success" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                        </div>
                        <script type="text/javascript">
                        $("form").trigger("reset");
                        $("[name=\'refid\']").val("'.$refid.'");
                        $("input").removeClass("error");
                        $("select").removeClass("error");
                        $("[name=\'joinsub\']").removeClass("joining");
                       $("[name=\'joinsub\']").text("JOIN");
                        </script>';   
                        }
                        else
                        {
                            echo '<div class="alert alert-danger alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-danger" style="font-weight:bold;">Member joined successfully, but failed to send mail to the member. Inform about ID and Password to the member manually.</p>
                              <p class="text-danger" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                        </div>
                        <script type="text/javascript">
                        $("form").trigger("reset");
                        $("[name=\'refid\']").val("'.$refid.'");
                        $("input").removeClass("error");
                        $("select").removeClass("error");
                        $("[name=\'joinsub\']").removeClass("joining");
                        $("[name=\'joinsub\']").text("JOIN");
                        </script>';
                        }
                    }
                    else
                    {
                        echo '<div class="alert alert-danger alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-danger" style="font-weight:bold;">Registered Failed</p>
                        </div>
                        <script>
                        $("[name=\'joinsub\']").removeClass("joining");
                           $("[name=\'joinsub\']").text("JOIN");
                        </script>';
                    } 
                  }//file empty
                }//else reg
            }//res 1
            else if($refrescheck == 0)
            {
                    $randid=mt_rand(100000001,999999999);
                    $mid="M".$randid;
                    $checkmid="select * from member;";
                    $midres=mysqli_query($connection,$checkmid);
                    while($midrow=mysqli_fetch_assoc($midres))
                    {
                        if($midrow['MemberID'] == $mid)
                        {
                            $rid=mt_rand(100000001,999999999);
                            $regenmid="M".$rid;
                            $mid=$regenmid;
                        }
                    }
                    if($_FILES['pay']['name'] != '')
                    {
                     $allowedfiletypes=array('jpg','jpeg');
                     if($filesize < 1048576)
                     {
                      $filenewname=uniqid($mid,true).'.'.$fileext;
                      $fileloc="scrshots/".$filenewname;
                      if(move_uploaded_file($filetmp,$fileloc))
                      {
                            $randpswd=mt_rand(1001,9999);
                            $pswd="LPDM".$randpswd;
                            $checkpswd="select * from member;";
                            $pswdres=mysqli_query($connection,$checkpswd);
                            while($pswdrow=mysqli_fetch_assoc($pswdres))
                            {
                                if(password_verify($pswd,$pswdrow['Password']) == true)
                                {
                                    $rpswd=mt_rand(1001,9999);
                                    $regenpswd="LPDM".$rpswd;
                                    $pswd=$regenpswd;
                                }
                            }
                            $hashedpswd=password_hash($pswd,PASSWORD_DEFAULT);
                            $dtj=date("d-m-Y");
                            $insdata="insert into member(MemberID,ReferalID,Legpos,Title,FirstName,LastName,EmailID,ContactNo,Password,DtofJoining,Bonus,CarryForward,PaymentReceived,BalAmt,Active,FilePath)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
                            $stmt=mysqli_stmt_init($connection);
                            mysqli_stmt_prepare($stmt,$insdata);
                            mysqli_stmt_bind_param($stmt,"ssssssssssdiddis",$mid,$refid,$legpos,$title,$fname,$lname,$email,$conno,$hashedpswd,$dtj,$bonus,$carryfrwrd,$payrec,$balamt,$active,$fileloc);
                            
                            if(mysqli_stmt_execute($stmt))
                            {
                                $to=$email;
                                $from="career@motleyjobs.com";
                                $subject="You have joined successfully as a LIPID MKT Member.";
                                $message="Your Login ID: ".$mid."\n"."Your Password: ".$pswd;
                                $headers="From: ".$from."\nTo:".$to;
                                if(mail($to,$subject,$message,$headers))
                                {
                                   echo '<div class="alert alert-success alert-dismissible">
                                      <span class="close" data-dismiss="alert">&times;</span>
                                      <p class="text-success" style="font-weight:bold;">You have successfully joined a member!!</p>
                                      <p class="text-success" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                                </div>
                                <script type="text/javascript">
                                $("form").trigger("reset");
                                $("[name=\'refid\']").val("'.$refid.'");
                                $("input").removeClass("error");
                                $("select").removeClass("error");
                                $("[name=\'joinsub\']").removeClass("joining");
                               $("[name=\'joinsub\']").text("JOIN");
                                </script>';   
                                }
                                else
                                {
                                    echo '<div class="alert alert-danger alert-dismissible">
                                      <span class="close" data-dismiss="alert">&times;</span>
                                      <p class="text-danger" style="font-weight:bold;">Member joined successfully, but failed to send mail to the member. Inform about ID and Password to the member manually.</p>
                                      <p class="text-danger" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                                </div>
                                <script type="text/javascript">
                                $("form").trigger("reset");
                                $("[name=\'refid\']").val("'.$refid.'");
                                $("input").removeClass("error");
                                $("select").removeClass("error");
                                $("[name=\'joinsub\']").removeClass("joining");
                               $("[name=\'joinsub\']").text("JOIN");
                                </script>';
                                }
                            }
                            else
                            {
                                echo '<div class="alert alert-danger alert-dismissible">
                                      <span class="close" data-dismiss="alert">&times;</span>
                                      <p class="text-danger" style="font-weight:bold;">Registered Failed</p>
                                </div>
                                <script>
                                    $("[name=\'joinsub\']").removeClass("joining");
                                   $("[name=\'joinsub\']").text("JOIN");
                                   </script>';
                            }
                }
                else
                {
                    echo '<div class="alert alert-danger alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-danger">File is not uploaded. Please try it again.</p>
                    </div>
                    <script type="text/javascript">
                       $("[name=\'pay\']").addClass("error");
                      $("[name=\'joinsub\']").removeClass("joining");
                      $("[name=\'joinsub\']").text("JOIN");
                    </script>';
                }
              }
              else
                {
                    echo '<div class="alert alert-danger alert-dismissible">
                          <span class="close" data-dismiss="alert">&times;</span>
                          <p class="text-danger">File size is too large, only files of 1MB or less than that are allowed to upload.</p>
                        </div>
                        <script type="text/javascript">
                           $("[name=\'pay\']").addClass("error");
                           $("[name=\'joinsub\']").removeClass("joining");
                           $("[name=\'joinsub\']").text("JOIN");
                        </script>';   
                }
             }
             else if($_FILES['pay']['name'] == '')
             {
                    $randpswd=mt_rand(1001,9999);
                    $pswd="LPDM".$randpswd;
                    $checkpswd="select * from member;";
                    $pswdres=mysqli_query($connection,$checkpswd);
                    while($pswdrow=mysqli_fetch_assoc($pswdres))
                    {
                        if(password_verify($pswd,$pswdrow['Password']) == true)
                        {
                            $rpswd=mt_rand(1001,9999);
                            $regenpswd="LPDM".$rpswd;
                            $pswd=$regenpswd;
                        }
                    }
                    $hashedpswd=password_hash($pswd,PASSWORD_DEFAULT);
                    $dtj=date("d-m-Y");
                    $insdata="insert into member(MemberID,ReferalID,Legpos,Title,FirstName,LastName,EmailID,ContactNo,Password,DtofJoining,Bonus,CarryForward,PaymentReceived,BalAmt,Active)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
                    $stmt=mysqli_stmt_init($connection);
                    mysqli_stmt_prepare($stmt,$insdata);
                    mysqli_stmt_bind_param($stmt,"ssssssssssdiddi",$mid,$refid,$legpos,$title,$fname,$lname,$email,$conno,$hashedpswd,$dtj,$bonus,$carryfrwrd,$payrec,$balamt,$active);
                    
                    if(mysqli_stmt_execute($stmt))
                    {
                        $to=$email;
                        $from="career@motleyjobs.com";
                        $subject="You have joined successfully as a LIPID MKT Member.";
                        $message="Your Login ID: ".$mid."\n"."Your Password: ".$pswd;
                        $headers="From: ".$from."\nTo:".$to;
                        if(mail($to,$subject,$message,$headers))
                        {
                           echo '<div class="alert alert-success alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-success" style="font-weight:bold;">You have successfully joined a member!!</p>
                              <p class="text-success" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                        </div>
                        <script type="text/javascript">
                        $("form").trigger("reset");
                        $("[name=\'refid\']").val("'.$refid.'");
                        $("input").removeClass("error");
                        $("select").removeClass("error");
                        $("[name=\'joinsub\']").removeClass("joining");
                        $("[name=\'joinsub\']").text("JOIN");
                        </script>';   
                        }
                        else
                        {
                            echo '<div class="alert alert-danger alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-danger" style="font-weight:bold;">Member joined successfully, but failed to send mail to the member. Inform about ID and Password to the member manually.</p>
                              <p class="text-danger" style="font-weight:bold;">'.$gender.' ID is '.$mid.'</p>
                        </div>
                        <script type="text/javascript">
                        $("form").trigger("reset");
                        $("[name=\'refid\']").val("'.$refid.'");
                        $("input").removeClass("error");
                        $("select").removeClass("error");
                        $("[name=\'joinsub\']").removeClass("joining");
                        $("[name=\'joinsub\']").text("JOIN");
                        </script>';
                        }
                    }
                    else
                    {
                        echo '<div class="alert alert-danger alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-danger" style="font-weight:bold;">Registered Failed</p>
                        </div>
                        <script>
                          $("[name=\'joinsub\']").removeClass("joining");
                           $("[name=\'joinsub\']").text("JOIN");
                        </script>';
                    }
             }//file empty
            }//res 0
        }
    }
        
}
else if(isset($_POST['memsub']))
{
    include_once 'dbconfig.php';
    $refid=mysqli_real_escape_string($connection,$_POST['refid']);
   // $level=mysqli_real_escape_string($connection,$_POST['level']);
    $legpos=mysqli_real_escape_string($connection,$_POST['legpos']);
    $title=$_POST['title'];
    $fname=mysqli_real_escape_string($connection,$_POST['fname']);
    $lname=mysqli_real_escape_string($connection,$_POST['lname']);
    $email=mysqli_real_escape_string($connection,$_POST['email']);
    $conno='+91'.mysqli_real_escape_string($connection,$_POST['conno']);
    $pswd=mysqli_real_escape_string($connection,$_POST['pswd']);
    $cpswd=mysqli_real_escape_string($connection,$_POST['cpswd']);
    $hashedpswd=password_hash($cpswd,PASSWORD_DEFAULT);
    $qualif=mysqli_real_escape_string($connection,$_POST['qualif']);
    $country=mysqli_real_escape_string($connection,$_POST['country']);
    $state=mysqli_real_escape_string($connection,$_POST['state']);
    $city=mysqli_real_escape_string($connection,$_POST['city']);
    $addr=mysqli_real_escape_string($connection,$_POST['addr']);
    $adrno=mysqli_real_escape_string($connection,$_POST['adrno']);
    $panno=mysqli_real_escape_string($connection,$_POST['panno']);
    $bname=mysqli_real_escape_string($connection,$_POST['bname']);
    $brname=mysqli_real_escape_string($connection,$_POST['brname']);
    $ifsc=mysqli_real_escape_string($connection,$_POST['ifsc']);
    $accno=mysqli_real_escape_string($connection,$_POST['accno']);
    $nomname=mysqli_real_escape_string($connection,$_POST['nomname']);
    
if(empty($refid))
{
    echo '<div class="alert alert-danger alert-dismissible">
          <span class="close" data-dismiss="alert">&times;</span>
          <p class="text-danger">Referal ID is required</p>
    </div>
    <script type="text/javascript">
       $("#refid").addClass("error");
    </script>';
}
else if($refid != 'SPONSOR')
{
        $checkref="select * from member where MemberID='".$refid."';";
        $chkrefres=mysqli_query($connection,$checkref);
        $chkrefreschk=mysqli_num_rows($chkrefres);
    if($chkrefreschk < 1)
    {
        echo '<div class="alert alert-danger alert-dismissible">
          <span class="close" data-dismiss="alert">&times;</span>
          <p class="text-danger">Referal ID is Invalid</p>
    </div>
    <script type="text/javascript">
       $("#refid").addClass("error");
    </script>';
    }
    else if($legpos == 'SELECT LEG POSITION')
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Leg Position is required</p>
        </div>
        <script type="text/javascript">
           $("#legpos").addClass("error");
        </script>';
    }
    else if($title == 'SELECT TITLE')
    {
         echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Title is required</p>
        </div>
        <script type="text/javascript">
           $("#title").addClass("error");
        </script>';
    }
    /*else if(empty($level))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Level is required</p>
        </div>
        <script type="text/javascript">
           $("#level").addClass("error");
        </script>';
    }*/
    else if(empty($fname))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Firstname is required</p>
        </div>
        <script type="text/javascript">
           $("#fname").addClass("error");
        </script>';
    }
    else if(empty($lname))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Lastname is required</p>
        </div>
        <script type="text/javascript">
           $("#lname").addClass("error");
        </script>';
    }
    else if(empty($email))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Email ID is required</p>
        </div>
        <script type="text/javascript">
           $("#email").addClass("error");
        </script>';
    }
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL,FILTER_SANITIZE_EMAIL))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Enter a valid email address</p>
        </div>
        <script type="text/javascript">
           $("#email").addClass("error");
        </script>';
    }
    else if(empty($conno))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Contact No is required</p>
        </div>
        <script type="text/javascript">
           $("#conno").addClass("error");
        </script>';
    }
    else if(empty($pswd))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Password is required</p>
        </div>
        <script type="text/javascript">
           $("#pswd").addClass("error");
        </script>';
    }
    else if(empty($cpswd))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Confirm Password is required</p>
        </div>
        <script type="text/javascript">
           $("#cpswd").addClass("error");
        </script>';
    }
    else if($pswd != $cpswd)
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Password and Confirm Password should be same</p>
        </div>
        <script type="text/javascript">
           $("#pswd").addClass("error");
           $("#cpswd").addClass("error");
        </script>';
    }
    else if(empty($qualif))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Qualification is required</p>
        </div>
        <script type="text/javascript">
           $("#qualif").addClass("error");
        </script>';
    }
    else if(empty($country))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Country is required</p>
        </div>
        <script type="text/javascript">
           $("#country").addClass("error");
        </script>';
    }
    else if($state == 'SELECT STATE')
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">State is required</p>
        </div>
        <script type="text/javascript">
           $("#state").addClass("error");
        </script>';
    }
    else if(empty($city))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">City is required</p>
        </div>
        <script type="text/javascript">
           $("#city").addClass("error");
        </script>';
    }
    else if(empty($addr))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Address is required</p>
        </div>
        <script type="text/javascript">
           $("#city").addClass("error");
        </script>';
    }
    else if(empty($adrno))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Aadhar No is required</p>
        </div>
        <script type="text/javascript">
           $("#adrno").addClass("error");
        </script>';
    }
    else if(empty($panno))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">PAN No is required</p>
        </div>
        <script type="text/javascript">
           $("#panno").addClass("error");
        </script>';
    }
    else if(empty($bname))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Bank Name is required</p>
        </div>
        <script type="text/javascript">
           $("#bname").addClass("error");
        </script>';
    }
    else if(empty($brname))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Branch Name is required</p>
        </div>
        <script type="text/javascript">
           $("#brname").addClass("error");
        </script>';
    }
    else if(empty($ifsc))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">IFSC Code is required</p>
        </div>
        <script type="text/javascript">
           $("#ifsc").addClass("error");
        </script>';
    }
    else if(empty($accno))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Account No is required</p>
        </div>
        <script type="text/javascript">
           $("#accno").addClass("error");
        </script>';
    }
    else if(empty($nomname))
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Nominee Name is required</p>
        </div>
        <script type="text/javascript">
           $("#nomname").addClass("error");
        </script>';
    }
   // else if(!empty($refid))
    //{
    else
    {
        $errleg=false;
        $getrefdata="select * from member where ReferalID='".$refid."';";
        $refres=mysqli_query($connection,$getrefdata);
        $refrescheck=mysqli_num_rows($refres);
        if($refrescheck == 3)
        {
            echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">This Referal ID has already 3 members in it\'s downline. Please select another Ref ID.</p>
            </div>
            <script type="text/javascript">
               $("#refid").addClass("error");
            </script>';
        }
        else if($refrescheck < 3)
        {
            if($refrescheck == 2)
            {
                while($refrow=mysqli_fetch_assoc($refres))
                {
                    if(strcmp($refrow['Legpos'],$legpos) == 0)
                    {
                       $errleg=true; 
                    }
                }
                if($errleg == true)
                {
                    echo '<div class="alert alert-danger alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-danger">This Referal ID has already a '.$legpos.'. Please select another leg position.</p>
                    </div>
                    <script type="text/javascript">
                       $("#legpos").addClass("error");
                    </script>';
                }
                else
                {
                    $randid=mt_rand(100000001,999999999);
                    $mid="M".$randid;
                    $checkmid="select * from member;";
                    $midres=mysqli_query($connection,$checkmid);
                    while($midrow=mysqli_fetch_assoc($midres))
                    {
                        if($midrow['MemberID'] == $mid)
                        {
                            $rid=mt_rand(100000001,999999999);
                            $regenmid="M".$rid;
                            $mid=$regenmid;
                        }
                    }
                    $dtj=date("d-m-Y");
                    $insdata="insert into member(MemberID,ReferalID,Legpos,Title,FirstName,LastName,EmailID,ContactNo,Password,Qualification,Country,State,City,Address,AadharNo,PANNo,BankName,BranchName,IFSCcode,BankAccNo,NomineeName,DtofJoining,Bonus,CarryForward,PaymentReceived,BalAmt,Active)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
                    $stmt=mysqli_stmt_init($connection);
                    mysqli_stmt_prepare($stmt,$insdata);
                    mysqli_stmt_bind_param($stmt,"ssssssssssssssssssssssdiddi",$mid,$refid,$legpos,$title,$fname,$lname,$email,$conno,$hashedpswd,$qualif,$country,$state,$city,$addr,$adrno,$panno,$bname,$brname,$ifsc,$accno,$nomname,$dtj,$bonus,$carryfrwrd,$payrec,$balamt,$active);
                    
                    if(mysqli_stmt_execute($stmt))
                    {
                        $to=$email;
                        $from="career@motleyjobs.com";
                        $subject="You have registered successfully as a LPD MKT Member.";
                        $message="Your Login ID: ".$mid."\n"."Your Password: ".$cpswd;
                        $headers="From: ".$from."\nTo:".$to;
                        if(mail($to,$subject,$message,$headers))
                        {
                            echo '<div class="alert alert-success alert-dismissible">
                                  <span class="close" data-dismiss="alert">&times;</span>
                                  <p class="text-success" style="font-weight:bold;">Successfully Registered!!</p>
                                  <p class="text-success" style="font-weight:bold;">Your ID is '.$mid.'</p>
                            </div>
                            <script type="text/javascript">
                            document.getElementById(\'regform\').reset();
                            $("input").removeClass("error");
                            $("select").removeClass("error");
                            </script>';
                        }
                        else
                        {
                            echo '<div class="alert alert-danger alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-danger" style="font-weight:bold;">Successfully Registered, but failed to send mail.</p>
                      <p class="text-danger" style="font-weight:bold;">Your ID is '.$mid.'</p>
                        </div>
                        <script type="text/javascript">
                        document.getElementById(\'regform\').reset();
                        $("input").removeClass("error");
                        $("select").removeClass("error");
                        </script>';
                        }
                    }
                    else
                    {
                        echo '<div class="alert alert-danger alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-danger" style="font-weight:bold;">Registered Failed</p>
                        </div>';
                    }
                }
            }
            else if($refrescheck == 1)
            {
                $refrow=mysqli_fetch_assoc($refres);
                if(strcmp($refrow['Legpos'],$legpos) == 0)
                {
                  echo '<div class="alert alert-danger alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-danger">This Referal ID has already a '.$legpos.'. Please select another leg position.</p>
                    </div>
                    <script type="text/javascript">
                       $("#legpos").addClass("error");
                    </script>';
                }
                else
                {
                        $randid=mt_rand(100000001,999999999);
                    $mid="M".$randid;
                    $checkmid="select * from member;";
                    $midres=mysqli_query($connection,$checkmid);
                    while($midrow=mysqli_fetch_assoc($midres))
                    {
                        if($midrow['MemberID'] == $mid)
                        {
                            $rid=mt_rand(100000001,999999999);
                            $regenmid="M".$rid;
                            $mid=$regenmid;
                        }
                    }
                    $dtj=date("d-m-Y");
                    $insdata="insert into member(MemberID,ReferalID,Legpos,Title,FirstName,LastName,EmailID,ContactNo,Password,Qualification,Country,State,City,Address,AadharNo,PANNo,BankName,BranchName,IFSCcode,BankAccNo,NomineeName,DtofJoining,Bonus,CarryForward,PaymentReceived,BalAmt,Active)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
                    $stmt=mysqli_stmt_init($connection);
                    mysqli_stmt_prepare($stmt,$insdata);
                    mysqli_stmt_bind_param($stmt,"ssssssssssssssssssssssdiddi",$mid,$refid,$legpos,$title,$fname,$lname,$email,$conno,$hashedpswd,$qualif,$country,$state,$city,$addr,$adrno,$panno,$bname,$brname,$ifsc,$accno,$nomname,$dtj,$bonus,$carryfrwrd,$payrec,$balamt,$active);
                    
                    if(mysqli_stmt_execute($stmt))
                    {
                        $to=$email;
                        $from="career@motleyjobs.com";
                        $subject="You have registered successfully as a LPD MKT Member.";
                        $message="Your Login ID: ".$mid."\n"."Your Password: ".$cpswd;
                        $headers="From: ".$from."\nTo:".$to;
                        if(mail($to,$subject,$message,$headers))
                        {
                            echo '<div class="alert alert-success alert-dismissible">
                                  <span class="close" data-dismiss="alert">&times;</span>
                                  <p class="text-success" style="font-weight:bold;">Successfully Registered!!</p>
                                  <p class="text-success" style="font-weight:bold;">Your ID is '.$mid.'</p>
                            </div>
                            <script type="text/javascript">
                            document.getElementById(\'regform\').reset();
                            $("input").removeClass("error");
                            $("select").removeClass("error");
                            </script>';
                        }
                        else
                        {
                            echo '<div class="alert alert-danger alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-danger" style="font-weight:bold;">Successfully Registered, but failed to send mail.</p>
                      <p class="text-danger" style="font-weight:bold;">Your ID is '.$mid.'</p>
                        </div>
                        <script type="text/javascript">
                        document.getElementById(\'regform\').reset();
                        $("input").removeClass("error");
                        $("select").removeClass("error");
                        </script>';
                        }
                    }
                    else
                    {
                        echo '<div class="alert alert-danger alert-dismissible">
                              <span class="close" data-dismiss="alert">&times;</span>
                              <p class="text-danger" style="font-weight:bold;">Registered Failed..</p>
                        </div>';
                    }
                }
            }
            else if($refrescheck == 0)
            {
                    $randid=mt_rand(100000001,999999999);
                $mid="M".$randid;
                $checkmid="select * from member;";
                $midres=mysqli_query($connection,$checkmid);
                while($midrow=mysqli_fetch_assoc($midres))
                {
                    if($midrow['MemberID'] == $mid)
                    {
                        $rid=mt_rand(100000001,999999999);
                        $regenmid="M".$rid;
                        $mid=$regenmid;
                    }
                }
                $dtj=date("d-m-Y");
                $insdata="insert into member(MemberID,ReferalID,Legpos,Title,FirstName,LastName,EmailID,ContactNo,Password,Qualification,Country,State,City,Address,AadharNo,PANNo,BankName,BranchName,IFSCcode,BankAccNo,NomineeName,DtofJoining,Bonus,CarryForward,PaymentReceived,BalAmt,Active)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
                $stmt=mysqli_stmt_init($connection);
                mysqli_stmt_prepare($stmt,$insdata);
                mysqli_stmt_bind_param($stmt,"ssssssssssssssssssssssdiddi",$mid,$refid,$legpos,$title,$fname,$lname,$email,$conno,$hashedpswd,$qualif,$country,$state,$city,$addr,$adrno,$panno,$bname,$brname,$ifsc,$accno,$nomname,$dtj,$bonus,$carryfrwrd,$payrec,$balamt,$active);
                
                if(mysqli_stmt_execute($stmt))
                {
                    $to=$email;
                        $from="career@motleyjobs.com";
                        $subject="You have registered successfully as a LPD MKT Member.";
                        $message="Your Login ID: ".$mid."\n"."Your Password: ".$cpswd;
                        $headers="From: ".$from."\nTo:".$to;
                        if(mail($to,$subject,$message,$headers))
                        {
                            echo '<div class="alert alert-success alert-dismissible">
                                  <span class="close" data-dismiss="alert">&times;</span>
                                  <p class="text-success" style="font-weight:bold;">Successfully Registered!!</p>
                                  <p class="text-success" style="font-weight:bold;">Your ID is '.$mid.'</p>
                            </div>
                            <script type="text/javascript">
                            document.getElementById(\'regform\').reset();
                            $("input").removeClass("error");
                            $("select").removeClass("error");
                            </script>';
                        }
                        else
                        {
                            echo '<div class="alert alert-danger alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-danger" style="font-weight:bold;">Successfully Registered, but failed to send mail.</p>
                      <p class="text-danger" style="font-weight:bold;">Your ID is '.$mid.'</p>
                        </div>
                        <script type="text/javascript">
                        document.getElementById(\'regform\').reset();
                        $("input").removeClass("error");
                        $("select").removeClass("error");
                        </script>';
                        }
                }
                else
                {
                    echo '<div class="alert alert-danger alert-dismissible">
                          <span class="close" data-dismiss="alert">&times;</span>
                          <p class="text-danger" style="font-weight:bold;">Registered Failed</p>
                    </div>';
                }
            }
        }
    }
   }
    else if($refid == 'SPONSOR')
    {
        $activate=1;
        $chkst="select * from member where ReferalID='SPONSOR' and State='".$state."';";
        $chkstres=mysqli_query($connection,$chkst);
        $chkstreschk=mysqli_num_rows($chkstres);
        if($chkstreschk > 0)
        {
            echo '<div class="alert alert-danger alert-dismissible">
          <span class="close" data-dismiss="alert">&times;</span>
          <p class="text-danger">'.$state.' has already a Sponsor. So please select another state.</p>
            </div>
            <script type="text/javascript">
               $("#state").addClass("error");
            </script>';
        }
        else
        {
            $randid=mt_rand(100000001,999999999);
            $mid="M".$randid;
            $checkmid="select * from member;";
            $midres=mysqli_query($connection,$checkmid);
            while($midrow=mysqli_fetch_assoc($midres))
            {
                if($midrow['MemberID'] == $mid)
                {
                    $rid=mt_rand(100000001,999999999);
                    $regenmid="M".$rid;
                    $mid=$regenmid;
                }
            }
            $dtj=date("d-m-Y");
            $insdata="insert into member(MemberID,ReferalID,Title,FirstName,LastName,EmailID,ContactNo,Password,Qualification,Country,State,City,Address,AadharNo,PANNo,BankName,BranchName,IFSCcode,BankAccNo,NomineeName,DtofJoining,Bonus,CarryForward,PaymentReceived,BalAmt,Active)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($connection);
            mysqli_stmt_prepare($stmt,$insdata);
            mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssdiddi",$mid,$refid,$title,$fname,$lname,$email,$conno,$hashedpswd,$qualif,$country,$state,$city,$addr,$adrno,$panno,$bname,$brname,$ifsc,$accno,$nomname,$dtj,$bonus,$carryfrwrd,$payrec,$balamt,$activate);
            
            if(mysqli_stmt_execute($stmt))
            {
                        $to=$email;
                        $from="career@motleyjobs.com";
                        $subject="You have registered successfully as a LPD MKT Sponsor.";
                        $message="Your Login ID: ".$mid."\n"."Your Password: ".$cpswd;
                        $headers="From: ".$from."\nTo:".$to;
                        if(mail($to,$subject,$message,$headers))
                        {
                            echo '<div class="alert alert-success alert-dismissible">
                                  <span class="close" data-dismiss="alert">&times;</span>
                                  <p class="text-success" style="font-weight:bold;">Successfully Registered!!</p>
                                  <p class="text-success" style="font-weight:bold;">Your ID is '.$mid.'</p>
                            </div>
                            <script type="text/javascript">
                            document.getElementById(\'regform\').reset();
                            $("input").removeClass("error");
                            $("select").removeClass("error");
                            </script>';
                        }
                        else
                        {
                            echo '<div class="alert alert-danger alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-danger" style="font-weight:bold;">Successfully Registered, but failed to send mail.</p>
                      <p class="text-danger" style="font-weight:bold;">Your ID is '.$mid.'</p>
                        </div>
                        <script type="text/javascript">
                        document.getElementById(\'regform\').reset();
                        $("input").removeClass("error");
                        $("select").removeClass("error");
                        </script>';
                        }
            }
            else
            {
                echo '<div class="alert alert-danger alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-danger" style="font-weight:bold;">Registered Failed</p>
                </div>';
            }
        }
    }
   //}
   /*else
   {
       $randid=mt_rand(100000001,999999999);
            $mid="M".$randid;
            $checkmid="select * from member;";
            $midres=mysqli_query($connection,$checkmid);
            while($midrow=mysqli_fetch_assoc($midres))
            {
                if($midrow['MemberID'] == $mid)
                {
                    $rid=mt_rand(100000001,999999999);
                    $regenmid="M".$rid;
                    $mid=$regenmid;
                }
            }
            $dtj=date("d-m-Y");
            $insdata="insert into member(MemberID,FirstName,LastName,EmailID,ContactNo,Password,Qualification,Country,State,City,AadharNo,PANNo,BankName,BranchName,IFSCcode,BankAccNo,NomineeName,DtofJoining)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
            $stmt=mysqli_stmt_init($connection);
            mysqli_stmt_prepare($stmt,$insdata);
            mysqli_stmt_bind_param($stmt,"ssssssssssssssssss",$mid,$fname,$lname,$email,$conno,$hashedpswd,$qualif,$country,$state,$city,$adrno,$panno,$bname,$brname,$ifsc,$accno,$nomname,$dtj);
            
            if(mysqli_stmt_execute($stmt))
            {
                echo '<div class="alert alert-success alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-success" style="font-weight:bold;">Successfully Registered!!</p>
                      <p class="text-success" style="font-weight:bold;">Your ID is '.$mid.'</p>
                </div>
                <script type="text/javascript">
                document.getElementById(\'regform\').reset();
                $("input").removeClass("error");
                $("select").removeClass("error");
                </script>';
            }
            else
            {
                echo '<div class="alert alert-danger alert-dismissible">
                      <span class="close" data-dismiss="alert">&times;</span>
                      <p class="text-danger" style="font-weight:bold;">Registered Failed</p>
                </div>';
            }
   }*/
}
else
{
    header("Location:index.php");
    exit();
}
?>
</body>
</html>