<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:         gray_template.php
* @Package:      GetSimple
* @Action:       Gray theme for GetSimple CMS
*
*****************************************************/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Stylesheets -->
    <link href="<?php get_theme_url(); ?>/css/blueprint/screen.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/css/blueprint/print.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/css/blueprint/ie.css" rel="stylesheet">
    <link href="<?php get_theme_url(); ?>/css/custom.css" rel="stylesheet"> 
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- JQuery -->
    <script language="javascript" type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery-1.10.2.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php get_theme_url(); ?>/js/jquery.equalheights.js"></script>
    
    <script>
      $(document).ready(function() {
  	$(".subsection").equalHeights(300,10000);
      });
    </script>
    
    <title><?php get_page_clean_title(); ?> &mdash;  <?php get_site_name(); ?></title>
    <?php get_header(); ?>
  </head>
  
  <body id="<?php get_page_slug(); ?>">
    
    <div class="container">      
      
      <!-- Header and navigation -->
      <div class="header span-24">
	<div class="title_logo span-8">
	  <a href="http://robotics.usc.edu/~uscauv/blog/"><img src="http://robotics.usc.edu/~uscauv/blog/data/uploads/images/title.png" width="280px"/></a>
	</div>
	<div class="navbar span-16 last">
	  <?php get_navigation(return_page_slug()); ?>
	</div>      
      </div>
      <hr>
      
      <!-- Content -->
      <div class="subsection span-18">
	<div class="content">
	<!-- <p class="subtitle"><?php get_page_title(); ?></p> -->
	<?php get_page_content(); ?>
	</div><!-- end "content" -->
      </div><!-- end "subsection span-18 content" -->
    
      <!-- Sidebar -->
      <div class="subsection span-6 last sidebar">
	<br><h4>Updates</h4>
	<?php nm_list_recent();?>
	
	<br><h4>Archives</h4> 
	<?php nm_search();?>
	
	<br><h4>Connect</h4>
	<div class="media">
	  <ul>
	    <li><a href="https://www.facebook.com/UscAuv" target =" _blank"><img src="http://robotics.usc.edu/~uscauv/blog/data/uploads/images/facebook.png"/></a></li>
	    <li><a href="https://twitter.com/USCAUV" target =" _blank"><img src="http://robotics.usc.edu/~uscauv/blog/data/uploads/images/twitter.png"/></a></li>
	    <li><a href="http://www.youtube.com/user/uscauvteam" target =" _blank"><img src="http://robotics.usc.edu/~uscauv/blog/data/uploads/images/youtube.png"/></a></li>
	    <li><a href="https://github.com/uscauv" target =" _blank"><img src="http://robotics.usc.edu/~uscauv/blog/data/uploads/images/github.png"/></a></li>
	  </ul>
	</div> <!-- end "media" -->
      </div> <!-- end "subsection span-6 last sidebar" -->
	
    </div> <!-- end "container" -->
	
  </body>
</html> 