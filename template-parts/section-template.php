<?php
$section = new WP_Query(array(
    "post_type" => "section",
    "posts_per_page" => -1,
));
?>

<?php if ($section->have_posts()) : ?>
    <?php while ($section->have_posts()) : $section->the_post(); ?>
    <section class="my-12 p-10">
        <h1 class="text-center text-3xl md:text-4xl lg:text-5xl font-bold py-2 mt-20 md:py-11 md:mt-32"><?php echo the_title(); ?></h1>
        <p class="text-large md:text-xl py-10"><?php echo get_field("content"); ?></p>

        <!-- paragraph1 -->
        <div class="flex flex-col justify-start my-2 ">
            <h5 class="text-xl font-bold"><?php echo get_field("paragraph-title-1"); ?></h5>
            <p class="text-large my-2"><?php echo get_field("paragraph-content-1"); ?></p>
            <?php if (get_field("paragraph-image-1")): ?>
            <div class="flex items-center justify-center">
                <img class="my-2 w-[70%]" src="<?php echo esc_url(get_field("paragraph-image-1")["url"]); ?>" alt="">
            </div>
            <?php endif; ?>
        </div>
        <!-- /paragraph 1 -->

        <!-- paragraph2 -->
        <div class="flex flex-col justify-start my-2 ">
            <h5 class="text-xl font-bold"><?php echo get_field("paragraph-title-2"); ?></h5>
            <p class="text-large my-2"><?php echo get_field("paragraph-content-2"); ?></p>
            <?php if (get_field("paragraph-image-2")): ?>
            <div class="flex items-center justify-center">
                <img class="my-2 w-[70%]" src="<?php echo esc_url(get_field("paragraph-image-2")["url"]); ?>" alt="">
            </div>
            <?php endif; ?>
        </div>
        <!-- /paragraph 2 -->

        <!-- paragraph3 -->
        <div class="flex flex-col justify-start my-2 ">
            <h5 class="text-xl font-bold"><?php echo get_field("paragraph-title-3"); ?></h5>
            <p class="text-large my-2"><?php echo get_field("paragraph-content-3"); ?></p>
            <?php if (get_field("paragraph-image-3")): ?>
            <div class="flex items-center justify-center">
                <img class="my-2 w-[70%]" src="<?php echo esc_url(get_field("paragraph-image-3")["url"]); ?>" alt="">
            </div>
            <?php endif; ?>
        </div>
        <!-- /paragraph 3 -->

        <!-- paragraph4 -->
        <div class="flex flex-col justify-start my-2 ">
            <h5 class="text-xl font-bold"><?php echo get_field("paragraph-title-4"); ?></h5>
            <p class="text-large my-2"><?php echo get_field("paragraph-content-4"); ?></p>
            <?php if (get_field("paragraph-image-4")): ?>
            <div class="flex items-center justify-center">
                <img class="my-2 w-[70%]" src="<?php echo esc_url(get_field("paragraph-image-4")["url"]); ?>" alt="">
            </div>
            <?php endif; ?>
        </div>
        <!-- /paragraph 4 -->

    </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>
