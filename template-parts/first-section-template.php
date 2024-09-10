
    <?php
            $first_section = new WP_Query(array(
                "post_type" => "first_section",
                "posts_per_page" => -1,
            ));
            ?>

            <?php if ($first_section->have_posts()) : ?>
                <?php while ($first_section->have_posts()) : $first_section->the_post() ?>

                <h1 class="text-center text-3xl md:text-4xl lg:text-5xl font-bold py-2 mt-20 md:py-11 md:mt-32"><?php echo the_title()?></h1>
                
                <section id="climate-action" class="grid grid-cols-1 lg:grid-cols-3 gap-8 my-12 p-10">
    
                    <!-- What is Climate Action -->
                    <div class="col-span-1 lg:col-span-2 lg:flex-col justify-start items-start gap-4 px-4 ">
                        <?php $youtube_video = get_field("youtube"); ?>
                            <?php if($youtube_video): ?>
                                <div class="video-container mb-10">
                                    <?php echo $youtube_video; ?>
                                </div>
                            <?php endif; ?>


                        <p><?php echo wpautop(get_field("content")); ?></p>
   
                    </div>
                    <!-- Image Section -->
                    <div class="hidden lg:flex lg:col-span-1 items-start justify-end ">
                        <img src="<?php echo esc_url(get_field("goals")["url"]); ?>" alt="Goals Image" class="w-[50%] lg:w-[80%]">
                    </div>
                </section>
                <?php endwhile; ?>
                    <?php wp_reset_postdata() ?>
            <?php endif; ?>
  

            