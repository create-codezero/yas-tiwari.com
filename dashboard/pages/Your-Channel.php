<?php
session_start();
require_once "../../connect/connectDb/config.php";
$_SESSION['path'] = "Your-Channel";
?>
<div class="sector flex flex-column e-c m-y-30">

     <p class="fs-30 tx-center m-10 fw-500 font-poppins">Channel Preview</p>

     <!-- ad preview -->
     <?php
     if (isset($_SESSION['campaignDetails'])) {
     ?>
          <div class="box flex p-y-20 flex-y-center m-20 mob-flex-column overflow-hidden pos-relative" style="justify-content: space-between;" id="ad-preview">
               <span class="pos-absolute fc-primary fw-700 fs-10" style="background-color: #ffff00; padding: 2px 5px; border-radius: 0 0 3px 0; top: 0; left: 0;">Ad</span>
               <div class="flex flex-y-center">
                    <div class="ad-logo m-x-20 flex e-c" style="max-width: 50px;">
                         <img src="../data/user/channellogo/<?php echo $_SESSION['campaignDetails'][2] ?>" alt="Channel-logo" class="img-fluid border-radius-100per">
                    </div>
                    <div class="ad-content m-r-10">
                         <p class="fc-dark-blue fs-20 fw-600"><?php echo $_SESSION['campaignDetails'][0] ?></p>
                         <p class="fc-primary fw-500">Categories : <?php echo $_SESSION['campaignDetails'][4] ?></p>
                         <p class="fc-dark-blue fs-10"><?php echo $_SESSION['campaignDetails'][3] ?></p>
                    </div>
               </div>

               <div class="ad-call-to-action mob-m-t-10 mob-w-100per mob-m-x-10 m-r-20">
                    <a href="<?php echo $_SESSION['campaignDetails'][1] ?>" class="ad-btn bg-clr-1 fc-dark-blue m-auto" style="border: 1px solid var(--clr-5);">Visit</a>
               </div>
          </div>
          <?php
     } else {
          $channelUser = $_SESSION['userDetails'][5];
          $check_campaign_query = " SELECT * FROM `78000_channels` WHERE channelUser = '$channelUser' ";
          $check_campaign_fire = mysqli_query($link, $check_campaign_query);
          $check_campaign_count = mysqli_num_rows($check_campaign_fire);
          if ($check_campaign_count == 1) {
               while ($campaign = mysqli_fetch_assoc($check_campaign_fire)) {
                    $campaignDetails = array($campaign['channelName'], $campaign['channelLink'], $campaign['logoLink'], $campaign['channelDesc'], $campaign['channelCat'], $campaign['channelSubs'], $campaign['instagramId'], $campaign['emailId'], $campaign['phoneNum'], $campaign['channelUser']);
                    $_SESSION['campaignDetails'] = $campaignDetails;
          ?>
                    <div class="box flex p-y-20 flex-y-center m-20 mob-flex-column overflow-hidden pos-relative" style="justify-content: space-between;" id="ad-preview">
                         <span class="pos-absolute fc-primary fw-700 fs-10" style="background-color: #ffff00; padding: 2px 5px; border-radius: 0 0 3px 0; top: 0; left: 0;">Ad</span>
                         <div class="flex flex-y-center">
                              <div class="ad-logo m-x-20 flex e-c" style="max-width: 50px;">
                                   <img src="../data/user/channellogo/<?php echo $_SESSION['campaignDetails'][2] ?>" alt="Channel-logo" class="img-fluid border-radius-100per">
                              </div>
                              <div class="ad-content m-r-10">
                                   <p class="fc-dark-blue fs-20 fw-600"><?php echo $_SESSION['campaignDetails'][0] ?></p>
                                   <p class="fc-primary fw-500">Categories : <?php echo $_SESSION['campaignDetails'][4] ?></p>
                                   <p class="fc-dark-blue fs-10"><?php echo $_SESSION['campaignDetails'][3] ?></p>
                              </div>
                         </div>

                         <div class="ad-call-to-action mob-m-t-10 mob-w-100per mob-m-x-10 m-r-20">
                              <a href="<?php echo $_SESSION['campaignDetails'][1] ?>" class="ad-btn bg-clr-1 fc-dark-blue m-auto" style="border: 1px solid var(--clr-5);">Visit</a>
                         </div>
                    </div>
     <?php
               }
          } else {
               echo "Please create a campaign to see your campaign.";
          }
     }
     ?>
     <!-- ad Customize -->

     <!-- <p class="fs-30 tx-center m-10 fw-500 font-poppins">Edit Your Ad</p> -->

     <div class="flex e-c h-100per m-y-20 w-100per">
          <div class="form-box">
               <div class="main-box">
                    <form action="./actions/channel.php" enctype="multipart/form-data" method="POST">
                         <p class="fs-40 tx-center">Your Details</p>


                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Channel Name</p>
                         <div class="input">
                              <input type="text" value="<?php if (isset($_SESSION['campaignDetails'])) {
                                                                 echo $_SESSION['campaignDetails'][0];
                                                            } ?>" name="channelName" id="channelName" placeholder="Channel Name" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Channel Link</p>
                         <div class="input">
                              <input type="text" value="<?php if (isset($_SESSION['campaignDetails'])) {
                                                                 echo $_SESSION['campaignDetails'][1];
                                                            } ?>" name="channelLink" id="channelLink" placeholder="Use Full Link" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Logo</p>

                         <?php

                         if (isset($_SESSION['campaignDetails'])) {
                              $imageContent = '<img src="../data/user/channellogo/' . $_SESSION['campaignDetails'][2] . '" alt="Channel Logo" class="img-fluid" style="height:100px; max-width:100px; width:100%; border-radius:100%;" id="channelLogoPreview">';

                              $inputContent = '<input type="text" value="' . $_SESSION['campaignDetails'][2] . '" name="logoLink" style="display:none;" id="logoLink">';
                         } else {
                              $imageContent = '<img src="" alt="Channel Logo" class="none" style="height:100px; max-width:100px; width:100%; border-radius:100%;" id="channelLogoPreview">
                              <i class="fa fa-camera fs-30 p-y-40 channelLogoIcon" id="upload-channelLogo-icon"></i>';

                              $inputContent = '<input type="text" name="logoLink" style="display:none;" id="logoLink">';
                         }

                         ?>

                         <div class="w-100per flex e-c p-y-10">
                              <div class="flex e-c cursor-pointer" style="max-height:100px; height:100%; max-width:100px; width:100%; background-color: var(--clr-4); border-radius:100%;" onclick="triggerClick('newLogoLink')">
                                   <?php echo $imageContent; ?>
                              </div>
                         </div>

                         <div class="input">
                              <?php echo $inputContent; ?>
                              <input type="file" name="newLogoLink" style="display:none;" id="newLogoLink" onchange="displayImage(this)">
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Description</p>
                         <div class="input">
                              <input type="text" value="<?php if (isset($_SESSION['campaignDetails'])) {
                                                                 echo $_SESSION['campaignDetails'][3];
                                                            } ?>" name="channelDesc" id="channelDesc" placeholder="Short Description" required>
                         </div>



                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Category</p>
                         <div class="input">
                              <select value="<?php if (isset($_SESSION['campaignDetails'])) {
                                                  echo $_SESSION['campaignDetails'][4];
                                             } ?>" name="category" id="category" placeholder="Category" required>
                                   <option value="Autos & Vehicles">Autos & Vehicles</option>
                                   <option value="Comedy">Comedy</option>
                                   <option value="Education">Education</option>
                                   <option value="Entertainment">Entertainment</option>
                                   <option value="Film & Animation">Film & Animation</option>
                                   <option value="Gaming">Gaming</option>
                                   <option value="Howto & Style">Howto & Style</option>
                                   <option value="Music">Music</option>
                                   <option value="News & Politics">News & Politics</option>
                                   <option value="Nonprofits & Activism">Nonprofits & Activism</option>
                                   <option value="People & Blog">People & Blog</option>
                                   <option value="Pets & Animals">Pets & Animals</option>
                                   <option value="Science & Technology">Science & Technology</option>
                                   <option value="Sports">Sports</option>
                                   <option value="Travel & Events">Travel & Events</option>
                              </select>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Total Subscriber</p>
                         <div class="input">
                              <input type="text" value="<?php if (isset($_SESSION['campaignDetails'])) {
                                                                 echo $_SESSION['campaignDetails'][5];
                                                            } ?>" name="totalSubs" id="totalsubs" placeholder="Total Subscriber" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Phone</p>
                         <div class="input">
                              <input type="number" value="<?php if (isset($_SESSION['campaignDetails'])) {
                                                                 echo $_SESSION['campaignDetails'][8];
                                                            } ?>" name="phoneNum" maxlength="10" id="phoneNum" placeholder="Phone" required>
                         </div>


                         <p class="fs-10 tx-center m-20"> Enter your details and Click Update to Start Showing Your Ad. Logo Update may take some time & you can not change or update your channel link after making a channel. </p>

                         <?php
                         $emailVerificationCheck = $_SESSION['userDetails'][6];

                         if ($emailVerificationCheck == 0) {
                              $v1 = '<a onclick="clickOn(';
                              $v2 = "'verification-pop')";
                              $v3 = '" class="btn btn-gra-purple cursor-pointer" style="margin: 25px auto 5px;" name="channel_submit">Update</a>';
                              echo $v1 . $v2 . $v3;
                         } else {
                              echo '<button type="submit" class="btn btn-gra-purple cursor-pointer" style="margin: 25px auto 5px;" name="channel_submit">Update</button>';
                         }
                         ?>




                    </form>
               </div>
          </div>
     </div>

</div>

<script>
     function displayImage(e) {
          if (e.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                    document.querySelector('#channelLogoPreview').setAttribute('src', e.target.result);
                    document.querySelector('#upload-channelLogo-icon').setAttribute('class', "fa fa-camera fs-30 p-y-40 videoInputThumbnailFile none");
                    document.querySelector('#channelLogoPreview').setAttribute('class', "img-fluid");

               }
               reader.readAsDataURL(e.files[0]);
          }
     }
</script>