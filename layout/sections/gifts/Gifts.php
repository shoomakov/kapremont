<?php $files = scandir('img/gifts/other'); ?>

<div id="gifts"></div>
<div class="full_width_bg_pattern bg_pattern_dark gift-banner" style="height: 469px;">
  <div class="container">
    <div class="row" style="">
      <div class="col-md-12">
        <article>
          <h3 style="color: #fff; padding-top: 40px;">Подарочный сертификат на выбор</h2>
          <h4 class="mad_title_style1" style="padding-bottom: 40px">на сумму 10 000 руб.</h3>

          <div class="carousel_type_1">
            <div class="owl-carousel" data-autoplay="true" data-max-items="5">

              <?php
                foreach ( $files as $picture ) :
                  if ( $picture !== "." && $picture !== ".." ) : ?>
                    <?php //$className = substr($picture, 0, -4); ?>
                    <div>
                      <blockquote>
                        <!-- <picture> -->
                         <!-- <source srcset="img/gifts/<?php echo $picture; ?>" media="(min-width: 600px)"> -->
                         <img id="bezbarana-gift" src="img/gifts/other/<?php echo $picture; ?>" alt="MDN" >
                        <!-- </picture> -->
                        <!-- <div class="mad_author style2">
                          <h3 class="mad_title_style2">Л'Этуаль</h3>
                          <span>Founder andCEO</span>
                        </div> -->
                      </blockquote>
                    </div>
              <?php
                  endif;
                endforeach;
              ?>

            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>
