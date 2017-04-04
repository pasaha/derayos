	<!DOCTYPE html>
	<html lang="en">
	  <head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		 <meta name="author" content="">
		 <link rel="shortcut icon" href="/favicon.ico?1">
	
		 <title><?php echo $layout['title'] ?></title>


<meta name="mrc__share_title" content="<?php echo $layout['title'] ?>">
<meta property="og:title" content="<?php echo $layout['title'] ?>">
<meta name="description" content="<?php echo $layout['description'] ?>">
<meta property="og:site_name" content="derayos.com">
<meta property="og:description" content="<?php echo $layout['description'] ?>">
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@derayos" />
<meta name="twitter:creator" content="@derayos" />

 
<meta property="og:image"     content="http://<?php echo $_SERVER['SERVER_NAME'] ?><?php echo $layout['share_image'] ?>">
<link rel="mrc__share_image"     href="http://<?php echo $_SERVER['SERVER_NAME'] ?><?php echo $layout['share_image'] ?>">
<link rel="image_src"            href="http://<?php echo $_SERVER['SERVER_NAME'] ?><?php echo $layout['share_image'] ?>">


		 
		 <link href="bootstrap3/css/bootstrap.css" rel="stylesheet">
	
		 <!-- main css -->
		 <link href="css/main.css" rel="stylesheet">
		 
		 <!-- mobile css -->
		 <link href="css/responsive.css" rel="stylesheet">
		 
		 <!-- FontAwesome Support -->
		 <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		 <!-- FontAwesome Support -->
		 
		 <!-- Btns -->
		 <link rel="stylesheet" type="text/css" href="css/btn.css" />
		 <!-- Btns -->
		 
		 <!-- Superfish menu -->
		 <link rel="stylesheet" type="text/css" href="css/superfish/superfish.css" />
		 <!-- Superfish menu -->
		 
		 <!-- Theme Color selector -->
		 <link href="js/theme-color-selector/theme-color-selector.css" type="text/css" rel="stylesheet">
		 <!-- Theme Color selector -->
		 
		 <!-- Owl Carousel -->
		 <link rel="stylesheet" type="text/css" href="js/owl-carousel/owl.carousel.css" />
		 <!-- Owl Carousel -->
		 
		 <!-- Twitter feed -->
		 <link rel="stylesheet" type="text/css" href="css/twitterfeed.css" />
		 <!-- Twitter feed -->
		 
		 <!-- Typicons -->
		 <link rel="stylesheet" type="text/css" href="css/typicons/typicons.min.css" />
		 <!-- Typicons -->
		 
		 <!-- WOW animations -->
		 <link rel="stylesheet" type="text/css" href="js/wow/css/libs/animate.css" />
		 <!-- WOW animations -->
			  
		 <!-- Development Google Fonts -->
		 <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic%7CLato:400,100italic,100,300,300italic,400italic,700,700italic,900,900italic%7CRoboto:400,100,100italic,300,300italic,400italic,500,700,500italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
		 <!-- Development Google Fonts -->
		 
	  </head>
	
	  <body>
	  
	  <?php// include 'templates/includes/color_selector.php'; ?>

		<div id="pm_layout_wrapper" class="pm-full-mode"><!-- Use wrapper for wide or boxed mode-->
			<?php include 'templates/includes/pm-header-info.php'; ?>  
			<header>
				<div class="container pm-header-container">
						 <div class="row">
						 
							  <div class="col-lg-4 col-md-3 col-sm-12 pm-header-logo-div">
								
								<?php if ($layout && $layout['logo']){ ?>
								<div class="pm-header-logo-container">
									<a href="/"><img height="67" width="116" src="<?php echo $layout['logo'] ?>" class="img-responsive" alt="Elena de Rayos - Ментальный вызов"></a>
								</div>
								<?php } ?>
								
								<div class="pm-header-mobile-btn-container">
									<button type="button" class="navbar-toggle pm-main-menu-btn" id="pm-main-menu-btn" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></button>
								</div>
									
							  </div>
							  <div class="col-lg-8 col-md-9 col-sm-12 pm-main-menu">
									<nav class="navbar-collapse collapse">
										
										 <!-- superfish-->
										 <ul class="sf-menu" id="pm-nav">
											<?php for($i = 0; $i < count($data_sections); ++$i) { ?>
												<?php if ($data_sections[$i]['menu']){ ?>
												<li>
													 <a href="#block_<?php echo $i ?>"><?php echo $data_sections[$i]['menu'] ?></a>
												</li>
												<?php } ?>
											<?php } ?>
										 </ul>
										 <!-- /superfish -->
									</nav> 
							  </div>
						 </div>       
					</div>
							  
			  </header><!-- /header -->
