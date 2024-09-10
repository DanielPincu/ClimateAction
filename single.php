<?php 
get_header(); 

// Get the ID of the posts page
$page_id = get_option('page_for_posts'); 
?>

<div class="my-1 py-10 lg:w-[60%] w-full px-10 mx-auto flex justify-center items-center">

    <img
        class="object-contain"
        src="<?php echo has_post_thumbnail() ? get_the_post_thumbnail_url() : ''; ?>" 
        alt="Blog Banner"
    />
   
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
