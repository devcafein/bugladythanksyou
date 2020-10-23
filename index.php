
<?php

if(!empty($_POST['phone']))  {

   
    // if (!logged_in()) 
$Ten = $_POST['Ten'];
$phone = $_POST['phone'];

$YeuCauTuBan= $_POST['YeuCauTuBan'];
$Tinh= $_POST['sel1'];

	


     
       
$Ten1 = urlencode($Ten);
     
$phone1 = urlencode($phone);
  


$YeuCauTuBan1= urlencode($YeuCauTuBan);
     
   $Tinh1= urlencode($Tinh);
   $data1="https://docs.google.com/forms/d/e/1FAIpQLSe_hHRCRKg7QcpcsBXWYDePfR1xTYGiuzB1zDO21Ne6nkqeHg/formResponse?entry.537894406=$Ten1&entry.500222100=$phone1&entry.918807360=$YeuCauTuBan1&entry.747594158=$Tinh1";
   //Use file_get_contents to GET the URL in question.
//If $contents is not a boolean FALSE value.
$curl = curl_init($data1); 
curl_setopt($curl, CURLOPT_FAILONERROR, true); 
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
$result = curl_exec($curl); 
echo "Cảm ơn  ". $Ten. ". Chúc ".$Ten." một ngày tốt lành, GHN sẽ liên hệ bạn trong thời gian sớm nhất";
    }
    else
    {
        print "Có lỗi xảy ra vui lòng thử lại sau 1 phút  (".$obj['ErrorMessage'].")";
    }
    
 
   
?>  
                        <!-- /.main title -->
                        
                        <html>
    <head>

        <!-- /.website title -->
        <title>GHN Thank You</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">


        <!-- Colors -->
        <link href="css/css-index.css" rel="stylesheet" media="screen">
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

        <!-- Google Fonts -->
         <!-- Google Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Exo+2:100,200,300,400,700,800&amp;subset=vietnamese" rel="stylesheet">
        <style>
    .success.is-underline:hover, .success.is-outline:hover, .success {
        background-color: #036634;
        padding: 10px;
        color: white !important;
    }
                .call-mobile {background: #ff6600;position: fixed;bottom: 10px;height: 40px;line-height: 40px;
                    padding: 0 0px 0 0px;border-radius: 40px;color: #fff;left: 20px;z-index: 99999;
                    }
                .call-mobile1 {position: fixed;bottom: 52px;height: 40px;line-height: 40px;
                    padding: 0 0px 0 0px;border-radius: 40px;color: #fff;left: 20px;z-index: 99999;
                    }
       .call-mobile2 {position: fixed;bottom: 93px;height: 40px;line-height: 40px;
                    padding: 0 0px 0 0px;border-radius: 40px;color: #fff;left: 20px;z-index: 99999;background:#036634
                    }
                .call-mobile i {font-size: 20px;line-height: 40px;background: #d58512;
                    border-radius: 100%;width: 40px;height: 40px;
                    text-align: center; float: right;
                }
                .call-mobile a {color: #fff;font-size: 18px;font-weight: bold; text-decoration: none;
                        margin-right: 10px; padding-left: 10px;}
            </style>
    </head>

    <body >

        <!-- /.preloader -->
     
        <section id="top" class="fullscreen landing parallax" data-selector=".bg-img" style="background-color: rgba(0, 0, 0, 0); background-image: url(images/thank.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; background-attachment: scroll; outline-offset: -3px;" src="images/logo-white.png">

            <div class="overlay">
                <div class="container">
                    <div  class="col-md-10 col-md-offset-1 text-center">

                        <!-- /.logo -->
                        <div class="logo wow fadeInDown" style="margin-top: 249px"> </a>
                        <h2 class="wow fadeInUp" style="margin-bottom: 30px">
                        </h2>
</div>
                    </div>
                </div> 
              
            </div> 
           
        </div>
        
        
</section>

       <div class="call-mobile1">
        <a data-animate="fadeInDown" rel="noopener noreferrer" href="https://www.facebook.com/BazanTropical" target="_blank" class="button success" style="border-radius:99px;" data-animated="true">
            <span>Liên Hệ Facebook</span></a>
        </div>
        
        <div class="call-mobile">
        
                    <a id="callnowbutton" href="tel:18006328"> 0197910404</a><i class="fa fa-phone"></i></div></br>
                   
            </div>
            </section>
            
                
                
                
            
        <!-- /.footer -->
       <footer>
           
            <div align"middle" style="color:#ffffff; font-size: 14px;background-color:rgba(4, 68, 23, 0.95);">  <a href="http://bazantropical.vn" target="_blank">.</a></div>
          
             </div>
            </section>
            
                
                
                
            
        <!-- /.footer -->
       <footer>
           
            <div align"middle" style="color:#ffffff; font-size: 14px;background-color:rgba(4, 68, 23, 0.95);">  <a href="http://bazantropical.vn" target="_blank">.</a></div>
          
             </div>
          
        </footer>

        <!-- /.javascript files -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
        
