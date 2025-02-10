<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $second_section = get_field('second_section');?>
<?php $third_section = get_field('third_section');?>


<?php get_header(); ?>
<div class="mainBanner">
    <div class="container">
        <div class="banner-content">
            <div class="row align-items-center">
                <div class="col-lg-7 wow fadeInLeft">
                    <h1 class="banner-heading text-white"><?php echo $banner_section['heading'];?></h1>
                    <p class="banner-text text-white"><?php echo $banner_section['content'];?></p>
                    <div class="btn-wrap">
                        <a href="<?php echo $banner_section['button_link'];?>"
                            class="theme-btn"><?php echo $banner_section['button_text'];?>
                            <i class="fas fa-chevron-double-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInRight">
                    <div class="banner-img">
                        <img src="<?php echo $banner_section['image'];?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part("includes/growth-opportunities"); ?>

<section class="sec-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="sec-heading">
                    <span class="sub-heading"><?php echo $second_section['heading'];?></span>
                    <h2 class="text-white fs-67"><?php echo $second_section['sub_heading'];?></h2>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="sec-heading">
                    <p><?php echo $second_section['content'];?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="about-image">
                    <img src="<?php echo $second_section['image'];?>" alt="">
                </div>
            </div>
        </div>

        <div class="col-lg-6 wow zoomIn">
            <div class="goto">
                <?php echo $second_section['list'];?>
            </div>
        </div>
    </div>
</section>

<section class="sec-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <span class="sub-heading"><?php echo $third_section['heading'];?></span>
                    <h2 class="text-white fs-67"><?php echo $third_section['sub_heading'];?></h2>
                </div>
            </div>
        </div>

        <div class="row g-5 mt-md-2">
            <?php $box_list = $third_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>
            <div class="col-lg-4 wow zoomIn">
                <div class="pro-card">
                    <img src="<?php echo $boxlist['image']; ?>" alt="">
                    <div class="pro-name">
                        <a href="<?php echo $boxlist['button_link']; ?>">
                            <h4 class="text-white"><?php echo $boxlist['button_text']; ?></h4>
                        </a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<?php get_template_part("includes/slider"); ?>

<?php get_template_part("includes/cta"); ?>
<?php get_footer(); ?>