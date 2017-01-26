<footer>
    <section class="footer-info">
        <div class="container ">

            <div class="about col-lg-3">
                <div class="about-block">
                    <h2>About Us</h2>
                    <article>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                        sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis nostrud exerci tation ullamcorper
                        suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    </article>
                    <button type="button" class="btn-style hvr-pulse-grow">Learn more</button>
                </div>
                <div class="stream">
                    <h2>Photo Stream</h2>
                    <ul class="images">
                        <li class="d-flex flex-nowrap">
                            <a><img src="<?php bloginfo('template_url') ?>/images/footer-img-1.jpg" alt="" class="img-fluid"></a>
                            <a><img src="<?php bloginfo('template_url') ?>/images/footer-img-2.jpg" alt="" class="img-fluid"></a>
                            <a><img src="<?php bloginfo('template_url') ?>/images/footer-img-3.jpg" alt="" class="img-fluid"></a>
                        </li>
                        <li class="d-flex flex-nowrap">
                            <a><img src="<?php bloginfo('template_url') ?>/images/footer-img-4.jpg" alt="" class="img-fluid"></a>
                            <a><img src="<?php bloginfo('template_url') ?>/images/footer-img-5.jpg" alt="" class="img-fluid"></a>
                            <a><img src="<?php bloginfo('template_url') ?>/images/footer-img-6.jpg" alt="" class="img-fluid"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tweets col-lg-5">
                <h2>Tweets</h2>
                <div class="tweets-frame">
                    <a class="twitter-timeline" href="https://twitter.com/TwitterDev">Tweets by TwitterDev</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <div class="social d-flex justify-content-between align-items-center">
                    <p>Social Connecting</p>
                    <ul class="social-icons">
                        <li class="hvr-pulse-grow"><a href="#"> </a></li>
                        <li class="hvr-pulse-grow"><a href="#"> </a></li>
                        <li class="hvr-pulse-grow"><a href="#"> </a></li>
                        <li class="hvr-pulse-grow"><a href="#"> </a></li>
                        <li class="hvr-pulse-grow"><a href="#"> </a></li>
                        <li class="hvr-pulse-grow"><a href="#"> </a></li>
                        <li class="hvr-pulse-grow"><a href="#"> </a></li>
                        <li class="hvr-pulse-grow"><a href="#"> </a></li>
                    </ul>
                </div>
            </div>
            <div class="contact col-lg-4">
                <h2>Contact info</h2>

                <ul>
                    <li class="d-flex justify-content-start align-items-center">
                        <span>Address: 12569 Saint Patrick des Prés,85000 Paris, France</span>
                    </li>
                    <li class="d-flex justify-content-start align-items-center">
                        <span>Phone: +38 045 845-45-78<br/>+38 045 845-45-79</span>

                    </li>
                    <li class="d-flex justify-content-start align-items-center">
                        <span>E-mail: <span class="yellow">freeforwebdesign@gmail.com</span></span>
                    </li>
                </ul>

                <h2>Follow Us</h2>
                <p>Lorem Ipsum is simply dummy text of the printing
                    and typesetting industry.</p>
                <form action="#" class="form d-flex justify-content-start align-items-center">
                    <input type="email">
                    <button type="submit"></button>
                </form>
            </div>
        </div>
    </section>

    <section class="footer-nav">
        <div class="container d-flex justify-content-between align-items-center">
            <p>Copyright 2013 - FreeForWebDesign.com - All Rights Reserved</p>

            <nav>
                <?php wp_nav_menu(array('theme_location' => 'nav-bar', 'menu_class'=>'nav-bar-footer d-flex align-items-center', 'container'=> 'false')); ?>
<!--                <ul class="nav-bar-footer d-flex align-items-center">-->
<!--                    <li><a href="--><?php //home_url(); ?><!--">Home</a></li>-->
<!--                    <li><a href="#">Portfolio</a></li>-->
<!--                    <li><a href="#">Blog</a></li>-->
<!--                    <li><a href="#">About us</a></li>-->
<!--                    <li><a href="#">Contact</a></li>-->
<!--                </ul>-->
            </nav>
        </div>
    </section>

</footer>
<?php wp_footer(); ?>
</body>
</html>