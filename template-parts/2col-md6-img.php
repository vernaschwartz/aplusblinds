<!--Section-->
<section id="2col-md6-img" >
    <div class="container">
        <div class="row">
        <?php if(have_rows('2col_md6_img')) : while(have_rows('2col_md6_img')) : the_row(); ?>
            <div class="col-md-6" style="height:375px; overflow:hidden; margin-bottom:30px;">
            <?php $image = get_sub_field('image');?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
            </div>
            <div class="col-md-6" style="height:375px; overflow:hidden; margin-bottom:30px;">
            <?php $image2 = get_sub_field('image2');?>
                <img src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" class="img-fluid">
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!--End Section-->