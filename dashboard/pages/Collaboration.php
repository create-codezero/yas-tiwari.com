<?php
session_start();
require_once "../../connect/connectDb/config.php";
$_SESSION['path'] = "Collaboration";



$searchBoxValue = "";
$sql = "SELECT * FROM `78000_collab_profile`";
if (isset($_POST['query']) && !empty($_POST['query'])) {
     $query = mysqli_escape_string($link, htmlentities($_POST['query']));
     $searchBoxValue = mysqli_escape_string($link, htmlentities($_POST['query']));
     $sql .= "WHERE `channelName` LIKE '%" . $query . "%' OR `channelDesc` LIKE '%" . $query . "%' OR `channelCat` LIKE '%" . $query . "%'";
}
$sql .= " ORDER BY profileId DESC";
$result = mysqli_query($link, $sql);

?>
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



<div class="m-t-20 sector w-100per flex e-c">
     <div class="search-box m-y-20">
          <div class="flex">
               <input type="text" name="query" placeholder="Search Yas ..." id="searchBox" value="<?php echo $searchBoxValue; ?>" required>
               <button class="search-btn flex flex-y-center" onclick="search(this)" data-page="Collaboration">
                    <i class="fa fa-search fs-20 cursor-pointer" aria-hidden="true" style="padding: 15px 30px;"></i>
               </button>
          </div>
     </div>
</div>

<div class="sector w-100per">
     <div class="grid grid-column-4 tab-grid-column-2 mob-grid-column-1  grid-gap-15 m-20 mob-m-10">

          <!-- Collaboration Card -->
          <?php
          if (mysqli_num_rows($result) > 0) {
               while ($row = mysqli_fetch_assoc($result)) {

          ?>
                    <div class="w-100per asset-card m-auto m-b-20">
                         <div class="Banner bg-clr-4 flex e-c" style="height: 100px; width: 100%;" id="collab_top_banner">
                              <!-- <img src="../../media/Images/thumbnail_1.png" alt="" class="img-fluid"> -->
                              <p class="font-bebas fs-70 ls-10 fc-primary fc-primary">YOUTUBE</p>
                         </div>
                         <a href="<?php echo $row['channelLink'] ?>" target="_blank">
                              <img src="../data/user/collabchannellogo/<?php echo $row['logoLink'] ?>" alt="Channel-logo" class="channel-logo">
                         </a>

                         <div class="block m-t-40"></div>
                         <div class="content tx-center m-10">
                              <p class="fc-dark-blue font-poppins fw-500"><?php echo $row['channelName'] ?></p>
                              <p class="fc-light-dark-blue font-poppins fw-400 fs-10 m-t-5"><?php echo substr($row['channelDesc'], 0, 199); ?></p>

                              <p class="fc-primary font-poppins fw-400 fs-15 m-t-5">Categories : <?php echo substr($row['channelCat'], 0, 39); ?></p>
                         </div>
                         <div class="call-to-action m-t-5 block tx-center">
                              <p class="fc-light-dark-blue font-poppins fw-600 fs-10 m-5">Total Subscribers : <?php echo $row['subscriberCount'] ?></p>

                              <div class="bg-primary w-100per flex e-c" id="collab_top_banner">
                                   <a href="https://www.instagram.com/<?php echo $row['instagramId'] ?>"><i class="fab fa-instagram cursor-pointer fs-20" style="width: max-content; max-height: 100px; height: 100%; padding: 12px 20px;" id="hearted"></i></a>

                                   <a href="tel:<?php echo $row['phoneNum'] ?>" class="download-btn bg-clr-4 fc-primary hover-fc-primary"><i class="fa fa-phone" aria-hidden="true"></i> Phone</a>

                                   <a href="mailto:<?php echo $row['emailId'] ?>"><i class="fas fa-envelope cursor-pointer fs-20" style="width: max-content; max-height: 100px; height: 100%; padding: 12px 20px;" id="hearted"></i></a>
                              </div>
                         </div>
                    </div>
          <?php
               }
          } else {
               echo '<p class="tx-center font-poppins fw-500"> 🙄 Search Yas | No Profile Found 🙄 </p>';
          }
          ?>

          <!-- Collaboration Card -->

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