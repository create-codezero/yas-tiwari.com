<?php
session_start();
require_once "../../connect/connectDb/config.php";
$_SESSION['path'] = "Assets";
$searchBoxValue = "";
$sql = "SELECT * FROM `78000_assets`";
if (isset($_POST['query']) && !empty($_POST['query'])) {
     $query = mysqli_escape_string($link, htmlentities($_POST['query']));
     $searchBoxValue = mysqli_escape_string($link, htmlentities($_POST['query']));
     $sql .= "WHERE `assetName` LIKE '%" . $query . "%' OR `assetDescription` LIKE '%$query" . $query . "%' OR `assetTags` LIKE '%" . $query . "%'";
}
$sql .= " ORDER BY assetId DESC";
$result = mysqli_query($link, $sql);
?>
<div class="m-t-20 sector w-100per flex e-c">
     <div class="search-box m-y-20">
          <div class="flex">
               <input type="text" name="query" placeholder="Search Yas ..." id="searchBox" value="<?php echo $searchBoxValue; ?>" required>
               <button class="search-btn flex flex-y-center" onclick="search(this)" data-page="Assets">
                    <i class="fa fa-search fs-20 cursor-pointer" aria-hidden="true" style="padding: 15px 30px;"></i>
               </button>
          </div>
     </div>
</div>

<div class="sector w-100per">
     <div class="grid grid-column-4 tab-grid-column-2 mob-grid-column-1  grid-gap-15 m-20 mob-m-10">
          <?php
          if (mysqli_num_rows($result) > 0) {
               while ($row = mysqli_fetch_assoc($result)) {
                    $like = "SELECT * FROM `78000_assetheart` WHERE `assetId` = '" . $row['assetId'] . "' AND `userId` = '" . $_SESSION['userDetails'][0] . "'";
                    $resultlike = mysqli_query($link, $like);
                    if (mysqli_num_rows($resultlike) > 0) {
                         $yes = "liked";
                    } else {
                         $yes = "";
                    }

          ?>

                    <!-- Asset Card -->
                    <div class="w-100per asset-card">
                         <div class="thumbnail">
                              <img src="<?php echo $row['assetThumbnail']; ?>" alt="" class="img-fluid">
                         </div>
                         <div class="content tx-center m-10">
                              <p class="fc-dark-blue font-poppins fw-500"><?php echo $row['assetName']; ?></p>
                              <p class="fc-light-dark-blue font-poppins fw-400 fs-10 m-t-5"><?php echo $row['assetDescription']; ?></p>
                         </div>
                         <div class="call-to-action m-t-5 block tx-center">
                              <p class="fc-light-dark-blue font-poppins fw-600 fs-10 m-5" id="download_count_<?php echo $row['assetId']; ?>">Total Downloads : <?php echo $row['assetDownloadCount']; ?></p>

                              <div class="bg-clr-4 w-100per flex e-c">
                                   <i class="fa fa-heart cursor-pointer fs-20 hover-bg-dark-blue hover-fc-primary fc-dark-white <?php if (!empty($yes)) {
                                                                                                                                       echo "hearted";
                                                                                                                                  } ?> icon<?php echo $row['assetId']; ?>" onclick="<?php if (isset($_SESSION['userDetails'])) {
                                                                                                                                                                                         echo 'like(this)';
                                                                                                                                                                                    } ?>" id="<?php echo $row['assetId']; ?>" style="width: max-content; max-height: 100px; height: 100%; padding: 12px 20px; border-right:1px solid var(--clr-11);" id="hearted"></i>
                                   <input type="hidden" id="like<?php echo $row['assetId']; ?>" value="<?php
                                                                                                         echo mysqli_num_rows($resultlike);
                                                                                                         ?>">
                                   <a class="download-btn fc-primary hover-fc-primary bg-clr-4" target="_blank" onclick="download_count(this)" id="<?php echo $row['assetId']; ?>" href="<?php echo $row['assetFile']; ?>" download>Download</a>
                              </div>

                         </div>
                    </div>

                    <!-- Asset Card -->

          <?php
               }
          } else {
               echo '<p class="tx-center font-poppins fw-500">🙄 Search Yas | No Assets Found 🙄 </p>';
          }
          ?>
     </div>
</div>

<!-- Ads -->
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