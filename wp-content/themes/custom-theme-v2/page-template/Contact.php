<?php /** * Template Name: Contact Template */ ?>
<?php get_header(); ?>

<section class="contactus-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="form aos-init aos-animate" data-aos="zoom-in" data-aos-duration="1000">

                <?php echo do_shortcode('[contact-form-7 id="207082c" title="Contact form 1"]');?>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_template_part("includes/slider"); ?>

<?php get_template_part("includes/cta"); ?>
<?php get_footer(); ?>