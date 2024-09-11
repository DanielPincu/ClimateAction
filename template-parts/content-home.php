<article 
    class="bg-[#EBEBEB] p-6 rounded-lg shadow-xl border-green-950 border-2 hover:shadow-lg transition-shadow duration-200 relative overflow-hidden"
>
    <div class="h-auto p-4 rounded-lg">
        <!-- Image -->
        <div class="flex justify-center mb-10">
            <a class="" href="<?php the_permalink(); ?>"><img class="w-full hover:scale-105 rounded-md shadow-md" src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : ''; ?>" alt=""></a>
        </div>
        
        <!-- Title -->
        <h2 class="text-2xl font-bold text-slate-950 mb-4">
            <a href="<?php the_permalink(); ?>" class="hover:text-teal-500 transition-colors duration-200"><?php the_title(); ?></a>
            
        </h2>

        <!-- Categories & Tags -->
        <div class="text-sm text-slate-950 mb-4">
            <span class="font-semibold">Categories:</span> <?php the_category(', '); ?> <br />
            <span class="font-semibold">Tags:</span> <?php the_tags('', ', '); ?>
        </div>

        <!-- Excerpt -->
        <p class="text-slate-950"><?php the_excerpt(); ?></p>
    </div>
</article>
