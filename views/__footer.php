<div class="footer__main">
    <div class="row row-eq-height">
        <div class="col-8 col-sm-7 col-md-9 col-lg-3 ">
            <div class="footer__item"><a class="consult_logo" href="/"><img src="/assets/img/logo1.png" alt=""/></a>
                <p class="text-center"><?= $l['Car_paint_and_bodywork'] ?></p>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
            <div class="footer__item">

                <!-- widget-text__widget -->
                <section class="widget-text__widget widget">
                    <div class="widget-text__content">
                        <ul>
                            <li><a href="<?= Url::to('') ?>"><?= $l['home'] ?></a></li>
                            <li><a href="<?= Url::to('/about') ?>"><?= $l['about'] ?></a></li>
                        </ul>
                    </div>
                </section><!-- End / widget-text__widget -->

            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2 ">
            <div class="footer__item">

                <!-- widget-text__widget -->
                <section class="widget-text__widget widget">
                    <div class="widget-text__content">
                        <ul>
                            <li><a href="<?= Url::to('/contact') ?>"><?= $l['contacts'] ?></a></li>
                        </ul>
                    </div>
                </section><!-- End / widget-text__widget -->

            </div>
        </div>
        <div class="col-md-4 col-lg-2 col-xl-2 ">
            <div class="footer__item">


            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-2 col-xl-2  consult_backToTop">
            <div class="footer__item"><a href="#" id="back-to-top"> <i class="fa fa-angle-up" aria-hidden="true"> </i><span><?= $l['Up'] ?></span></a></div>
        </div>
    </div>
</div>
<div class="footer__copyright"><?= date('Y') ?> &copy; <?= $l['All_rights_reserved'] ?>.</div>