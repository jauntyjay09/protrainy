<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="icon" href="/assets/Images/logo2.png">
    <title>Payment Successfull Protrainy</title>
    <style media="screen">
      *{margin:0;}
      .tick{float:auto;width:100%; text-align:center; padding:100px 0;}
      h1{color:gray; padding:20px; font-size: 48px;}
      .fa{color:green; border:solid green 5px; font-size:48px; padding:15px; border-radius:50px;text-allign:center;}
      button{padding:15px; margin:30px; cursor: pointer;}
    </style>

    <script type="text/javascript" >
       function preventBack(){window.history.forward();}
        setTimeout("preventBack()", 0);
        window.onunload=function(){null};
    </script>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/include/layout/head.php'); ?>

    <div class="tick">
      <i class="fa fa-check" aria-hidden="true"></i>
    <h1> Thank You ! </h1>
    <p> your payment is successful, payment id : <?php echo $_SESSION['razorpay_payment_id']; ?></p> <br>
    <a href="<?php echo $root_url; ?>"><button type="button" name="button2">Home Page</button></a>
  </div>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/layout/foot1.php'); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/include/layout/foot0.php'); ?>

  </body>
</html>
