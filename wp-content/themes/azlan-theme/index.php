<h1>Welcome to Azlan Theme</h1>

<?php

    while(have_posts()) {
        the_post(); ?>
        <div><h2><a href="#"><?php the_title(); ?></h2></div>
        <div><?php the_content(); ?></div>
    <?php 
    }

?>