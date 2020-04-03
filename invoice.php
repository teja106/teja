<?php
include_once 'dbconfig.php';
$memid=$_POST['memid'];
//$memid="M147740852";
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$pdf=new Dompdf();

$getinv="select * from invoice where Invto='".$memid."';";
$invres=mysqli_query($connection,$getinv);
$invrow=mysqli_fetch_assoc($invres);

$html='
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css" media="all">
     *
     {
         margin:0;
         padding:0;
         box-sizing:border-box;
         font-family:Helvetica;
     }
     html,body
     {
         width:100%;
         height:100%;
     }
     body
     {
         position:relative;
         padding:30px;
     }
     #initbox
     {
         position:absolute;
         width:100%;
         height:100%;
         border:5px double black;
         border-radius:8px;
     }
     #header
     {
         width:100%;
         height:120px;
         padding:5px;
         border-top-left-radius:8px;
         border-top-right-radius:8px;
         border-bottom:1px solid black;
     }
     #box1
     {
         width:100%;
         height:auto;
         border-bottom:1px solid black;
     }
     #box2
     {
         width:100%;
         height:auto;
         border-bottom:1px solid black;
     }
     #box3
     {
         width:100%;
         height:auto;
         border-bottom:1px solid black;
     }
     #box3 table th:nth-child(even)
     {
         background:#f9f9f9;
     }
     #box3 table td:nth-child(even)
     {
         background:#f9f9f9;
     }
     #box3 table thead th     
     {
         font-size:12px;
         text-align:center;
         padding:5px;
     }
     #box3 table td
     {
         font-size:11px;
         text-align:center;
         padding:5px 0px 5px;
     }
     #box4
     {
         width:100%;
         height:auto;
         border-bottom:1px solid black;
     }
     #box4 table thead th
     {
         font-size:12px;
         text-align:center;
         padding:5px;
     }
     #box4 #tb1 table td
     {
         font-size:11px;
         text-align:center;
         padding:5px 0px 5px;
     }
     #box4 #tb2 table td
     {
         font-size:11px;
         text-align:center;
         padding:6px 0px 6px;
     }
     #box4 #tb1 table th:nth-child(even)
     {
         background:#f9f9f9;
     }
     #box4 #tb1 table td:nth-child(even)
     {
         background:#f9f9f9;
     }
     #box1 table tr td table td
     {
       font-size:11px;
       padding:6px 0px 6px;
     }
     #box2 table tr td table td
     {
       font-size:12px;
       padding:6px 0px 6px;
     }
     #maintb1 #tb1 td
     {
         padding-left:10px;
     }
     #maintb1 #tb2 td
     {
         padding-left:10px;
     }
    </style>
