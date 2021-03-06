<?php
$search_query =& new WP_Query("s=$s & showposts=-1");
 
get_header(); ?>
 
<section class="main clearfix">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" class="search_post">
    <div class="search_title">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
    <?php the_title(); ?>
    </a></div>
    <?php the_date() ?> <?php the_time() ?>
  </div>
    <?php endwhile; else: ?>
    <p class="search_text">
      <?php _e('您要搜索的内容不存在'); ?>
    </p>
    <?php endif; ?>
    <div class="nav-previous">
      <?php previous_posts_link(__('« Older Entries', 'kubrick')); ?>
    </div>
    <div class="nav-next">
      <?php next_posts_link(__('Newer Entries »', 'kubrick')); ?>
    </div>
</section>
<?php get_footer(); ?>
