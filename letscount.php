<?php
include_once 'dbconfig.php';
$sql="select MemberID from member;";
$result=mysqli_query($connection,$sql);
$memdata=array();
while($row=mysqli_fetch_assoc($result))
{
 array_push($memdata,$row['MemberID']);
}
print_r($memdata);
echo '<br>';
$i=1;
foreach($memdata as $data)
{
    echo $i.'. '.$data.'<br>';
    $i++;
}
// echo 'Count= '.$resultchk=mysqli_num_rows($result).'<br>';
for($j=0;count($memdata);$j++)
{
        echo $memid=$memdata[$j];
        $lcount=0;
        $rcount=0;
        $pcount=0;
        function leftcount($id,$lgpos)
        {
            global $connection;
             $getlcount="select * from member where ReferalID='".$id."' and Legpos='".$lgpos."' and Active=1;";
            $lcountres=mysqli_query($connection,$getlcount);
            $lcountrow=mysqli_fetch_assoc($lcountres);
            global $lcount;
            $lcount+=mysqli_num_rows($lcountres);
            if(!empty($lcountrow))
            {
              leftcount($lcountrow['MemberID'],"Left Leg - LLG");
              leftcount($lcountrow['MemberID'],"Right Leg - RLG");
              leftcount($lcountrow['MemberID'],"Parallel Leg - PLG");
            }
            return $lcount;
        }
        leftcount($memid,"Left Leg - LLG");
    
        echo 'Left='.$lcount.'<br>';
        
        function rightcount($id,$lgpos)
        {
            global $connection;
             $getrcount="select * from member where ReferalID='".$id."' and Legpos='".$lgpos."' and Active=1;";
            $rcountres=mysqli_query($connection,$getrcount);
            $rcountrow=mysqli_fetch_assoc($rcountres);
            global $rcount;
            $rcount+=mysqli_num_rows($rcountres);
            if(!empty($rcountrow))
            {
              rightcount($rcountrow['MemberID'],"Left Leg - LLG");
              rightcount($rcountrow['MemberID'],"Right Leg - RLG");
              rightcount($rcountrow['MemberID'],"Parallel Leg - PLG");
            }
            return $rcount;
        }
        rightcount($memid,"Right Leg - RLG");
        
        echo 'Right='.$rcount.'<br>';
        
        function prlcount($id,$lgpos)
        {
            global $connection;
             $getpcount="select * from member where ReferalID='".$id."' and Legpos='".$lgpos."' and Active=1;";
            $pcountres=mysqli_query($connection,$getpcount);
            $pcountrow=mysqli_fetch_assoc($pcountres);
            global $pcount;
            $pcount+=mysqli_num_rows($pcountres);
            if(!empty($pcountrow))
            {
              prlcount($pcountrow['MemberID'],"Left Leg - LLG");
              prlcount($pcountrow['MemberID'],"Right Leg - RLG");
              prlcount($pcountrow['MemberID'],"Parallel Leg - PLG");
            }
            return $pcount;
        }
        prlcount($memid,"Parallel Leg - PLG");
        
        echo 'Parallel='.$pcount;
        echo '<br>';
        
    $checkpair="select * from member where ReferalID='".$memid."' and Active=1;";
    $chkres=mysqli_query($connection,$checkpair);
    $chkresnum=mysqli_num_rows($chkres);
    if($chkresnum == 3)
    {
        $pair=400;
        $leftmem=$lcount-1;
        $right=$rcount-1;
        $parallel=$pcount-1;
        $rightmem=$right+$parallel;
        if($leftmem == $rightmem)
        {
          $totpairs=$leftmem;
          echo $paircommission=($totpairs*$pair)+$pair;
        }
        else if($leftmem > $rightmem)
        {
            $totpairs=$rightmem;
          echo  $paircommission=($totpairs*$pair)+$pair;
        }
        else if($leftmem < $rightmem)
        {
            $totpairs=$leftmem;
          echo $paircommission=($totpairs*$pair)+$pair;    
        }
        echo '<br>';
        echo $paircount=$totpairs+1;
        echo '<br>';
    }
    else if($chkresnum < 3)
    {
      echo  $paircount=0;
      echo '<br>';
        echo $paircommission=0;
    }
}
//       $updatecnt="update member set LeftCount=".$lcount.",RightCount=".$rcount.",ParallelCount=".$pcount.",Totpairs=".$paircount.",PairCommission=".$paircommission." where MemberID='".$memid."';";
//   mysqli_query($connection,$updatecnt);
//   {
//       echo 'Query Success';
//   }
//   else
//   {
//       echo 'Query Failed';
//   }

?>