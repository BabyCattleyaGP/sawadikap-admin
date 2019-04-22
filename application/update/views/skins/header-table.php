<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Prestress Admin</title>

    <!-- vendor css -->
    <link href="<?php echo base_url()."assets/"?>/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/"?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/"?>/lib/highlightjs/styles/github.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/"?>/lib/select2/css/select2.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/"?>/lib/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/"?>/lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?php echo base_url()."assets/"?>/css/bracket.css">
  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>PRE<i>STRESS</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="<?php echo base_url()?>" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="<?php echo base_url()."users"?>" class="br-menu-link">
            <i class="menu-item-icon icon ion-ios-people tx-24"></i>
            <span class="menu-item-label">Users</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="<?php echo base_url()."product"?>" class="br-menu-link">
            <i class="menu-item-icon icon ion-bag tx-24"></i>
            <span class="menu-item-label">Products</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
		  <li class="br-menu-item">
			  <a href="<?php echo base_url()."project"?>" class="br-menu-link">
				  <i class="menu-item-icon icon ion-image tx-24"></i>
				  <span class="menu-item-label">Projects</span>
			  </a><!-- br-menu-link -->
		  </li><!-- br-menu-item -->
		  <li class="br-menu-item">
			  <a href="<?php echo base_url()."career"?>" class="br-menu-link">
				  <i class="menu-item-icon icon ion-camera tx-24"></i>
				  <span class="menu-item-label">Career</span>
			  </a><!-- br-menu-link -->
		  </li><!-- br-menu-item -->
        <li class="br-menu-item">
          <a href="<?php echo base_url()."order"?>" class="br-menu-link">
            <i class="menu-item-icon icon ion-cash tx-24"></i>
            <span class="menu-item-label">Orders</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
      </ul><!-- br-sideleft-menu -->

      <br>
    </div><!-- br-sideleft -->

    <?php include('sidebar-top.php');?>
