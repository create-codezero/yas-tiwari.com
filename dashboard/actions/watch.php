<?php
session_start();
require_once "../../connect/connectDb/config.php";


// ADDING 1 COIN TO USER AND REMOVING 0.2 COIN FROM VIDEO 
// THIS IS FOR FIRST ONE MINUTE WATCH

if (isset($_POST['watchedMin'])) {
     $videoId = $_POST['videoId'];

     // GETTING THE VIDEO DETAILS
     $findVideo = "SELECT * FROM `78000_videos` WHERE `videoUniCode` = '" . $videoId . "'";
     $fireFindVideo = mysqli_query($link, $findVideo);

     if (mysqli_num_rows($fireFindVideo) > 0) {
          while ($rows = mysqli_fetch_assoc($fireFindVideo)) {
               $videoTitle = $rows['videoTitle'];
               $videoDescription = $rows['videoDescription'];
               $videoTags = $rows['videoTags'];
               $videoLink = $rows['videoLink'];
               $videoThumbnail = $rows['videoThumbnail'];
               $videoCategory = $rows['videoCategory'];
               $channelId = $rows['channelId'];
               $channelUniCode = $rows['channelUniCode'];
               $channelName = $rows['channelName'];
               $channelLogo = $rows['channelLogo'];
               $channelDesc = $rows['channelDesc'];
               $videoUserUniCode = $rows['videoUserUniCode'];
               $totalCoins = $rows['totalCoins'];
               $totalCoinSpent = $rows['totalCoinSpent'];
               $remainingCoins = $rows['remainingCoins'];
               $videoImpressions = $rows['videoImpressions'];
               $videoViews = $rows['videoViews'];
               $videoCtr = $rows['videoCtr'];
               $videoWatchtime = $rows['videoWatchtime'];
          }
     }

     // UPDATING THE VIDEO DETAILS
     $nowRemainingCoin = $remainingCoins - 0.2;
     $nowTotalSpentCoin = $totalCoinSpent + 0.2;
     $nowViews = $videoViews + 1;
     $nowVideoWatchtime = $videoWatchtime + 1;

     $videoUpdateQuery = "UPDATE `78000_videos` SET `totalCoinSpent`='$nowTotalSpentCoin',`remainingCoins`='$nowRemainingCoin',`videoViews`='$nowViews', `videoWatchtime`='$nowVideoWatchtime' WHERE videoUniCode = '$videoId'";
     $fireVideoUpdateQuery = mysqli_query($link, $videoUpdateQuery);

     // ADDING 1 COIN TO THE USER

     $userUniqueCode = $_SESSION['userUniqueCode'];
     // GETTING TOTAL COIN OF THE CHANNEL
     $totalChannelCoin = "SELECT totalCoin,remainingCoin FROM `78000_channels` WHERE channelUser = '$userUniqueCode'";
     $fireTotalChannelCoin = mysqli_query($link, $totalChannelCoin);
     $totalChannelCoinRow = mysqli_fetch_row($fireTotalChannelCoin);
     $nowTotalChannelCoin = $totalChannelCoinRow[0] + 1;
     $nowTotalRemainingCoin = $totalChannelCoinRow[1] + 1;


     // NOW UPDATING CHANNEL DETAILS
     $channelUpdateQuery = "UPDATE `78000_channels` SET `totalCoin`='$nowTotalChannelCoin',`remainingCoin`='$nowTotalRemainingCoin' WHERE channelUser = '$userUniqueCode'";
     $firechannelUpdateQuery = mysqli_query($link, $channelUpdateQuery);

     // UPDATING CHANNEL REMAINING COIN SESSION
     $_SESSION['remainingCoin'] = $nowTotalRemainingCoin;


     // Adding refer bonus if user earned more than 50 coins 
     if ($nowTotalChannelCoin == 50) {
          $gettingReferBy = "SELECT referBy FROM `78000_user` WHERE userUniqueCode = '$userUniqueCode'";
          $fireGettingReferBy = mysqli_query($link, $gettingReferBy);

          if (mysqli_num_rows($fireGettingReferBy) > 0) {
               $referBy = mysqli_fetch_row($fireGettingReferBy)[0];


               $gettingReferByChannelDetails = "SELECT totalCoin,remainingCoin FROM `78000_channels` WHERE channelUser = '$referBy'";
               $fireGettingReferByChannelDetails = mysqli_query($link, $gettingReferByChannelDetails);

               if (mysqli_num_rows($fireGettingReferByChannelDetails) > 0) {

                    $referByDetailsRow = mysqli_fetch_row($fireGettingReferByChannelDetails);

                    $referByAddedTotal = $referByDetailsRow[0] + 50;
                    $referByAddedRemaining = $referByDetailsRow[1] + 50;

                    $updatingChannelCoin = "UPDATE `78000_channels` SET `totalCoin`='$referByAddedTotal',`remainingCoin`='$referByAddedRemaining' WHERE channelUser = '$referBy'";
                    $fireUpdatingChannelCoin = mysqli_query($link, $updatingChannelCoin);

                    if ($fireUpdatingChannelCoin) {
                         //TIME AND DATE 
                         date_default_timezone_set('Asia/Calcutta');
                         $date = date("Y-m-d");
                         $time = date("H:i:s");

                         $dateTime = $date . " " . $time;

                         $addingBonusHistory = "INSERT INTO `78000_refer_bonus`(`referBonusTo`, `becauseOf`, `referBonus`, `referBonusTime`) VALUES ('$referBy','$userUniqueCode','50','$dateTime')";
                         $fireAddingBonusHistory = mysqli_query($link, $addingBonusHistory);
                    }
               }
          }
     }

     // PRINTING NOW USER TOTAL COIN
     if ($firechannelUpdateQuery) {
          echo $nowTotalRemainingCoin;
     }
}


