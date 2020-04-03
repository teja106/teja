<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$pdf=new Dompdf();

$data='<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css" media="all">
             * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: sans-serif;
        }

        .main-table {
            width: 470px;
            height: auto;
            border-style: double;
            border-radius: 10px;
            margin: 10px auto;

        }

        /*section1*/
        .section1 {
            height: auto;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            position: relative;

        }

        .sub-section-one-one {
            width: 250px;
            border-top-left-radius: 20px;

        }

        .sub-section-one-two {
            position: absolute;
            border-top-right-radius: 20px;
            width: calc(100% - 250px);
            left: 250px;
            top: 0;
            border-left: 1px solid black;
            padding: 0px 10px;

        }

        .sub-section-one-two h5 {
            padding: 0px 10px;
        }

        .sub-section-one-two label {
            font-size: 10px;
        }

        .sub-top ul {
            list-style: none;
            padding-left: 0px;
        }

        .sub-top ul li {
            float: left;
            font-size: 10px;
            margin-left: 20px;
            margin-top: 10px;
        }

        .sub-middle ul {
            list-style: none;
            padding-left: 0px;
        }

        .sub-middle ul li {
            text-align: center;
            font-weight: bold;
            font-size: 20px;
        }

        .sub-bottom ul {
            list-style: none;
            padding-left: 0px;
        }

        .sub-bottom ul li {
            font-size: 8px;
            text-align: center;
            padding: 2px;
        }

        /*section1*/
        /*section2*/
        .section2 {
            height: auto;
            position: relative;
        }

        .sub-section-two-one {
            width: 250px;
        }

        .sub-section-two-one table td {
            font-size: 10px;
        }

        .sub-section-two-two {
            position: absolute;
            width: calc(100% - 250px);
            left: 250px;
            top: 0;
            border-left: 1px solid black;

        }

        .sub-section-two-two table td {
            font-size: 10px;
            padding-bottom: 5px;
        }

        .desc {
            margin-top: -15px;
            border-collapse: collapse;
        }

        .desc th {
            font-size: 13px;
            border-top: 1px solid black;
            border-right: 1px solid black;
        }

        .desc th:last-child {
            border-right: 0px;
        }

        .desc td {
            font-size: 15px;
            border-top: 1px solid black;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            text-align: center;
            padding: 5px;
        }

        /*section2*/
        /*section3*/
        .section3 {
            position: relative;
            height: auto;
        }

        #ts th {
            font-size: 13px;
            border-bottom: 1px solid black;
            border-right: 1px solid black;
            padding: 5px;
        }

        #ts td {
            font-size: 10px;
            border-bottom: 1px solid black;
            border-top: 1px solid black;
            border-right: 1px solid black;
            text-align: center;
            padding: 5px;
        }

        .sub-section-three-one {
            width: 250px;

        }

        .sub-section-three-two {
            position: absolute;
            width: calc(100% - 250px);
            left: 250px;
            top: 0;
        }

        #ad {
            font-size: 12px;
            padding-bottom: 5px;
            border-bottom: 2px solid black;
        }

        .aw {
            padding: 5px;
            border-right: 1px solid black;
            border-bottom: 1px solid black;
            width: 100%;
        }

        .cf {
            line-height: 15px;
        }

        .tc {
            border-top: 1px solid black;
            font-size: 10px;
            padding-bottom: 10px;
            padding-left: 5px;
        }

        .bd {
            padding: 5px;
            width: 100%;
            border-right: 1px solid black;
            font-size: 12px;
        }

        /*section3*/
    </style>
</head>

