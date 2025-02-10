<?php $fourth_section = get_field('fourth_section',8);?>
<section class="sec-4">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 wow fadeInLeft">
                <div class="sec-heading">
                    <span class="sub-heading"><?php echo $fourth_section['heading'];?></span>
                    <h2 class="text-white"><?php echo $fourth_section['sub_heading'];?></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="testi-slider-2">
                    <?php $box_list = $fourth_section['box_list'];?>
                    <?php foreach ($box_list as $boxlist) {?>
                    <div class="testi-slide">
                        <h5><?php echo $boxlist['heading']; ?></h5>
                        <p><?php echo $boxlist['content']; ?></p>
                        <div class="bottom">
                            <div class="client">
                                <img src="<?php echo $boxlist['image']; ?>" alt="" loading="lazy">
                                <div class="det">
                                    <span class="name"><?php echo $boxlist['para']; ?></span>
                                    <span class="stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>