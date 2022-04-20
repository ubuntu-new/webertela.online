<?php
    \app\assets\IndexAsset::register($this);


?>
<ul class="social social-rounded social-rounded-fixed social-rounded-dark">
    <li><div class="fb-like" data-href="http://www.webertela.online/" data-width="" data-layout="standard" data-action="like" data-size="small" data-share="true"></div></li>
    <!--<li><a href="#"><i class="socicon-twitter"></i></a></li>
    <li><a href="#"><i class="socicon-facebook"></i></a></li>
    <li><a href="#"><i class="socicon-googleplus"></i></a></li>-->
</ul>
<div class="home-piling a-pagepiling full-height">
    <div class="section pp-scrollable slide slide1 slide-dark">
        <div class="slide-container">
            <div class="video-container a-video" data-vimeo-width="640" data-vimeo-height="360"><iframe src="https://player.vimeo.com/video/16115588?title=0&byline=0&portrait=0&autoplay=1&autopause=0&muted=1&background=1" allowfullscreen></iframe></div>
            <div class="slide-bg"><div class="inside"></div></div>
            <div class="slide-video-container slide-container">
                <div class="container">
                    <div class="row slide-content">
                        <div class="col-sm-8">
                            <h2 class="slide-title font-libre">
                                <span class="text-primary">
                                    The workflow we use is based on our extensive experience and best practices in WEB development.
                                </span>
                            </h2>
                            <div class="slide-body">
                                    <h5>
                                        <a href="#" data-placement="right" data-toggle="tooltip" title="Regardless the project or technology we always help our customers to perform a preliminary analysis of the business component to achieve the highest result. Based on the analysis we elaborate the detailed technical specification describing functional and non-functional requirements, development stages and technologies used.">
                                            Business idea analysis
                                        </a>
                                    </h5>
                                    <h5>
                                        <a href="#" data-placement="right" data-toggle="tooltip" title="To ensure the quality, timeframes and on-budget project delivery the works should be coordinated and approved by customer in advance. Prior to main development stage we elaborate the prototypes of the future product or application. Due to this at early stages the customer gets UI visualization and makes required changes if needed. This approach significantly saves money as opposed to making changes later.">
                                            Prototyping
                                        </a>
                                    </h5>
                                    <h5>
                                        <a href="#" data-placement="right" data-toggle="tooltip" title="The first impression users get from product appearance and interface. As prototypes are approved by customer we start to develop the design, one of the main project elements.">
                                            Design
                                        </a>
                                    </h5>
                                    <h5>
                                        <a href="#" data-placement="right" data-toggle="tooltip" title="At this stage our engineers breathe life into prototypes and layouts in full accordance with technical specification. They implement functionality, services integrations, user interfaces.">
                                            Development
                                        </a>
                                    </h5>
                                    <h5>
                                        <a href="#" data-placement="right" data-toggle="tooltip" title="Usually our work is not over even after the end of the project, when it successfully launched. We stay in touch with our customers helping them to develop the product, improving its functionality and providing warranty support.">
                                            Support
                                        </a>
                                    </h5>
                                <!--<div class="slide-descr">We create high quality products to help<br /> the life interested & better</div>-->
                            </div>
                        </div>
                    </div>
                    <button class="btn-play a-video-play"><i class="icon ion-ios-play"></i></button>
                </div>
            </div>
        </div>
    </div>

    <div class="section pp-scrollable slide slide2">
        <div class="slide-container">
            <div class="slide-bg slide-bg-circle">
                <div class="inside"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h2 class="slide-title font-libre">
                            <span class="text-primary">Everything you need <br> around web development in one single place.</span></h2>

                        <div class="accordion solution-collapse" id="solutions">
                            <h5>
                                <a href="#" data-placement="right" data-toggle="tooltip" title="WEBERTELA.GIFTH (Hosting 1 year + Premium template + Support)">
                                    <a href="<?= \yii\helpers\Url::to('web/offers/index') ?>">WordPress + WEBRTELA =)</a>
                                </a>
                            </h5>
                            <h5>
                                <a href="#" data-placement="right" data-toggle="tooltip" title="Prototyping; UI/UX Design; Banners and marketing materials.">
                                    UX / UI Design
                                </a>
                            </h5>
                            <h5>
                                <a href="#" data-placement="right" data-toggle="tooltip" title="Vue; Webpack; HTML / CSS .">
                                    Frontend development
                                </a>
                            </h5>
                            <h5>
                                <a href="#" data-placement="right" data-toggle="tooltip" title="PHP:  Yii; Python: Django; Databases:  MySQL,  Integration with external services (XML feeds, CRM, SOAP/REST API integration); Data parsing systems.">
                                    Backend development
                                </a>
                            </h5>
                            <h5>
                                <a href="#" data-placement="right" data-toggle="tooltip" title="Cross-platform: React Native, PhoneGap;Native iOS: Swift, Objective C;Native Android: Kotlin, Java;Games (iOS, Android).">
                                    Mobile applications
                                </a>
                            </h5>
                            <h5>
                                <a href="#" data-placement="right" data-toggle="tooltip" title="ERP and Databases;Custom utilities.">
                                    Desktop applications
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section pp-scrollable slide slide3 slide-dark">
        <div class="slide-container">
            <div class="slide-bg-list">
                <?php foreach ($lastworks as $row):?>
                    <div class="slide-bg"><div class="inside" style="background-image: url(img/<?=$row->img?>);"></div></div>
                <?php endforeach;?>
            </div>
            <div class="container">
                <div class="piling-project-list-title">
                    <div class="more more-lg more-total-lg text-left"><a href="<?= \yii\helpers\Url::to('web/works/index') ?>">More  projects</a></div>
                </div>
                <div class="row piling-project-list">


                    <?php foreach ($lastworks as $row):?>

                        <div class="col-xl-4 col-6 piling-project-item">
                            <h3 class="piling-project-title font-libre"><a href="#" class="a-change-bg"><?=$row->title?></a></h3>
                            <div class="piling-project-detail"><?=$row->year?> / <?=$row->country?> / <?=$row->category?></div>
                        </div>
                    <?php endforeach;?>
                    <!--<div class="col-xl-4 col-6">
                        <div class="piling-more-total">
                            <a href="<?/*= \yii\helpers\Url::to('web/works/index') */?>">more<br /> projects</a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

    <!--<div class="section pp-scrollable slide slide4">
        <div class="slide-container">
            <div class="container">
                <h2 class="slide-title font-libre">
                    <span class="h1">Little about  process of creation = )</span></h2>
                <div class="slide-descr text-grey">
                    <div class="piling-project-list-title">
                    Our focus is on fastest solving business challenges with cutting-edge  solutions.
                    </div>
                </div>

                <div class="slide-body">
                    <div class="stage-list">
                        <div class="stage-item row no-gutters">
                            <div class="col-sm-6 order-sm-last stage-item-photo mask-skew wow fadeIn" data-wow-offset="150" data-wow-duration="0.2s" data-wow-delay=".3s" style="background-image: url(img/pic162.jpg);">
                                <div class="mask wow slideInLeft" data-wow-offset="150" data-wow-duration="1.2s" data-wow-delay=".3s"><div class="inside"></div></div>
                                <img src="img/pic162.jpg" alt="" class="img-fluid d-sm-none" />
                            </div>
                            <div class="col-sm-6 order-sm-first stage-item-detail">
                                <div class="stage-item-num">1.</div>
                                <div class="stage-item-title">Discovery</div>
                                <div class="mb60 fs18 text-grey">The first people you’ll meet are our experts in business, UX and technology. They dig into your business, discuss the scope of the challenge and consult on the most suitable technological solutions.</div>
                                <div class="row text-bold fs20">
                                    <div class="col-lg-6">
                                        <ul class="base-list">
                                            <li>Workshop</li>
                                            <li>Concept</li>
                                            <li>Consulting</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="base-list">
                                            <li>Research</li>
                                            <li>Project Planning</li>
                                            <li>Expectation Setting</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stage-item row no-gutters">
                            <div class="col-sm-6 stage-item-photo mask-skew wow fadeIn" data-wow-offset="150" data-wow-duration="0.2s" data-wow-delay=".3s" style="background-image: url(img/pic163.jpg);">
                                <div class="mask wow slideInLeft" data-wow-offset="150" data-wow-duration="1.2s" data-wow-delay=".3s"><div class="inside"></div></div>
                                <img src="img/pic163.jpg" alt="" class="img-fluid d-sm-none" />
                            </div>
                            <div class="col-sm-6 stage-item-detail">
                                <div class="stage-item-num">2.</div>
                                <div class="stage-item-title">Strategy</div>
                                <div class="mb60 fs18 text-grey">This is where we validate your future users and define the project backbone. It consists of a working plan in which the users’ needs are met with a solution that fulfils the business goals.</div>
                                <div class="row text-bold fs20">
                                    <div class="col-lg-6">
                                        <ul class="base-list">
                                            <li>Persona Development</li>
                                            <li>Stakeholder Alignment</li>
                                            <li>Brand Personallization</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="base-list">
                                            <li>Information Architecture</li>
                                            <li>Digital Strategy</li>
                                            <li>Prototyping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stage-item row no-gutters">
                            <div class="col-sm-6 order-sm-last stage-item-photo mask-skew wow fadeIn" data-wow-offset="150" data-wow-duration="0.2s" data-wow-delay=".3s" style="background-image: url(img/pic164.jpg);">
                                <div class="mask wow slideInLeft" data-wow-offset="150" data-wow-duration="1.2s" data-wow-delay=".3s"><div class="inside"></div></div>
                                <img src="img/pic164.jpg" alt="" class="img-fluid d-sm-none" />
                            </div>
                            <div class="col-sm-6 order-sm-first stage-item-detail">
                                <div class="stage-item-num">3.</div>
                                <div class="stage-item-title">Design</div>
                                <div class="mb60 fs18 text-grey">The user is the foundation on which we build all of the visual communication. It is intuitive, attractive and easy to use on any platform, to ensure an impressive experience in the interaction between the brand and the user.</div>
                                <div class="row text-bold fs20">
                                    <div class="col-lg-6">
                                        <ul class="base-list">
                                            <li>Art Direction</li>
                                            <li>Digital Identity</li>
                                            <li>Visual Moodbards</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="base-list">
                                            <li>UI Design</li>
                                            <li>Content Creation</li>
                                            <li>Interaction Design</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stage-item row no-gutters">
                            <div class="col-sm-6 stage-item-photo mask-skew wow fadeIn" data-wow-offset="150" data-wow-duration="0.2s" data-wow-delay=".3s" style="background-image: url(img/pic165.jpg);">
                                <div class="mask wow slideInLeft" data-wow-offset="150" data-wow-duration="1.2s" data-wow-delay=".3s"><div class="inside"></div></div>
                                <img src="img/pic165.jpg" alt="" class="img-fluid d-sm-none" />
                            </div>
                            <div class="col-sm-6 stage-item-detail">
                                <div class="stage-item-num">4.</div>
                                <div class="stage-item-title">Development</div>
                                <div class="mb60 fs18 text-grey">Our code crafters plan for progressive solutions placed on the right platforms to enhance the user experience. They focus on building top-quality, high-performing custom solutions that are easily scalable.</div>
                                <div class="row text-bold fs20">
                                    <div class="col-lg-6">
                                        <ul class="base-list">
                                            <li>Web Development</li>
                                            <li>Mobile Development</li>
                                            <li>Back-End & Front End</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="base-list">
                                            <li>CMS Intergration</li>
                                            <li>Physical Installation</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="stage-item row no-gutters">
                            <div class="col-sm-6 order-sm-last stage-item-photo mask-skew wow fadeIn" data-wow-offset="150" data-wow-duration="0.2s" data-wow-delay=".3s" style="background-image: url(img/pic166.jpg);">
                                <div class="mask wow slideInLeft" data-wow-offset="150" data-wow-duration="1.2s" data-wow-delay=".3s"><div class="inside"></div></div>
                                <img src="img/pic166.jpg" alt="" class="img-fluid d-sm-none" />
                            </div>
                            <div class="col-sm-6 order-sm-first stage-item-detail">
                                <div class="stage-item-num">5.</div>
                                <div class="stage-item-title">Testing</div>
                                <div class="mb60 fs18 text-grey">Although we conduct a variety of tests throughout each phase, the big moment our testers shine in is when we produce a specific part of the project that needs a true user experience.</div>
                                <div class="row text-bold fs20">
                                    <div class="col-lg-6">
                                        <ul class="base-list">
                                            <li>Usability Testing</li>
                                            <li>Functional Testing</li>
                                            <li>System Testing</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="base-list">
                                            <li>Performance Testing</li>
                                            <li>Security Testing</li>
                                            <li>Intergation Testing</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->




    <div class="section pp-scrollable slide slide5 slide-dark">
        <div class="slide-container">
            <div class="slide-bg"><div class="inside"></div></div>
            <div class="container">
                <div class="h1">
                    Frequently Asked Questions
                </div>

                <div class="row">
                    <div class="col-sm-10">
                        <h3  class="mt-5">How much does your website cost?</h3>
                        <p>Cost of our web design and development service starts at $1,500. This includes  Search Engine Optimization, Performance, Security Optimizations and more.</p>
                        <h3  class="mt-5">How long will it take to build my website?</h3>
                        <p>It can take anywhere between 1 and 3 months to complete the design and development of your website.</p>
                        <h3  class="mt-5">Why should I work with Webertela Web Studio?</h3>
                        <p>We have been in this industry for the past 20 years = ) and are very active with the latest trends and technology. We keep up with the flow of information and constantly adapt our practices and approach to ensure your website can stand the test of time.</p>


                        <!--<div class="a-reviews-carousel reviews-carousel-sm owl-carousel owl-theme">
                            <div class="reviews-carousel-item">
                                <div class="inside">
                                    <div class="reviews-carousel-text font-libre">How much does your website design cost?</div>
                                    <div class="reviews-carousel-author">Cost of our web design and development service starts at $1,500. This includes  Search Engine Optimization, Performance, Security Optimizations and more.</div>
                                </div>
                            </div>
                            <div class="reviews-carousel-item">
                                <div class="inside">
                                    <div class="reviews-carousel-text font-libre">How long will it take to build my website?</div>
                                    <div class="reviews-carousel-author">It can take anywhere between 1 and 3 months to complete the design and development of your website.</div>
                                </div>
                            </div>
                            <div class="reviews-carousel-item">
                                <div class="inside">
                                    <div class="reviews-carousel-text font-libre">Why should I work with Webertela Web Studio?</div>
                                    <div class="reviews-carousel-author">We have been in this industry for the past 20 years = ) and are very active with the latest trends and technology. We keep up with the flow of information and constantly adapt our practices and approach to ensure your website can stand the test of time. </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section pp-scrollable slide slide6">
        <div class="slide-container">
            <div class="slide-bg"><div class="inside"></div></div>
            <div class="slide-bg slide-bg-circle"><div class="inside"></div></div>
            <div class="container">
                <div class="row slide-content">
                    <div class="col-sm-6">
                        <h2 class="slide-title font-libre h2"><span class="text-primary">hi@webertela.online</span></h2>
                        <!--<div class="slide-body">
                            <div class="slide-contact-phone"><a href="tel:+ 995555430203" class="phone-link">+995555 430203</a></div>

                        </div>-->

                    </div>
                </div> <div class="align-text-bottom copyrigth">"Green" by <a href="https://bit.ly/3adG3hK" target="_blank">Irakli Andghuladze</a> </div>
              <!--  <a class="btn btn-primary btn-rounded mr-4" href="contact.html">Contact us <i class="icon ion-ios-arrow-right"></i></a>-->
            </div>

        </div>
    </div>

</div>