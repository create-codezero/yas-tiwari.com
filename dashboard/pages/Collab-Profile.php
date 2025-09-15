<?php
session_start();
require_once "../../connect/connectDb/config.php";
$_SESSION['path'] = "Collab-Profile";
?>

<!-- ads -->
<?php
$substracted = "false";
$visitCounted = 0;
$rawCount = count($_SESSION['visited']);
$thisPage = $rawCount + 1;

if (!isset($_SESSION['noAds'])) {

     if ($thisPage  > $_SESSION['numberofAds']) {
          while ($thisPage  > $_SESSION['numberofAds']) {
               $thisPage  = $thisPage  - 1;
               $substracted = "true";
          }
     }

     if ($substracted == "true") {
          $lastPage = $_SESSION['visited'][$rawCount - 1];
          while ($thisPage == $lastPage) {
               $thisPage = rand(1, $_SESSION['numberofAds']);
          }
     }

     if ($thisPage  <= $_SESSION['numberofAds']) {
          // COUNTING VISIT
          if ($visitCounted == 0) {
               array_push($_SESSION['visited'], $thisPage);
          }
          $currentAds = $thisPage;
          $exactAds = 'Ads' . $currentAds;
?>

          <div class="flex e-c m-t-20">

               <div class="box flex p-y-20 flex-y-center m-20 mob-flex-column overflow-hidden pos-relative" style="justify-content: space-between;" id="ad-preview">
                    <span class="pos-absolute fc-primary fw-700 fs-10" style="background-color: #ffff00; padding: 2px 5px; border-radius: 0 0 3px 0; top: 0; left: 0;">Ad</span>
                    <div class="flex flex-y-center">
                         <div class="ad-logo m-x-20 flex e-c" style="max-width: 50px;">
                              <img src="../data/user/channellogo/<?php echo $_SESSION[$exactAds][3]; ?>" alt="<?php echo $_SESSION[$exactAds][1]; ?> logo" class="img-fluid border-radius-100per">
                         </div>
                         <div class="ad-content m-r-10">
                              <p class="fc-dark-blue fs-20 fw-600"><?php echo $_SESSION[$exactAds][1]; ?></p>
                              <p class="fc-primary fw-500">Categories : <?php echo $_SESSION[$exactAds][5]; ?></p>
                              <p class="fc-dark-blue fs-10"><?php echo $_SESSION[$exactAds][4]; ?></p>
                         </div>
                    </div>

                    <div class="ad-call-to-action mob-m-t-10 mob-w-100per mob-m-x-10 m-r-20">
                         <a href="<?php echo $_SESSION[$exactAds][2]; ?>" target="_blank" class="ad-btn bg-clr-1 fc-dark-blue m-auto" style="border: 1px solid var(--clr-5);" onclick="adClicked('<?php echo $_SESSION[$exactAds][0]; ?>','<?php echo $currentAds; ?>','<?php echo $_SESSION['userUniqueCode']; ?>')">Visit</a>
                    </div>
               </div>

          </div>

<?php
     }
}

// ADS QUERIES DONE

?>

