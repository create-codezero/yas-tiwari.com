<?php

session_start();
require_once '../../connect/connectDb/config.php';

$errors = array();
if (isset($_POST['SignIn'])) {
     $Email = mysqli_real_escape_string($link, $_POST['Email']);
     $Password = mysqli_real_escape_string($link, $_POST['Password']);

     if (empty($Email)) {
          array_push($errors, "Username is required");
          header('location: ./');
     }
     if (empty($Password)) {
          array_push($errors, "Password is required");
          header('location: ./');
     }

     if (count($errors) == 0) {
          $query = "SELECT * FROM `78000_admin` WHERE  adminEmail='$Email' AND adminPassword='$Password'";
          $results = mysqli_query($link, $query);

          if (mysqli_num_rows($results) == 1) {
               while ($a = mysqli_fetch_assoc($results)) {
                    $adminEmail = $a['adminEmail'];
               }
               $_SESSION['admin-panel'] = $adminEmail;
               header('location: ../');
          } else {
               $_SESSION['wrong'] = "Wrong username/password combination";
               header('location: ../');
          }
     }
}
