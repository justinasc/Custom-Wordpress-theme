<?php 

get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
<img class="banner" src="http://www.justc.lt/custom/wp-content/uploads/2017/04/stock-photo-indian-mutter-paneer-dish-with-spices-on-the-wooden-background-304357655.jpg">
<article class="post page">
    <?php the_content(); ?>
</article>

<?php endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();

?> 