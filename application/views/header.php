<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
    	<?php 
    		if(isset($page_title)){
				echo $page_title;
			}else{
				echo 'Sabinco Pharma';
			}
    	?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sabinco Pharmacuticals, Unani Pharmacuticals, Harbal drag house">
    <meta name="author" content="K. M. Mizbah-ul Ahsan">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <?php 
    	if(isset($extracss) && is_array($extracss)) {
	    	foreach ($extracss as $k=>$v) {
				echo '<link href="assets/css/'.$v.'" rel="stylesheet">';
			}
    	}
    	require_once 'js.php';
    	if(isset($extrajs) && is_array($extrajs)){
    		foreach ($extrajs as $k=>$v) {
    			echo '<script src="../assets/js/'.$v.'"></script>';
    		}
    			
    	}
    ?>
<!--     <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> -->
    <!-- Latest compiled and minified JavaScript -->
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> -->
    
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
<!--    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"> -->
    
    

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
    <?php require_once 'top-nav.php'; ?>
	
    <div class="container-fluid">
      <div class="row" style="margin-top: 15px;">
      <?php //var_dump (!isset($ctrl_nav['child']));?>
      	<?php if (isset($ctrl_nav['child']) && empty($ctrl_nav['child'])){ 
	        echo '<div class="col-xs-11">';
	     }else{ 
	    	echo '<div class="col-xs-3">';
	        require_once 'side-nav.php'; 
	       echo '</div><!--/span-->
	        <div class="col-xs-9">';
    	}?>