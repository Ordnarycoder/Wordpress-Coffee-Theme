<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Enjoy the finest coffee, responsibly sourced and expertly roasted. Discover our premium coffee blends today.">
    <meta name="keywords" content="Coffee, Organic Coffee, Espresso, Coffee Beans, Roasted Coffee">
    <meta name="author" content="Eyüp İrfan Çelik">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo get_home_url(); ?>">

    <!-- Open Graph (Facebook & LinkedIn) -->
    <meta property="og:title" content="Coffee Shop - The Best Coffee from Seed to Cup">
    <meta property="og:description" content="Enjoy the finest coffee, responsibly sourced and expertly roasted. Discover our premium coffee blends today.">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/coffee_og_image.jpg">
    <meta property="og:url" content="<?php echo get_home_url(); ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Coffee Shop - The Best Coffee from Seed to Cup">
    <meta name="twitter:description" content="Enjoy the finest coffee, responsibly sourced and expertly roasted. Discover our premium coffee blends today.">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/images/coffee_og_image.jpg">
    <meta name="twitter:site" content="@yourtwitterhandle">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Swiper.js JS (Defer for Performance) -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <!-- Logo with Lazy Loading -->
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
        <img src="https://placehold.co/50x50" 
             alt="Coffee Shop Logo" 
             class="rounded-circle" 
             width="50" 
             height="50" 
             loading="lazy">
      </a>
      
      <!-- Hamburger Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
              aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Collapsible Menu -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <!-- Main Navigation Links -->
        <ul id="navbar" class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-center align-items-center">
          <li class="nav-item"><a class="nav-link text-white" href="<?php echo get_home_url(); ?>">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#features">Features</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#products">Products</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#faqs">FAQs</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#about">About</a></li>
        </ul>
        
        <!-- Social Media Icons -->
        <ul id="social-icons" class="navbar-nav ms-auto mb-2 mb-lg-0 justify-content-end">
          <li class="nav-item"><a class="nav-social" href="#" aria-label="Facebook"><i class="fab fa-facebook ms-2"></i></a></li>
          <li class="nav-item"><a class="nav-social" href="#" aria-label="Twitter"><i class="fab fa-twitter ms-2"></i></a></li>
          <li class="nav-item"><a class="nav-social" href="#" aria-label="Instagram"><i class="fab fa-instagram ms-2"></i></a></li>
          <li class="nav-item"><a class="nav-social" href="#" aria-label="LinkedIn"><i class="fab fa-linkedin ms-2"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
