<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Daffa Putera Kouseina - Software Engineer Portfolio">
    <title><?php echo $name; ?> - <?php echo $title; ?></title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    
    <script>
        const theme = localStorage.getItem('theme') || 
            (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
        document.documentElement.setAttribute('data-theme', theme);
    </script>
</head>
<body>
    <nav class="navbar">
        <div class="container nav-content">
            <a href="<?php echo base_url(); ?>" class="logo"><?php echo $name; ?></a>
            <button class="mobile-menu-btn" id="mobile-menu-btn" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="nav-links" id="nav-links">
                <a href="<?php echo base_url(); ?>">Home</a>
                <a href="<?php echo base_url(); ?>about">About</a>
                <a href="<?php echo base_url(); ?>projects">Projects</a>
                <a href="<?php echo base_url(); ?>contact">Contact</a>
                <button id="theme-toggle" class="theme-toggle" aria-label="Toggle theme">
                    <span class="theme-icon">🌙</span>
                </button>
            </div>
        </div>
    </nav>
