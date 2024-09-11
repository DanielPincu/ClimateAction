<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <?php wp_head() ?>
</head>
<body class="text-green-950">
<nav class="bg-gray-800 text-white">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo and Site Title -->
        <div class="flex flex-col items-center py-4">
            <a href="/" class="px-5">
                <img src="<?php echo get_field('logo')['url'] ?>" alt="logo" width="100" height="100" class="">
            </a>
            
        </div>

        <!-- Navigation Links -->
        <div class="flex space-x-6">
            <ul class="flex space-x-6 px-5">
                <li><a href="<?php echo get_permalink(get_page_by_path('home')); ?>" class="hover:text-gray-400">Home</a></li>
                <li><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="hover:text-gray-400">Blog</a></li>
                <li><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" class="hover:text-gray-400">Contact</a></li>
            </ul>
        </div>
        
        
    </div>
</nav>
