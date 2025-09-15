<?php
session_start();
require_once './connect/connectDb/config.php';


if (isset($_GET['redirectto'])) {

     $_SESSION['pathishere'] = $_GET['redirectto'];
}

if (isset($_GET['dpage'])) {

     $_SESSION['path'] = $_GET['dpage'];
}

date_default_timezone_set("Asia/Kolkata");
$hour = date('H');
if ($hour <= 18 && $hour >= 6) {
     $_SESSION['mode'] = "light";
} else {
     $_SESSION['mode'] = "dark";
}
?>

<!DOCTYPE html>
<html lang="en" data-theme="dark">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
     <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" /> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
     <link rel=" stylesheet" href="./css/Sass/<?php echo $cssfile; ?>" />
     <title>Business & Marketing Expert - Yas tiwari</title>
     <!-- all new meta tags  -->
     <meta name="description" content="We help new youtubers, businesses, companies in their Growth by providing Digital Marketing Services.We're providing MOST AFFORDABLE Digital Marketing Services.It's only platform where you can Advertise for your youtube channel for FREE, It's only platfor where you can collaborate with other youtubers, It's only platform providing FREE VALUABLE Assets for youtube channel.">
     <meta name="keywords" content="digital marketing, digital marketing agency, what is digital marketing, digital marketing company, digital marketing services, digital marketing course, digital marketing strategy, Youtube, Facebook Ads, Google Ads,How to grow a youtube channel, how to promote youtube channel, yas, y a s, youtube channel, youtube channel kaise grow kare, how to promote youtube videos, how to promote youtube channel, how to promote youtube channel by google ads, google ads, how to get more views and subscribers, Initial Push, Initial push - Grow your youtube channel, Initial push service, yas tiwari, yastiwari. com, how to grow on youtube">
     <meta name="author" content="Yas Tiwari">


     <meta property="og:url" content="https://www.yastiwari.com/">
     <meta property="og:title" content="Promote your youtube channel | Initial Push - Grow on Youtube using Google Ads - Yas Tiwari">
     <meta property="og:description" content="We help new youtubers, businesses, companies in their Growth by providing Digital Marketing Services.We're providing MOST AFFORDABLE Digital Marketing Services.It's only platform where you can Advertise for your youtube channel for FREE, It's only platfor where you can collaborate with other youtubers, It's only platform providing FREE VALUABLE Assets for youtube channel.">
     <meta name="keywords" content="digital marketing, digital marketing agency, what is digital marketing, digital marketing company, digital marketing services, digital marketing course, digital marketing strategy, Youtube, Facebook Ads, Google Ads,How to grow a youtube channel, how to promote youtube channel, yas, y a s, youtube channel, youtube channel kaise grow kare, how to promote youtube videos, how to promote youtube channel, how to promote youtube channel by google ads, google ads, how to get more views and subscribers, Initial Push, Initial push - Grow your youtube channel, Initial push service, yas tiwari, yastiwari. com, how to grow on youtube"">
     <meta property=" og:type" content="article">
     <meta property="og:site_name" content="Marketing & Mentoring Solution for New Youtubers, Businesses, Companies - Yas tiwari">
     <meta name="robots" content="index,follow">
     <!-- all new meta tags  -->
     <link rel="icon" href="./media/Images/LOGO_CIRCLE.png">
</head>

