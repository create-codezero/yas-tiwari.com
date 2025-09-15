<?php
session_start();
require_once '../connect/connectDb/config.php';
$_SESSION['path'] = "Initial-Push";
if (isset($_GET['ts'])) {
     $_SESSION['sendingFrom'] = "landingpage" . "-" . $_GET['ts'];
} else {
     $_SESSION['sendingFrom'] = "landingpage" . "-" . "Unknown";
}

?>
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Initial Push - Grow on Youtube using Google Ads - Yas Tiwari</title>

     <!-- all new meta tags  -->
     <meta name="description" content="This is the service in which we promote your youtube channel by google ads and We also teach you how you can grow your youtube channel organically.">
     <meta name="keywords" content="how to promote youtube videos, how to promote youtube channel, how to promote youtube channel by google ads, google ads, how to get more views and subscribers, Initial Push, Initial push - Grow your youtube channel, Initial push service, yas tiwari, yastiwari. com, how to grow on youtube">
     <meta name="author" content="Yas Tiwari">


     <meta property="og:url" content="https://www.yastiwari.com/initial-push-grow-on-youtube-using-google-ads">
     <meta property="og:title" content="Promote your youtube channel | Initial Push - Grow on Youtube using Google Ads - Yas Tiwari">
     <meta property="og:description" content="This is the service in which we promote your youtube channel by google ads and We also teach you how you can grow your youtube channel organically.">
     <meta name="keywords" content="how to promote youtube videos, how to promote youtube channel, how to promote youtube channel by google ads, google ads, how to get more views and subscribers, Initial Push, Initial push - Grow your youtube channel, Initial push service, yas tiwari, yastiwari. com, how to grow on youtube">
     <meta property="og:type" content="article">
     <meta property="og:site_name" content="Initial Push - Grow on Youtube using Google Ads - Yas Tiwari">
     <meta name="robots" content="index,follow">
     <!-- all new meta tags  -->

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
     <link rel="stylesheet" href="../css/Sass/<?php echo $cssfile; ?>" />
     <link rel="icon" href="../media/Icons/logo.png">
     <link rel="stylesheet" href="./slider.css">
     <style>
          #google-ads-landing-img {
               height: max-content;
               padding: 40px 0 60px 0;
               background-color: #fff;
               color: #fff;
               text-align: center;
          }

          .m-h-1 {
               font-size: 40px;
          }

          .m-h-2 {
               font-size: 25px;
          }

          .m-h-3 {
               font-size: 18px;
          }

          .fc-primary {
               color: #0080ff;
          }

          .fc-yellow {
               color: #ffe100;
          }

          .fc-red {
               color: red;
          }

          .fc-dark {
               color: #040b1b;
          }

          i {
               margin: 0 10px;
               font-size: 25px;
          }

          .sector-img {
               height: 350px;
               background-size: contain;
               background-position: center;
               background-repeat: no-repeat;

               border-top: 3px solid #040b1b;
          }

          /* iframe {
               width: 650px;
               border: 7px solid #0080ff;
               height: 365.625px;
          }

          @media only screen and (max-width:700px) {
               .sector-img {
                    height: 150px !important;
               }

               iframe {
                    width: 80%;
               }
          } */
     </style>

</head>

