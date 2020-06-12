<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="icon" href="/assets/Images/logo2.png">
  <link rel="stylesheet" href="https://www.protrainy.com/include/css/register.css?Saturday 21st of March 2020 02:21:08 PM">
  <style media="screen">

  </style>
    <title> IndustryReady Master Class</title>
    <script type="text/javascript">
    window.history.forward();
    function noBack() {
        window.history.forward();
    }
</script>
<?php
     $webd=$_POST["webd"];
     $webt=$_POST["webt"];
     $cou=$_POST["cou"];
     ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/include/layout/head.php'); ?>

    <?php
    //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
      {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
      }
    //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
      {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
    //whether ip is from remote address
    else
      {
        $ip_address = $_SERVER['REMOTE_ADDR'];
      }
    ?>

    <?php
     $promo=$_GET['promo'];
     $connect =New mysqli("localhost","susheelbhai","WHPK8yig48Zw3v7","payment");

    $select1="select * from intern where referral='$promo'";
    $query1=mysqli_query($connect,$select1);
    $num1 = mysqli_num_rows($query1);
    $_SESSION['num']=$num1;

    ?>

    <div class="register">
      <h1> IndustryReady Master Class</h1>
      <form class="" action="" method="post">
        <?php 
        $webc=$_POST["webt"];
        $weba=$_POST["webd"];
        $webr=$_POST["cou"];
        ?>
     
      <input type="hidden"name="webd" value='<?php echo "$webd";?>'/> 
      <input type="hidden" name="webt" value='<?php echo "$webt";?>'/> 
      <input type="hidden" name="cou" value='<?php echo "$cou";?>'/> 
      <?php $course=$webt.$cou;
       ?> 

        <label for="branch">Branch  <sup style='color:red'>*</sup></label> <span class="br"></span>
        <select class="reg_input" name="branch" id="branch" required>
          <option value="">select</option>
          <option value="Civil Engineering" selected>Civil Engineering</option>
        </select> <span class="br"></span>
        <label for="sem">Semester <sup style='color:red'>*</sup></label> <span class="br"></span>
        <select class="reg_input" name="sem" id="sem" required>
          <option value="">select</option>
          <option value="1">1st</option>
          <option value="2">2nd</option>
          <option value="3">3rd</option>
          <option value="4">4th</option>
          <option value="5">5th</option>
          <option value="6">6th</option>
          <option value="7">7th</option>
          <option value="8">8th</option>
          <option value="9">Passout</option>
        </select> <span class="br"></span>
        <input class="reg_input" type="hidden" name="course_name" value='<?php echo "$course";?>'/>
        <input class="reg_input" type="hidden" name="receipt" value="<?php echo mt_rand(1000000000, 9999999999); ?>">
        

        <?php


switch ($webd) {
  case 1:
    $amot=300;
    break;
  case 2:
    $amot=500;
    break;
  case 3:
    $amot=200;
    break;
  default:
  $amot=500;
}
?>
        
        <label for="name">Name <sup style='color:red'>*</sup></label> <span class="br"></span>
        <input class="reg_input" id="name" type="text" name="name" pattern="[A-Za-z ]{3,36}" value="" required> <span class="br"></span>
        <label for="email"> Email id <sup style='color:red'>*</sup></label> <span class="br"></span>
        <input class="reg_input" id="email" type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" value="" required> <span class="br"></span>
        <label for="phone">Contact No. <sup style='color:red'>*</sup></label> <span class="br"></span>
        <input class="reg_input" id="phone" type="tel" name="phone" pattern="[0-9+ -]{10,17}" title="must be a valid phone number" value="" required> <span class="br"></span>
        <label for="college">College name <sup style='color:red'>*</sup></label> <span class="br"></span>
        <input class="reg_input" id="college" type="text" name="college" pattern="[A-Za-z ]{3,240}" value="" required> <span class="br"></span>
        <label for="city">Current City <sup style='color:red'>*</sup> </label> <span class="br"></span>
        
        
        <input class="reg_input" id="city" type="text" name="city" pattern="[A-Za-z ]{3,240}" value="" required> <span class="br"></span>
        
        
        <label for="referral">Referral Code</label> <span class="br"></span>


        <?php if ($num1==1){
        echo "<input class='reg_input' id='referral' type='text' name='referral' value='$promo' readonly='readonly'> <br>
              <input class='submit1' type='submit' name='submit' value='Submit'>";
      }
      else {
        echo "<input class='reg_input' id='referral' type='text' name='referral' value='$promo' > <br>
              <input class='submit1' type='submit' name='submit' value='Submit'>";
      }
         ?>
      </form>
<?php
date_default_timezone_set("Asia/Kolkata");
 $date= date("d-m-Y H:i:s");
if (isset($_POST['submit'])) {
  $course_name=$_POST['course_name'];
  $email=$_POST['email'];
  $receipt=$_POST['receipt'];

  $branch = $_POST['branch'];
  $sem = $_POST['sem'];
  $city = strtolower(htmlspecialchars($_POST['city']));
  $name = strtolower(htmlspecialchars($_POST['name']));
  $phone = $_POST['phone'];
  $phone1 = str_replace(' ', '', $phone);
  $phone2 = str_replace('-', '', $phone1);
  $phone3 = str_replace('+', '', $phone2);
  $phone4 = substr($phone3,-10,10);

  $college = strtoupper(htmlspecialchars($_POST['college']));
  $referral = htmlspecialchars($_POST['referral']);


  $connect_payment =New mysqli("localhost","susheelbhai","WHPK8yig48Zw3v7","payment");
  $select="select * from student where email ='$email' AND payment='1'";
  $query=mysqli_query($connect_payment,$select);
  $num=mysqli_num_rows($query);
  if ($num==0) {
  $nam= substr("$name",0,3);
  $phon= substr("$phone",2,6);   
  $user_referral=$nam.$phon;  
  $insert1="insert into student (ip,date,branch,sem,name,email,phone,college,current_city,used_referral,receipt,user_referral) value('$ip_address','$date','$branch','$sem','$name','$email','$phone4','$college','$city','$referral','$receipt','$user_referral')";
  $insert2="insert into all_history (ip,date,course_name,customer_email,customer_phone,billing_address,receipt,order_id,payment_getway,user_referral) value('$ip_address','$date','$course_name','$email','$phone4','$city','$receipt','$razorpayOrderId','razorpay','$user_referral')";
  if (mysqli_query($connect_payment,$insert1) AND mysqli_query($connect_payment,$insert2)){
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['phone']=$phone4;
    $_SESSION['college']=$college;
    $_SESSION['branch']=$branch;
    $_SESSION['course']=$course;
    $_SESSION['sem']=$sem;
    $_SESSION['city']=$city;
    $_SESSION['referral']=$referral;
    $_SESSION['amount_INR']=$amot;
    $_SESSION['discount']=$discount;
    $_SESSION['user_referral']=$user_referral;
    $_SESSION['webde']=$webt;
    $_SESSION['receipt']=$_POST['receipt'];
    
    //echo $op;
    //echo $user_referral;
    echo "<script>window.open('../ir/amount','_self' );</script>";
  }}
  else {
    echo "<script>swal({closeOnClickOutside: false, title: 'Failed', text: 'This email address already exists. Pleae try with another Email address', icon: 'error', button:'Ok',}).then((value) => {  window.open('../register/$referral','_self' );}) ;</script>";
  }
} ?>

    </div>


    <div class="contact"> <br><br>
      <h3>For more information</h3>
     
      Contact: Charlie <br>
      Phone no. : <br> +91 7853834107 <br><br>

    </div>


    <?php include($_SERVER['DOCUMENT_ROOT'].'/include/layout/foot1.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/include/layout/foot0.php'); ?>

  </body>
</html>
