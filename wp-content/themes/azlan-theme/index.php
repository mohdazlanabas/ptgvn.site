<h1>Welcome to Azlan Theme</h1>

<?php

    while(have_posts()) {
        the_post(); ?>
        <div>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </div>
    <?php 
    }

?>