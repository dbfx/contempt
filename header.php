<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_get_archives('type=monthly&format=link'); ?>

<?php wp_head(); ?>

<style type="text/css">
#sidebar li ul li, #sidebar li.pagenav ul li {
	margin-left: 25px;
	list-style-image: url('<?php bloginfo('stylesheet_directory'); ?>/images/silkicons/category.png');
}
</style>
</head>
<body style="background: url(<?php bloginfo('stylesheet_directory'); ?>/images/blue_flower/bg.jpg) repeat-y top center #AAAAAA fixed;">

<div id="page">

<div id="topbar">
<div class="alignleft">
&nbsp;&nbsp;&nbsp;Random Post: 
			<?
			$post=$wpdb->get_results("SELECT ID,post_title,guid FROM $wpdb->posts
			WHERE post_status= \"publish\" ORDER BY RAND() LIMIT 1");
			$p=$post[0];
			echo ('<a href="' . $p->guid . '">' . $p->post_title . '</a>');
			?>
</div>
<a href="<?php bloginfo('rss_url'); ?>" title="RSS .92">RSS .92</a>| <a href="<?php bloginfo('rss2_url'); ?>" title="RSS 2.0">RSS 2.0</a>|
<a href="<?php bloginfo('atom_url'); ?>" title="ATOM 0.3">ATOM 0.3</a>
</div>

<div id="header">
	<div id="headerimg" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/images/blue_flower/head.jpg);">
		<h1><a href="<?php echo get_settings('home'); ?>"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
	</div>
</div>

<div id="pagebar" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/images/blue_flower/pagebar.jpg);">
<li class="page_item"><a href="<?php echo get_settings('home'); ?>">Home</a></li>
<?php wp_list_pages('title_li='); ?> 
</div>

<div id="grad" style="height: 65px; width: 100%; background: url(<?php bloginfo('stylesheet_directory'); ?>/images/blue_flower/topgrad.jpg);">
&nbsp;
</div>