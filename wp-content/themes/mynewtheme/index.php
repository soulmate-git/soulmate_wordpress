<?php get_header();

echo "<main>";

if (have_posts()) :
   while (have_posts()) :
      the_post();
        $postId = get_the_id();
     	   $postTitle = get_the_title();
     	   $postLink = get_permalink();
	      $postExcert = get_the_excerpt(); ?>
     
        <article class="<?=$postId; ?>">
        <img src="<?=get_template_directory_uri(); ?>/images/IMAGE.jpg" />
        	<a href="<?=$postLink; ?>"><h2><?=$postTitle; ?></h2></a>
        	<p><?=$postExcert; ?></p>
        </article>

   <?php endwhile;
endif;
echo "</main>";

get_footer(); ?>
