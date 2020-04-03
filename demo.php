<?php
include_once 'dbconfig.php';
?>
<html>
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
include_once 'dbconfig.php';
$sql="select * from member;";
$result=mysqli_query($connection,$sql);
$resultcheck=mysqli_num_rows($result);
$timesec=$resultcheck*5;
$timems=$timesec*1000;
// $sql="select MemberID from member;";
// $result=mysqli_query($connection,$sql);
// $memdata=array();
// while($row=mysqli_fetch_assoc($result))
// {
//  array_push($memdata,$row['MemberID']);
// }var time='.$timems.';
while($row=mysqli_fetch_assoc($result))
{
    echo '<script type="text/javascript">
        $(document).ready(function(){
        var memid="'.$row['MemberID'].'";
        $.ajax({
              url:"countmem.php",
              type:"POST",
              data:{memid:memid},
              async:false,
              success:function(result,status,xhr){
                  if(status == "success")
                  {
                      console.log(status);
                      console.log(result);
                      $("body").html(result);
                  }
              }
           });
       });
   </script>';
}
?>
</body>
</html>