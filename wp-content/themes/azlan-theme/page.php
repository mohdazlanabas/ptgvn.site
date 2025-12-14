<?php get_header(); ?>
<?php
    while(have_posts()) {
        the_post(); ?>
        
        <div>
            <p>This is A Page Template</p>
            <h2>
                <?php the_title(); ?>
                <div>
                    <?php the_content(); ?>
                </div>
            </h2>
        </div>
    <?php 
    }
?>
<p> Foother</p>