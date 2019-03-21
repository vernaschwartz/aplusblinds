<!--Section-->
<section id="3colmd4-imgtxt" >
    <div class="container">
        <div class="row">
        <?php if(have_rows('3colmd4_imgtxt')) : while(have_rows('3colmd4_imgtxt')) : the_row(); ?>
            <div class="col-md-4">
                <?php $image = get_sub_field('image');?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
                <?php the_sub_field('text'); ?>
            </div>
            <div class="col-md-4">
                <?php $image2 = get_sub_field('image2');?>
                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" class="img-fluid">
                <?php the_sub_field('text2'); ?>
            </div>
            <div class="col-md-4">
                <?php $image3 = get_sub_field('image3');?>
                <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" class="img-fluid">
                <?php the_sub_field('text3'); ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!--End Section-->