</head>
<body>
  <div id="initbox">
     <div id="header" style="text-align:center;">
        <span style="position:absolute;left:5px;">GSTIN : 37AAIFL3253A1ZN</span>
        <span style="position:absolute;right:5px;">Ph: 9704820002</span><br>
        <h1 style="padding:10px;">LIPID MARKETING LLP</h1>
        <p style="font-size:14px;">
          Ground Floor, 3-2, Rajani Enclave, Surya Rao Pet,<br>
          Vishnu Vardhan Street, Vijayawada - 520002.
        </p>
     </div>
     <div id="box1" style="">
     <table id="maintb1" style="width:100%;" cellpadding="0" cellspacing="0">
       <tr>
        <td id="td1" style="">
       <table id="tb1" style="width:100%;border-right:1px solid black;">
         <tr>
           <td style="">
             Invoice No
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['InvNo'].'</td>
         </tr>
         <tr>
           <td>
             Invoice Date
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['InvDt'].'</td>
         </tr>
          <tr>
           <td>
             Reverse Charge No.
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['RevNo'].'</td>
         </tr>
         <tr>
           <td>
             State
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['InvState'].'</td>
         </tr>
         <tr>
           <td>
             State Code
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['InvStCode'].'</td>
         </tr>
       </table>
       </td>
       <td style="">
       <table id="tb2" style="width:100%;">
         <tr>
           <td style="">
             Transportation Mode
           </td>
           <td>
             :
           </td>
           <td>'.strtoupper($invrow['TransMode']).'</td>
         </tr>
         <tr>
           <td>
             Vehicle Number
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['VehNo'].'</td>
         </tr>
          <tr>
           <td>
             Date of Supply
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['DtofSup'].'</td>
         </tr>
         <tr>
           <td>
             Place of Supply
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['PlofSup'].'</td>
         </tr>
         <tr style="visibility:hidden;">
           <td>
             jkfdjkf
           </td>
           <td>
            :
           </td>
           <td>
           7634857
           </td>
         </tr>
       </table>
       </td>
       </tr>
       </table>
     </div>
     
     <div id="box2">
     <table id="maintb1" style="width:100%;" cellpadding="0" cellspacing="0">
       <tr>
        <td id="td1" style="">
       <table id="tb1" style="width:100%;border-right:1px solid black;">
         <tr>
           <td style="font-weight:bold;" colspan="3">
             Details of Receiver / Billed to:
           </td>
         </tr>
         <tr>
           <td style="">
             Name
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['Bname'].'</td>
         </tr>
         <tr>
           <td>
             Address
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['Baddr'].'</td>
         </tr>
          <tr>
           <td>
             GSTIN
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['Bgst'].'</td>
         </tr>
         <tr>
           <td>
             State
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['Bstate'].'</td>
         </tr>
         <tr>
           <td>
             State Code
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['BstCode'].'</td>
         </tr>
       </table>
       </td>
       <td style="">
       <table id="tb2" style="width:100%;">
         <tr>
           <td style="font-weight:bold;" colspan="3">
             Details of Consignee / Shipped to:
           </td>
         </tr>
         <tr>
           <td style="">
             Name
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['Sname'].'</td>
         </tr>
         <tr>
           <td>
             Address
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['Saddr'].'</td>
         </tr>
          <tr>
           <td>
             GSTIN
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['Shgst'].'</td>
         </tr>
         <tr>
           <td>
             State
           </td>
           <td>
             :
           </td>
           <td>'.$invrow['Sstate'].'</td>
         </tr>
         <tr>
           <td>
             State Code
           </td>
           <td>
            :
           </td>
           <td>'.$invrow['SstCode'].'</td>
         </tr>
       </table>
       </td>
       </tr>
       </table>
     </div>
     
     <div id="box3">
       <table style="width:100%;">
       <thead style="">
        <tr style="border-bottom:1px solid black;">
          <th style="">Sno</th>
          <th>Product Name</th>
          <th>HSN ACS</th>
          <th>Quantity</th>
          <th>Unit Price</th>
          <th>Taxable Value</th>
          <th>GST %</th>
          <th>GST Amount</th>
          <th>Total</th>
        </tr>
       </thead>
       <tbody>';
       $i=1;
       $grosstot0='0.00';
     $grosstot5='0.00';$taxtot5='0.00';$csgst5='0.00';
     $grosstot12='0.00';$taxtot12='0.00';$csgst12='0.00';
     $grosstot18='0.00';$taxtot18='0.00';$csgst18='0.00';
     $grosstot28='0.00';$taxtot28='0.00';$csgst28='0.00';
       $getitems="select * from invoice where Invto='".$memid."';";
       $itemsres=mysqli_query($connection,$getitems);
       while($itemsrow=mysqli_fetch_assoc($itemsres))
       {
           $getiteminfo="select * from binitems where ItemCode='".$itemsrow['ItemCode']."';";
           $iteminfores=mysqli_query($connection,$getiteminfo);
           $iteminforow=mysqli_fetch_assoc($iteminfores);
           $taxableval=$itemsrow['Quantity']*$iteminforow['UnitPrice'];
           $itemgst=($iteminforow['GST']/100)*$taxableval;
           $tot=$taxableval+$itemgst;
         $html.= '<tr style="border-bottom:1px solid black;">
           <td>'.$i.'</td>
           <td>'.$iteminforow['ItemDescription'].'</td>
           <td>'.$iteminforow['HSNACS'].'</td>
           <td>'.$itemsrow['Quantity'].'</td>
           <td>Rs. '.$iteminforow['UnitPrice'].'</td>
           <td>Rs. '.$taxableval.'</td>
           <td>'.$iteminforow['GST'].'</td>
           <td>Rs. '.$itemgst.'</td>
           <td>Rs. '.$tot.'</td>
         </tr>';
         if($iteminforow['GST'] == 0)
         {
          $grosstot0+=$itemsrow['Quantity']*$iteminforow['UnitPrice'];
         }
         else if($iteminforow['GST'] == 5)
         {
             $grosstot5+=$itemsrow['Quantity']*$iteminforow['UnitPrice'];
             $taxtot5=($iteminforow['GST']/100)*$grosstot5;
             $csgst5=round(($taxtot5/2),2);
         }
         else if($iteminforow['GST'] == 12)
         {
             $grosstot12+=$itemsrow['Quantity']*$iteminforow['UnitPrice'];
             $taxtot12=($iteminforow['GST']/100)*$grosstot12;
             $csgst12=round(($taxtot12/2),2);
         }
         else if($iteminforow['GST'] == 18)
         {
             $grosstot18+=$itemsrow['Quantity']*$iteminforow['UnitPrice'];
             $taxtot18=($iteminforow['GST']/100)*$grosstot18;
             $csgst18=round(($taxtot18/2),2);
         }
         else if($iteminforow['GST'] == 28)
         {
             $grosstot28+=$itemsrow['Quantity']*$iteminforow['UnitPrice'];
             $taxtot28=($iteminforow['GST']/100)*$grosstot28;
             $csgst28=round(($taxtot28/2),2);
         } 
         $i++;
       }
      $html.='</tbody>
       </table>
     </div>
     <div id="box4" style="height:155px;">
       <div id="tb1" style="float:left;width:50%;border-right:1px solid black;">
         <table style="width:100%;">
              <thead>
                <tr>
                 <th>Tax %</th>
                 <th>Gross Total</th>
                 <th>SGST</th>
                 <th>CGST</th>
                 <th>Tax Total</th>
                </tr>
              </thead>
              <tbody>
               <tr>
                 <td>0%</td>
                 <td>Rs. '.$grosstot0.'</td>
                 <td>Rs. 0.00</td>
                 <td>Rs. 0.00</td>
                 <td>Rs. 0.00</td>
               </tr>
               <tr>
                 <td>5%</td>
                 <td>Rs. '.$grosstot5.'</td>
                 <td>Rs. '.$csgst5.'</td>
                 <td>Rs. '.$csgst5.'</td>
                 <td>Rs. '.$taxtot5.'</td>
               </tr>
               <tr>
                 <td>12%</td>
                 <td>Rs. '.$grosstot12.'</td>
                 <td>Rs. '.$csgst12.'</td>
                 <td>Rs. '.$csgst12.'</td>
                 <td>Rs. '.$taxtot12.'</td>
               </tr>
               <tr>
                 <td>18%</td>
                 <td>Rs. '.$grosstot18.'</td>
                 <td>Rs. '.$csgst18.'</td>
                 <td>Rs. '.$csgst18.'</td>
                 <td>Rs. '.$taxtot18.'</td>
               </tr>
               <tr>
                 <td>28%</td>
                 <td>Rs. '.$grosstot28.'</td>
                 <td>Rs. '.$csgst28.'</td>
                 <td>Rs. '.$csgst28.'</td>
                 <td>Rs. '.$taxtot28.'</td>
               </tr>
              </tbody>
         </table>
       </div>
       <div id="tb2" style="float:left;width:50%;">
         <table style="width:100%;">
                <tr>
                 <td>Total Amount before tax</td>
                 <td>:</td>
                 <td>Rs. '.$invrow['TotInvAmt'].'</td>
                 </tr>
                 <tr>
                 <td>Add SGST</td>
                 <td>:</td>
                 <td>Rs. '.$invrow['SGST'].'</td>
                 </tr>
                 <tr>
                 <td>Add CGST</td>
                 <td>:</td>
                 <td>Rs. '.$invrow['CGST'].'</td>
                 </tr>
                 <tr>
                 <td>Add IGST</td>
                 <td>:</td>
                 <td>Rs. '.$invrow['IGST'].'</td>
                </tr>
                 <tr>
                 <td>Total Amount after tax</td>
                 <td>:</td>
                 <td>Rs. '.$invrow['AmtWithTax'].'</td>
                </tr>
         </table>
       </div>
     </div>';
