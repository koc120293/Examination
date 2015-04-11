<?php get_header(); ?>

    <section class="content">
        <div class="quote">
            <p>"Ability may get you to the top, but it takes character to keep you there."</p>
            <span>John Wooden</span>
        </div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="post">
        <div class="comments">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            <span><?php the_date(j-F-Y); ?></span>
        </div>
    </div>

    <?php endwhile; ?>
    <!-- post navigation -->
    <?php else: ?>
    <!-- not post found -->
    <?php endif; ?>

<!-- 1 post --> <!--
        <div class="post">
            <img src="<?php bloginfo('template_url'); ?>/images/new-1.jpg" alt="new" width="100%"/>
            <div class="comments">
                <h3>17 INSPIRING EXAMPLES OF PARALLAX SCROLLING SITES</h3>
                <p>When it comes to parallax scrolling, the line that separates good and bad choices is pretty thin. A while back parallax was being used to deliver an explosion of elements floating around the screen.</p>
                <img src="<?php bloginfo('template_url'); ?>/images/like-icon.png" alt="like"/>
                <mark>15</mark>
                <span>by John Doe  /  4 comments  /  Oct. 12, 2013</span>
            </div>
        </div>
<!-- 2 post --> <!--
        <div class="post">
            <img src="<?php bloginfo('template_url'); ?>/images/new-2.jpg" alt="new" width="100%"/>
            <div class="comments">
                <h3>17 INSPIRING EXAMPLES OF PARALLAX SCROLLING SITES</h3>
                <p>At ThemeTrust, our premium WordPress theme shop, we just released our latest WordPress theme. Baylie is a multipurpose agency theme featuring a full screen parallax slideshow.</p>
                <img src="<?php bloginfo('template_url'); ?>/images/like-icon.png" alt="like"/>
                <mark>0</mark>
                <span>by John Doe  /  4 comments  /  Oct. 12, 2013</span>
            </div>
        </div>
<!-- 3 post --> <!--
        <div class="post">
            <img src="<?php bloginfo('template_url'); ?>/images/new-3.jpg" alt="new" width="100%"/>
            <div class="comments">
                <h3>17 INSPIRING EXAMPLES OF PARALLAX SCROLLING SITES</h3>
                <p>Getting started in the world of design can be both thrilling and intimidating. Sometimes, you feel like you just don’t have the tools or skills you need to complete even the most basic projects.</p>
                <img src="<?php bloginfo('template_url'); ?>/images/like-icon.png" alt="like"/>
                <mark>7</mark>
                <span>by John Doe  /  4 comments  /  Oct. 12, 2013</span>
            </div>
        </div>
<!-- 4 post --> <!--
        <div class="post">
            <img src="<?php bloginfo('template_url'); ?>/images/new-4.jpg" alt="new" width="100%"/>
            <div class="comments">
                <h3>17 INSPIRING EXAMPLES OF PARALLAX SCROLLING SITES</h3>
                <p>When it comes to parallax scrolling, the line that separates good and bad choices is pretty thin. A while back parallax was being used to deliver an explosion of elements floating around the screen.</p>
                <img src="<?php bloginfo('template_url'); ?>/images/like-icon.png" alt="like"/>
                <mark>19</mark>
                <span>by John Doe  /  4 comments  /  Oct. 12, 2013</span>
            </div>
        </div>
<!-- 5 post --> <!--
        <div class="post">
            <img src="<?php bloginfo('template_url'); ?>/images/new-5.png" alt="new" width="100%"/>
            <div class="comments">
                <h3>17 INSPIRING EXAMPLES OF PARALLAX SCROLLING SITES</h3>
                <p>When it comes to parallax scrolling, the line that separates good and bad choices is pretty thin. A while back parallax was being used to deliver an explosion of elements floating around the screen.</p>
                <img src="<?php bloginfo('template_url'); ?>/images/like-icon.png" alt="like"/>
                <mark>2</mark>
                <span>by John Doe  /  4 comments  /  Oct. 12, 2013</span>
            </div>
        </div>
<!-- 6 post --> <!--
        <div class="post">
            <img src="<?php bloginfo('template_url'); ?>/images/new-6.png" alt="new" width="100%"/>
            <div class="comments">
                <h3>17 INSPIRING EXAMPLES OF PARALLAX SCROLLING SITES</h3>
                <p>As a designer, it can be tempting to use a lot of unnecessary design elements or a complex color palette to make a website stand out.</p>
                <img src="<?php bloginfo('template_url'); ?>/images/like-icon.png" alt="like"/>
                <mark>21</mark>
                <span>by John Doe  /  4 comments  /  Oct. 12, 2013</span>
            </div>
        </div>
<!-- 7 post --> <!--
        <div class="post">
            <img src="<?php bloginfo('template_url'); ?>/images/new-7.png" alt="new" width="100%"/>
            <div class="comments">
                <h3>17 INSPIRING EXAMPLES OF PARALLAX SCROLLING SITES</h3>
                <p>When it comes to parallax scrolling, the line that separates good and bad choices is pretty thin. A while back parallax was being used to deliver an explosion of elements floating around the screen.</p>
                <img src="<?php bloginfo('template_url'); ?>/images/like-icon.png" alt="like"/>
                <mark>13</mark>
                <span>by John Doe  /  4 comments  /  Oct. 12, 2013</span>
            </div>
        </div>
-->
        <div class="pagination">
            <a class="previous" href="#">PREV</a>
            <a class="next" href="#">NEXT</a>
        </div>

    </section>

    <?php get_sidebar(); ?>

    <?php get_footer(); ?>