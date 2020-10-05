<?php $__env->startSection('title', 'Zanynn - Me'); ?>
    
<?php $__env->startSection('content'); ?>

<div id="main-wrapper">

<!-- Page Preloader -->
<div id="preloader">
    <div id="status">
        <div class="status-mes"></div>
    </div>
</div>

<div class="uc-mobile-menu-pusher">

<div class="content-wrapper">
<nav class="navbar m-menu navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="img/logo.png" alt=""></a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="#navbar-collapse-1">

            <ul class="nav-cta hidden-xs">
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                        class="fa fa-search"></i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="head-search">
                                <form role="form">
                                    <!-- Input Group -->
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type Something">
			                                <span class="input-group-btn">
			                                  <button type="submit" class="btn btn-primary">Search</button>
			                                </span>
                                    </div>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right main-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/guide">Guide</a></li>
                <li><a href="/contact">Contact</a></li>
                <li class="active"><a href="/me">Me</a></li>
            </ul>

        </div>
        <!-- .navbar-collapse -->
    </div>
    <!-- .container -->
</nav>
<!-- .nav -->

<?php $__currentLoopData = $me; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zann): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="single-page-title">
<a href="#"><img class="meimage" src="<?php echo e($zann->imageMe); ?>" alt="Image"></a><!--/img/me.jpg-->
    <div class="container text-center">
        <h2><br><br><br><?php echo e($zann->nameMe); ?></h2>
        <section class="about-text ptb-100">
    <section class="section-title">
        <div class="container text-center">
            <!--<h2><?php echo e($zann->nameMe); ?></h2> -->
            <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="text">
                <p><?php echo e($zann->descriptionMe); ?></p>
            </div>
         
            </div>
        </div>
    </div>

</section>
    </div>
</section>
<!-- .page-title -->


<!-- .about-text-->


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<footer class="footer">

    <!-- Footer Widget Section -->
    <div class="footer-widget-section">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <div class="footer-logo">
                            <a href="#"><img src="<?php echo e(asset('img/logo.png')); ?>" alt=""></a>
                        </div>
                        <p>Our business was founded by car enthusiasts, just like you. Our passion has fueled us
                        to become the one stop shop for all your performance related needs. We’re a small team
                        based out of Las Vegas, Nevada with over 15 years of experience in both racing and
                        the automotive aftermarket!</p>

                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block">
                    <div class="footer-widget widget_text">
                        <h3>We will make your car amazing</h3>
                        <p>We have been following the development of the 86 chassis since the very beginning to 
                        thoroughly understand its strengths and weaknesses. This helps us effectively source or 
                        manufacture the best possible parts for your car! If we wouldn’t put it on our car, 
                        we don’t expect you to either.</p>
                    </div>
                </div><!-- /.col-sm-4 -->

                <div class="col-sm-4 footer-block last">
                    <div class="footer-widget widget_text">
                        <h3>Contact Us</h3>
                        <address>
                            Call Us 08xxxxx or 021xxxxxxx<br>
                            Send an Email on <a href="mailto:#">zanynn@hotmail.com</a><br>
                            Visit Us The Breeze , South Tangerang<br>
                            Indonesia<br>
                        </address>

                        <ul class="list-inline social-links">
                            <li><a href="https://www.instagram.com/zanynn_/"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="https://twitter.com/Zanynn_"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCVrKbudeXfPYKomd0_K1AJg"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://www.twitch.tv/riotgames"><i class="fa fa-twitch"></i></a></li>
                        </ul>
                    </div>
                </div><!-- /.col-sm-4 -->
            </div>
        </div>
    </div><!-- /.Footer Widget Section -->

    <div class="copyright-section">
        <div class="container clearfix">
            <span class="copytext">&copy; ZANYNN. All rights reserved. | Design By: <a href="#">Muhammad Fauzan Tri Aji - 1931710150</a></span>

            <ul class="list-inline pull-right">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/guide">Guide</a></li>
                <li><a href="/contact">Contact</a></li>
                <li class="active"><a href="/me">Me</a></li>
            </ul>
        </div><!-- .container -->
    </div><!-- .copyright-section -->
</footer>
<!-- .footer -->

</div>
<!-- .content-wrapper -->
</div>
<!-- .offcanvas-pusher -->
<!-- Script -->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/mobile-menu.js"></script>
<script src="js/flexSlider/jquery.flexslider-min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Kuis\resources\views/Me.blade.php ENDPATH**/ ?>