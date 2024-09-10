<?php
// Template Name: Contact Template
get_header(); ?>


<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-4xl font-bold text-center"><?php the_title(); ?></h1>
            
            
                  
        </div>
    <?php endwhile; ?>
<?php endif; ?>




<?php get_footer(); ?>