<body>
    <div class="main-table">
        <!--startofsection1 -->
        <div class="section1">
            <!--startofsubsection-one-one-->
            <div class="sub-section-one-one">
                <div class="sub-top">
                    <ul>
                        <li>GSTIN&nbsp;:&nbsp;37AAIFL3253A1ZN</li>
                        <li>Ph&nbsp;:&nbsp;8106307498</li>
                    </ul>
                </div>
                <div class="sub-middle">
                    <ul>
                        <li>LIPID MARKETING LLP</li>
                    </ul>
                </div>
                <div class="sub-bottom">
                    <ul>
                        <li>Ground Floor, 3-2, Rajani enclave, SuryaRao Pet,</li>
                        <li>Vishnu Vardhan Street, Vijayawada-520002</li>
                    </ul>
                </div>
            </div>
            <!--endofsubsection-one-one-->
            <!--startofsubsection-one-two-->
            <div class="sub-section-one-two">
                <h5>INVOICE Cash/Credit</h5>
                <input type="checkbox" name="" id="option1" class=""><label for="option1">Original for Recipient</label><br>
                <input type="checkbox" name="" id="option2" class=""><label for="option2">Duplicate for Supplier / Transporter</label><br>
                        <input type="checkbox" name="" id="option3" class=""><label for="option3">Triplicate for Supplier</label>
            </div>
            <!--endofsubsection1-2-->
        </div>
        <hr>
        <!--endofsection1-->
        <!--startofsection2-->
        <div class="section2">
            <div class="sub-section-two-one">
                <table>
                    <tr>
                        <td>Invoice No:</td>
                        <td>1234567</td>
                    </tr>
                    <tr>
                        <td>Invoice Date:</td>
                        <td>12-10-2019</td>
                    </tr>
                    <tr>
                        <td>Reverse Charge: No.</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>State:</td>
                        <td style="width: 40%;">Andhra Pradesh</td>
                        <td>State Code:</td>
                        <td>37</td>
                    </tr>
                </table>
                <hr>
                <table class="border">
                    <tr>
                        <td style="width:150px;border-right: 1px solid black;">Details of Reciever</td>
                        <td>Billed To</td>
                    </tr>
                </table>
                <hr>
                <table class="" style="padding: 20px;">
                    <tr>
                        <td>Name:</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>1D, D 48-13, 1, Sri Ramachandra Nagar, Vijayawada, Andhra Pradesh 520008</td>
                    </tr>
                    <tr>
                        <td>GSTIN:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>State:</td>
                        <td>Tamilnadu</td>
                        <td>State Code:</td>
                        <td>30</td>
                    </tr>
                </table>
            </div>
            <div class="sub-section-two-two">
                <table>
                    <tr>
                        <td>Transportation Mode:</td>
                        <td>Road</td>
                    </tr>
                    <tr>
                        <td>Vehicle Number:</td>
                        <td>AP16FR1234</td>
                    </tr>
                    <tr>
                        <td>Date of Supply:</td>
                        <td>13-06-2019</td>
                    </tr>
                    <tr>
                        <td>Place of Supply:</td>
                        <td>Ladak</td>
                    </tr>
                </table>
                <hr>
                <table class="border">
                    <tr>
                        <td style="width: 100px;border-right: 1px solid black;">Details of Consignee</td>
                        <td style="text-align: right;">Shipped To</td>
                    </tr>
                </table>
                <hr>
                <table class="">
                    <tr>
                        <td>Name:</td>
                        <td>xxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>1D, D 48-13, 1, Sri Ramachandra Nagar, Vijayawada, Andhra Pradesh 520008</td>
                    </tr>
                    <tr>
                        <td>GSTIN:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>State:</td>
                        <td>Tamilnadu</td>
                        <td>State Code:</td>
                        <td style="padding-right: 10px;">30</td>
                    </tr>
                </table>
            </div>
            <!--            <hr>-->
            <table class="desc">
                <tr>
                    <th>S No.</th>
                    <th>Product Name</th>
                    <th>HSN ACS</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>GST %</th>
                    <th>GST Amount</th>
                    <th>Total</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>xxxxxxx</td>
                    <td>xxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                    <td>xxxxxx</td>
                </tr>
            </table>
        </div>
        <!--        <hr>-->
        <!--endofsection2-->
        <!--startofsection3-->
        <div class="section3">
            <div class="sub-section-three-one">
                <table style="border-collapse: collapse;" id="ts">
                    <tr>
                        <th>TAX%</th>
                        <th>Gross Total</th>
                        <th>SGST</th>
                        <th>CGST</th>
                        <th>TAX Total</th>
                    </tr>
                    <tr>
                        <td>0% -></td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>5% -></td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>12% -></td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>18% -></td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                    <tr>
                        <td>28% -></td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                        <td>0.00</td>
                    </tr>
                </table>
                <table class="aw">
                    <tr>
                        <td style="font-weight: 600;text-decoration: underline;">Amount in words:</td>
                    </tr>
                    <tr>
                        <td>xxxxxxxxxxxxxxxxxxxxxxxx</td>
                    </tr>
                </table>
                <table class="bd">
                    <tr>
                        <td style="font-size: 15px;font-weight: 600; text-decoration: underline;">Bank Details:</td>
                    </tr>
                    <tr>
                        <td>Bank:</td>
                        <td>Indian Bank</td>
                    </tr>
                    <tr>
                        <td>Account No:</td>
                        <td>034310100062414</td>
                    </tr>
                    <tr>
                        <td>Branch:</td>
                        <td>Labbipet</td>
                    </tr>
                    <tr>
                        <td>IFSC:</td>
                        <td>INB00034</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>xxxxxxxxxxx@gmail.com</td>
                    </tr>
                </table>
            </div>
            <div class="sub-section-three-two">
                <table id="ad">
                    <tr>
                        <td style="font-weight: 600;font-size: 14px;">Total Amount Before Tax:</td>
                        <td style="">xxxxxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600;font-size: 14px;">Add: CGST:</td>
                        <td style="">xxxxxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600;font-size: 14px;">Add: SGST</td>
                        <td style="">xxxxxxxxxxxx</td>

                    </tr>
                    <tr>
                        <td style="font-weight: 600;font-size: 14px;">Add: IGST:</td>
                        <td style="">xxxxxxxxxxxx</td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600;font-size: 14px;">Total Amount After Tax:</td>
                        <td style="">xxxxxxxxxxxx</td>
                    </tr>
                </table>
                <table class="cf">
                    <tr>
                        <td style="font-size: 10px;text-align: center;">Certfied that the particulars given above are true & correct</td>
                    </tr>
                    <tr>
                        <td style="font-size: 10px;text-align: center;">For: <b style="font-size:15px;">LIPID MARKETING LLP</b></td>
                    </tr>
                    <tr>
                        <td style="font-size: 10px;text-align:right;padding-top: 15px;">Autorized Signatory</td>
                    </tr>
                </table>
                <table class="tc">
                    <tr>
                        <td style="text-align: center;font-weight: 600;font-size: 14px;text-decoration: underline;">TERMS & CONDITIONS</td>
                    </tr>
                    <tr>
                        <td>All disputes are subject to VIJAYAWADA Jurisdiction.</td>
                    </tr>
                    <tr>
                        <td>Once Goods is sold will not be taken back or exchanged</td>
                    </tr>
                    <tr>
                        <td>In case is to be taken back,the loss is in the taxes will be at the clients cost.</td>
                    </tr>
                </table>

            </div>
        </div>
        <!--endofsection3-->
        <!--startofsection4-->
        <div class="section4">

        </div>
        <!--endofsection4-->
        <!--startofsection5-->
        <div class="section5">

        </div>
        <!--endofsection5-->
    </div>
