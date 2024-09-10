<?php 
get_header(); 

// Get the ID of the posts page
$page_id = get_option('page_for_posts'); 

// Retrieve the ACF field
$blog_banner = get_field('blog_banner', $page_id); 
?>

<div class="relative bg-[#F5F1E8] my-1 py-10">
<?php if ($blog_banner): // Check if the ACF field returns a value ?>
        <img
        class="w-full relative h-[40vh] object-cover"
        src="<?php echo $blog_banner['url']; ?>" 
        alt="Blog Banner"
        />
    <?php endif; ?>
</div>
<div class="container mx-auto px-4 py-8">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content-single'); ?>

            <!-- Load comments.php, very important -->
            <div class="mt-8">
                <?php comments_template(); ?>
            </div>

        <?php endwhile; ?>
    <?php else: ?>
        <p class="text-center text-gray-500">No content found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
