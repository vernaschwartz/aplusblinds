<?php

get_header();
?>

	<!--Page Title-->
	<?php get_template_part( 'template-parts/page-title'); ?>
	<!--END Page Title-->

        <!--Section-->
        <section id="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                            the_content();
                            endwhile; else: ?>
                            <p>Sorry, no posts matched your criteria.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!--End Section-->



<!-- Flexible Content -->
<?php 
    if ( have_rows('flexible_content') ): 

        while( have_rows('flexible_content') ) : the_row();

            if(get_row_layout() === 'two_colmd6') :
                get_template_part('template-parts/two-colmd6');

            elseif(get_row_layout() === 'col_md11&1') :
                get_template_part('template-parts/col-md11&1');

            elseif(get_row_layout() === 'col_md12') :
                get_template_part('template-parts/col-md12');

            elseif(get_row_layout() === 'photo_4colmd3') :
                get_template_part('template-parts/photo-4colmd3');

            elseif(get_row_layout() === '2col_md6_img') :
                get_template_part('template-parts/2col-md6-img');

            elseif(get_row_layout() === 'colmd8_colmd4img') :
                get_template_part('template-parts/colmd8-colmd4img');

            elseif(get_row_layout() === 'colmd6_2colmd3img') :
                get_template_part('template-parts/colmd6-2colmd3img');

            elseif(get_row_layout() === 'photo_3colmd4') :
                get_template_part('template-parts/photo-3colmd4');

            elseif(get_row_layout() === '3colmd4_imgtxt') :
                get_template_part('template-parts/3colmd4-imgtxt');

            elseif(get_row_layout() === '2colmd6_imgtxt') :
                get_template_part('template-parts/2colmd6-imgtxt');

            elseif(get_row_layout() === '2colmd6_videotxt') :
                get_template_part('template-parts/2colmd6-videotxt');

            elseif(get_row_layout() === '4colmd3_imgtxt') :
                get_template_part('template-parts/4colmd3-imgtxt');

            elseif(get_row_layout() === 'spacer_top') :
                get_template_part('template-parts/spacertop');

            elseif(get_row_layout() === 'spacer_bottom') :
                get_template_part('template-parts/spacerb');
         endif;

        endwhile;
        
        else :

            // No Layouts Found
        
    endif;
?>
<!-- End Flexible Content -->

<!--CTA-->
<?php get_template_part( 'template-parts/call-to-action'); ?>
<!--End CTA-->
<?php

get_footer(); ?>
