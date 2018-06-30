<form action="javascript;" class="sfp__form">
  <div class="sfp__title">Рассчитать с учетом выбора материала</div>
  <div class="sfp__materials clear">
    <label class="materials__item" >
      <img class="sfp__img" src="/images/spf-materials/type_01.png" alt="ЛДСП">
      <span class="sfp__name">ЛДСП</span>
      <input class="sfp__input" name="sfp__material" type="radio" value="ЛДСП">
    </label>
    <label class="materials__item" >
      <img class="sfp__img" src="/images/spf-materials/type_02.png" alt="ШПОН">
      <span class="sfp__name">Шпон</span>
      <input class="sfp__input" name="sfp__material" type="radio" value="ШПОН">
    </label>
    <label class="materials__item" >
      <img class="sfp__img" src="/images/spf-materials/type_03.png" alt="МАССИВ">
      <span class="sfp__name">Массив</span>
      <input class="sfp__input" name="sfp__material" type="radio" value="МАССИВ">
    </label>
    <label class="materials__item" >
      <img class="sfp__img" src="/images/spf-materials/type_04.png" alt="Стекло Сатинат">
      <span class="sfp__name">Стекло Сатинат</span>
      <input class="sfp__input" name="sfp__material" type="radio" value="СТЕКЛО САТИНАТ">
    </label>
    <label class="materials__item" >
      <img class="sfp__img" src="/images/spf-materials/type_05.png" alt="Cтекло Лакобель">
      <span class="sfp__name">Cтекло Лакобель</span>
      <input class="sfp__input" name="sfp__material" type="radio" value="Cтекло Лакобель">
    </label>

    <label class="materials__item" >
      <img class="sfp__img" src="/images/spf-materials/type_06.png" alt="Cтекло Стемалит">
      <span class="sfp__name">Cтекло Стемалит</span>
      <input class="sfp__input" name="sfp__material" type="radio" value="Cтекло Стемалит">
    </label>
    <label class="materials__item" >
      <img class="sfp__img" src="/images/spf-materials/type_07.png" alt="Зеркало">
      <span class="sfp__name">Зеркало</span>
      <input class="sfp__input" name="sfp__material" type="radio" value="Зеркало">
    </label>
    <label class="materials__item" >
      <img class="sfp__img" src="/images/spf-materials/type_08.png" alt="Кожа">
      <span class="sfp__name">Кожа</span>
      <input class="sfp__input" name="sfp__material" type="radio" value="Кожа">
    </label>
    <label class="materials__item" >
      <img class="sfp__img" src="/images/spf-materials/type_09.png" alt="Ротанг">
      <span class="sfp__name">Ротанг</span>
      <input class="sfp__input" name="sfp__material" type="radio" value="Ротанг">
    </label>
    <label class="materials__item" >
      <img class="sfp__img" src="/images/spf-materials/type_10.png" alt="Комбинация">
      <span class="sfp__name">Комбинация</span>
      <input class="sfp__input" name="sfp__material" type="radio" value="Комбинация">
    </label>
    <label class="materials__item" >
      <img class="sfp__img" src="/images/spf-materials/type_11.png" alt="Подсказать">
      <span class="sfp__name">Подсказать</span>
      <input class="sfp__input" name="sfp__material" type="radio" value="Подсказать">
    </label>
  </div>
  <div class="sfp__item sfp__item_input">
    <input type="text" name="name" placeholder="Ваше имя">
    <input type="tel" name="phone" placeholder="Телефон*" required>
  </div>
  <div class="message"></div>
  <div class="sfp__item">
    <input type="hidden" name="recepient" value="<?php echo get_option('admin_email'); ?>">
    <input type="hidden" name="blogname" value="<?php echo get_option('blogname'); ?>">
    <input type="hidden" name="product" value="<? the_title(); ?>">
    <input class="btn btn-primary sfp__submit" type="submit" value="Отправить заявку">
  </div>
</form>