<?php
// Template Name: Contact Page
get_header();


?>
    <!--Page Title-->
    <?php get_template_part('template-parts/page-title'); ?>
    <!--End Page Title-->

    <section id="section" class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Let's Talk!</h2>
                    <p>We'd love to hear about your next project, and how A+ Blinds can provide you with the perfect window treatment solution. Use the form to start the conversation, or give us a call using the number below.</p>
                    <h2><a href='tel://(317)698-5445'>(317) 698-5445</a></h2>
                </div>
                <div class="col-md-8">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                    endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    <!--CTA-->
    <?php get_template_part('template-parts/call-to-action');?>
    <!--End CTA-->
    
    <?php get_footer();?>