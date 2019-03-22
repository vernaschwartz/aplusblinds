<!--Section-->
<section id="4colmd3-imgtxt" >
    <div class="container">
        <div class="row">
        <?php if(have_rows('4colmd3_imgtxt')) : while(have_rows('4colmd3_imgtxt')) : the_row(); ?>
            <div class="col-md-3" >
                <div style="height:191px; overflow:hidden;">
                    <?php $image = get_sub_field('image');?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
                </div>
                <?php the_sub_field('text'); ?>
            </div>
            <div class="col-md-3" >
                <div style="height:191px; overflow:hidden;">
                    <?php $image2 = get_sub_field('image2');?>
                    <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" class="img-fluid">
                </div>
                <?php the_sub_field('text2'); ?>
            </div>
            <div class="col-md-3">
                <div style="height:191px; overflow:hidden;">
                    <?php $image3 = get_sub_field('image3');?>
                    <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" class="img-fluid">
                </div>
                <?php the_sub_field('text3'); ?>
            </div>
            <div class="col-md-3">
                <div style="height:191px; overflow:hidden;">
                    <?php $image4 = get_sub_field('image4');?>
                    <img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" class="img-fluid">
                </div>
                <?php the_sub_field('text4'); ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!--End Section-->