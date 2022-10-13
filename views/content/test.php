<?php
$page = 'test';
?>

<!-- Testimonial Section Start -->
<div class="rs-testimonial main-home style2 bg5 pt-120 pb-120 md-pt-80 md-pb-80" style="background-color: white;">
    <div class="container">
        <div class="sec-title2 text-center mb-45">
            <span style="color: #be1d2c;">Testimonial</span>
            <h2 class="title testi-title" style="color: #be1d2c;">
                Ce que pensent nos clients!
            </h2>
        </div>
        <div class="rs-carousel owl-carousel" data-loop="true" data-items="2" data-margin="30" data-autoplay="true"
            data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false"
            data-nav-speed="false" data-md-device="2" data-md-device-nav="false" data-md-device-dots="true"
            data-center-mode="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="true"
            data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="true" data-mobile-device="1"
            data-mobile-device-nav="false" data-mobile-device-dots="false">

            <?php foreach ($params['testimonials'] as $testimonial) :?>


            <div class="testi-item">
                <div class="author-desc">
                    <div class="desc">
                        <img class="quote" src="<?= PIC . 'testimonial/main-home/quote-white.png'?>" alt="">
                        <?= $testimonial->getExcerpt() ?>
                        <br>
                        
                    </div>
                    <div class="author-img">
                        <img src="<?= PIC.'testimonial/'.$testimonial->image ?>" alt="">
                    </div>
                </div>
                <div class="author-part">
                    <a class="name text-danger"><?= $testimonial->author?></a>
                    <span class="text-danger font-italic"><?= $testimonial->poste?></span>
                </div>
            </div>


            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Testimonial Section End -->