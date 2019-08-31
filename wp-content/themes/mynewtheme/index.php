<?php get_header();

echo "<main>";

if (have_posts()) :
   while (have_posts()) :
      the_post();
        $postId = get_the_id();
     	$postTitle = get_the_title();
     	$postLink = get_permalink();
	    $postContent = get_the_content(); ?>
     
        <article class="<?=$postId; ?>">
        	<a href="<?=$postLink; ?>"><h2><?=$postTitle; ?></h2></a>
        	<p><?=$postContent; ?></p>

        </article>

   <?php endwhile;
endif;
echo "</main>";

get_footer(); ?>
