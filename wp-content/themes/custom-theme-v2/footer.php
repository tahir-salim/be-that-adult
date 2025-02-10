<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="footer-sec">
                    <a href="<?php echo site_url();?>" class="logo">
                        <img src="<?php echo $options['logo'];?>" alt="">
                    </a>

                    <p><?php echo $options['footer_about'];?></p>
                </div>

                <ul class="f-link">
                    <li>
                        <a href="<?php echo $options['facebook'];?>"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $options['twitter'];?>"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $options['instagram'];?>"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="<?php echo $options['youtube'];?>"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3">
                <div class="footer-hdng">
                    <h4>Quick Links</h4>
                </div>
                <!-- <ul class="f-menu">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="our-mission.php">Mission</a>
                    </li>
                    <li>
                        <a href="our-services.php">Services</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>
                </ul> -->
                <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> 'f-menu' ) ); ?>

            </div>
            <div class="col-lg-3">
                <div class="footer-hdng">
                    <h4>Contact Us</h4>
                </div>
                <ul class="f-menu">
                    <li>
                        <a href="mailto:<?php echo $options['email'];?>">
                            <i class="fas fa-envelope"></i>
                            <?php echo $options['email'];?>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fas fa-clock"></i>
                            <?php echo $options['address'];?>
                        </a>
                    </li>
                    <li>
                        <a href="tel:<?php echo $options['phone_number'];?>">
                            <i class="fa fa-phone"></i>
                            <?php echo $options['phone_number'];?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="copyright-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright">
                    <p><?php echo $options['copyright'];?> </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
<?php wp_footer(); ?>

</main>
</body>

</html>