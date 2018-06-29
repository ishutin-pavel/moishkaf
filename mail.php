<?php


if ( isset($_POST) ) {


/* Если существует в глобальном массиве $_POST['phone'] опр. ячейка и она НЕ пустая то мы создаем простую переменную из неё, иначе уничтожаем переменную. */

//Email Администратора
if ( isset($_POST['recepient']) )  {
  $recepient = $_POST['recepient'];
  if ( $recepient == '' ) { $recepient = 'ishutin-pavel@mail.ru'; }
}

//Название сайта
if ( isset($_POST['blogname']) )  {
  $blogname = $_POST['blogname'];
  if ($blogname == '') { unset($blogname); }
}

//Поле имя
if ( isset($_POST['name']) && $_POST['name'] != '' )  {
  $name = 'Имя: ' . $_POST['name'];
} else unset($name);

//Поле телефон
if ( isset($_POST['phone']) && $_POST['phone'] != '' )  {
  $phone = 'Телефон: ' . $_POST['phone'];
} else unset($phone);

//Поле Материал
if ( isset($_POST['sfp__material']) && $_POST['sfp__material'] != '' )  {
  $sfp__material = 'Материал: ' . $_POST['sfp__material'];
} else unset($sfp__material);

//Товар
if ( isset($_POST['product']) && $_POST['product'] != '' )  {
  $product = 'Товар: ' . $_POST['product'];
} else unset($product);


//Формируем тему письма
$pagetitle = "Новая заявка с сайта - $blogname";

//Формируем тело письма
$message .= "$name\n$phone\n$sfp__material\n$product";

//Отправляем
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

//Выводим текст отправленного сообщения
echo "$message";

} else {//если массив Post не был передан, то выводим сообщение об ошибке
  echo "Данные формы небыли получены";
}