<body>
     <div class="header-box" style="background-color: #040b1b; border: none;">
          <div class="header">
               <div class="branding">
                    <a href="#"><img src="../media/Icons/logo.png" alt="yastiwari menu" class="logo" style="height: 35px;"></a>
                    <a href="#" class="m-l-10 img-fluid">
                         <img src="../media/Icons/yastiwari.png" alt="Yas Tiwari" class="yastiwari">
                    </a>
               </div>
               <div class="header-menu">
                    <a class="btn btn-gra-blue" href="#main-box">
                         Let's Go
                    </a>
               </div>
          </div>
     </div>
     <div class="flex e-c" id="google-ads-landing-img" style="background-color: #040b1b; position:relative; max-width:100%; ">
          <div style="max-width: 700px; width: 85%;">
               <h1 class="m-h-1">Are <span class="fc-primary">you</span> <br> Ready to <span class="fc-primary">Beat</span><br> the <span class="fc-primary">Competition</span>.</h1>
               <hr style="height: 2px; background-color:#0080ff; width:30%; margin:auto; border:none;">
               <h1 class="m-h-3">Your <span class="fc-yellow">GROWTH</span> is our <span class="fc-yellow">AIM</span>.</h1>

               <p class="m-h-3">We <span class="fc-yellow">100% Guarantee</span> Increase in <span class="fc-yellow">Views & Subscribers</span>.</p>
          </div>

          <img src="../media/Icons/youtube.png" style="width: 120px; height:auto; position:absolute; bottom:0; left:0; transform:translate(-20%,35%) rotate(-30deg);" alt="how to grow on youtube, promote your youtube channel, yas tiwari">
          <div style="width: 120px; height:150px; position:absolute; bottom:-40px; right:0; overflow:hidden;">
               <img src="../media/Icons/google-ads.png" style="width: 120px; height:auto; transform:translate(35%,25%) rotate(15deg); " alt="Google ads, promote channel by google ads, yas tiwari">
          </div>

     </div>

     <!-- <div style="background-image: url('../media/Images/sector-img-1.png');" class="w-100per sector-img"></div> -->
     <div class="flex e-c tx-center p-y-30 flex-d-column">
          <div style="max-width: 700px; width: 85%;">
               <h1 class="m-h-1 fc-dark">Why Should you start with us?</h1>
               <h1 class="m-h-3">Because We <span class="fc-red">100% Guarantee</span> Increase in <span class="fc-red">Views & Subscribers</span>.</h1>
               <div class="iframe-container">
                    <iframe width="650" height="365.625" style="border: 7px solid #0080ff;" src="https://www.youtube.com/embed/8kMTBp13ETo" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
               <p class="fc-dark m-h-3 FW-500 font-poppins m-y-30">Hii, I'm <span class="fw-600">Yas Tiwari</span>. I am a Youtuber, Digital Marketing Expert, Content Strategist & also Google Ads Expert. I started my youtube channel on 15 August 2021 and our channel <span class="fw-600">completed 9k Subscribers in the first 15 days</span>. I done it using my <span class="fw-600">content creation skill and google ads</span>. After getting alots of demand, I decided to Help New Youtubers in their Journey. If you also want to grow your youtube channel like me <span class="fw-600">Join us now</span>.</p>
          </div>
          <a href="#main-box" style="background-color: #0080ff; border:none; padding:20px 50px; margin:15px 0; border-radius:10px;">
               <h3 style="line-height: 45px; margin:0 auto; font-size:28px;">I'm Ready to Grow
               </h3>
               <p class="m-h-2 f-poppins m-b-20" style="line-height: 20px; margin:0 auto 5px auto;font-size: 18px; color:#fff;">
                    <s class="fc-yellow"> ₹6000 </s> <span style="font-size:24px;"> ₹4999</span><small style="color:yellow; font-size:12px;"> GST Included</small>
               </p>
          </a>

     </div>

     <div class="flex e-c w-100per" id="google-ads-landing-img" style="background-color: #040b1b; ">
          <div style="max-width: 700px; width: 85%;">
               <h1 class="m-h-1" style="line-height: 45px; margin:20px auto 0 auto;"><span class="fc-primary">Millions</span> of People<br> are <span class="fc-primary">Struggling</span><br> to become a <span class="fc-primary">Youtuber</span>
               </h1>
               <h1 style="font-size: 16px;" class="m-h-3 f-poppins m-b-20" style="line-height: 20px; margin:0 auto;">
                    They're not getting Views and Subscribers although they're making AWESOME CONTENT.
               </h1>
          </div>
     </div>

     <div class="flex e-c tx-center p-y-30 flex-d-column">
          <div style="max-width: 700px; width: 85%;">
               <h1 class="m-h-1 fc-dark">What We'll Provide</h1>

               <h1 class="m-h-3 fc-primary"><samp style="font-size: 18px;"><i class="fas fa-check" style="color: #00c056;"></i></samp> 2 ONE-TO-ONE ZOOM MEETINGS with Yas Tiwari to discuss youtube growth and solve your problems related to youtube.</h1>

               <h1 class="m-h-3 fc-dark"><samp style="font-size: 18px;"><i class="fas fa-check" style="color: #00c056;"></i></samp> ₹4500 worth of Google ads service to increase your VIEWS & SUBSCRIBERS.</h1>

               <h1 class="m-h-3 fc-primary"><samp style="font-size: 18px;"><i class="fas fa-check" style="color: #00c056;"></i></samp> We will Review Your Youtube Channel And Tell you what you need to IMPROVE.</h1>

               <h1 class="m-h-3 fc-dark"><samp style="font-size: 18px;"><i class="fas fa-check" style="color: #00c056;"></i></samp>We will tell you how to drive more ORGANIC TRAFFIC on your Youtube Channel.</h1>

               <h1 class="m-h-3 fc-primary"><samp style="font-size: 18px;"><i class="fas fa-check" style="color: #00c056;"></i></samp> We will tell you strategies to make AWESOME CONTENT.</h1>

               <h1 class="m-h-3 fc-dark"><samp style="font-size: 18px;"><i class="fas fa-check" style="color: #00c056;"></i></samp> We will tell you how you can improve THE LOOK of your Youtube Channel. </h1>

               <h1 class="m-h-3 fc-primary"><samp style="font-size: 18px;"><i class="fas fa-check" style="color: #00c056;"></i></samp> We 100% Guarantee an increase in Views & Subscribers but your content will decide the amount of increase because the views & subscribers you get from this service are real. Don't worry we will also tell you how you can make good content.</h1>

          </div>
          <a href="#main-box" style="background-color: #0080ff; border:none; padding:20px 50px; margin:15px 0; border-radius:10px;">
               <h3 style="line-height: 45px; margin:0 auto; font-size:28px;">I'm Ready to Grow
               </h3>
               <p class="m-h-2 f-poppins m-b-20" style="line-height: 20px; margin:0 auto 5px auto;font-size: 18px; color:#fff;">
                    <s class="fc-yellow"> ₹6000 </s> <span style="font-size:24px;"> ₹4999</span><small style="color:yellow; font-size:12px;"> GST Included</small>
               </p>
          </a>



     </div>

     <div class="flex e-c w-100per" id="google-ads-landing-img" style="background-color: #040b1b; color:#fff;">
          <div style="max-width: 700px; width: 85%;">
               <h1 class="m-h-1" style="line-height: 45px; margin:20px auto 0 auto;">We'll drive <span class="fc-primary">Relevant</span><br> <span class="fc-primary">traffic</span> for your<br> <span class="fc-primary">Youtube Channel.</span>
               </h1>

               <img src="../media/Images/studio4.PNG" style="width: 100%; height:auto; margin:40px 0 10px 0;" alt="img-traffic-source">
               <img src="../media/Images/studio3.PNG" style="width: 100%; height:auto; margin:10px 0;" alt="img-result">

               <h1 class="m-h-1" style="line-height: 45px; margin:20px auto 0 auto;">See what <span class="fc-primary">we did</span><br>in the first <span class="fc-primary">15 days</span> after<br> creating <span class="fc-primary">our Youtube Channel.</span>
               </h1>
               <img src="../media/Images/studio1.PNG" style="width: 100%; height:auto; margin:40px 0 10px 0;" alt="img-result">

               <h1 class="m-h-1" style="line-height: 45px; margin:20px auto 0 auto;">Our Google ads<br> <span class="fc-primary">Experience</span>.
               </h1>
               <h1 style="font-size: 16px;" class="m-h-2 f-poppins m-b-20" style="line-height: 20px; margin:0 auto;">
                    We are doing this for the last <span class="fc-primary">3 Years</span> and We have <span class="fc-primary">many google ads accounts</span>, we're showing stats of <span class="fc-primary">3</span> of them.
               </h1>
               <img src="../media/Images/google-ads-acc-1.png" style="width: 100%; height:auto; margin:40px 0 10px 0;" alt="img-result">

               <img src="../media/Images/google-ads-acc-2.png" style="width: 100%; height:auto; margin:20px 0 10px 0;" alt="img-result">

               <img src="../media/Images/google-ads-acc-3.png" style="width: 100%; height:auto; margin:20px 0 10px 0;" alt="img-result">

               <h1 class="m-h-1" style="line-height: 45px; margin:20px auto 0 auto;">Fill out the <span class="fc-primary">Form</span> given Below to <span class="fc-primary">get Started</span>.
               </h1>


          </div>
     </div>


     <div class="flex w-100per e-c" id="main-box">
          <div class="flex e-c main-bar m-t-30" style="min-height: max-content;">

               <div class="form-box">

                    <div class="main-box">

                         <form action="../Payment/" class="tx-center" method="POST">
                              <h1 class="m-h-2 fw-500 m-t-20">
                                   You're just <span class="fc-dark fw-600">5</span> Clicks <span class="fc-dark fw-600">Away</span> from <span class="fw-600" style="color: #0080ff;">Massive Growth.</span>
                              </h1>
                              <p class="fs-40 tx-center">Fill Your Details</p>
                              <hr class="w-75per" style="margin: 20px auto;">

                              <div class="m-t-30" id="input-1">
                                   <div class="input">
                                        <input type="text" name="Name" id="input-box-1" placeholder="Full Name" required>
                                   </div>
                              </div>

                              <div class="none m-t-30" id="input-2">
                                   <div class="input">
                                        <input type="Email" name="Email" id="input-box-2" placeholder="E-mail" required>
                                   </div>
                              </div>

                              <div class="none m-t-30" id="input-3">
                                   <div class="input">
                                        <input type="text" name="Instagram" id="input-box-3" placeholder="Instagram Username" required>
                                   </div>
                              </div>

                              <div class="none m-t-30" id="input-4">
                                   <div class="input">
                                        <input type="number" name="PhoneNum" id="input-box-4" placeholder="Mobile Number" maxlength="10" required>
                                   </div>
                              </div>

                              <div class="none m-t-30" id="input-5">
                                   <div class="input">
                                        <input type="text" name="channel_link" id="input-box-5" placeholder="Channel Link" required>
                                   </div>
                              </div>

                              <div style="width: 100%; height: 10px; background-color: #044e7c23;margin: auto;">
                                   <div class="progress" id="progress" style="width: 0%; height: 100%; background-color: #0080ff;"></div>
                              </div>

                              <a class="btn btn-gra-blue cursor-pointer" style="margin: 10px auto 5px; border-radius: 5px !important; padding: 12px 30px !important;" onclick="nextInput(this)" id="1">Next</a>

                              <button class="btn btn-gra-purple cursor-pointer none" style="margin: 20px auto 5px; border-radius: 5px !important; padding: 12px 30px !important;" id="submit_btn" type="submit" name="payment">Submit</button>

                              <p class="tx-center m-y-20"> I'm not ready right now! <a href="javascript:void(0)" onclick="clickOn('remind-me-later')" class="fc-secondary">Remind me later</a> </p>
                         </form>
                    </div>
               </div>
          </div>
     </div>



     <div class="flex e-c w-100per flex-d-column" id="google-ads-landing-img" style="background-color: #040b1b; color:#fff;">
          <div style="max-width: 700px; width: 85%;">
               <h1 class="m-h-1">FAQ</h1>

               <h1 class="m-h-2 fw-500 m-t-40">How I will help you?</h1>

               <p class="fc-primary fs-15 FW-500 font-poppins">Well, I am a YouTuber and I Grew my youtube channel very massively in the first few days. I used google ads for promoting my channel and I learned many things about youtube channel and google ads like how to lower the CPV, how to make engaging ads, how to make a channel-specific ads campaign, and much more. If you join us I will help you in making your first ads campaign, and first ads videos and tell you the exact strategies which will help you to grow on youtube.</span></p>

               <h1 class="m-h-2 fw-500 m-t-40">What you should expect from Me?</h1>

               <p class="fc-primary fs-15 FW-500 font-poppins">
                    You can expect from me that I will run your ads campaign on as lowest CPV possible. I will give you the exact tips which I used on my channel and using right now and I will also tell you what you need to improve in your channel.
               </p>

               <h1 class="m-h-2 fw-500 m-t-40">Why I didn't reveal my face yet?</h1>

               <p class="fc-primary fs-15 FW-500 font-poppins">I don't think this should be the reason for not start growing. Many times or most probably you use apps and do transactions on them without knowing their owner/founder. I think <span class="fw-600">our Services are more Important than my face</span>.</p>

               <h1 class="m-h-2 fw-500 m-t-40">Do we need more money to take this Service after paying here?</h1>

               <p class="fc-primary fs-15 FW-500 font-poppins"><span class="fw-600">No</span>, you don't need to pay anything to take this service after here. </p>

               <h1 class="m-h-2 fw-500 m-t-40">What should I need, to start?</h1>

               <p class="fc-primary fs-15 FW-500 font-poppins">These are some important things:<br> 1) You need to do HARD+SMART Work.<br> 2) You need to learn all the things we'll teach. <br> 3) You need to stay connected with us till the service Ends. <br> 4) You need to understand the value of time. <br> 5) You must be fast/Quick action taker.</p>



          </div>
          <a href="#main-box" style="background-color: #0080ff; border:none; padding:20px 50px; margin:50px 0 0 0; border-radius:10px;">
               <h3 style="line-height: 45px; margin:0 auto; font-size:28px;">I'm Ready to Grow
               </h3>
               <p class="m-h-2 f-poppins m-b-20" style="line-height: 20px; margin:0 auto 5px auto;font-size: 18px; color:#fff;">
                    <s class="fc-yellow"> ₹6000 </s> <span style="font-size:24px;"> ₹4999</span><small style="color:yellow; font-size:12px;"> GST Included</small>
               </p>
          </a>
     </div>

     <a href="https://www.youtube.com/yastiwari">
          <div style="background-image: url('../media/Images/sector-img-2.png');" class="w-100per sector-img"></div>
     </a>
     <!-- <div style="margin-bottom: 100px; width: 100%;"></div> -->

     <div class="flex e-c" style="background-color: #54bdff23; padding: 15px 0;">

          <div class="flex tx-center">
               <a href="https://www.facebook.com/itsYastiwari" class="fc-secondary">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
               </a>
               <a href="https://www.instagram.com/itsYastiwari" class="fc-secondary">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
               </a>
               <a href="https://www.facebook.com/itsYastiwari" class="fc-secondary">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
               </a>
               <a href="mailto:business.yastiwari@gmail.com" class="fc-secondary">
                    <i class="fas fa-envelope" aria-hidden="true"></i>
               </a>
          </div>

     </div>

     <div class="flex e-c" style="background-color: #54bdff23; padding: 15px 0;">

          <p class="font-poppins">&copy; All Rights Reserved Yastiwari.com</p>

     </div>

     <p class="none">
          tags
     </p>

     <!-- Remind me Later Pop up -->

     <div class="sector z-2 pos-fixed flex e-c flex-d-column h-100vh none" id="remind-me-later" style="top: 0; left:0; background-color: var(--shadow-clr);">


          <div class="form-box  bg-clr-1">
               <div class="main-box">
                    <div class="block tx-right w-100per" onclick="clickOn('remind-me-later')">
                         <i class="fa fa-times fc-dark-blue fs-20 cursor-pointer hover-fc-primary" aria-hidden="true" style="padding: 15px 20px;"></i>
                         <hr class="bg-dark-blue">
                    </div>
                    <form class="m-t-20">
                         <p class="fs-20 tx-center" id="mailsentmsg">Enter Your E-mail</p>
                         <p class="fs-15 fw-500 mailsenthideit" style="margin-top: 20px; margin-left: 2px;">E-mail</p>
                         <div class="input mailsenthideit">
                              <input type="Email" name="email" id="email" placeholder="E-mail" class="mailsenthideit" required>
                         </div>

                         <p class="fs-10 tx-center m-t-10 mailsenthideit"> We will Remind you after some time. </p>


                         <a class="btn btn-gra-purple cursor-pointer mailsenthideit" style="margin: 20px auto 10px;" onclick="remindMe()" href="javascript:void(0)" id="remindMe">Submit</a>
                    </form>
               </div>
          </div>

     </div>

     <!-- Register done Pop up -->

     <div class="sector z-2 pos-fixed flex e-c flex-d-column h-100vh none" id="registerDone" style="top: 0; left:0; background-color: var(--shadow-clr);">


          <div class="form-box  bg-clr-1">
               <div class="main-box">
                    <div class="block tx-right w-100per" onclick="gotoyt()">
                         <i class="fa fa-times fc-dark-blue fs-20 cursor-pointer hover-fc-primary" aria-hidden="true" style="padding: 15px 20px;"></i>
                         <hr class="bg-dark-blue">
                    </div>
                    <form class="m-t-20">
                         <p class="fs-20 tx-center" id="mailsentmsg">You're Successfully Registered.</p>

                         <a class="btn btn-primary cursor-pointer mailsenthideit" style="margin: 20px auto 10px;" onclick="gotoyt()" href="javascript:void(0)" id="remindMe">Ok</a>
                    </form>
               </div>
          </div>

     </div>

     <script>
          var fullName, email, nstagram, mobile, channelLink, clientGoal, howKnow, budget;
          var details = ["0"];

          function nextInput(currentInput) {

               var currentId = currentInput.id;
               var inputValue = $(`#input-box-${currentId}`).val();
               var widthPer = 20 * Number(currentId);
               var widthPercent = String(widthPer) + "%";


               if (inputValue == null || inputValue == "") {
                    alert("Fill the Input First")
               } else {
                    var nextId = Number(currentId) + 1;


                    if (currentId == 4) {
                         var progressBar = document.getElementById("progress");
                         progressBar.style.width = widthPercent;

                         $(`#input-${currentId}`).toggleClass("none");
                         $(`#input-${nextId}`).toggleClass("none");

                         $(`#${currentId}`).toggleClass("none");
                         $("#submit_btn").toggleClass("none");

                         details.push(inputValue);
                    } else {
                         var btn = document.getElementById(currentId);
                         btn.setAttribute("id", nextId);

                         $(`#input-${currentId}`).toggleClass("none");
                         $(`#input-${nextId}`).toggleClass("none");

                         var progressBar = document.getElementById("progress");

                         progressBar.style.width = widthPercent;

                         details.push(inputValue);


                    }

               }

          }

          function submitForm() {

               var inputValue = $(`#input-box-5`).val();
               details.push(inputValue);

               var today = new Date();
               var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
               var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
               var dateTime = date + ' ' + time;

               var fullName = details[1];
               var email = details[2];
               var instagram = details[3];
               var mobile = details[4];
               var channelLink = inputValue;


               if (fullName == null || fullName == "" || email == null || email == "" || instagram == null || instagram == "" || mobile == null || mobile == "" || channelLink == null || channelLink == "") {

                    alert("Reload & Fill the Form Again");


               } else {

                    $.post('actions.php', {
                              fullName: fullName,
                              email: email,
                              instagram: instagram,
                              mobile: mobile,
                              channelLink: channelLink,
                              currentTime: dateTime,
                              clientDetails: "set"
                         },
                         function(data, status) {
                              if (data == "done") {
                                   $("#registerDone").toggleClass("none");
                              }
                         });

               }

          }

          function gotoyt() {
               document.location = "https://www.youtube.com/yastiwari";
          }

          function remindMe() {

               var email = $(`#email`).val();


               var today = new Date();
               var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
               var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
               var dateTime = date + ' ' + time;

               if (email == null || email == "") {

                    alert("Fill the Email First");


               } else {

                    $.post('actions.php', {
                              email: email,
                              currentTime: dateTime,
                              remindDetails: "set"
                         },
                         function(data, status) {
                              if (data == "done") {
                                   alert("Email Saved Successfully!");
                                   $("#remind-me-later").toggleClass("none");
                                   document.location = "https://www.youtube.com/yastiwari";
                              }
                         });

               }


          }
     </script>


     <script src="../js/actions.js"></script>



</body>

</html>