<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title>
		<?php bloginfo('name'); ?>
		<?php if(is_home()) { ?>
			- <?php bloginfo('description'); ?>
		<?php } ?>
		<?php if(is_single()) { ?>
			<?php wp_title(); ?>
		<?php } ?> 
		<?php if(is_404()) { ?>
			- 404 Error! Page Not Found
		<?php } ?>
		<?php if(is_search()) { ?>
			- Search Results for: <?php echo wp_specialchars($s, 1); ?>
		<?php } ?>
	</title>
<link rel="stylesheet" type="text/css" href="http://youclubvideo.com/webblog/wp-content/themes/youclubvideo/css/youclub_blog.css" media="screen"/>
<script type="text/javascript" src="js/unitpngfix.js"></script>
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />	
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />	
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />	
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	
<?php wp_get_archives('type=monthly&format=link'); ?>	
<?php wp_head(); ?>
</head>

<body>
	<div class="mainBoxBlog">
    	<div class="containerHeaderTopBlog">
        	<div class="wrapperLogoYouClub">
            	<img src="http://youclubvideo.com/webblog/wp-content/themes/youclubvideo/images/logo_you_club/logo_you_club.png" alt="YouClubVideo Blog" border="0" width="83" height="75"/>
            </div><!--ends wrapperLogoYouClub-->
            <div class="wrapperMainMenuYouClubBlog">
            	<div class="menuElementActive">
                	<a href="#" target="_self">HOME</a>
                </div><!--ends menuElementActive-->
                <div class="menuElementInactive">
                	<a href="#" target="_self">ABOUT US</a>
                </div><!--ends menuElementInactive-->
                <div class="menuElementInactive">
                	<a href="#" target="_self">ARCHIVES</a>
                </div><!--ends menuElementInactive-->
                <div class="menuElementInactive">
                	<a href="#" target="_self">CONTACT</a>
                </div><!--ends menuElementInactive-->
                <br class="clearFloats"/>
            </div><!--ends wrapperMainMenuYouClubBlog-->
            <div class="searchFormYouClubBlog">
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
            </div><!--ends searchFormYouClubBlog-->
            <br class="clearFloats"/>
        </div><!--ends containerHeaderTopBlog-->