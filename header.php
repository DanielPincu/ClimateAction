<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <?php wp_head() ?>
</head>
<body class="text-green-950">
<nav class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo and Site Title -->
        <a href="/" class="flex items-center space-x-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" width="50" height="50" class="rounded-full">
            <p class="text-xl font-semibold">Climate Action</p>
        </a>

        <!-- Navigation Links -->
        <div class="flex space-x-6">
            <ul class="flex space-x-6">
                <li><a href="/" class="hover:text-gray-400">Home</a></li>
                <li><a href="" class="hover:text-gray-400">Blog</a></li>
                <li><a href="" class="hover:text-gray-400">Contact</a></li>
            </ul>
        </div>
        
        
    </div>
</nav>
