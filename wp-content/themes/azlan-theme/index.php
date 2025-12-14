<h1>Welcome to Azlan Theme</h1>

<?php

    while(have_posts()) {
        <div>
            <h2>
                <a href="<?php the_permalink() ?>">
                <?php the_title(); ?>
                <?php the_post(); ?>
                <?php the_content(); ?>
            </h2>
        </div>
    <?php 
    }
?>
<p> Foother</p>