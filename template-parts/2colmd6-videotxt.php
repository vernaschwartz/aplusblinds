<!--Section-->
<section id="2colmd6-videotxt" >
    <div class="container">
        <div class="row">
        <?php if(have_rows('2colmd6_videotxt')) : while(have_rows('2colmd6_videotxt')) : the_row(); ?>
            <div class="col-md-6">
                <?php the_sub_field('video'); ?>
                <?php the_sub_field('text'); ?>
            </div>
            <div class="col-md-6">
                <?php the_sub_field('video2'); ?>
                <?php the_sub_field('text2'); ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!--End Section-->