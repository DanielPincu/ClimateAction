<article class="prose lg:prose-xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold text-gray-900 mb-4"><?php the_title(); ?></h1>

    <div class="text-sm text-gray-600 mb-6">
        <span>Posted on <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time></span>
        <span> by <span class="font-semibold"><?php the_author(); ?></span></span> |
        
        <strong>Categories:</strong> 
        <?php the_category(', '); ?> |
        
        <strong>Tags:</strong> 
        <?php the_tags('', ', ', ''); ?>
    </div>

    <div class="content text-gray-800">
        <?php the_content(); ?>
    </div>
</article>
