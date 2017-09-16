<?php get_header(); ?>
<div style="clear: both"></div>
<div id="nambahneh">
<?php include (TEMPLATEPATH . '/sidebar-left.php'); ?>
<div id="content">
<div class="post"> <h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description'); ?></h2> <?php  if ( get_query_var('paged') ) { echo ' ('; echo __('page') . ' ' . get_query_var('paged');   echo ')';  } ?></div>
<div class="post post-"><div class="posttitle">
<?php query_posts('showposts=10'); ?>
Latest News  : <br />
<span style="color:#4747ff;margin-right:1px;"><ul>
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endwhile;?>
</ul></span>
<div style="clear: both"></div></div>
</div></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>