// REMOVING 0.2 COIN FROM VIDEO 
// THIS IS FOR OTHER ONE MINUTE WATCH

if (isset($_POST['watchedAnotherMin'])) {
     $videoId = $_POST['videoId'];

     // GETTING THE VIDEO DETAILS
     $findVideo = "SELECT * FROM `78000_videos` WHERE `videoUniCode` = '" . $videoId . "'";
     $fireFindVideo = mysqli_query($link, $findVideo);

     if (mysqli_num_rows($fireFindVideo) > 0) {
          while ($rows = mysqli_fetch_assoc($fireFindVideo)) {
               $videoTitle = $rows['videoTitle'];
               $videoDescription = $rows['videoDescription'];
               $videoTags = $rows['videoTags'];
               $videoLink = $rows['videoLink'];
               $videoThumbnail = $rows['videoThumbnail'];
               $videoCategory = $rows['videoCategory'];
               $channelId = $rows['channelId'];
               $channelUniCode = $rows['channelUniCode'];
               $channelName = $rows['channelName'];
               $channelLogo = $rows['channelLogo'];
               $channelDesc = $rows['channelDesc'];
               $videoUserUniCode = $rows['videoUserUniCode'];
               $totalCoins = $rows['totalCoins'];
               $totalCoinSpent = $rows['totalCoinSpent'];
               $remainingCoins = $rows['remainingCoins'];
               $videoImpressions = $rows['videoImpressions'];
               $videoViews = $rows['videoViews'];
               $videoCtr = $rows['videoCtr'];
               $videoWatchtime = $rows['videoWatchtime'];
          }
     }

     // UPDATING THE VIDEO DETAILS
     $nowRemainingCoin = $remainingCoins - 0.2;
     $nowTotalSpentCoin = $totalCoinSpent + 0.2;
     $nowVideoWatchtime = $videoWatchtime + 1;

     $videoUpdateQuery = "UPDATE `78000_videos` SET `totalCoinSpent`='$nowTotalSpentCoin',`remainingCoins`='$nowRemainingCoin', `videoWatchtime`='$nowVideoWatchtime' WHERE videoUniCode = '$videoId'";
     $fireVideoUpdateQuery = mysqli_query($link, $videoUpdateQuery);
}


