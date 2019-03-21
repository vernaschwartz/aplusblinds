<!--Section-->
<section id="colmd6-2colmd3img" >
    <div class="container">
        <div class="row">
        <?php if(have_rows('colmd6_2colmd3img')) : while(have_rows('colmd6_2colmd3img')) : the_row(); ?>
            <div class="col-md-6">
            <?php the_sub_field('text'); ?>
            </div>
            <div class="col-md-3">
                <?php $image = get_sub_field('image');?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
            </div>
            <div class="col-md-3">
                <?php $image2 = get_sub_field('image2');?>
                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" class="img-fluid">
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!--End Section-->