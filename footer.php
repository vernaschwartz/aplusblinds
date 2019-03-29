<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscoretheme
 */

?>
<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    &copy; <?php $thisYear = (int)date('Y'); echo $thisYear ; ?> <a target="_blank" href="http://aplus.hatchetdevelopment.com" title="A+ Blinds">A+ Blinds</a>
                    <ul>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>commercial/">Commercial</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>residential/">Residential</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="pull-right">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/">About Us</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/">Contact Us</a></li>
                    </ul>
                    <address style="margin-bottom:0px;">160 W 44th St,<br />Indianapolis, IN 46208</address>
                    <a href='tel://(317)698-5445'>(317) 698-5445</a>
                </div>
            </div>
        </div>
    </footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php wp_footer(); ?>

</body>
</html>
