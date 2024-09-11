<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>
<body class="text-green-950">
<nav class="bg-gray-800 text-white py-5 md:py-0">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo and Site Title -->
        <div class="flex items-center py-4">
            <a href="" class="px-5 hidden md:block">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" width="100" height="100" class="">
            </a>
        </div>

        <!-- Navigation Links and Language Selector -->
        <div class="flex items-center space-x-6">
            <ul class="flex space-x-6 px-5">
                <!-- Home Link -->
                <li>
                    <a href="<?php echo get_permalink(pll_get_post(get_page_by_path('home')->ID)); ?>" class="hover:text-gray-400">
                        <?php pll_e('Home'); ?>
                    </a>
                </li>

                <!-- Blog Link -->
                <li>
                    <a href="<?php echo get_permalink(pll_get_post(get_option('page_for_posts'))); ?>" class="hover:text-gray-400">
                        <?php pll_e('Blog'); ?>
                    </a>
                </li>

                <!-- Contact Link -->
                <li>
                    <a href="<?php echo get_permalink(pll_get_post(get_page_by_path('contact')->ID)); ?>" class="hover:text-gray-400">
                        <?php pll_e('Contact'); ?>
                    </a>
                </li>
            </ul>

            <!-- Language Toggle Buttons -->
            <div class="flex space-x-3 ml-6">
                <?php 
                    $languages = pll_the_languages(array('raw' => 1));
                    foreach($languages as $lang) {
                        // Toggle button with active/inactive state
                        $activeClass = $lang['current_lang'] ? 'bg-green-500 text-white' : 'bg-gray-600 text-gray-300';
                        echo '<a href="'.esc_url($lang['url']).'" class="px-2 py-2 w-16 text-center rounded-full '.$activeClass.'">';
                        echo esc_html($lang['name']);
                        echo '</a>';
                    }
                ?>
            </div>
        </div>
    </div>
</nav>
