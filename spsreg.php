<!DOCTYPE html>
<html lang="en">
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
    <title>Document</title>
    <style type="text/css" media="all">
     *
     {
        margin:0!important;
        padding:0!important;
        box-sizing:border-box!important;
     }
     html,body
     {
        width:100%;
         height:100%;
     }
      #cover
      {
        width:100%;
        height:100%;
        background-color:#e6e6e6;
      }
      #spsregform
      {
        height:700px;
        background:white;
        box-shadow:2px 2px 8px 2px rgba(0,0,0,0.2);
        border-radius:15px;
        padding:0px 20px 20px!important;
          position:relative;
      }
        #header
        {
            width:100%;
            background:white;
            height:50px;
            display:flex;
            justify-content:center;
            align-items:center;
            box-shadow:0px 2px 8px 2px rgba(0,0,0,0.12);
            border-top-left-radius:15px;
            border-top-right-radius:15px;
            position:absolute;
            top:0;
            left:0;
            right:0;
        }
        form
        {
            margin-top:80px!important;
        }
        .form-row
        {
            margin-top:15px!important;
        }
        input
        {
            box-shadow:none!important;
            padding:10px!important;
        }
        input::placeholder
        {
            color:black!important;
        }
    </style>
</head>
<body>
    <div id="cover" class="container-fluid">
        <div class="row d-flex" style="justify-content:center;height:600px;position:relative;top:calc(50% - 300px);">
            <div class="col-lg-5" id="spsregform">
                <div id="header" class="text-center">
                  <h5 style="color:#646464;">Sponsor Registration</h5>
                </div>
                <form action="valspsreg.php" method="POST">
                    <div class="form-row">
                        <div class="col mr-3">
                            <input type="text" name="fname" id="fname" placeholder="Firstname" class="form-control" pattern="[A-Za-z]" title="Example: John">
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="lname" id="lname" placeholder="Lastname" class="form-control" pattern="[A-Za-z]" title="Example: Mark">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mr-3">
                            <input type="email" name="email" id="email" placeholder="Email ID" class="form-control">
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="" id="conno" placeholder="Contact No"class="form-control"  pattern="[+][0-9]{1,3}-[0-9]{3}-[0-9]{3}-[0-9]{4}" title="Example: countryCode-111-111-1111">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mr-3">
                            <input type="password" name="pswd" id="pswd" placeholder="Password" class="form-control" pattern="[0-9]{8}" title="Password should contain 8 characters">
                        </div>
                        <div class="col ml-3">
                            <input type="password" name="cpswd" id="cpswd" placeholder="Confirm Password" class="form-control"  pattern="[0-9]{8}" title="Password should contain 8 characters">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col mr-3">
                            <input list="qual" name="qual" id="qualif" placeholder="Qualification" class="form-control" pattern="">
                            <datalist id="qual">
                                <option value="10th">
                                <option value="Inter">
                                <option value="Diploma">
                                <option value="Degree">
                                <option value="UG/PG">
                            </datalist>
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="country" id="country" placeholder="Country" class="form-control" pattern="[A-Za-z ]" title="Example: India">
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="col mr-3">
                            <input type="text" name="state" id="state" placeholder="State" class="form-control" pattern="[A-Za-z ]" title="Example: Andhra Pradesh">
                    </div>
                    <div class="col ml-3">
                            <input type="text" name="city" id="city" placeholder="City" class="form-control" pattern="[A-Za-z ]" title="Example: Guntur">
                    </div>
                    </div>
                    <div class="form-row">
                       <div class="col mr-3">
                            <input type="text" name="adrno" id="adrno" placeholder="Aadhar No" class="form-control" pattern="[0-9]{12}" title="Example: Aadhar No should contain only 12 digits">
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="panno" id="panno" placeholder="PAN No" class="form-control" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}" title="Example: AAAPL1234C">
                        </div>
                    </div>
                    <div class="form-row">
                       <div class="col mr-3">
                            <input type="text" name="bname" id="bname" placeholder="Bank Name" class="form-control" pattern="[A-Za-z ]">
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="fname" id="brname" placeholder="Branch Name" class="form-control" pattern="[A-Za-z ]">
                        </div>
                    </div>
                    <div class="form-row">
                       <div class="col mr-3">
                            <input type="text" name="ifsc" id="ifsc" placeholder="IFSC Code" class="form-control" pattern="[A-Z0-9]">
                        </div>
                        <div class="col ml-3">
                            <input type="text" name="accno" id="accno" placeholder="Bank Account No" class="form-control" pattern="[0-9]{1,20}">
                        </div>
                    </div>
                    <div class="form-row">
                       <div class="col">
                            <input type="text" name="nomname" id="nomname" placeholder="Nominee Name" class="form-control" pattern="[A-Za-z ]">
                        </div>
                    </div>
                    <div class="form-group text-center mt-4">
                            <button type="submit" name="spssub" id="spssub" class="btn btn-success" style="padding:10px!important;">SUBMIT</button>
                    </div>
                    <div class="form-group text-center mt-4">
                        <span>Already have an account? <a href="spslogin.php">SIGN IN</a></span>
                    </div>
                </form>          
            </div>
        </div>
    </div>
</body>
</html>