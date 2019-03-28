
 <!--Page Title-->
 <?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
 <section id="page-title" class="spacer text-center" style="background: linear-gradient(rgba(0,0,0,.4),rgba(0,0,0,.4)), url('<?php echo $imgsrc[0]; ?>')no-repeat center center; background-size: cover; color:white;">
        <div class="container-fluid">
            <div class="row  justify-content-center text-center">
                <div class="col-md-7 ">
                <h1><?php the_title(); ?></h1>                  
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->