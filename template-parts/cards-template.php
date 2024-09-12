
            <?php
            $cards = new WP_Query(array(
                "post_type" => "card",
                "posts_per_page" => -1,
            ));
            ?>

            <?php if ($cards->have_posts()) : ?>
                <?php while ($cards->have_posts()) : $cards->the_post() ?>
                    <a href="#climate-action" class="flex flex-col items-center justify-center bg-gray-100 hover:bg-gray-200 text-green-950 mb-2 py-6 px-8 md:py-8 md:px-10 rounded-lg transition-transform transform hover:scale-105 text-center flex-shrink-0 w-32 h-32 md:h-40 md:w-40 lg:w-52 lg:h-52">
                        <img src="<?php echo esc_url(get_field("icon")["url"]); ?>" alt="Eco Waste Icon" class="w-1/4 mb-2">
                        <span class="text-sm sm:text-base  font-semibold"><?php the_title(); ?></span>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata() ?>
            <?php endif; ?>
       