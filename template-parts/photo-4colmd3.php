<!--Section-->
<section id="photo-4colmd3">
    <div class="container">
        <div class="row">
        <?php if(have_rows('photo_4colmd3')) : while(have_rows('photo_4colmd3')) : the_row(); ?>
            <div class="col-md-3" style="height:170px; overflow:hidden;">
                <?php $image = get_sub_field('image');?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
            </div>
            <div class="col-md-3"style="height:170px; overflow:hidden;" >
                <?php $image2 = get_sub_field('image2');?>
                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" class="img-fluid">
            </div>
            <div class="col-md-3" style="height:170px; overflow:hidden;">
                <?php $image3 = get_sub_field('image3');?>
                <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" class="img-fluid">
            </div>
            <div class="col-md-3" style="height:170px; overflow:hidden;" >
                <?php $image4 = get_sub_field('image4');?>
                <img src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" class="img-fluid">
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!--End Section-->