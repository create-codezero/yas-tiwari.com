<?php
session_start();
require_once "../include/config.php";
$errors = array();
if (isset($_POST['Upload_Asset'])) {
     //this is for simple text upload

     $name = $_POST['Name'];
     $description = $_POST['Description'];
     $download_link = $_POST['Download_link'];
     $tags = $_POST['Tags'];

     //this is for the thumbnail upload

     $thumbnail_name = $_FILES['Asset_thumbnail']['name'];
     $thumbnail_tempname = $_FILES['Asset_thumbnail']['tmp_name'];
     $thumbnail_folder = "../data/assets/thumbnail/" . $thumbnail_name;
     $thumbnail = "../data/assets/thumbnail/" . $thumbnail_name;
     move_uploaded_file($thumbnail_tempname, $thumbnail_folder);

     //from here the inserting php is starts

     $q = " INSERT INTO `78000_assets`(`assetName`, `assetDescription`, `assetFile`, `assetThumbnail`, `assetTags`) VALUES ('$name', '$description', '$download_link', '$thumbnail', '$tags') ";


     //firing the query 

     mysqli_query($link, $q);

     header('location: ../admin-panel/');
}
