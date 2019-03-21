
<!--Section-->
<section id="two-colmd6">
    <div class="container">
        <div class="row">
        <?php if(have_rows('two_colmd6')) : while(have_rows('two_colmd6')) : the_row(); ?>
            <div class="col-md-6">
                <?php the_sub_field('text'); ?>
            </div>
            <div class="col-md-6">
                <?php the_sub_field('video'); ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!--End Section-->