// SAVING THE FEEDBACK
if (isset($_POST['feedback'])) {
     $userFullName = $_POST['userFullName'];
     $videoId = $_POST['videoId'];
     $feedbackMessage = mysqli_escape_string($link, htmlentities($_POST['feedbackMessage']));
     $videoChannelId = $_POST['videoChannelId'];
     $userUniCode = $_POST['userUniCode'];


     // GETTING USER CHANNEL NAME, LINK, LOGO
     $userChannelDetails = "SELECT channelLink,channelName,logoLink FROM `78000_channels` WHERE channelUser = '$userUniCode'";
     $fireuserChannelDetails = mysqli_query($link, $userChannelDetails);
     $userChannelDetailsRow = mysqli_fetch_row($fireuserChannelDetails);
     $userChannelName = $userChannelDetailsRow[1];
     $userChannelLink = $userChannelDetailsRow[0];
     $userChannelLogo = $userChannelDetailsRow[2];

     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;


     // SAVING THE FEEDBACK
     $saveFeedbackQuery = "INSERT INTO `78000_video_feedbacks`(`message`, `fullName`, `userUniCode`, `userChannelName`, `userChannelLink`, `userChannelLogo`, `videoId`, `videoChannelId`, `feedbackTime`) VALUES ('$feedbackMessage','$userFullName','$userUniCode','$userChannelName','$userChannelLink','$userChannelLogo','$videoId','$videoChannelId','$dateTime')";
     $fireSaveFeedbackQuery = mysqli_query($link, $saveFeedbackQuery);

     if ($fireSaveFeedbackQuery) {

          $userFullName = $_SESSION['userDetails'][1];

          $notificationText = $userFullName . " gave a feedback : " . $feedbackMessage;

          $gettingPostUserDetails = "SELECT `videoUserUniCode` FROM `78000_videos` WHERE `videoUniCode` = '$videoId'";

          $fireGettingPostUserDetails = mysqli_query($link, $gettingPostUserDetails);

          if (mysqli_num_rows($fireGettingPostUserDetails) > 0) {
               while ($postUserDetails = mysqli_fetch_row($fireGettingPostUserDetails)) {
                    $postUserUniCode = $postUserDetails[0];
               }
          }

          $onClick = "notificationLoad('" . 'feedbacks-' . $videoId . "')";

          $addUpdateNotification = 'INSERT INTO `78000_update_notification`(`updateNotificationText`, `updateNotificationHref`, `updateNotificationOnClick`, `updateNotificationUserId`, `updateNotificationUserUniqueCode`, `updateNotificationTime`, `updateNotificationShown`) VALUES ("' . $notificationText . '","javascript:void(0)"," ' . $onClick . ' ","null","' . $postUserUniCode . '","' . $dateTime . '","0")';
          $fireAddUpdateNotification = mysqli_query($link, $addUpdateNotification);

          echo "Your Feedback has been sent successfully!";
     }
}

