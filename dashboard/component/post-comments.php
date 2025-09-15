<?php
session_start();
require_once "../../connect/connectDb/config.php";
require_once "../../connect/function/timeago.php";


if (isset($_POST['postId'])) {

     $postId = $_POST['postId'];

     $selectingAllComments = "SELECT * FROM `78000_postcomment` WHERE postId = '$postId' LIMIT 0,49";
     $fireSelectingAllComments = mysqli_query($link, $selectingAllComments);

     if (mysqli_num_rows($fireSelectingAllComments) > 0) {
          while ($rowAllComments = mysqli_fetch_assoc($fireSelectingAllComments)) {
?>

               <div class="flex flex-d-column">
                    <div class="flex m-x-10">
                         <div class="ad-logo flex" style="max-width: 25px;">
                              <a href="https://www.youtube.com/<?php echo $rowAllComments['userChannelId']; ?>" target="_blank">
                                   <img src="../data/user/channellogo/<?php echo $rowAllComments['userChannelLogo']; ?>" alt="<?php echo $rowAllComments['userChannelLogo']; ?> logo" class="img-fluid border-radius-100per">
                              </a>
                         </div>
                         <div class="ad-content m-l-10">
                              <a href="https://www.youtube.com/<?php echo $rowAllComments['userChannelId']; ?>" target="_blank">
                                   <p class="fc-dark-blue fw-600" style="font-size: 15px;"><?php echo $rowAllComments['userChannelName']; ?></p>
                              </a>
                              <p class="fc-dark-blue font-poppins" style="font-size: 12px;"><?php echo $rowAllComments['commentText']; ?></p>
                         </div>
                    </div>
                    <div class="flex m-x-50">
                         <p style="font-size: 10px; margin:5px 0;"><?php echo time_elapsed_string($rowAllComments['commentTime']); ?></p>
                    </div>
               </div>

<?php
          }
     } else {
          echo '<p class="font-poppins fw-500 m-y-10 fs-10">No Comments</p>';
     }
}

?>