<?php
if(isset($_POST['sub']))
{
    include_once 'dbconfig.php';
    
    $memid=$_POST['memid'];
    $revno=$_POST['revno'];
    $invst=$_POST['invst'];
    $invstcode=$_POST['invstcode'];
    $transmode=$_POST['transmode'];
    $vehno=$_POST['vehno'];
    $dtsup=$_POST['dtsup'];
    $plsup=$_POST['plsup'];
    $bname=$_POST['bname'];
    $bgst=$_POST['bgst'];
    $baddr=$_POST['baddr'];
    $bstcode=$_POST['bstcode'];
    $bstate=$_POST['bstate'];
    $sname=$_POST['sname'];
    $sgst=$_POST['sgst'];
    $saddr=$_POST['saddr'];
    $sstcode=$_POST['sstcode'];
    $sstate=$_POST['sstate'];
    $itemcode1=$_POST['itemcode1'];
    $quan1=$_POST['quan1'];
    $amt1=$_POST['amt1'];
    $itemcode2=$_POST['itemcode2'];
    $quan2=$_POST['quan2'];
    $amt2=$_POST['amt2'];
    $totamt=$_POST['totamt'];
    
    $items=array($itemcode1,$itemcode2);
    $quan=array($quan1,$quan2);
    $amt=array($amt1,$amt2);
    
    $totgstamt=0;
    if($transmode == 'SELECT TRANSPORTATION MODE')
    {
        echo '<div class="alert alert-danger alert-dismissible">
              <span class="close" data-dismiss="alert">&times;</span>
              <p class="text-danger">Email ID is required</p>
        </div>
        <script type="text/javascript">
           $("[name=\'transmode\']").addClass("error");
        </script>';
    }
    else
    {
    $randinv=mt_rand(1000000001,9999999999);
    $sql="select * from invoice;";
    $result=mysqli_query($connection,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        if($randinv == $row['InvNo'])
        {
            $regenrandinv=mt_rand(1000000001,9999999999);
            $randinv=$regenrandinv;
        }
    }
    $invdt=date("d-m-Y");
    for($i=0;$i<count($items);$i++)
    {
        $getitem="select * from binitems where ItemCode='".$items[$i]."';";
        $itemres=mysqli_query($connection,$getitem);
        $itemrow=mysqli_fetch_assoc($itemres);
        
        $itemgstpercent=$itemrow['GST'];
        
        $itemgstamt=($itemgstpercent/100)*$amt[$i];
        
        $totgstamt+=$itemgstamt;
        
        if(strcmp($invst,$bstate) == 0)
        {
            $csgst=$totgstamt/2;
            $igst=0;
        }
        else if(strcmp($invst,$bstate) != 0)
        {
            $igst=$totgstamt;
            $csgst=0;
        }
        $amtwithtax=ceil($totamt+$totgstamt);
        $icode=$items[$i];
        $iquan=$quan[$i];
        $iamt=$amt[$i];
        $insinv="insert into invoice(InvNo,Invto,RevNo,InvDt,InvState,InvStCode,TransMode,VehNo,DtofSup,PlofSup,Bname,Bgst,Baddr,BstCode,Bstate,Sname,Shgst,Saddr,SstCode,Sstate,ItemCode,Quantity,Amount,TotInvAmt,GST,CGST,SGST,IGST,AmtWithTax)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_prepare($stmt,$insinv);
        mysqli_stmt_bind_param($stmt,"sssssssssssssssssssssiddddddd",$randinv,$memid,$revno,$invdt,$invst,$invstcode,$transmode,$vehno,$dtsup,$plsup,$bname,$bgst,$baddr,$bstcode,$bstate,$sname,$sgst,$saddr,$sstcode,$sstate,$icode,$iquan,$iamt,$totamt,$totgstamt,$csgst,$csgst,$igst,$amtwithtax);

        if(mysqli_stmt_execute($stmt))
        {
            $invsent=1;
        }
        else
        {
            $invsent=0;
        }
    }
    
    if($invsent == 1)
    {
        $invupdate="update invoice set GST='".$totgstamt."',CGST='".$csgst."',SGST='".$csgst."',IGST='".$igst."',AmtWithTax='".$amtwithtax."' where InvNo='".$randinv."';";
        $actupdate="update member set Active=1 where MemberID='".$memid."';";
        if(mysqli_query($connection,$actupdate) and mysqli_query($connection,$invupdate))
        {
            $sql="select * from member;";
            $result=mysqli_query($connection,$sql);
            $resultcheck=mysqli_num_rows($result);
            $timesec=$resultcheck*2;
            $timems=$timesec*1000;
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
                          }
                      }
                   });
                   });
                </script>';
            }
           echo '<div class="alert alert-success alert-dismissible">
          <span class="close" data-dismiss="alert">&times;</span>
          <p class="text-success">Invoice has been sent successfully and the member is activated. Invoice No: '.$randinv.'</p>
         </div>';
        }
        else
        {
            echo '<div class="alert alert-danger alert-dismissible">
          <span class="close" data-dismiss="alert">&times;</span>
          <p class="text-danger">Invoice has been sent successfully, but the member is not activated. Invoice No: '.$randinv.'</p>
         </div>';
        }
    }
    else if($invsent == 0)
    {
        echo '<div class="alert alert-danger alert-dismissible">
          <span class="close" data-dismiss="alert">&times;</span>
          <p class="text-danger">Failed to send Invoice. Please try again.</p>
         </div>';
    }
  }
}
else if(isset($_POST['itemcode1']) || isset($_POST['itemcode2']))
{
    include_once 'dbconfig.php';
    $item1=$_POST['itemcode1'];
    $item2=$_POST['itemcode2'];
    
    $sql="select * from binitems where ItemCode='".$item1."' or ItemCode='".$item2."';";
    $result=mysqli_query($connection,$sql);
    $row=mysqli_fetch_assoc($result);
    echo json_encode($row);
}
else if(isset($_POST['itemsub']))
{
    include_once 'dbconfig.php';
    
    $iname=$_POST['item'];
    $up=$_POST['up'];
    $wt=$_POST['wt'];
    $units=$_POST['units'];
    $hsn=$_POST['hsn'];
    $gst=$_POST['gst'];
    if(empty($wt) || empty($iname) || empty($units) || empty($hsn) || empty($gst))
    {
        echo '
         <div class="alert alert-danger alert-dismissible">
          <span class="close" data-dismiss="alert">&times;</span>
          <p class="text-danger">Please fill all the fields.</p>
         </div>
        ';
    }
    else
    {
        $rand=mt_rand(1000000001,9999999999);
        $codecheck="select * from binitems";
        $codereschk=mysqli_query($connection,$codecheck);
        while($coderow=mysqli_fetch_assoc($codereschk))
        {
            if($rand == $coderow['ItemCode'])
            {
                $regenrand=mt_rand(1000000001,9999999999);
                $rand=$regenrand;
            }
        }
        $sql="insert into binitems(ItemCode,ItemDescription,UnitPrice,Weight,Units,HSNACS,GST)values(?,?,?,?,?,?,?);";
        $stmt=mysqli_stmt_init($connection);
        mysqli_stmt_prepare($stmt,$sql);
        mysqli_stmt_bind_param($stmt,"ssdsssi",$rand,$iname,$up,$wt,$units,$hsn,$gst);
        if(mysqli_stmt_execute($stmt))
        {
          echo '
         <div class="alert alert-success alert-dismissible">
          <span class="close" data-dismiss="alert">&times;</span>
          <p class="text-success">Item has been added successfully!!</p>
         </div>
         <script>
           location.reload(true);
         </script>';  
        }
        else
        {
            echo '<div class="alert alert-danger alert-dismissible">
          <span class="close" data-dismiss="alert">&times;</span>
          <p class="text-danger">Please try again</p>
         </div>';
        }
    }
}
?>