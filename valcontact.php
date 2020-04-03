<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];
if(empty($name)){
    header('Location:contactus.php?empty=name');
    exit();
}
elseif(empty($email)){
    header('Location:contactus.php?empty=email');
    exit();
}
elseif(empty($mobile)){
    header('Location:contactus.php?empty=mobile');
    exit();
}
elseif(empty($message)){
    header('Location:contactus.php?empty=message');
    exit();
}
else{
        $to_mail="rohitdevsarena@gmail.com";
        $subject = "Mail from Contact US Form";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= "From: $name<$email>". "\r\n";
        //Multiple CC can be added, if we need (comma separated);
        $headers .= 'Cc: sekhar@lipidmarketingllp.com' . "\r\n";
            if(mail($to_mail,$subject,$message,$headers)){
                header('Location:contactus.php?mailsent=success');
                exit();
            }
            else{
                header('Location:contactus.php?mailsent=failed');
                exit();
            }
}
}
else{
    header('Location:contactus.php');
    exit();
}
?>