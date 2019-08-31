<?php get_header();

echo "<main>";

if (have_posts()) :
   while (have_posts()) :
      the_post();
        $postId = get_the_id();
     	   $postTitle = get_the_title();
     	   $postLink = get_permalink();
	      $postExcert = get_the_excerpt(); ?>
     
        <article data-pid="<?=$postId; ?>" class="post-announce__container">
        <a class="post" href="<?=$postLink; ?>">
             <img src="<?=get_template_directory_uri(); ?>/images/IMAGE.jpg" />      
             <div class="post-text">
             <h2><?=$postTitle; ?></h2>
            <p><?=$postExcert; ?></p>
            </div>
         </a>
        </article>

   <?php endwhile;
endif;
echo "</main>";

get_footer(); ?>
