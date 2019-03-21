<!--Section-->
<section id="col-md11&1" >
    <div class="container">
        <div class="row">
        <?php if(have_rows('col_md11&1')) : while(have_rows('col_md11&1')) : the_row(); ?>
            <div class="col-md-11">
                <?php the_sub_field('text'); ?>
            </div>
            <div class="col-md-1">
            <?php $image = get_sub_field('image');?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid">
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>
<!--End Section-->