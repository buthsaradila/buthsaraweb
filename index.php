<?php
require_once "header.php";
?>

        <!-- Slider Section Start-->
        <section class="slider">
            <div class="slider-container">
                <div id="carousel" class="carousel  slide carousel-fade" data-ride="carousel">

                    <ol class="carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">
                            <div class="carousel-background"><img src="img/slider-1.jpg" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>Web Development</h2>
                                    <p>Web Applications,E-commerce web Applications,Business Web Applications & Webpage Development</p>
                                    <a href="contactPage.php" class="btn-get-started">Get Started</a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-background"><img src="img/slider-2.jpg" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>App Development</h2>
                                    <p>Mobile Applications & Windows Application Devolopment</p>
                                    <a href="contactPage.php" class="btn-get-started">Get Started</a>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="carousel-background"><img src="img/slider-3.jpg" alt=""></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>Game Development</h2>
                                    <p>2D web Game Development</p>
                                    <a href="contactPage.php" class="btn-get-started">Get Started</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon ion-md-arrow-back" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon ion-md-arrow-forward" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </section>
        <!-- Slider Section End-->

        <?php
        require_once "about.php";

        require_once "service.php";
        ?>

        <!-- Call To Action Start -->
        <section class="call-to-action">
            <div class="container text-center">
                <header class="section-header">
                    <h3>Call to Action</h3>
                    <p>
                        Ready to start a project, collaborate, or simply connect? We are here to make it happen. Let's turn your ideas into reality and create something exceptional together. Feel free to reach out via the contact form on to start the conversation.
                    </p>
                </header>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </section>
        <!-- Call To Action End -->

        <?php
        require_once "pricing.php";

        require_once "skills.php";

        require_once "portfolio.php";

        require_once "team.php";
        
        require_once "clients.php";

        require_once "contact.php";

        require_once "footer.php";
        
        ?>