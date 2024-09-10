<?php 
get_header(); 

// Get the ID of the posts page
$page_id = get_option('page_for_posts'); 

// Retrieve the ACF field
$blog_banner = get_field('blog_banner', $page_id); 
?>

<div class="flex justify-center">
    <?php if ($blog_banner): // Check if the ACF field returns a value ?>
        <img
        class="w-full"
        src="<?php echo $blog_banner['url']; ?>" 
        alt="Blog Banner"
        />
    <?php endif; ?>
</div>


<div class="container flex mx-auto px-4 py-8">
    <div class="content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content-home'); ?>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center text-gray-500">No posts found.</p>
        <?php endif; ?>
    </div>
</div>

<div class="pagination mt-8 text-center">
    <?php echo paginate_links(); ?>
</div>

<?php get_footer(); ?>
