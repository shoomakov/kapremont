<?php include_once 'backend/conf.php'; ?>

<header class="header-main rsAbsoluteEl" id="header">
  <div class="mad_top_header">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a class="logo" href="/">
            <img alt="Строительная компания Каждый метр" src="/img/logo/logo.png">
          </a>
        </div>
        <div class="col-md-8">
          <div class="header_info_section">
            <div class="head_socials">
              <p class="icon_location">124527, РФ, г. Москва, г. Зеленоград,
              <br>
               к. 814, этаж 6, пом. I, ком. 10</p>
            </div>
            <div class="head_phone">
              <div>
                <p class="icon_mobile"><?php echo $_SERVER['PHONE']; ?></p>
              </div><br>
              <?php include 'calculation.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php //include 'layout/navigation.php'; ?>
</header>
