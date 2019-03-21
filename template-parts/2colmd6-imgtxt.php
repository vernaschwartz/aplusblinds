<!--Section-->
<section id="2colmd6-imgtxt" >
    <div class="container">
        <div class="row">
        <?php if(have_rows('2colmd6_imgtxt')) : while(have_rows('2colmd6_imgtxt')) : the_row(); ?>
            <div class="col-md-6">
                <?php $image = get_sub_field('image');?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
                <?php the_sub_field('text'); ?>
            </div>
            <div class="col-md-6">
                <?php $image2 = get_sub_field('image2');?>
                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" class="img-fluid">
                <?php the_sub_field('text2'); ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!--End Section-->