<div class="sector w-100per e-c flex flex-d-column">

     <p class="fs-30 tx-center m-20 fw-500">Your Collaboration Profile</p>

     <!-- Collaboration Card -->
     <?php
     if (isset($_SESSION['collabDetails'])) {
     ?>
          <div class="w-100per asset-card m-auto m-b-20" style="max-width: 330px;">
               <div class="Banner  bg-clr-4 flex e-c" style="height: 100px; width: 100%;" id="collab_top_banner">
                    <!-- <img src="../../media/Images/thumbnail_1.png" alt="" class="img-fluid"> -->
                    <p class="font-bebas fs-70 ls-10 fc-primary fc-primary">YOUTUBE</p>
               </div>
               <img src="../data/user/collabchannellogo/<?php echo $_SESSION['collabDetails'][2] ?>" alt="Channel-logo" class="channel-logo">
               <div class="block m-t-40"></div>
               <div class="content tx-center m-10">
                    <p class="fc-dark-blue font-poppins fw-500"><?php echo $_SESSION['collabDetails'][0] ?></p>
                    <p class="fc-light-dark-blue font-poppins fw-400 fs-10 m-t-5"><?php echo $_SESSION['collabDetails'][3] ?></p>

                    <p class="fc-primary font-poppins fw-400 fs-15 m-t-5">Categories : <?php echo $_SESSION['collabDetails'][4] ?></p>
               </div>
               <div class="call-to-action m-t-5 block tx-center">
                    <p class="fc-light-dark-blue font-poppins fw-600 fs-10 m-5">Total Subscribers : <?php echo $_SESSION['collabDetails'][5] ?></p>

                    <div class="bg-primary w-100per flex e-c">
                         <a href="https://www.instagram.com/<?php echo $_SESSION['collabDetails'][6] ?>"><i class="fab fa-instagram cursor-pointer fs-20" style="width: max-content; max-height: 100px; height: 100%; padding: 12px 20px;" id="hearted"></i></a>
                         <a href="tel:<?php echo $_SESSION['collabDetails'][8] ?>" class="download-btn bg-clr-4 hover-fc-primary fc-primary"><i class="fa fa-phone" aria-hidden="true"></i> Phone</a>
                         <a href="mailto:<?php echo $_SESSION['collabDetails'][7] ?>"><i class="fas fa-envelope cursor-pointer fs-20" style="width: max-content; max-height: 100px; height: 100%; padding: 12px 20px;" id="hearted"></i></a>
                    </div>
               </div>
          </div>
          <?php
     } else {
          $collabUser = $_SESSION['userDetails'][5];
          $check_collab_query = " SELECT * FROM `78000_collab_profile` WHERE collabUser = '$collabUser' ";
          $check_collab_fire = mysqli_query($link, $check_collab_query);
          $check_collab_count = mysqli_num_rows($check_collab_fire);
          if ($check_collab_count == 1) {
               while ($collab = mysqli_fetch_assoc($check_collab_fire)) {
                    $collabDetails = array($collab['channelName'], $collab['channelLink'], $collab['logoLink'], $collab['channelDesc'], $collab['channelCat'], $collab['subscriberCount'], $collab['instagramId'], $collab['emailId'], $collab['phoneNum'], $collab['collabUser']);
                    $_SESSION['collabDetails'] = $collabDetails;
          ?>
                    <div class="w-100per asset-card m-auto m-b-20" style="max-width: 330px;">
                         <div class="Banner  bg-clr-4 flex e-c" style="height: 100px; width: 100%;" id="collab_top_banner">
                              <!-- <img src="../../media/Images/thumbnail_1.png" alt="" class="img-fluid"> -->
                              <p class="font-bebas fs-70 ls-10 fc-primary fc-primary">YOUTUBE</p>
                         </div>
                         <img src="../data/user/collabchannellogo/<?php echo $_SESSION['collabDetails'][2] ?>" alt="Channel-logo" class="channel-logo">
                         <div class="block m-t-40"></div>
                         <div class="content tx-center m-10">
                              <p class="fc-dark-blue font-poppins fw-500"><?php echo $_SESSION['collabDetails'][0] ?></p>
                              <p class="fc-light-dark-blue font-poppins fw-400 fs-10 m-t-5"><?php echo $_SESSION['collabDetails'][3] ?></p>

                              <p class="fc-primary font-poppins fw-400 fs-15 m-t-5">Categories : <?php echo $_SESSION['collabDetails'][4] ?></p>
                         </div>
                         <div class="call-to-action m-t-5 block tx-center">
                              <p class="fc-light-dark-blue font-poppins fw-600 fs-10 m-5">Total Subscribers : <?php echo $_SESSION['collabDetails'][5] ?></p>

                              <div class="bg-primary w-100per flex e-c">
                                   <a href="https://www.instagram.com/<?php echo $_SESSION['collabDetails'][6] ?>"><i class="fab fa-instagram cursor-pointer fs-20" style="width: max-content; max-height: 100px; height: 100%; padding: 12px 20px;" id="hearted"></i></a>
                                   <a href="tel:<?php echo $_SESSION['collabDetails'][8] ?>" class="download-btn bg-clr-4 hover-fc-primary fc-primary"><i class="fa fa-phone" aria-hidden="true"></i> Phone</a>
                                   <a href="mailto:<?php echo $_SESSION['collabDetails'][7] ?>"><i class="fas fa-envelope cursor-pointer fs-20" style="width: max-content; max-height: 100px; height: 100%; padding: 12px 20px;" id="hearted"></i></a>
                              </div>
                         </div>
                    </div>
     <?php
               }
          } else {
               echo '<p class="tx-center">Please create a collaboration Profile to see your Profile.</p>';
          }
     }


     ?>
     <?php if (isset($_SESSION['collabDetails'])) {
          echo $_SESSION['collabDetails'][0];
     } ?>
     <!-- Collaboration Previews -->

     <div class="sector flex e-c h-100per m-y-20 w-100per p-y-20">
          <div class="form-box">
               <div class="main-box">
                    <form action="./actions/collab.php" enctype="multipart/form-data" method="POST">
                         <p class="fs-40 tx-center">Edit Profile</p>


                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Channel Name</p>
                         <div class="input">
                              <input type="text" value="<?php if (isset($_SESSION['collabDetails'])) {
                                                                 echo $_SESSION['collabDetails'][0];
                                                            } ?>" name="channelName" id="channelName" placeholder="Channel Name" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Channel Link</p>
                         <div class="input">
                              <input type="text" value="<?php if (isset($_SESSION['collabDetails'])) {
                                                                 echo $_SESSION['collabDetails'][1];
                                                            } ?>" name="channelLink" id="channelLink" placeholder="Use Full Link" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Logo</p>

                         <?php

                         if (isset($_SESSION['collabDetails'])) {
                              $imageContent = '<img src="../data/user/collabchannellogo/' . $_SESSION['collabDetails'][2] . '" alt="Channel Logo" class="img-fluid" style="height:100px; max-width:100px; width:100%; border-radius:100%;" id="channelLogoPreview">';

                              $inputContent = '<input type="text" value="' . $_SESSION['collabDetails'][2] . '" name="logoLink" style="display:none;" id="logoLink">';
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
                              <input type="text" value="<?php if (isset($_SESSION['collabDetails'])) {
                                                                 echo $_SESSION['collabDetails'][3];
                                                            } ?>" name="channelDesc" id="channelDesc" placeholder="Short Description" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Category</p>
                         <div class="input">
                              <input type="text" value="<?php if (isset($_SESSION['collabDetails'])) {
                                                                 echo $_SESSION['collabDetails'][4];
                                                            } ?>" name="category" id="category" placeholder="Category" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Total Subscriber</p>
                         <div class="input">
                              <input type="text" value="<?php if (isset($_SESSION['collabDetails'])) {
                                                                 echo $_SESSION['collabDetails'][5];
                                                            } ?>" name="totalSubs" id="totalsubs" placeholder="Total Subscriber" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Instagram Id</p>
                         <div class="input">
                              <input type="text" value="<?php if (isset($_SESSION['collabDetails'])) {
                                                                 echo $_SESSION['collabDetails'][6];
                                                            } ?>" name="instagramId" id="instagramId" placeholder="Don't use link or @" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Email Id</p>
                         <div class="input">
                              <input type="text" value="<?php if (isset($_SESSION['collabDetails'])) {
                                                                 echo $_SESSION['collabDetails'][7];
                                                            } ?>" name="emailId" id="emailId" placeholder="Email" required>
                         </div>

                         <p class="fs-15 fw-500" style="margin-top: 20px; margin-left: 2px;">Phone</p>
                         <div class="input">
                              <input type="number" value="<?php if (isset($_SESSION['collabDetails'])) {
                                                                 echo $_SESSION['collabDetails'][8];
                                                            } ?>" name="phoneNum" maxlength="10" id="phoneNum" placeholder="Phone" required>
                         </div>

                         <?php
                         $emailVerificationCheck = $_SESSION['userDetails'][6];

                         if ($emailVerificationCheck == 0) {
                              $v1 = '<a onclick="clickOn(';
                              $v2 = "'verification-pop')";
                              $v3 = '" class="btn btn-gra-purple cursor-pointer" style="margin: 25px auto 5px;" name="campaign_submit">Update</a>';
                              echo $v1 . $v2 . $v3;
                         } else {
                              echo '<button type="submit" class="btn btn-gra-purple cursor-pointer" style="margin: 25px auto 5px;" name="profile_submit">Update</button>';
                         }
                         ?>
                    </form>
               </div>
          </div>
     </div>
