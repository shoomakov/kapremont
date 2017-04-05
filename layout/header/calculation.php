<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
  <button id="morph-button-action" type="button">Расчитать стоимость</button>
  <div class="morph-content">
    <div>
      <div class="content-style-form content-style-form-1">
        <span class="icon icon-close">Закрыть окно</span>
        <h4 style="margin-top:65px;">Расчитать стоимость ремонта</h4>
        <div id="contact_form_three">
          <form id="contact_form3">
            <div class="row">
              <div class="col-md-12">
                <p style="width:100%;"><input placeholder="Имя" name="cf3_name" type="name"></p>
              </div>
              <div class="col-md-6">
                <p style="width:100%;"><input placeholder="Телефон" name="cf3_tel" type="tel"></p>
              </div>
              <div class="col-md-6">
                <p style="width:100%;"><input placeholder="Email" name="cf3_email" type="email"></p>
              </div>
              <div class="col-md-6">
                <p style="width:100%;">
                  <select id="type_of_object" name="type_of_object">
                    <option value="Посетитель пропустил это поле">Тип жилья</option>
                    <option value="Квартира">Квартира</option>
                    <option value="Коттедж">Коттедж</option>
                    <option value="Другое">Другое</option>
                  </select>
                </p>
              </div>
              <div class="col-md-6">
                <p style="width:100%;"><input placeholder="Площадь" name="cf3_area" type="number"></p>
              </div>
              <div class="col-md-6">
                <p style="width:100%;"><input placeholder="Количество комнат" name="cf3_number_of_rooms" type="number"></p>
              </div>
              <div class="col-md-6">
                <p style="width:100%;">
                  <select placeholder="Расположение объекта" id="object_location" name="cf3_object_location">
                    <option value="не указано">Расположение объекта</option>
                    <option value="Москва">Москва</option>
                    <option value="Московская область">Московская область</option>
                  </select>
                </p>
              </div>
              <div class="col-md-12" style="padding-bottom: 20px;">
                <!-- <label><input type="checkbox" />комнаты</label>
                <label><input type="checkbox" />кухня</label>
                <label><input type="checkbox" />санузел</label>
                <label><input type="checkbox" />балкон</label> -->
                <!-- <center> -->
                <h4>Помещения</h4>
                  <p>
                    <input type="checkbox" value="Комнаты" id="rooms" name="rooms" />
                    <label for="rooms">комнаты</label>
                  </p>
                  <p>
                    <input type="checkbox" value="Кухня" id="kitchen" name="kitchen" />
                    <label for="kitchen">кухня</label>
                  </p>
                  <p>
                    <input type="checkbox" value="Санузел" id="bathroom" name="bathroom" />
                    <label for="bathroom">санузел</label>
                  </p>
                  <p>
                    <input type="checkbox" value="Балкон" id="balcony" name="balcony" />
                    <label for="balcony">балкон</label>
                  </p>
                <!-- </center> -->
              </div>
              <div class="col-md-12">
                <p style="width:100%;"><input type="submit" class="mad_button size2 style2" value="Подтвердить" /></p>
              </div>
            </div>
          </form>
        </div>
        <div class="message_container2"></div>
      </div>
    </div>
  </div>
</div>
