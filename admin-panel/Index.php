<?php
session_start();
require_once '../connect/connectDb/config.php';
if (!isset($_SESSION['admin-panel'])) {
     header('location: ./admin-login.php');
}

if (isset($_GET)) {
     foreach ($_GET as $data => $val) {
          $title = mysqli_real_escape_string($link, $data);
          $title = str_replace('/', '', $title);

          if (strpos($title, 'edit-Email-') !== false) {
               $vidId = str_replace('edit-Email-', '', $title);
               $title = str_replace('edit-Email-', 'Edit-Email.php?id=', $title);
          } else if (strpos($title, 'Edit-Email-') !== false) {
               $vidId = str_replace('Edit-Email-', '', $title);
               $title = str_replace('Edit-Email-', 'Edit-Email.php?id=', $title);
          } else if (strpos($title, 'new-Email-Sender-') !== false) {
               $vidId = str_replace('new-Email-Sender-', '', $title);
               $title = str_replace('new-Email-Sender-', 'New-Email-Sender.php?id=', $title);
          } else if (strpos($title, 'New-Email-Sender-') !== false) {
               $vidId = str_replace('New-Email-Sender-', '', $title);
               $title = str_replace('New-Email-Sender-', 'New-Email-Sender.php?id=', $title);
          }



          $firstLetter = substr($title, 0, 1);
          $firstLetter = strtoupper($firstLetter);
          $length = strlen($title) - 1;
          $otherLetter = substr($title, 1, $length);
          $content = $firstLetter . $otherLetter;
     }
}

if (empty($data)) {
     if (isset($_SESSION['adminDPage']) && !empty($_SESSION['adminDPage'])) {
          $content = $_SESSION['adminDPage'];
     } else {
          $content = "Home";
     }
}





?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin Panel</title>
     <link rel="stylesheet" href="../css/Sass/<?php echo $cssfile; ?>">
     <link rel="icon" href="../media/images/l_c.png">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

     <div class="header-box pos-fixed z-1 w-100per">
          <div class="header">
               <div class="branding">
                    <a href="javascript:void(0)" onclick="clickOn('side-menu')"><img src="../media/Icons/menu.png" alt="Logo" class="menu"></a>
                    <a href="../"><img src="../media/Icons/logo.png" alt="Logo" class="logo m-l-10"></a>
                    <a href="../" class="m-l-10 img-fluid">
                         <img src="../media/Icons/yastiwari.png" alt="Yas Tiwari" class="yastiwari">
                    </a>
               </div>
               <div class="header-menu flex flex-y-center">
                    <a class="btn btn-gra-blue" href="./actions/Signout.php" title="Sign In">
                         Sign Out
                    </a>
               </div>
          </div>
     </div>
     <div class="block" style="height: 70px;"></div>

     <!-- CONTENT WILL LOAD IN THIS DIV -->
     <div class="container d-flex-center" style="flex-direction:column;" id="Content">
          <!-- CONTENT WILL LOAD UPPER DIV -->
     </div>

     <div class="side-menu bg-white h-100vh pos-fixed none" id="side-menu">

          <div class="menu m-t-80">
               <ul>
                    <p class="normal-tx fw-500 fc-dark-blue">Your Menu.</p>
                    <div class="bg-primary block m-10" style="height: 2px;"></div>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Home')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Home"><i class="fas fa-home"></i> Home </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Upload-Assets')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Upload-Assets"><i class="far fa-play-circle"></i> Upload Assets </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Contacts')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Upload-Assets"> <i class="fa fa-handshake" aria-hidden="true"></i> Contacts </a></li>

                    <li><a href="javascript:void(0)" onclick="clickedBtn('Users')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Upload-Assets"><i class="fa fa-user" aria-hidden="true"></i> Users </a></li>


                    <li><a href="javascript:void(0)" onclick="clickedBtn('Emails')" class="nnmenu fc-dark-blue font-poppins fs-20" id="Email-Sender"><i class="fas fa-mail-bulk"></i> Emails </a></li>

                    <div class="bg-primary block m-10" style="height: 2px;"></div>
                    <p class="normal-tx fw-500 fc-dark-blue">I have done my Work.</p>
                    <li><a href="../user/auth/signout/" class="fc-dark-blue font-poppins fs-20"><i class="fas fa-sign-out-alt    "></i> Sign Out</a></li>
          </div>

     </div>
     <script src="../js/actions.js"></script>
     <script>
          $(document).ready(function() {
               $("#Content").load("./include/<?php echo $content; ?>.php");
          });

          function clickOn(elementId) {
               $(`#${elementId}`).toggleClass("none");
          }

          function clickedBtn(btnClicked) {
               $(`#Content`).load(`./include/${btnClicked}.php`);
               clickOn('side-menu');

               const state = {
                    'page_id': 1,
                    'user_id': 5
               };
               const title = '';
               const url = `${btnClicked}`;

               history.pushState(state, title, url);
          }

          function loadContent(e) {
               $(`#Content`).load(`./include/${e}.php`);

               const state = {
                    'page_id': 1,
                    'user_id': 5
               };
               const title = '';
               const url = `${e}`;

               history.pushState(state, title, url);
          }

          function loadMail(e) {
               $(`#Content`).load(`./include/New-Email-Sender.php?id=${e}`);

               const state = {
                    'page_id': 1,
                    'user_id': 5
               };
               const title = '';
               const url = `New-Email-Sender-${e}`;

               history.pushState(state, title, url);
          }

          function editLoad(e, f) {
               $(`#Content`).load(`./include/${e}.php?id=${f}`);

               const state = {
                    'page_id': 1,
                    'user_id': 5
               };
               const title = '';
               const url = `${e}-${e}`;

               history.pushState(state, title, url);
          }
     </script>
</body>

</html>