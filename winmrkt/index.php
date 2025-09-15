<?php
session_start();
require_once '../connect/connectDb/config.php';
require_once "../connect/function/timeago.php";
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>winmrkt - by yas tiwari</title>
     <link rel="stylesheet" href="../css/Sass/<?php echo $cssfile; ?>" />

</head>

<body>

     <div class="w-100per flex flex-d-column">
          <div class="w-100per flex e-c m-y-10">
               <div class="flex e-c m-10">
                    <img src="../media/winmrkt/logo.png" alt="winmrkt by yas tiwari" class="img-fluid" style="min-height: 60px;">
               </div>
          </div>
          <div class="flex w-100per">
               <div class="flex w-50per e-c">
                    <img src="../media/winmrkt/Generate more revenue.png" alt="take your business online and generate more revenue">
               </div>

               <div class="flex w-50per e-c">
                    <div class="form-box flex flex-d-column w-100per">
                         <div class="main-box">
                              <form action="" method="POST">
                                   <p class="fs-30 tx-center nnboxtitle">Enter Details</p>

                                   <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Name</p>
                                   <div class="input">
                                        <input type="text" name="name" id="name" placeholder="Name" required>
                                   </div>

                                   <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">E-mail</p>
                                   <div class="input">
                                        <input type="email" name="Email" id="Email" placeholder="E-mail" required>
                                   </div>

                                   <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Phone</p>
                                   <div class="input">
                                        <input type="text" name="phone" id="Phone" placeholder="Phone" required>
                                   </div>

                                   <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Instagram Username</p>
                                   <div class="input">
                                        <input type="text" name="instagramUsername" id="InstagramUsername" placeholder="Instagram Username" required>
                                   </div>

                                   <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Business</p>
                                   <div class="input">
                                        <input type="text" name="business" id="Business" placeholder="Business" required>
                                   </div>

                                   <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Description</p>
                                   <div class="input">
                                        <textarea style="line-height:20px; margin-top:5px; border-radius: 0px;" name="description" id="Description" rows="5"></textarea>
                                   </div>
                              </form>
                         </div>
                    </div>
               </div>
          </div>
     </div>

</body>

</html>