function numberTowords($num)
{ 
    $ones = array( 
    1 => "one", 
    2 => "two", 
    3 => "three", 
    4 => "four", 
    5 => "five", 
    6 => "six", 
    7 => "seven", 
    8 => "eight", 
    9 => "nine", 
    10 => "ten", 
    11 => "eleven", 
    12 => "twelve", 
    13 => "thirteen", 
    14 => "fourteen", 
    15 => "fifteen", 
    16 => "sixteen", 
    17 => "seventeen", 
    18 => "eighteen", 
    19 => "nineteen" 
    ); 
    $tens = array( 
    1 => "ten",
    2 => "twenty", 
    3 => "thirty", 
    4 => "forty", 
    5 => "fifty", 
    6 => "sixty", 
    7 => "seventy", 
    8 => "eighty", 
    9 => "ninety" 
    ); 
    $hundreds = array( 
    "hundred", 
    "thousand", 
    "million", 
    "billion", 
    "trillion", 
    "quadrillion" 
    ); //limit t quadrillion 
    $num = number_format($num,2,".",","); 
    $num_arr = explode(".",$num); 
    $wholenum = $num_arr[0]; 
    $decnum = $num_arr[1]; 
    $whole_arr = array_reverse(explode(",",$wholenum)); 
    krsort($whole_arr); 
    $rettxt = ""; 
    foreach($whole_arr as $key => $i){ 
    if($i < 20){ 
    $rettxt .= $ones[$i]; 
    }elseif($i < 100){ 
    $rettxt .= $tens[substr($i,0,1)]; 
    $rettxt .= " ".$ones[substr($i,1,1)]; 
    }else{ 
    $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
    $rettxt .= " ".$tens[substr($i,1,1)]; 
    $rettxt .= " ".$ones[substr($i,2,1)]; 
    } 
    if($key > 0){ 
    $rettxt .= " ".$hundreds[$key]." "; 
    } 
    } 
    if($decnum > 0){ 
    $rettxt .= " and "; 
    if($decnum < 20){ 
    $rettxt .= $ones[$decnum]; 
    }elseif($decnum < 100){ 
    $rettxt .= $tens[substr($decnum,0,1)]; 
    $rettxt .= " ".$ones[substr($decnum,1,1)]; 
    } 
    } 
    return "RUPEES ".strtoupper($rettxt)." ONLY"; 
} 
     $html.='<div id="box5" style="height:35px;width:100%;padding:10px;border-bottom:1px solid black;">
       <h5 style="margin-bottom:5px;">Amount in Words:</h5>
       <p style="font-size:11px;">'.numberTowords($invrow['AmtWithTax']).'</p>
     </div>
     <div class="bdetails" style="width:50%;height:auto;float:left;border-right:1px solid black;border-bottom:1px solid black;">
       <h5 style="padding:3px;">Bank Details:</h5>
       <p style="font-size:10px;padding:4px;">Bank: Indian Bank</p>
       <p style="font-size:10px;padding:4px;">Acc No: 6780863985</p>
       <p style="font-size:10px;padding:4px;">IFSC code: IDIB000V018</p>
       <p style="font-size:10px;padding:4px;">Branch: Vijayawada</p>
     </div>
     <div class="tc" style="width:50%;height:auto;float:left;border-bottom:1px solid black;">
     <h5 style="padding:3px;">Terms & Conditions:</h5>
       <p style="font-size:10px;padding:4px;">&bull;&nbsp;Goods once sold cannot be taken back.</p>
       <p style="font-size:10px;padding:4px;">&bull;&nbsp;Subject to Vijayawada Jurisdiction.</p>
       <p style="font-size:10px;padding:4px;">&bull;&nbsp;In case is to be taken back, the loss in the taxes will be at the clients cost.</p>
     </div>
     <p style="font-size:10px;position:relative;left:10px;margin-bottom:1px;">Certified that particulars given above are true and correct.</p>
     <p style="font-size:10px;position:relative;left:76.6px;text-align:center;">For: <b>LIPID MARKETING LLP<b></p>
     <p style="font-size:10px;position:absolute;right:20px;bottom:0;">Authorised Signatory</p>
  </div>
</body>
</html>
';
$pdf->loadHTML($html);
$pdf->setPaper('A4','potrait');
$pdf->render();
$pdf->stream("Invoice",array("Attachment"=>0));
?>