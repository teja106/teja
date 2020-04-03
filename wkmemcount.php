<?php
include_once 'dbconfig.php';

    $memid=$_POST['memberid'];
    //$memid="M474585167";
    // $jdt=$_POST['jdt'];
    //print_r($joindt);
    $wknum=date("W");
    $lcount=0;
    $rcount=0;
    $pcount=0;
    function leftcount($id,$lgpos,$wkno)
    {
        global $connection;
        $getlcount="select * from member where ReferalID='".$id."' and Legpos='".$lgpos."';";
        $lcountres=mysqli_query($connection,$getlcount);
        $lcountrow=mysqli_fetch_assoc($lcountres);
        global $lcount;
        $jdt=$lcountrow['DtofJoining'];
        $date=new DateTime($jdt);
        $wknumber=$date->format("W");
             if($wknumber == $wkno)
             {
              $lcount+=mysqli_num_rows($lcountres);
             }
        if(!empty($lcountrow))
        {
          leftcount($lcountrow['MemberID'],"Left Leg - LLG",$wkno);
          leftcount($lcountrow['MemberID'],"Right Leg - RLG",$wkno);
          leftcount($lcountrow['MemberID'],"Parallel Leg - PLG",$wkno);
        }
        return $lcount;
    }
    leftcount($memid,"Left Leg - LLG",$wknum);
    echo $memid.'<br>';
    echo 'Left='.$lcount.'<br>';
    
    function rightcount($id,$lgpos,$wkno)
    {
        global $connection;
         $getrcount="select * from member where ReferalID='".$id."' and Legpos='".$lgpos."';";
        $rcountres=mysqli_query($connection,$getrcount);
        $rcountrow=mysqli_fetch_assoc($rcountres);
        //echo $lcountrow['MemberID'].'<br>';
        global $rcount;
        $jdt=$rcountrow['DtofJoining'];
        $date=new DateTime($jdt);
        $wknumber=$date->format("W");
        if($wknumber == $wkno)
        {
         $rcount+=mysqli_num_rows($rcountres);
        }
        //echo $lcount.'<br>';
        if(!empty($rcountrow))
        {
          rightcount($rcountrow['MemberID'],"Left Leg - LLG",$wkno);
          rightcount($rcountrow['MemberID'],"Right Leg - RLG",$wkno);
          rightcount($rcountrow['MemberID'],"Parallel Leg - PLG",$wkno);
        }
        return $rcount;
    }
    rightcount($memid,"Right Leg - RLG",$wknum);
    
    echo 'Right='.$rcount.'<br>';
    
    function prlcount($id,$lgpos,$wkno)
    {
        global $connection;
         $getpcount="select * from member where ReferalID='".$id."' and Legpos='".$lgpos."';";
        $pcountres=mysqli_query($connection,$getpcount);
        $pcountrow=mysqli_fetch_assoc($pcountres);
        //echo $lcountrow['MemberID'].'<br>';
        global $pcount;
        $jdt=$pcountrow['DtofJoining'];
        $date=new DateTime($jdt);
        $wknumber=$date->format("W");
        if($wknumber == $wkno)
        {
         $pcount+=mysqli_num_rows($pcountres);
        }
        //echo $lcount.'<br>';
        if(!empty($pcountrow))
        {
          prlcount($pcountrow['MemberID'],"Left Leg - LLG",$wkno);
          prlcount($pcountrow['MemberID'],"Right Leg - RLG",$wkno);
          prlcount($pcountrow['MemberID'],"Parallel Leg - PLG",$wkno);
        }
        return $pcount;
    }
    prlcount($memid,"Parallel Leg - PLG",$wknum);
    echo 'Parallel='.$pcount;
$checkpair="select * from member where ReferalID='".$memid."';";
$chkres=mysqli_query($connection,$checkpair);
$chkresnum=mysqli_num_rows($chkres);
if($chkresnum == 3)
{
    $getlgcnt="select * from member where MemberID='".$memid."';";
    $lgcntres=mysqli_query($connection,$getlgcnt);
    $lgcntrow=mysqli_fetch_assoc($lgcntres);
    echo 'fl='.$left=$lgcntrow['LeftCount'] - $lcount;
    echo 'fr='.$rgt=$lgcntrow['RightCount'] - $rcount;
    echo 'fp='.$prl=$lgcntrow['ParallelCount'] - $pcount;
    if($left > 0 and $rgt > 0 and $prl > 0)
    {
        $leftmem=$left - 1;
        $rightmem=($rgt+$prl)-2;
        $pair=400;
            if($leftmem == $rightmem)
            {
                $totpairs=$leftmem;
                echo 'Prcom= '.$paircommission=($totpairs*$pair)+$pair;
            }
            else if($leftmem > $rightmem)
            {
                $totpairs=$rightmem;
                echo 'Prcom= '.$paircommission=($totpairs*$pair)+$pair;
            }
            else if($leftmem < $rightmem)
            {
                $totpairs=$leftmem;
                echo 'Prcom= '.$paircommission=($totpairs*$pair)+$pair;    
            }
            echo 'WkCom= '.$wkcom=$lgcntrow['PairCommission'] - $paircommission;
    }
    else
    {
        echo 'Prcom= '.$paircommission=0;
        echo 'WkCom= '.$wkcom=$lgcntrow['PairCommission'] - $paircommission;
    }
}
else if($chkresnum < 3)
{
    $wkcom=0;
}
   $updatecnt="update member set WkLC=".$lcount.",WkRC=".$rcount.",WkPC=".$pcount.",WkPrCom=".$wkcom." where MemberID='".$memid."';";
   if(mysqli_query($connection,$updatecnt))
   {
       echo 'Query Success';
   }
   else
   {
       echo 'Query Failed'.mysqli_connect_error($connection);
   }
?>