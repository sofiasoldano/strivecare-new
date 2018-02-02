<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Strivecare</title>

    <!-- Style -->
    <link href="css/vendors/bootstrap.css" rel="stylesheet">
    <link href="css/vendors/flexslider.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
      
  </head>

  <body class="page-<?php echo $page_name; ?>">

    <header>
        <div class="row">
            <div class="col-md-2">
                <a href="page-home.php" class="logo"><img src="images/logo-header.png"></a>
                <i class="fa fa-bars open-nav"></i>
            </div>
            <div class="col-md-10">
                <ul class="main-nav right">
                    <li class="logo-mobile"><img src="images/logo-footer.png"><div class="close-nav"></div></li>
                    <li class="<?php if ($page_name=="home") echo 'active'; ?>"><a href="page-home.php">HOME</a></li>
                    <li class="<?php if ($page_name=="about-us") echo 'active'; ?>"><a href="page-about-us.php">ABOUT US</a></li>
                    <li class="lnk-training-programs prevent <?php if ($page_name=="training-programs") echo 'active'; ?><?php if ($page_name=="training-programs-inner") echo 'active'; ?>"><a href="page-training-programs.php">TRAINING PROGRAMS</a></li>
                    <div class="dropdown hidden">
                        <li class="<?php if ($page_name=="nvq") echo 'active'; ?>"><a href="page-fasttrack-nvq.php">FAST TRACK NVQ</a></li>
                        <li class="<?php if ($page_name=="apprenticeships") echo 'active'; ?>"><a href="page-apprenticeships.php">APPRENTICESHIP</a></li>
                        <li class="<?php if ($page_name=="aditional-courses") echo 'active'; ?>"><a href="page-aditional-courses.php">ADDITIONAL COURSES</a></li>
                    </div>
                    <li class="<?php if ($page_name=="faqs") echo 'active'; ?>"><a href="page-faqs.php">FAQs</a></li>
                    <li class="<?php if ($page_name=="blog") echo 'active'; ?> <?php if ($page_name=="blog-post") echo 'active'; ?>"><a href="index.php">BLOG</a></li>
                    <li class="<?php if ($page_name=="contact-us") echo 'active'; ?>"><a href="page-contact-us.php">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </header>

