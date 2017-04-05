<?php $portfolio_files = scandir('img/portfolio/test/x'); ?>

<div id="gallery">
  <div class="mad_section paralax_image_bg1">
    <div class="container relative">
      <div class="row">
        <div class="col-sm-12">
          <div class="mad_section_container">
            <h3 class="mad_title_style1">Портфолио</h3>
            <h2 class="mad_separator style2">Выполненные работы</h2>
            <div class="owl_custom_buttons">
              <button class="mad_owl_prev"></button><button class="mad_owl_next"></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel_type_2 full_width_gallery">
      <div class="owl-carousel gallery_carousel" data-max-items="3">

        <?php
          foreach ( $portfolio_files as $picture ) :
            if ( $picture !== "." && $picture !== ".." ) : ?>

              <div>
                <div class="mad_item_hover">
                  <figure>
                    <img alt="true" src="img/portfolio/test/x/<?php echo $picture; ?>">
                  </figure>
                  <div class="item_overlay">
                    <div class="text_holder">
                      <a class="mad_icon_plus gallery" href="img/portfolio/test/x/<?php echo $picture; ?>" rel=
                      "category"></a><a class="mad_icon_link" href="#"></a>
                    </div>
                  </div>
                </div>
              </div>
        <?php
            endif;
          endforeach;
        ?>

      </div>
    </div>
  </div>
</div>

<!-- <div>
  <div class="mad_item_hover">
    <figure>
      <img alt="true" src="images/test/300x225-1.jpeg">
    </figure>
    <div class="item_overlay">
      <div class="text_holder">
        <a class="mad_icon_plus gallery" href="images/test/300x225-1.jpeg" rel=
        "category"></a><a class="mad_icon_link" href="#"></a>
      </div>
    </div>
  </div>
  <div class="mad_item_hover">
    <figure>
      <img alt="true" src="images/test/300x225-5.jpeg">
    </figure>
    <div class="item_overlay">
      <div class="text_holder">
        <a class="mad_icon_plus gallery" href="images/test/300x225-5.jpeg" rel=
        "category"></a><a class="mad_icon_link" href="#"></a>
      </div>
    </div>
  </div>
</div> -->
