<?php get_header(); ?>


<!--  Content -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->

<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p><?php the_content(); ?></p>


<?php endwhile; ?>
<!-- post navigation -->


<?php else: ?>
<!-- no posts found -->
<?php endif; ?>



<hr />

<?php get_sidebar(); ?>

<hr />



<?php get_footer(); ?>