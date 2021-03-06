<?php

// Функция извлечения сериализованных данных из файла в массив.
// Возвращает массив данных.

function file_get_serialize_contents ($filename) {
    if (file_exists($filename)){
	$ini_string = file_get_contents($filename);
		if (!$ini_string) { exit('Ошибка чтения файла'); }
    $array = unserialize($ini_string);
    if (!$array) { exit('Неверный формат файла'); }
        return $array;
    }
}

// Функция удаления объявления
// Удаляет запись из рабочего массива и переписывает файл
function delete_item($ad_id, $ads_db, $filename) {
	unset($ads_db['db'][$ad_id]);
    file_put_serialize_contents($filename, $ads_db);
}

// Функция записи содержимого массива в файл
// Сериализирует содержимое массива и записывает в файл
function file_put_serialize_contents($filename, $array) {
    if(!file_put_contents($filename, serialize($array))) { exit('Ошибка записи файла'); }
}

$location_id = array(641780 => 'Новосибирск', 641490 => 'Барабинск', 641510=>'Бердск', 641600=>'Искитим', 641630=>'Колывань', 641680=>'Краснообск', 641710=>'Куйбышев', 641760=>'Мошково', 641790=>'Обь', 641800=>'Ордынское', 641970=>'Черепаново');
$label_id = array( 'Транспорт', 'Недвижимость', 'Работа', 'Услуги', 'Личные вещи', 'Для дома и дачи', 'Бытовая электроника', 'Хобби и отдых', 'Животные', 'Для бизнеса' );
$category_id = array( array(9 => 'Автомобили с пробегом', 109 => 'Новые автомобили', 14 => 'Мотоциклы и мототехника', 81 => 'Грузовики и спецтехника', 11 => 'Водный транспорт', 10 => 'Запчасти и аксессуары' ),
			array(24 => 'Квартиры', 23 => 'Комнаты', 25 => 'Дома, дачи, коттеджи', 26 => 'Земельные участки', 85 => 'Гаражи и машиноместа', 42 => 'Коммерческая недвижимость', 86 => 'Недвижимость за рубежом'),
			array( 111 => 'Вакансии (поиск сотрудников)', 112 => 'Резюме (поиск работы)'),
			array( 114 => 'Предложения услуг', 115 => 'Запросы на услуги'),
			array( 27 => 'Одежда, обувь, аксессуары', 29 => 'Детская одежда и обувь', 30 => 'Товары для детей и игрушки', 28 => 'Часы и украшения', 88 => 'Красота и здоровье'),
			array( 21 => 'Бытовая техника', 20 => 'Мебель и интерьер', 87 => 'Посуда и товары для кухни', 82 => 'Продукты питания', 19 => 'Ремонт и строительство', 106 => 'Растения' ),
			array( 32 => 'Аудио и видео', 97 => 'Игры, приставки и программы', 31 => 'Настольные компьютеры', 98 => 'Ноутбуки', 99 => 'Оргтехника и расходники', 96 => 'Планшеты и электронные книги', 84 => 'Телефоны', 101 => 'Товары для компьютера', 105 => 'Фототехника' ),
			array( 33 => 'Билеты и путешествия', 34 => 'Велосипеды', 83 => 'Книги и журналы', 36 => 'Коллекционирование', 38 => 'Музыкальные инструменты', 102 => 'Охота и рыбалка', 39 => 'Спорт и отдых', 103 => 'Знакомства' ),
			array( 89 => 'Собаки', 90 => 'Кошки', 91 => 'Птицы', 92 => 'Аквариум', 93 => 'Другие животные', 94 => 'Товары для животных' ),
			array( 116 => 'Готовый бизнес', 40 => 'Оборудование для бизнеса'));
$radio_id = array ( 0 => 'Частное лицо', 1 => 'Компания');