</body>

</html>';

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
         background:green;
         padding:30px;
     }
     #initbox
     {
         position:absolute;
         background:red;
         width:100%;
         height:100%;
         border:5px double orange;
         border-radius:8px;
     }
     #header
     {
        
         background:blue;
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
         background:lightgreen;
         border-bottom:1px solid black;
     }
     #box2
     {
         width:100%;
         height:auto;
         background:orange;
         border-bottom:1px solid black;
     }
     #box3
     {
         width:100%;
         height:auto;
         background:yellow;
         border-bottom:1px solid black;
     }
     #box3 table
     {
        border-collapse:collapse;
     }
     #box3 table th:nth-child(even)
     {
         background:#ececec;
     }
     #box3 table td:nth-child(even)
     {
         background:#ececec;
     }
     #box3 table thead th     
     {
         font-size:13px;
         text-align:center;
         padding:5px;
     }
     #box3 table td
     {
         font-size:12px;
         text-align:center;
         padding:8px 0px 8px;
     }
     #box4
     {
         width:100%;
         height:auto;
         background:pink;
         border-bottom:1px solid black
     }
     #box4 table thead th
     {
         font-size:13px;
         text-align:center;
         padding:5px;
     }
     #box4 #tb1 table td
     {
         font-size:12px;
         text-align:center;
         padding:8px 0px 8px;
     }
     #box4 #tb2 table td
     {
         font-size:12px;
         text-align:center;
         padding:10.8px 0px 10.8px;
     }
     #box4 #tb1 table th:nth-child(even)
     {
         background:#ececec;
     }
     #box4 #tb1 table td:nth-child(even)
     {
         background:#ececec;
     }
     #box1 table tr td table td
     {
       font-size:12px;
       padding:10px 0px 10px;
     }
     #box2 table tr td table td
     {
       font-size:12px;
       padding:10px 0px 10px;
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
        <h1 style="background:yellow;padding:10px;">LIPID MARKETING LLP</h1>
        <p style="font-size:14px;">
          Ground Floor, 3-2, Rajani Enclave, Surya Rao Pet,<br>
          Vishnu Vardhan Street, Vijayawada - 520002.
        </p>
     </div>
     <div id="box1" style="">
     <table id="maintb1" style="width:100%;" cellpadding="0" cellspacing="0">
       <tr>
        <td id="td1" style="">
       <table id="tb1" style="width:100%;border-right:1px solid black;" border="1">
         <tr>
           <td style="">
             Invoice No
           </td>
           <td>
             :
           </td>
           <td>3483040349</td>
         </tr>
         <tr>
           <td>
             Invoice Date
           </td>
           <td>
             :
           </td>
           <td>12-11-2019</td>
         </tr>
          <tr>
           <td>
             Reverse Charge No.
           </td>
           <td>
             :
           </td>
           <td>23438403203893</td>
         </tr>
         <tr>
           <td>
             State
           </td>
           <td>
             :
           </td>
           <td>Andhra Pradesh</td>
         </tr>
         <tr>
           <td>
             State Code
           </td>
           <td>
             :
           </td>
           <td>37</td>
         </tr>
       </table>
       </td>
       <td style="">
       <table id="tb2" style="width:100%;" border="1">
         <tr>
           <td style="">
             Transportation Mode
           </td>
           <td>
             :
           </td>
           <td>3483040349</td>
         </tr>
         <tr>
           <td>
             Vehicle Number
           </td>
           <td>
             :
           </td>
           <td>12-11-2019</td>
         </tr>
          <tr>
           <td>
             Date of Supply
           </td>
           <td>
             :
           </td>
           <td>23438403203893</td>
         </tr>
         <tr>
           <td>
             Place of Supply
           </td>
           <td>
             :
           </td>
           <td>Andhra Pradesh</td>
         </tr>
         <tr style="visibility:hidden;">
           <td>
             State Code
           </td>
           <td>
            :
           </td>
           <td>
           37
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
       <table id="tb1" style="width:100%;border-right:1px solid black;" border="1">
         <tr>
           <td style="" colspan="3">
             Details of Receiver / Billed to
           </td>
         </tr>
         <tr>
           <td style="">
             Name
           </td>
           <td>
             :
           </td>
           <td>3483040349</td>
         </tr>
         <tr>
           <td>
             Address
           </td>
           <td>
             :
           </td>
           <td>12-11-2019</td>
         </tr>
          <tr>
           <td>
             GSTIN
           </td>
           <td>
             :
           </td>
           <td>23438403203893</td>
         </tr>
         <tr>
           <td>
             State
           </td>
           <td>
             :
           </td>
           <td>Andhra Pradesh</td>
         </tr>
         <tr>
           <td>
             State Code
           </td>
           <td>
             :
           </td>
           <td>37</td>
         </tr>
       </table>
       </td>
       <td style="">
       <table id="tb2" style="width:100%;" border="1">
         <tr>
           <td style="" colspan="3">
             Details of Consignee / Shipped to
           </td>
         </tr>
         <tr>
           <td style="">
             Name
           </td>
           <td>
             :
           </td>
           <td>3483040349</td>
         </tr>
         <tr>
           <td>
             Address
           </td>
           <td>
             :
           </td>
           <td>12-11-2019</td>
         </tr>
          <tr>
           <td>
             GSTIN
           </td>
           <td>
             :
           </td>
           <td>23438403203893</td>
         </tr>
         <tr>
           <td>
             State
           </td>
           <td>
             :
           </td>
           <td>Andhra Pradesh</td>
         </tr>
         <tr>
           <td>
             State Code
           </td>
           <td>
            :
           </td>
           <td>
           37
           </td>
         </tr>
       </table>
       </td>
       </tr>
       </table>
     </div>
     
     <div id="box3">
       <table style="width:100%;">
       <thead style="">
        <tr style="">
          <th style="">Sno</th>
          <th>Product Name</th>
          <th>HSN ACS</th>
          <th>Quality</th>
          <th>Rate</th>
          <th>Taxable Value</th>
          <th>GST %</th>
          <th>GST Amount</th>
          <th>Total</th>
        </tr>
       </thead>
       <tbody>
         <tr>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
         </tr>
         <tr>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
           <td>ydfgfdhf</td>
         </tr>
      </tbody>
       </table>
     </div>
     <div id="box4" style="height:194px;">
       <div id="tb1" style="background:blue;float:left;width:50%;border-right:1px solid black;">
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
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
               </tr>
               <tr>
                 <td>5%</td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
               </tr>
               <tr>
                 <td>12%</td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
               </tr>
               <tr>
                 <td>18%</td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
               </tr>
               <tr>
                 <td>28%</td>
                 <td></td>
                 <td></td>
                 <td></td>
                 <td></td>
               </tr>
              </tbody>
         </table>
       </div>
       <div id="tb2" style="background:orange;float:left;width:50%;">
         <table style="width:100%;">
                <tr>
                 <td>Total Amount before tax</td>
                 <td>:</td>
                 <td>Rs.78346</td>
                 </tr>
                 <tr>
                 <td>Add SGST</td>
                 <td>:</td>
                 <td>Rs.45883</td>
                 </tr>
                 <tr>
                 <td>Add CGST</td>
                 <td>:</td>
                 <td>Rs.73464</td>
                 </tr>
                 <tr>
                 <td>Add IGST</td>
                 <td>:</td>
                 <td>Rs.78464</td>
                </tr>
                 <tr>
                 <td>Total Amount after tax</td>
                 <td>:</td>
                 <td>Rs.7846324</td>
                </tr>
         </table>
       </div>
     </div>
     <div id="box5" style="height:35px;background:orange;width:100%;padding:10px;border-bottom:1px solid black;">
       <h5 style="margin-bottom:5px;">Amount in Words:</h5>
       <p style="font-size:13px;">Twelve thousand eighty six rupees only</p>
     </div>
     <div class="bdetails" style="background:yellow;width:50%;height:auto;float:left;">
       <h5 style="padding:2px;">Bank Details:</h5>
       <p style="font-size:12px;padding:2px;">Bank: Indian Bank</p>
       <p style="font-size:12px;padding:2px;">Acc No: 034310100062414</p>
       <p style="font-size:12px;padding:2px;"></p>
     </div>
     <div class="tc" style="background:violet;width:50%;height:auto;float:left;">
     <h5 style="padding:2px;">Terms & Conditions:</h5>
       <p style="font-size:12px;padding:2px;">Bank: Indian Bank</p>
       <p style="font-size:12px;padding:2px;">Acc No: 034310100062414</p>
       <p style="font-size:12px;padding:2px;"></p>
     </div>
  </div>
</body>
</html>
';
$pdf->loadHTML($html);
$pdf->setPaper('A4','potrait');
$pdf->render();
$pdf->stream("Invoice",array("Attachment"=>0));
?>