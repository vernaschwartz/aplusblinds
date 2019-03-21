<?php
// Template Name: About Page
get_header();


?>
    <!--Page Title-->
    <?php get_template_part('template-parts/page-title'); ?>
    <!--End Page Title-->

    <section id="section" class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>A+ Blinds has been a locally owned company since 2006.  The owner, James Valdez, has years of experience in the window coverings industry.  He also has an education degree and has taught since 1999. Combining the skills from both careers, James takes pride in helping with the windowing covering selection so the perfect treatment is found for your home or office.</p>
                    <p>We service Indianapolis and Surrounding Areas:
                    Zionsville, Carmel, Westfield, Fishers, Noblesville, Avon, Brownsburg, Greenwood, New Palestine, McCordsville, Lebanon, Plainfield, Mooresville, Beech Grove, Fortville, Camby, and Cicero</p>
                </div>

                <div class="col-md-6">
                <img src="<?php bloginfo('template_directory'); ?>/images/jamesvaldez.jpg">
                </div>
            </div>
        </div>
    </section>
    
    <!--CTA-->
    <?php get_template_part('template-parts/call-to-action');?>
    <!--End CTA-->

    <?php get_footer();?>