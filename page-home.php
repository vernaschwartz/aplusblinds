<?php
// Template Name: Home Page
get_header();


?>
    <!--Hero-->
    <section id="hero" style="background-image: linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.4)), url(<?php bloginfo('template_directory'); ?>/images/hero.jpg);
    background-size: cover;">
        <div class="container">
            <div class="row" >
                <div class="col-md-7">
                    <h1>Blinds, Shades, Shutters, Design, and Installation</h1>

                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->

    <!--Gravity Form Section-->
    <section id="gravity" >
        <div class="container schedule-cta">
            <div class="row">
                <div class="col-md-4 gravity-home text-center align-justify" style="background-image: linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)), url(<?php bloginfo('template_directory'); ?>/images/wwshades3.jpg); background-size: cover; color:white; padding-top:20px;">
                <div>
                <h4>NORTH AMERICA'S #1 CHOICE</h4>
                <h1 style="line-height:44px;">Explore What <br>Beautiful Can<br> Do For Your<br> Windows!</h1>
                </div>
                </div>
                <div class="col-md-8 schedule-form">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
                </div>
            </div>
        </div>
      </section>
      <!--End Gravity Form Section-->  

    <!--Content-->
    <section id="content" class="spacer">
        <div class="container">
            <div class="center">
                <h2>Locally Owned. Expert Advice. Endless Options.  </h2>
                <p>Providing window blinds, shades, and shutters in the Indianapolis and surrounding areas, A+ Blinds has everything you need to put the finishing touches on your home or office. Factors such as light-control, privacy, style, color, and budget should be considered when picking the right window covering. Our sales professionals have years of experience helping customers with this process in order to choose the best window covering for a location.</p>
                <p>During your free consultation, you have the opportunity to view samples, styles and colors in your home or office. We professionally measure your windows and provide you with an estimate for your project in order to obtain the best window covering for your budget. Whether you are thinking of remodeling, building from scratch, or even just changing the look of a room, give us a call for a free consultation. We look forward to working with you.</p>
            </div>
        </div>
    </section>
    <!--End Content-->

    <!--Section-->
    <section id="section" >
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <iframe width="493" height="277" src="https://www.youtube.com/embed/fs4AYnEmuBY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <p>We recently completed a custom blind installation for Hatchet Marketing, a local company in Indianapolis. Their offices in the Stutz Office Building downtown has an amazing view of the city, but they were struggling with a lighting control issue. When the sun would come across their window it would wash out their computer monitors, making it difficult to work. Check out what we recommended for them, and how the custom install turned out.</p>
                </div>
            </div>
        </div>
    </section>
    <!--End Section-->

    <!--Feature-->
    <section id="feature" class="spacer">
        <div class="container">
            <div class="center">
                <h2>Blinds, Shutters, and Shades</h2>
                <p>We offer a wide variety of products to help you create the perfect space in your home, apartment complex, or office. Our products offer privacy, dimension and style, lighting control, and much more.</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="features-img" src="<?php bloginfo('template_directory'); ?>/images/blinds.jpg">
                            <p>Providing privacy, light control and color options with blinds...</p>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>blinds/" class="btn btn-primary" style="border-color: #ea1f25;" >View Blinds</a>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="features-img" src="<?php bloginfo('template_directory'); ?>/images/shutters.png">
                            <p>Adding dimension and amazing style with shutters...</p>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>shutters/" class="btn btn-primary" style="border-color: #ea1f25;">View Shutters</a>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-4 col-sm-4 fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <img class="features-img" src="<?php bloginfo('template_directory'); ?>/images/shades.jpg">
                            <p>Offering light control, fabric and color, or control options with shades...</p>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>shades/" class="btn btn-primary" style="border-color: #ea1f25;">View Shades</a>
                        </div>
                    </div>
                </div>
                <!--/.services-->
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--End Feature-->


    <!--CTA-->
    <section id="CTA" style="background-color: #ea1f25; height: 250px; background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <div class="container-fluid">
                <h2 >We've got you covered!</h2>
                <p >Let's talk! Call Now at (317) 698-5445</p>
                <a class="btn btn-primary " style="border-color: #2c2c2c; background: #2c2c2c;"  href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/">Schedule a Free Consultation</a>
        </div>
        <!--/.container-->
    </section>
    <!--End CTA-->

    <?php get_footer();?>