if (isset($_POST['uploadVideo'])) {

     // GETTING POST TEXT DATA
     $videoTitle = mysqli_escape_string($link, htmlentities($_POST['videoTitle']));
     $videoDescription = mysqli_escape_string($link, htmlentities($_POST['videoDescription']));
     $videoTags = mysqli_escape_string($link, htmlentities($_POST['videoTags']));
     $videoCategory = $_POST['videoCategory'];
     $videoLink = mysqli_escape_string($link, htmlentities($_POST['videoLink']));
     $coin = $_POST['coin'];
     $videoThumbnail = "";


     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;

     // GETTING THE VIDEO ID
     $videoId = "";
     $videoDummyLink1 = "https://youtu.be/";
     $videoDummyLink2 = "https://www.youtube.com/watch?v=";

     if (strpos($videoLink, $videoDummyLink1) !== false) {
          $videoId = str_replace($videoDummyLink1, '', $videoLink);
     } else if (strpos($videoLink, $videoDummyLink2) !== false) {
          $videoId = str_replace($videoDummyLink2, '', $videoLink);
     } else {

          $videoId = "Undefined";
     }

     // CHECKING THAT VIDEO IS NEW OR NOT

     $checkingVideoIsNewQuery = "SELECT * FROM `78000_videos` WHERE videoUniCode = '$videoId'";
     $fireCheckingVideoIsNewQuery = mysqli_query($link, $checkingVideoIsNewQuery);

     if (mysqli_num_rows($fireCheckingVideoIsNewQuery) == 0) {

          // VIDEO UNI CODE
          $videoUniCode = md5($videoId);

          // RENAMING THE IMGAGE FILE SO THAT THE FILE NAME WILL NOT BE SAME . HERE IMG FILE IS RENAMED ON THE BASIS OF VIDEO UNIQUE ID AND ABOVE WE CHECKED THAT, THAT UNIQUE ID IS NOT IN DATABASE
          $temp = explode(".", $_FILES["thumbnailFile"]["name"]);
          $file_name = md5($videoId) . "." . end($temp);

          // GETTING THE THUMBNAIL FILE DATA
          $file_type = $_FILES["thumbnailFile"]["type"];
          $temp_name = $_FILES["thumbnailFile"]["tmp_name"];
          $file_size = $_FILES["thumbnailFile"]["size"];
          $error = $_FILES["thumbnailFile"]["error"];

          // THIS FUNCTION COMPRESS THE THUMBNAIL FILE
          function compress_image($source_url, $destination_url, $quality)
          {
               $info = getimagesize($source_url);
               if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
               elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
               elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
               imagejpeg($image, $destination_url, $quality);
               return "Image uploaded successfully.";
          }

          // IF THE TOTAL IMAGE ERROR IS ZERO THEN FINALLY HERE WE COMPRESS THE FILE AND SAVE IT 
          if ($error > 0) {
               echo $error;
          } else if (($file_type == "image/gif") || ($file_type == "image/jpeg") || ($file_type == "image/png") || ($file_type == "image/pjpeg")) {
               $filename = compress_image($temp_name, "../../data/user/videothumbnail/" . $file_name, 20);
               if ($filename = "Image uploaded successfully.") {
                    $videoThumbnail = $file_name;
               }
          } else {
               echo "Uploaded image should be jpg, jpeg or png.";
          }

          // USER UNI CODE
          $videoUserUniCode = $_SESSION['userUniqueCode'];

          // GETTING CHANNEL DETAILS

          // CREATING GLOBAL VARIABLES
          $channelId = "";
          $channelUniCode = "";
          $channelName = "";
          $channelLogo = "";
          $channelDesc = "";

          $remainingCoins = "";
          $totalCoinSpent = "";

          // FETCHING FROM DATABASE
          $channelDetailQuery = "SELECT * FROM `78000_channels` WHERE channelUser = '" . $_SESSION['userUniqueCode'] . "'";
          $fireChannelDetailQuery = mysqli_query($link, $channelDetailQuery);

          if (mysqli_num_rows($fireChannelDetailQuery) > 0) {
               while ($channelDetailRow = mysqli_fetch_assoc($fireChannelDetailQuery)) {
                    $channelId = $channelDetailRow['channelId'];
                    $channelUniCode = $channelDetailRow['channelUniCode'];
                    $channelName = $channelDetailRow['channelName'];
                    $channelLogo = $channelDetailRow['logoLink'];
                    $channelDesc = $channelDetailRow['channelDesc'];
                    $remainingCoins = $channelDetailRow['remainingCoin'];
                    $totalCoinSpent = $channelDetailRow['totalCoinSpent'];
               }
          } else {
               header('location: ../');
          }




          // SAVING IN DATABASE

          $saveInDatabaseQuery = "INSERT INTO `78000_videos`(`videoTitle`, `videoDescription`, `videoTags`, `videoLink`, `videoUniCode`, `videoThumbnail`, `videoCategory`, `channelId`, `channelUniCode`, `channelName`, `channelLogo`, `channelDesc`, `videoUserUniCode`, `totalCoins`, `remainingCoins`, `uploadTime`) VALUES ('$videoTitle','$videoDescription','$videoTags','$videoLink','$videoId','$videoThumbnail','$videoCategory','$channelId','$channelUniCode','$channelName','$channelLogo','$channelDesc','$videoUserUniCode','$coin','$coin','$dateTime')";
          $fireSaveInDatabaseQuery = mysqli_query($link, $saveInDatabaseQuery);

          // REDUCING TOTAL COIN AND ADDING COIN SPENT IN CHANNEL

          $nowRemainingCoin = $remainingCoins - $coin;
          $nowSpentCoin = $totalCoinSpent + $coin;

          $channelQuery = "UPDATE `78000_channels` SET `totalCoinSpent`='$nowSpentCoin',`remainingCoin`='$nowRemainingCoin' WHERE channelUser = '" . $_SESSION['userUniqueCode'] . "'";
          $fireChannelQuery = mysqli_query($link, $channelQuery);

          if ($fireChannelDetailQuery && $fireChannelQuery) {
               $_SESSION['remainingCoin'] = $nowRemainingCoin;
               header('location: ../Your-Videos');
          } else {
               header('location: ../Video-Details');
          }
     } else {
          $_SESSION['videoAlreadyExist'] = "Video Already Exist!";
          header('location: ../Video-Details');
     }
}


