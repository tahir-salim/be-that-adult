<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="sec-2 about-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="sec-heading">
                    <span class="sub-heading"><?php echo $first_section['heading'];?></span>
                    <h2 class="text-white fs-67"><?php echo $first_section['sub_heading'];?></h2>
                    <p><?php echo $first_section['content'];?></p>
                </div>
                <div class="goto">
                    <?php echo $first_section['list'];?>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="about-img">
                    <img src="<?php echo $first_section['image'];?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_template_part("includes/slider"); ?>

<?php get_template_part("includes/cta"); ?>
<?php get_footer(); ?>