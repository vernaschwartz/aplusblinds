<!--Section-->
<section id="comd8-colmd4img">
    <div class="container">
        <div class="row">
            <?php if(have_rows('colmd8_colmd4img')) : while(have_rows('colmd8_colmd4img')) : the_row(); ?>
            <div class="col-md-8">
                <?php the_sub_field('text'); ?>
            </div>
            <div class="col-md-4">
            <?php $image = get_sub_field('image');?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!--End Section-->