if (isset($_POST['countAView'])) {
     $viewCount = $_POST['viewCount'] + 1;
     $videoId = $_POST['videoId'];

     $addViewQuery = "UPDATE `78000_videos` SET `videoViews`='$viewCount' WHERE videoId = '$videoId'";
     $fireAddViewQuery = mysqli_query($link, $addViewQuery);

     $userUniqueCode = $_SESSION['userUniqueCode'];

     //TIME AND DATE 
     date_default_timezone_set('Asia/Calcutta');
     $date = date("Y-m-d");
     $time = date("H:i:s");

     $dateTime = $date . " " . $time;

     $addingWatchHistory = "INSERT INTO `78000_watch_history`(`watchHistoryUser`, `watchHistoryVideoId`, `watchHistoryTime`) VALUES ('$userUniqueCode','$videoId','$dateTime')";

     $fireAddingWatchHistory = mysqli_query($link, $addingWatchHistory);
}


if (isset($_POST['editVideo'])) {

     // GETTING POST TEXT DATA
     $videoTitle = mysqli_escape_string($link, htmlentities($_POST['videoTitle']));
     $videoDescription = mysqli_escape_string($link, htmlentities($_POST['videoDescription']));
     $videoTags = mysqli_escape_string($link, htmlentities($_POST['videoTags']));
     $videoCategory = $_POST['videoCategory'];
     $videoThumbnail = "";

     // GETTING THE VIDEO ID
     $videoId = $_POST['videoId'];

     if (!empty($_FILES['thumbnailFile']['name']) || $_FILES['thumbnailFile']['size'] != 0) {

          // RENAMING THE IMGAGE FILE SO THAT THE FILE NAME WILL NOT BE SAME . HERE IMG FILE IS RENAMED ON THE BASIS OF VIDEO UNIQUE ID AND ABOVE WE CHECKED THAT, THAT UNIQUE ID IS NOT IN DATABASE
          $temp = explode(".", $_FILES["thumbnailFile"]["name"]);
          $file_name = md5($videoId) . "." . end($temp);

          // GETTING THE THUMBNAIL FILE DATA
          $file_type = $_FILES["thumbnailFile"]["type"];
          $temp_name = $_FILES["thumbnailFile"]["tmp_name"];
          $file_size = $_FILES["thumbnailFile"]["size"];
          $error = $_FILES["thumbnailFile"]["error"];

          // THIS FUNCTION COMPRESS THE THUMBNAIL FILE
          function compress_image($source_url, $destination_url, $quality)
          {
               $info = getimagesize($source_url);
               if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
               elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
               elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
               imagejpeg($image, $destination_url, $quality);
               return "Image uploaded successfully.";
          }

          // IF THE TOTAL IMAGE ERROR IS ZERO THEN FINALLY HERE WE COMPRESS THE FILE AND SAVE IT 
          if ($error > 0) {
               echo $error;
          } else if (($file_type == "image/gif") || ($file_type == "image/jpeg") || ($file_type == "image/png") || ($file_type == "image/pjpeg")) {
               $filename = compress_image($temp_name, "../../data/user/videothumbnail/" . $file_name, 20);
               if ($filename = "Image uploaded successfully.") {
                    $videoThumbnail = $file_name;
               }
          } else {
               echo "Uploaded image should be jpg, jpeg or png.";
          }
     } else if (!empty($_POST['oldThumbnailFile'])) {
          $videoThumbnail = mysqli_real_escape_string($link, $_POST['oldThumbnailFile']);
     } else {
          header('location: ../');
     }

     // UPDATING IN DATABASE

     $updateInDatabaseQuery = "UPDATE `78000_videos` SET `videoTitle`='$videoTitle',`videoDescription`='$videoDescription',`videoTags`='$videoTags',`videoThumbnail`='$videoThumbnail',`videoCategory`='$videoCategory' WHERE videoUniCode = '$videoId'";
     $fireUpdateInDatabaseQuery = mysqli_query($link, $updateInDatabaseQuery);

     if ($fireUpdateInDatabaseQuery) {
          header('location: ../Your-Videos');
     } else {
          header('location: ../Video-Details');
     }
}
