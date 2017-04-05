<div id="contact">
  <div class="mad_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="mad_section_container">
            <article>
              <h3 class="mad_title_style1">Оставьте заявку</h3>
              <h2>На бесплатный замер</h2>
              <p>Заполните форму с Вашим вопросом и через короткое время Вы получите полноценный ответ или
              консультацию от нашего менеджера.</p>
            </article>
          </div>
        </div>
        <div class="col-md-6">
          <form class="contact_form" id="contact_form" name="contact_form">
            <ul>
              <li class="row">
                <div class="col-sm-6">
                  <input name="cf_name" placeholder="Ваше имя" type="text">
                </div>
                <div class="col-sm-6">
                  <input name="cf_tel" placeholder="Телефон" type="tel">
                </div>
              </li>
              <li><input name="cf_email" placeholder="Email" type="email"></li>
              <li>
              <textarea name="cf_message" placeholder="Дополнительная информация..."></textarea></li>
            </ul><input type="submit" value="Заявка на замер" class="mad_button">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="mad_section paralax_image_bg5" id="contact2">
    <div class="container">
      <div class="mad_contact_items mad_flex_list">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="mad_contact_item" itemscope itemtype="http://schema.org/Organization">
              <h4 class="lnr lnr-location">Найти нас</h4><span itemprop="name">Каждый
              Метр</span>
              <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                <p><span itemprop="addressLocality">г. Москва, г. Зеленоград</span>
                ,<br>
                <span itemprop="streetAddress">к. 814</span>, этаж 6, пом. I, ком. 10
                </p>
                  <span itemprop="telephone" style="display:none;">
                    <?php echo $phoneOfficial; ?>
                  </span>
                  <a href="#"><span itemprop=
                "email">info@kametr.ru</span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="mad_contact_item">
              <h4 class="lnr lnr-clock">Время работы</h4>
              <p>Пн - Пт 9:00 - 18:00</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="mad_contact_item">
              <h4 class="lnr lnr-calendar-full">Назначить встречу</h4>
              <p>В удобное для Вас время, <br>
               можете посектить наш офис</p>
               <a href="#">Тел: <?php echo $_SERVER['PHONE']; ?></a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="mad_contact_item">
              <h4 class="lnr lnr-earth">Присоединяйтесь</h4>
              <div class="social_icon_list">
                <ul>
                  <li>
                    <a class="soc_icon icon-facebook" href="#"></a>
                  </li>
                  <li>
                    <a class="soc_icon icon-twitter" href="#"></a>
                  </li>
                  <li>
                    <a class="soc_icon icon-gplus" href="#"></a>
                  </li>
                  <li>
                    <a class="soc_icon icon-instagram" href="#"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="relative">
    <div class="map_container" id="googleMap2"></div>
  </div>
</div>
