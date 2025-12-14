<?php get_header(); ?>

<h2><?php the_archive_title(); ?></h2>

<?php
    while(have_posts()) {
        the_post(); ?>
        
        <div>
            <h3>
                <a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
                <?php the_content(); ?>
            </h3>
        </div>
    <?php 
    }
?>
<?php get_footer(); ?>