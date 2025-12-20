<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todd Patkin - Discover the Power of Positive Mind</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&family=Oswald:wght@400;500;600;700&family=Open+Sans:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- Satoshi Font (using Inter as fallback) -->
    <style>
        @font-face {
            font-family: 'Satoshi';
            src: url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');
        }
    </style>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styleguide.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/about-book.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/preview-book.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/globals.css">
    
    <!-- Mobile-specific fix for hero-hire-btn text alignment -->
    <style>
        @media (max-width: 576px) {
            a.btn.btn-outline-light.hero-hire-btn,
            .hero-hire-btn.btn.btn-outline-light {
                display: flex !important;
                align-items: center !important;
                justify-content: center !important;
                text-align: center !important;
            }
            
            .hero-hire-btn .btn-content {
                display: block !important;
                width: 100% !important;
                text-align: center !important;
                margin: 0 !important;
                padding: 0 !important;
            }
        }
    </style>
</head>

<body class="<?php echo is_page('preview-page') ? 'preview-book-page' : ''; ?>">

    <!-- Top Bar -->
    <!-- Top Bar -->
    <div class="top-bar  bg-primary-blue text-white py-2">
        <div class="container w-100">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <a href="mailto:todd@toddpatkin.com"
                    class="text-white text-decoration-none d-flex align-items-center gap-2">
                    <i class="fas fa-envelope"></i>
                        <span>todd@toddpatkin.com</span>
                    </a>
                <div class="social-icons d-flex align-items-center justify-content-center gap-lg-3" style="height: 100%;">
                    <a href="https://www.facebook.com/ToddPatkin" target="_blank" class="text-white text-decoration-none d-flex align-items-center"><i class="fab fa-facebook-f"></i></a>
                    <a href="http://twitter.com/#!/ToddPatkin" target="_blank" class="text-white text-decoration-none d-flex align-items-center"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.linkedin.com/in/toddpatkinthehappinesscoach/" target="_blank" class="text-white text-decoration-none d-flex align-items-center"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/tpatkin2023/?igsh=eHFuZHQxcjkyNWJw" target="_blank" class="text-white text-decoration-none d-flex align-items-center"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@findinghappinesswithtodd3719?si=dDC3EKwObiviM1eU" target="_blank" class="text-white text-decoration-none d-flex align-items-center"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold text-uppercase d-flex align-items-center" href="#">
                
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse  navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <?php
                    if(!is_front_page())
                    {
                    ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                    <?php
                    }
                    ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/expertise' ) ); ?>">Expertise</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/about-book' ) ); ?>">About Book</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/about-author' ) ); ?>">About Author</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/course' ) ); ?>">Course</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/podcast' ) ); ?>">Podcast</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
                </ul>
                <div class="d-flex align-items-center ms-auto">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" class="btn btn-warning"><span class="btn-content">Hire Todd</span></a>
                </div>
            </div>
        </div>
    </nav>