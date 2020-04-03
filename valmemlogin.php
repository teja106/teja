<?php
if(isset($_POST['adminlogsub']))
{
    session_start();
 $uid=$_POST['uid'];
 $pswd=$_POST['pswd'];
    if(empty($uid))
    {
        echo '<script>
          document.getElementById("uidmsg").innerHTML="User ID is required";
          document.getElementById("uidmsg").style.color="red";
          
          $("#adminlogsub").text("LOGIN");
          $("#adminlogsub").removeClass("authenticate");
          $("#adminlogsub").addClass("btn btn-success");
        </script>';
    }
    else if(empty($pswd))
    {
        echo '<script>
          document.getElementById("pswdmsg").innerHTML="Password is required";
          document.getElementById("pswdmsg").style.color="red";
          
          $("#adminlogsub").text("LOGIN");
          $("#adminlogsub").removeClass("authenticate");
          $("#adminlogsub").addClass("btn btn-success");
        </script>';
    }
    else
    {
        if($uid != "LIPIDMKT")
        {
            echo '<script>
          document.getElementById("uidmsg").innerHTML="Invalid User ID";
          document.getElementById("uidmsg").style.color="red";
          
          $("#adminlogsub").text("LOGIN");
          $("#adminlogsub").removeClass("authenticate");
          $("#adminlogsub").addClass("btn btn-success");
        </script>';
        }
        else if($pswd != "admin123")
        {
                    echo '<script>
          document.getElementById("pswdmsg").innerHTML="Invalid Password";
          document.getElementById("pswdmsg").style.color="red";
          
          $("#adminlogsub").text("LOGIN");
          $("#adminlogsub").removeClass("authenticate");
          $("#adminlogsub").addClass("btn btn-success");
        </script>';
        }
        else
        {
            echo $uid;
        }
    }
}
else if(isset($_POST['memlogsub']))
{
    session_start();
    include_once 'dbconfig.php';
 $uid=$_POST['uid'];
 $pswd=$_POST['pswd'];
    if(empty($uid))
    {
        echo '<script>
          document.getElementById("uidmsg").innerHTML="User ID is required";
          document.getElementById("uidmsg").style.color="red";
          
          $("#memlogsub").text("LOGIN");
          $("#memlogsub").removeClass("authenticate");
          $("#memlogsub").addClass("btn btn-success");
        </script>';
    }
    else if(empty($pswd))
    {
        echo '<script>
          document.getElementById("pswdmsg").innerHTML="Password is required";
          document.getElementById("pswdmsg").style.color="red";
          
          $("#memlogsub").text("LOGIN");
          $("#memlogsub").removeClass("authenticate");
          $("#memlogsub").addClass("btn btn-success");
        </script>';
    }
    else
    {
        $checkuid="select * from member where MemberID='$uid';";
        $uidres=mysqli_query($connection,$checkuid);
        $rescheck=mysqli_num_rows($uidres);
        if($rescheck < 1)
        {
             echo '<script>
          document.getElementById("uidmsg").innerHTML="User ID is invalid";
          document.getElementById("uidmsg").style.color="red";
          
          $("#memlogsub").text("LOGIN");
          $("#memlogsub").removeClass("authenticate");
          $("#memlogsub").addClass("btn btn-success");
        </script>';
        }
        else if($row=mysqli_fetch_assoc($uidres))
        {
            $pswdcheck=password_verify($pswd,$row['Password']);
            if($pswdcheck == false)
            {
                echo '<script>
                  document.getElementById("pswdmsg").innerHTML="Password is invalid";
                  document.getElementById("pswdmsg").style.color="red";
                  
                  $("#memlogsub").text("LOGIN");
                  $("#memlogsub").removeClass("authenticate");
                  $("#memlogsub").addClass("btn btn-success");
                </script>';
            }
            else if($pswdcheck == true)
            {
                echo $uid;
            }
        }
    }
}
else
{
    header("Location:index.php");
    exit();
}
?>