<body>
     <div class="header-box">
          <div class="header">
               <div class="branding">
                    <a href="#"><img src="./media/Icons/logo.png" alt="Logo" class="logo"></a>
                    <a href="#" class="m-l-10 img-fluid">
                         <img src="./media/Icons/yastiwari.png" alt="Yas Tiwari" class="yastiwari">
                    </a>
               </div>
               <div class="header-menu">
                    <a class="btn btn-gra-blue" href="./user/auth/signin/" title="Sign In">
                         Sign In
                    </a>
               </div>
          </div>
     </div>
     <!-- Landing section -->

     <div class="sector grid h-100vh tab-h-100per tab-p-y-40 mob-h-100per grid-column-2 tab-grid-column-1 mob-p-y-80" id="landing">

          <div class="flex e-c mob-m-b-50">
               <div class="m-x-100 mob-m-x-30 tab-tx-center">
                    <p class="heading fc-primary fw-600">Your <span class="fc-secondary">Growth</span><br> Is Our <span class="fc-secondary">Aim</span>.</p>
                    <!-- <p class="sub-heading fc-primary">yas tiwrai - how to grow on youtube</p> -->
                    <br>
                    <p class="normal-tx fc-primary">We're Marketing & Mentoring Solution for <span class="fc-secondary">Influencers & businesses</span>. We help them in their Growth by providing Digital Marketing & Mentoring Services. We're providing MOST AFFORDABLE Digital Marketing & Mentoring Services.</p>
                    <br>
                    <p class="normal-tx fc-primary"><span class="fc-secondary">It's the only platform</span> where you can <span class="fc-secondary">Advertise</span> for your youtube channel for <span class="fc-secondary">FREE</span>, It's the only platform where you can collaborate with other Youtubers, It's the only platform providing <span class="fc-secondary">FREE VALUABLE</span> Assets for Influencers & businesses.</p>
                    <div class="tab-m-y-10"></div>
                    <a class="btn btn-gra-purple tab-m-auto m-y-20" href="./user/auth/signup/" title="Sign Up">Get Started</a>
               </div>
          </div>
          <div class="flex e-c m-x-100 mob-m-x-50 tab-m-x-100 tab-p-y-20">

               <img src="./media/Illustrations/illu_home_1.png" alt="Yas tiwari home page illustration" class="img-fluid">

          </div>

     </div>

     <!-- <div class="w-75per bg-clr-4 m-auto m-t-30" style="height: 2px;"></div> -->
     <!-- Services -->

     <div class="flex flex-d-column e-c w-100per">

          <div class="tx-center m-t-20 text-container">
               <p class="heading"> Our Services </p>
               <p class="fs-20">We are provinding these services to Influencers & businesses.</p>
          </div>


          <div class="flex w-100per e-c m-t-20 font-poppins" style="flex-wrap: wrap;" id="service-container">


               <div class="flex m-10 e-c service-card">
                    <a href="./contact-us/">
                         <div class="tx-center m-40">
                              <img src="./media/svg/undraw_social_dashboard_re_ocbd.svg" alt="Social Media Expert" class="service-img">

                              <p class="fs-30 m-t-30">Social Media</p>

                              <p class="m-t-10" style="font-size: 14px;">
                                   Digital Marketing revolves around social media and Yas Tiwari is a Social Media Expert. Yas tiwari is expert of Youtube, Instagram & Facebook. Yas Tiwari is teaching about Digital Marketing, Business and Social Media Growth on youtube and has an awesome audience may be you're one of them. Yas tiwari can teach you that how you can grow on social media and make audience. <br><br>Having audience is like you have most POWERFUL SUCCESS MANTRA. Contact us for Social Media Growth Guidance.
                              </p>
                         </div>
                    </a>

               </div>



               <div class="flex m-10 e-c service-card">
                    <a href="./contact-us/">
                         <div class="tx-center m-40">
                              <img src="./media/svg/undraw_social_growth_re_tjy9.svg" alt="Marketing Expert" class="service-img">

                              <p class="fs-30 m-t-30">Marketing</p>

                              <p class="m-t-10" style="font-size: 14px;">
                                   If you're a Business Owner then Marketing is very important for you because a Good Marketing can sell a Bad Product And Bad Marketing can kill the sells of a Good Product.<br><br>Yas tiwari is a Marketing Expert & Yas tiwari can help you in doing a good marketing and Make your product 'A Competition Killing Product'.<br><br> So If you have a Product or Business and you want to do Good Marketing but Don't Know 'How to?' them Contact Us Now! and Yas tiwari will guide you.
                              </p>
                         </div>
                    </a>
               </div>



               <div class="flex m-10 e-c service-card">
                    <a href="./initial-push-grow-on-youtube-using-google-ads/">
                         <div class="tx-center m-40">
                              <img src="./media/svg/undraw_stepping_up_g6oo (1).svg" alt="Social Media Expert" class="service-img">

                              <p class="fs-30 m-t-30">Initial Push</p>

                              <p class="m-t-10" style="font-size: 14px;">
                                   Yas Tiwari is teaching about Social Media Growth (specially Youtube) and he noticed that people are making awesome content even after that they are not getting reach ( Views & Subscribers ).<br><br>
                                   That's why Yas decided to provide you best solution for it and he made our initial push service. It basically provides you initial sufficient Views and Subscribers to make your channel rich with a genuine & niche audience. It has a lot of more benefits like ...
                                   <br><br>Click to know more!
                              </p>
                         </div>
                    </a>
               </div>




               <div class="flex m-10 e-c service-card">
                    <a href="./contact-us/">
                         <div class="tx-center m-40">
                              <img src="./media/svg/undraw_web_developer_re_h7ie.svg" alt="Social Media Expert" class="service-img">

                              <p class="fs-30 m-t-30">Website Development</p>

                              <p class="m-t-10" style="font-size: 14px;">
                                   As we all know if we're runnig a business then a website is very important for us or our business and Making a website is not easy for everyone, that's why we're are providing web development service for Influencers and businesses, so that they can take their business on next level. <br><br>So, If you're also a business owner or Influencer and want to take your business on next level.<br><br> Contact Us Now!
                              </p>
                         </div>
                    </a>
               </div>




               <div class="flex m-10 e-c service-card">
                    <a href="./contact-us/">
                         <div class="tx-center m-40">
                              <img src="./media/svg/undraw_business_plan_re_0v81.svg" alt="Social Media Expert" class="service-img">

                              <p class="fs-30 m-t-30">Mentoring</p>

                              <p class="m-t-10" style="font-size: 14px;">
                                   Yas tiwari is Business & Marketing Expert. Many business are struggling they're not getting clients / customers for their products. Yas tiwari mentor businesses & Influencers About Business and Social Media.<br><br>If you're running a business and facing problems then you can take Guidance by Yas.<br><br>If you're a Influencer or want to become a Influencer then you can also take guidance of Yas.<br><br> If you also want to overcome your problems and become Successful, Contact Us Now!
                              </p>
                         </div>
                    </a>
               </div>




               <div class="flex m-10 e-c service-card">
                    <a href="./contact-us/">
                         <div class="tx-center m-40">
                              <img src="./media/svg/undraw_videographer_re_11sb.svg" alt="Social Media Expert" class="service-img">

                              <p class="fs-30 m-t-30">Video Production</p>

                              <p class="m-t-10" style="font-size: 14px;">
                                   Video is the best medium of transfering message and knowledge. Every Business and Influencer needs to make videos for their business or Social Media and making videos is not easy. It take alot of time and after then quality issue, because one can not do everything. That's why we're are providing scripting, video editing & Audio Edting Services.<br><br>If you want any of them Contact us Now!
                              </p>
                         </div>
                    </a>
               </div>


          </div>
     </div>
     <div class="w-100per">
          <div class="w-75per bg-clr-4 m-auto m-t-30" style="height: 2px;"></div>
          <div class="p-y-50 home-cta-container">

               <div class="m-auto flex e-c main-content" style="width: 90%;">

                    <div>
                         <p class="heading">Grow with us</p>
                    </div>
                    <a href="./contact-us/" class="home-cta-btn font-poppins fw-500"> Contact Us Now! </a>

               </div>

          </div>
          <div class="w-75per bg-clr-4 m-auto m-b-20" style="height: 1px;"></div>
     </div>


     <!-- Our Work -->

     <div class="flex flex-d-column e-c w-100per">

          <div class="tx-center m-t-10 text-container">
               <p class="heading"> Free Works </p>
               <p class="fs-20">These are some absolutely free works we have done for Influencers & businesses to help them in their Growth.</p>
          </div>


          <div class="flex w-100per e-c m-t-20 font-poppins" style="flex-wrap: wrap;" id="service-container">

               <div class="flex m-10 e-c service-card">
                    <a href="./user/auth/signin/">
                         <div class="tx-center m-40">
                              <img src="./media/svg/undraw_community_re_cyrm.svg" alt="Social Media Expert" class="service-img">

                              <p class="fs-30 m-t-30">Community</p>

                              <p class="m-t-10" style="font-size: 14px;">
                                   Yas tiwari developed a community of Influencers, Future Influencers and Business Owners. The reason of developing that community tab is connecting businesses and Influencers. This will be very helpful for New Influencer in getting Brand Deals and businesses in growing.<br><Br>So, If you're also a Influencer or Business Make sure to Join our Community by Sign In.
                              </p>
                         </div>
                    </a>
               </div>

               <div class="flex m-10 e-c service-card">
                    <a href="./user/auth/signin/">
                         <div class="tx-center m-40">
                              <img src="./media/svg/undraw_online_ad_re_ol62.svg" alt="Marketing Expert" class="service-img">

                              <p class="fs-30 m-t-30">Advertisement</p>

                              <p class="m-t-10" style="font-size: 14px;">
                                   We know that new YouTubers are doing a lot of hard work but they're not getting views and subscribers. So, Yas Tiwari decided to make a FREE Advertisement System for new YouTubers to help them in their growth.<br>
                                   Free Advertisement system is ready and many new Influencers are Already Using it.<br><br>You can start advertising for your youtube channel by signing in.
                              </p>
                         </div>
                    </a>
               </div>

               <div class="flex m-10 e-c service-card">
                    <a href="./user/auth/signin/">
                         <div class="tx-center m-40">
                              <img src="./media/svg/undraw_home_cinema_l7yl.svg" alt="Social Media Expert" class="service-img">

                              <p class="fs-30 m-t-30">Watch Area</p>

                              <p class="m-t-10" style="font-size: 14px;">
                                   Yas tiwari Developed Watch Area where businesses and New Influencers can upload their youtube videos. The reason of developing this is very simple we all know that getting views on youtube is really deficult for New youtubers. Watch Area Solve this problem by giving reach to every Influencer & Business.<br><br>You can start using Watch Area by signing in.
                              </p>
                         </div>
                    </a>
               </div>

          </div>
     </div>
     <div class="w-100per">
          <div class="w-75per bg-clr-4 m-auto m-t-30" style="height: 2px;"></div>
          <div class="p-y-50 home-cta-container">

               <div class="m-auto flex e-c main-content" style="width: 90%;">

                    <div>
                         <p class="heading">Take access of these</p>
                    </div>
                    <a href="./user/auth/signup/" class="home-cta-btn font-poppins fw-500"> Sign Up Now! </a>

               </div>
          </div>
          <div class="w-75per bg-clr-4 m-auto m-b-20" style="height: 1px;"></div>
     </div>

     <!-- Testimonial -->

     <div class="flex flex-d-column e-c w-100per">

          <div class="tx-center m-t-10 text-container">
               <p class="heading"> Testimonial </p>
               <p class="fs-20">Here's what people said after working with us or taking our services.</p>
          </div>


          <div class="flex w-100per e-c m-t-20 font-poppins" style="flex-wrap: wrap;" id="service-container">

               <div class="testimonial-card">
                    <div class="flex flex-d-column tx-left m-20">
                         <a href="javascript:void(0)">
                              <div class="flex flex-y-center">
                                   <div class="client-image img-fluid e-c" style="width: max-content;">
                                        <img src="./media/Images/LOGO_CIRCLE.png" alt="client logo" style="max-width:50px; width:100%; height:50px;" class="border-radius-100per">
                                   </div>
                                   <div class="flex flex-d-column m-l-10">
                                        <p class="fs-20 font-poppins fw-600">Shivam Sharma</p>
                                        <p class="font-poppins" style="font-size: 15px;">Founder of WMBT Traders Institute</p>
                                   </div>
                              </div>
                         </a>


                         <div class="flex flex-d-column m-t-10">
                              <p class="font-poppins" style="font-size: 13px;">" I am extremely grateful I have concerned with you regards my business. Your thoughtful suggestions equipped me with methods to manage my work. Thank you for your care and concern for my well-being. "</p>
                         </div>
                    </div>
               </div>

               <!-- Remove below -->

               <div class="testimonial-card">
                    <div class="flex flex-d-column tx-left m-20">
                         <a href="javascript:void(0)">
                              <div class="flex flex-y-center">
                                   <div class="client-image img-fluid e-c" style="width: max-content;">
                                        <img src="./media/Images/LOGO_CIRCLE.png" alt="client logo" style="max-width:50px; width:100%; height:50px;">
                                   </div>
                                   <div class="flex flex-d-column m-l-10">
                                        <p class="fs-20 font-poppins fw-600">Yas Tiwari</p>
                                        <p class="font-poppins" style="font-size: 15px;">Founder of Yastiwari.com</p>
                                   </div>
                              </div>
                         </a>


                         <div class="flex flex-d-column m-t-10">
                              <p class="font-poppins" style="font-size: 13px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptatum debitis exercitationem soluta unde nisi tempore. Quam libero totam, quia voluptatem nihil enim quibusdam. Veniam ipsa animi consequuntur perferendis eum.</p>
                         </div>
                    </div>
               </div>

               <div class="testimonial-card">
                    <div class="flex flex-d-column tx-left m-20">
                         <a href="javascript:void(0)">
                              <div class="flex flex-y-center">
                                   <div class="client-image img-fluid e-c" style="width: max-content;">
                                        <img src="./media/Images/LOGO_CIRCLE.png" alt="client logo" style="max-width:50px; width:100%; height:50px;">
                                   </div>
                                   <div class="flex flex-d-column m-l-10">
                                        <p class="fs-20 font-poppins fw-600">Yas Tiwari</p>
                                        <p class="font-poppins" style="font-size: 15px;">Founder of Yastiwari.com</p>
                                   </div>
                              </div>
                         </a>


                         <div class="flex flex-d-column m-t-10">
                              <p class="font-poppins" style="font-size: 13px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptatum debitis exercitationem soluta unde nisi tempore. Quam libero totam, quia voluptatem nihil enim quibusdam. Veniam ipsa animi consequuntur perferendis eum.</p>
                         </div>
                    </div>
               </div>

               <div class="testimonial-card">
                    <div class="flex flex-d-column tx-left m-20">
                         <a href="javascript:void(0)">
                              <div class="flex flex-y-center">
                                   <div class="client-image img-fluid e-c" style="width: max-content;">
                                        <img src="./media/Images/LOGO_CIRCLE.png" alt="client logo" style="max-width:50px; width:100%; height:50px;">
                                   </div>
                                   <div class="flex flex-d-column m-l-10">
                                        <p class="fs-20 font-poppins fw-600">Yas Tiwari</p>
                                        <p class="font-poppins" style="font-size: 15px;">Founder of Yastiwari.com</p>
                                   </div>
                              </div>
                         </a>


                         <div class="flex flex-d-column m-t-10">
                              <p class="font-poppins" style="font-size: 13px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum voluptatum debitis exercitationem soluta unde nisi tempore. Quam libero totam, quia voluptatem nihil enim quibusdam. Veniam ipsa animi consequuntur perferendis eum.</p>
                         </div>
                    </div>
               </div>

               <!-- Remove above -->

          </div>
     </div>

     <div class="w-100per">
          <div class="w-75per bg-clr-4 m-auto m-t-30" style="height: 2px;"></div>
          <div class="p-y-50 home-cta-container">
               <div class="m-auto flex e-c main-content" style="width: 90%;">

                    <div>
                         <p class="heading">Work with us</p>
                    </div>
                    <a href="./contact-us/" class="home-cta-btn font-poppins fw-500"> Contact Us Now! </a>

               </div>
          </div>
          <div class="w-75per bg-clr-4 m-auto m-b-20" style="height: 1px;"></div>
     </div>




     <!-- Footer -->

     <div class="footer bg-clr-4">
          <div class="e-c footer">

               <div class="grid grid-column-4 m-x-30 tab-grid-column-2 mob-grid-column-1">


                    <div class="mob-m-10">
                         <a href="./data/app/android/yastiwari_v1.0.0.apk" download><img src="./media/Images/Google_Play_Store_badge_EN.svg.png" class="bg-clr-1" alt="Logo" style="max-height:70px;"></a>
                    </div>

                    <div class=" mob-m-10">
                         <ul id="footer-links">
                              <p class="sub-heading fc-primary">Links</p>
                              <hr class="m-y-10 w-75per">
                              <li><a href="javascript:void(0)">About Us</a></li>
                              <li><a href="./legal/terms-and-conditions/">Terms & Conditions</a></li>
                              <li><a href="./privacy-policy/">Privacy Policy</a></li>
                              <li><a href="./contact-us">Contact Us</a></li>
                              <li><a href="./bug/">Report Bug</a></li>
                         </ul>
                    </div>

                    <div class=" mob-m-10 tab-m-y-20">
                         <p class="sub-heading fc-primary">Latest Updates</p>
                         <hr class="m-y-10 w-75per">
                         <div class="m-r-10">
                              <p class="sub-heading fc-secondary"><i class="fab fa-youtube" aria-hidden="true"></i> Youtube </p>
                              <p class="fc-dark-white m-y-10 font-poppins">Subscribe Our Youtube Channel For More Video Tutorials on Social Media Growth and Technology.</p>
                         </div>
                         <div class="m-r-10">
                              <p class="sub-heading fc-secondary"> <i class="fab fa-facebook" aria-hidden="true"> </i> Facebook Page</p>
                              <p class="fc-dark-white m-y-10 font-poppins">Follow Our Facebook Page for More Updates .</p>
                         </div>
                    </div>

                    <div class=" mob-m-10 tab-m-y-20">
                         <p class="sub-heading fc-primary">Follow Us</p>
                         <hr class="m-y-10 w-75per">
                         <div class="flex" id="footer-social-media">
                              <div class="bg-footer-icon">
                                   <a href="https://www.facebook.com/itsYasTiwari/" target="_blank"><i class="fab fa-facebook m-10 fc-secondary"></i></a>
                              </div>

                              <div class="bg-footer-icon m-l-10">
                                   <a href="https://youtube.com/yastiwari/" target="_blank"><i class="fab fa-youtube m-10 fc-secondary"></i></a>
                              </div>

                              <div class="bg-footer-icon m-l-10">
                                   <a href="https://www.twitter.com/itsYasTiwari/" target="_blank"><i class="fab fa-twitter m-10 fc-secondary"></i></a>
                              </div>

                              <div class="bg-footer-icon m-l-10">
                                   <a href="mailto:website.yastiwari@gmail.com" target="_blank"><i class="fas fa-envelope m-10 fc-secondary"></i></a>
                              </div>

                              <div class="bg-footer-icon m-l-10">
                                   <a href="https://www.instagram.com/itsYasTiwari/" target="_blank"><i class="fab fa-instagram m-10 fc-secondary"></i></a>
                              </div>
                         </div>

                    </div>

               </div>
          </div>
     </div>
     <div class="sector flex e-c bg-footer-copyright p-y-10">
          <p class="font-poppins fc-primary">&copy; · <a href="#" class="fc-secondary"> Yas Tiwari </a> · All Rights Reserved!</p>
     </div>

</body>

</html>