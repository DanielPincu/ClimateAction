<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            

<!-- banner section -->

<section class="relative w-full h-screen bg-cover bg-center" style="background-image: url('<?php echo esc_url(get_field("banner")["url"]); ?>');">
    <div class="absolute inset-0 flex flex-col items-center justify-center text-center bg-black bg-opacity-50 p-4 md:p-8 lg:p-12">
        <img class="w-32" src="<?php echo get_field('goal_icon')['url'] ?> " alt="">
        <h1 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4"><?php echo esc_html(get_field("banner_text")); ?></h1>
        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-white mb-8"><?php echo esc_html(get_field("joinus")); ?></p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 px-4">
            <?php get_template_part("template-parts/cards-template") ?>
        </div>
    </div>
</section>

<!-- /banner section -->

<!-- first section -->
 
<div> <?php get_template_part("template-parts/first-section-template") ?></div>

<!-- /first section -->

<!-- sections -->
<div> <?php get_template_part("template-parts/section-template") ?>

</div>


<!-- sections -->




<div class="text-center">
    <h2 class="text-3xl"><?php pll_e('Wanna stay up to date?') ?></h2>
    <p class="text-xl"><?php pll_e('Subscribe to Newsletter') ?></p>
</div>

<div class="mb-20">
    <?php echo do_shortcode('[contact-form-7 id="38c95cd" title="Newsletter"]'); ?>
</div>



           

        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>