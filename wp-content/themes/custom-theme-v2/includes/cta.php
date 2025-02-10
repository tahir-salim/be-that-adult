<?php $fifth_section = get_field('fifth_section',8);?>
<section class="sec-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 wow fadeInUp">
                <div class="sec-heading center">
                    <h2 class="text-white fs-67"><?php echo $fifth_section['heading'];?></h2>
                    <p><?php echo $fifth_section['content'];?></p>
                </div>
                <div class="btn-wrap justify-content-center">
                    <a href="<?php echo $fifth_section['button_link'];?>"
                        class="theme-btn"><?php echo $fifth_section['button_text'];?><i
                            class="fas fa-chevron-double-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>