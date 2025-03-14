<?php get_header(); ?>

<main>
    <?php while(  have_posts() ) : the_post();
/* the_title(); */
if(has_post_thumbnail()){
    the_post_thumbnail('full', array('class' => 'imagen-destacada'));
}
the_content();


endwhile;

?>
</main>

<?php get_footer(); ?>