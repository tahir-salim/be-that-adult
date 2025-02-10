<?php /** * Template Name: Our Services Template */ ?>
<?php $third_section = get_field('third_section',8);?>
<?php $first_section = get_field('first_section');?>

<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <?php $box_list = $first_section['box_list'];?>
                <?php $x=1; foreach ($box_list as $boxlist) {?>

                <div class="box-<?php echo $x;?> <?php if ($x==1) {echo 'showfirst';}?> port-content">
                    <div class="tab-content">
                        <div class="row align-items-center">
                            <div class="col-lg-7 wow fadeInLeft">
                                <div class="image-project">
                                    <img src="<?php echo $boxlist['image']; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5 wow fadeInRight">
                                <div class="project-box">
                                    <div class="del-wrap">
                                        <h4><?php echo $boxlist['heading']; ?></h4>
                                        <p><?php echo $boxlist['content']; ?></p>
                                        <div class="btn-wrap">
                                            <a href="<?php echo $boxlist['button_link']; ?>"
                                                class="theme-btn"><?php echo $boxlist['button_text']; ?> <i
                                                    class="fas fa-chevron-double-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $x++;}?>
            </div>
        </div>

        <div class="row mt-md-5">
            <div class="col-lg-12">
                <ul class="slider-tabbing">
                    <?php $box_list = $third_section['box_list'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>

                    <li data-targetit="box-<?php echo $x; ?>" class="<?php if ($x==1) {echo  'active';}?>">
                        <div class="pro-card">
                            <img src="<?php echo $boxlist['image']; ?>" alt="">
                            <div class="pro-name">
                                <a href="<?php echo $boxlist['button_link']; ?>">
                                    <h4 class="text-white"><?php echo $boxlist['button_text']; ?></h4>
                                </a>
                            </div>
                        </div>
                    </li>
                    <?php $x++;}?>
                </ul>
            </div>
        </div>
    </div>
</section>




<?php get_template_part("includes/slider"); ?>

<?php get_template_part("includes/cta"); ?>
<?php get_footer(); ?>