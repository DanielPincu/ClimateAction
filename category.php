<?php get_header(); ?>

<div class="container mx-auto py-8">
    <!-- Category Title -->
    <h1 class="text-4xl font-bold text-center mb-8 text-slate-800"><?php single_cat_title(); ?></h1>

    <!-- Post Grid -->
    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <!-- Post Card -->
                <article class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-200">
                    <!-- Post Thumbnail -->
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-4">
                            <a href="<?php the_permalink(); ?>">
                                <img class="w-full h-56 object-cover rounded-lg" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                            </a>
                        </div>
                    <?php endif; ?>

                    <!-- Post Title -->
                    <h2 class="text-2xl font-semibold text-slate-800 mb-2">
                        <a href="<?php the_permalink(); ?>" class="hover:text-teal-500 transition-colors duration-200"><?php the_title(); ?></a>
                    </h2>

                    <!-- Post Meta: Date & Category -->
                    <div class="text-sm text-slate-600 mb-4">
                        <span><?php echo get_the_date(); ?></span> 
                        <span class="mx-2">•</span>
                        <span><?php the_category(', '); ?></span>
                    </div>

                    <!-- Post Excerpt -->
                    <p class="text-slate-700"><?php the_excerpt(); ?></p>

                    <!-- Read More Button -->
                    <a href="<?php the_permalink(); ?>" class="inline-block mt-4 text-teal-500 hover:underline font-semibold">Read More</a>
                </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            <?php the_posts_pagination([
                'prev_text' => __('« Previous', 'textdomain'),
                'next_text' => __('Next »', 'textdomain'),
                'mid_size' => 2,
            ]); ?>
        </div>
    <?php else : ?>
        <p class="text-center text-slate-600">No posts found for this category.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
