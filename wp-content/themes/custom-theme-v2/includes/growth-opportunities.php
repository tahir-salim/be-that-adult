<?php $first_section = get_field('first_section',8);?>
<section class="sec-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <span class="sub-heading"><?php echo $first_section['heading'];?></span>
                    <h2 class="text-white"><?php echo $first_section['sub_heading'];?></h2>
                </div>
            </div>
        </div>
        <div class="row mt-md-4 wow fadeInUp">

            <?php $box_list = $first_section['box_list'];?>
            <?php foreach ($box_list as $boxlist) {?>

            <div class="col-lg-3">
                <div class="mission-card">
                    <img src="<?php echo $boxlist['image']; ?>" alt="">
                    <h3 class="text-white"><?php echo $boxlist['heading']; ?></h3>
                    <p class="text-white"><?php echo $boxlist['content']; ?></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>