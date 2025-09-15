<?php
session_start();
require_once '../connect/connectDb/config.php';

if (isset($_POST['clientDetails'])) {
     $clientFullName = $_POST['fullName'];
     $clientEmail = $_POST['email'];
     $clientInstagram = $_POST['instagram'];
     $clientMobile = $_POST['mobile'];
     $clientChannel = $_POST['channelLink'];
     $clientGoal = $_POST['clientGoal'];
     $howClientKnow = $_POST['howKnow'];;
     $clientBudget = $_POST['budget'];
     $registerTime = $_POST['currentTime'];

     $query = "INSERT INTO `78000_ads_services`(`clientFullName`, `clientEmail`, `clientInsta`, `clientMobile`, `clientChannel`, `clientGoal`, `howClientKnow`, `clientBudget`, `time`) VALUES ('$clientFullName','$clientEmail','$clientInstagram','$clientMobile','$clientChannel','$clientGoal','$howClientKnow','$clientBudget','$registerTime')";
     $fire = mysqli_query($link, $query);

     echo "done";
}

if (isset($_POST['remindDetails'])) {
     $clientEmail = $_POST['email'];
     $registerTime = $_POST['currentTime'];

     $query = "INSERT INTO `78000_remind_services` (`clientEmail`,`time`) VALUES ('$clientEmail','$registerTime')";
     $fire = mysqli_query($link, $query);

     echo "done";
}
