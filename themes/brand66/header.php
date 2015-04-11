<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>
<body>
<!--
    <h1><?php bloginfo('name'); ?></h1>
    <h2><?php bloginfo('description'); ?></h2>
    <a href="<?php home_url() ; ?>">Главная страница</a>
    <p><?php bloginfo('template_url'); ?></p>
    <p><?php bloginfo('stylesheet_url'); ?></p>

        <hr/>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h3><?php the_title(); ?></h3>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">Читать далее...</a>
-->
<!--
    <?php endwhile; ?>
    <!-- post navigation -->
<!--
    <?php else: ?>
    <!-- not post found -->
<!--
    <?php endif; ?>
-->

<!--
    <?php echo $post->post_content; ?>
-->

<!--
    <?php foreach($posts as $item_post): ?>
        <h3><?php echo $item_post->post_title; ?></h3>
        <?php echo $item_post->post_content; ?>
    <?php endforeach; ?>
-->
<header>
    <h1><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Skokov"/></a></h1>
    <nav class="main-nav">
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">PORTFOLIO</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">CONTACT</a></li>
        </ul>
    </nav>
    <div class="description">
        <div class="description_bg">
            <h2><?php bloginfo('description'); ?></h2>
        </div>
    </div>
</header>