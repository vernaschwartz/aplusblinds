<!--Section-->
<section id="photo-3colmd4">
    <div class="container">
        <div class="row">
        <?php if(have_rows('photo_3colmd4')) : while(have_rows('photo_3colmd4')) : the_row(); ?>
            <div class="col-md-4" style="height:244px; overflow:hidden;">
                <?php $image = get_sub_field('image');?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
            </div>
            <div class="col-md-4" style="height:244px; overflow:hidden;">
                <?php $image2 = get_sub_field('image2');?>
                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" class="img-fluid">
            </div>
            <div class="col-md-4" style="height:244px; overflow:hidden;">
                <?php $image3 = get_sub_field('image3');?>
                <img src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" class="img-fluid">
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!--End Section-->