</div>


<!-- ads -->
<?php

if (!isset($_SESSION['noAds'])) {

     while ($thisPage  > $_SESSION['numberofAds']) {
          $thisPage  = $thisPage  - 1;
     }

     if ($thisPage  <= $_SESSION['numberofAds']) {
          if ($thisPage == $_SESSION['numberofAds']) {
               $currentAds = $thisPage  - 1;
          } else {
               $currentAds = $thisPage  + 1;
          }
          $exactAds = 'Ads' . $currentAds;
?>

          <div class="flex e-c">

               <div class="box flex p-y-20 flex-y-center m-20 mob-flex-column overflow-hidden pos-relative" style="justify-content: space-between;" id="ad-preview">
                    <span class="pos-absolute fc-primary fw-700 fs-10" style="background-color: #ffff00; padding: 2px 5px; border-radius: 0 0 3px 0; top: 0; left: 0;">Ad</span>
                    <div class="flex flex-y-center">
                         <div class="ad-logo m-x-20 flex e-c" style="max-width: 50px;">
                              <img src="../data/user/channellogo/<?php echo $_SESSION[$exactAds][3]; ?>" alt="<?php echo $_SESSION[$exactAds][1]; ?> logo" class="img-fluid border-radius-100per">
                         </div>
                         <div class="ad-content m-r-10">
                              <p class="fc-dark-blue fs-20 fw-600"><?php echo $_SESSION[$exactAds][1]; ?></p>
                              <p class="fc-primary fw-500">Categories : <?php echo $_SESSION[$exactAds][5]; ?></p>
                              <p class="fc-dark-blue fs-10"><?php echo $_SESSION[$exactAds][4]; ?></p>
                         </div>
                    </div>

                    <div class="ad-call-to-action mob-m-t-10 mob-w-100per mob-m-x-10 m-r-20">
                         <a href="<?php echo $_SESSION[$exactAds][2]; ?>" target="_blank" class="ad-btn bg-clr-1 fc-dark-blue m-auto" style="border: 1px solid var(--clr-5);" onclick="adClicked('<?php echo $_SESSION[$exactAds][0]; ?>','<?php echo $_SESSION['userUniqueCode']; ?>')">Visit</a>
                    </div>
               </div>

          </div>

<?php
     }
}

?>

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