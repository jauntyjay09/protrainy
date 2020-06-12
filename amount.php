<?php session_start();
 $promo=$_SESSION['referral'];
 $webp=$_SESSION['WEBQ'];
 $la=$webp;


//$amount_INR=$_SESSION['amount_INR'];

  // $discount=0;

   
$connect =New mysqli("localhost","susheelbhai","WHPK8yig48Zw3v7","payment");

$select1="select * from student where user_referral='$promo'";
$query1=mysqli_query($connect,$select1);
$num1 = mysqli_num_rows($query1);
if ($num1==0) {
  $amount_INR=$_SESSION['amount_INR'];

  $discount=0;
  if($promo==''){$_SESSION['num3']=1; }
  else{$_SESSION['num3']=2;}
}
else {
  $amount_INR=$_SESSION['amount_INR'];
  $discount=20;
  $_SESSION['num3']=3;
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/assets/Images/logo2.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://www.protrainy.com/JS/jquerycode.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://www.protrainy.com/include/css/main.css">
  <style> .submit{display:none;}</style>
  <script src="https://kit.fontawesome.com/4e6ac1efa4.js"></script>
        <link rel="stylesheet" href="https://www.protrainy.com/include/css/register.css">
  </head>
  <body onload="document.createElement('form').submit.call(document.getElementById('myForm'))">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- <a class="navbar-brand" href="#">Trainy<span style="color: #FDC632;">.in</span></a> -->
        <a href="https://www.protrainy.com"><img class="navbar-brand" width="250" height="auto" src="https://www.protrainy.com/assets/Images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="https://www.protrainy.com">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.protrainy.com/webpage/about.php">Who we are ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.protrainy.com/webpage/students.php">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.protrainy.com/webpage/contact/contact_us.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.protrainy.com/webpage/career.php">Career</a>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Our Courses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="https://www.protrainy.com/webpage/students.php">Student</a>
                        <a class="dropdown-item" href="#">Core Industry Groups</a>
                        <a class="dropdown-item" href="#">Collaboration Partners</a>
                    </div>
                </li> -->
<!--
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
-->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="https://www.protrainy.com/contactus.html">Contact Us</a>
                </li> -->

                <li class="nav-item">
                  <a class="nav-link" id="login_nav" href="http://protrainy.com/register" >IndustryReady Master Class</a>
                </li>
            </ul>
        </div>
    </nav>

      <div class="payment_div register" id="payment_div">
        <h1>Review</h1>
        <table>
          <tr>
            <td>Name</td>
            <td></td>
          </tr>
          <tr>
            <td>Email id</td>
            <td></td>
          </tr>
          <tr>
            <td>Phone no.</td>
            <td></td>
          </tr>
          <tr>
            <td>College</td>
            <td></td>
          </tr>
          <tr>
            <td>Branch</td>
            <td></td>
          </tr>
          <tr>
            <td>Semester</td>
            <td></td>
          </tr>
          <tr>
            <td>Referral Code</td>
            <td></td>
          </tr>
           <tr>
             <td></td> <td></td>
           </tr>
           <tr>
             <td> Price :</td>
             <td class="align-right"></td>
           </tr>
           <tr>
             <td> Discount :</td>
             <td class="align-right"> </td>
           </tr>
           <tr>
             <td> Total :</td>
             <td class="align-right"></td>
           </tr>
        </table>
    <form id="myForm" name="myForm" class="" action="checkout" method="post">

      <input class="reg_input" type="hidden" name="amount_INR" value="<?php echo $amount_INR; ?>">
      <input class="reg_input" type="hidden" name="discount" value="<?php echo $discount; ?>">
      <input class='submit' id='submit' type='submit' name='submit' value='Submit'>
    </form>

    <?php
    $_SESSION['amount_INR']=$amount_INR;

    $_SESSION['discount']=$discount;
     ?>
  </body>
</html>
