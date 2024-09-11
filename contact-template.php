<?php
// Template Name: Contact Template
get_header(); ?>


<?php if (have_posts()): ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="px-4 py-12 bg-gradient-to-r from-green-300 to-green-100 shadow-lg rounded-lg">
            <!-- Page Title -->
            <h1 class="text-center text-5xl font-bold text-green-800 py-16 leading-tight">
                Want to Make a Difference? Get Involved Now!
            </h1>
            
            <!-- Introduction Text -->
            <p class="text-center text-lg text-gray-700 max-w-3xl mx-auto mb-12">
                Whether you're passionate about reducing carbon emissions, promoting renewable energy, or fighting for environmental justice, we welcome your contributions! Fill out the form below to join the movement for a sustainable future.
            </p>

            <!-- Contact Form -->
            <div class="p-10 ">
                <?php echo do_shortcode('[contact-form-7 id="1b8d233" title="Contact form 1"]'); ?>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
