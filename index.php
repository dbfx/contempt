<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>
		
		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<small><?php the_time(' F jS, Y') ?></small><br />
				
				
				<div class="entry">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>
		
				<p class="postmetadata">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/silkicons/comments.png" alt="" /> <?php comments_popup_link('No Comments &#187;', '1 Comment', '% Comments'); ?>
				| <img src="<?php bloginfo('stylesheet_directory'); ?>/images/silkicons/categories.png" alt="" /> <?php the_category(', ') ?>
				 | <img src="<?php bloginfo('stylesheet_directory'); ?>/images/silkicons/link.png" alt="" /> <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Permalink</a>
<br /><img src="<?php bloginfo('stylesheet_directory'); ?>/images/silkicons/user.png" alt="" /> Posted by <?php the_author(); ?>				 
				</p>
			</div>
			<hr />
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
		
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
