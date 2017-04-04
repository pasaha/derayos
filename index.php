<?php

$layout = array(
	logo => '/img/derayos.png',
	copy => '©2016 <a href="http://derayos.com" target="_blank">derayos.com</a>',
	
	title=> 'Ментальный вызов',
	description => 'Описание для шаринга',
	share_image => '/img/derayos/bg.jpg'
);


$data_sections = array(
	array("template" => "templates/block/subheader.php",        "menu" => "Главная", "bg_image" => '/img/derayos/bg.jpg'),    // Главный заголовок - контактная форма
#	array("template" => "templates/block/presentation.php"),
	array("template" => "templates/block/services.php", "bg" => '#362a76'),    // Фиолетовая полоса с 3 выгодами
	array("template" => "templates/block/staff.php"),   // Для кого этот тренинг?      Три плашки с круглыми портретами
	array("template" => "templates/block/contacts_form_1.php", "bg" => '#d5c7e1'),    //  Первая контактная форма
	array("template" => "templates/block/relationship.php"),  //    Слайдер под логотипы
#	array("template" => "templates/block/interactive.php"),    //  Слева текст с заголовком, справа слайдер с 5 квадратами
	array("template" => "templates/block/contacts_form_2.php", "bg" => '#362a76'),   //
	array("template" => "templates/block/themes.php"),   //   Темы тренинга. Таблица из 9 тем с иконками
  array("template" => "templates/block/trainer.php", "bg" => '#8471b3'),   // Ведущая. Одна плашка 
	array("template" => "templates/block/intro.php"),   //  4 картинки с %%  и человечками, справа текст с заголовком
	array("template" => "templates/block/why_usss.php",        "menu" => "О нас"),    //  Заголовок, две колонки с картинками и подзаголовками
	array("template" => "templates/block/contacts_form_3.php", "bg_image" => '/img/derayos/block_geo.png', "background-repeat" => 'repeat'),   //
	array("template" => "templates/block/partners.php"),  //    Слайдер под логотипы
	array("template" => "templates/block/counter.php"),   //   счетчик обратного отсчета
	array("template" => "templates/block/results.php"),   //   Главный заголовок и 4 текстовые колонки с подзаголовками
	array("template" => "templates/block/text.php", "bg" => '#362a76'),  //  Текст с заголовком. Можно активировать кнопку
	array("template" => "templates/block/testimonial.php"),  //   Слайдер с 2 мужиками и текстами рядом. Подходит для отзывов.
	array("template" => "templates/block/text2.php"),  //     Еще блок для текста с кнопкой. 
	array("template" => "templates/block/semifooter.php", "bg" => ' #519c67'),   //   Что получите в конце? Слева текст, 1 колонка 3 навыка, 2 колонка 3 инструмента
	array("template" => "templates/block/price.php"),            //   Таблица с прайсами
	array("template" => "templates/block/contacts_form_4.php",  "menu" => "Подписаться", "bg_image" => '/img/derayos/block_dance.png', "background-repeat" => 'repeat'),   //
	array("template" => "templates/block/comments.php"),      //   Комменты ВК И ФБ
	array("template" => "templates/block/video.php", "bg_image" => '/img/derayos/block_map.jpg'),  //  Видеоотзывы
#	array("template" => "templates/block/milestone.php"),
	
);

// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====


include 'templates/header.php';
for($i = 0; $i < count($data_sections); ++$i) {
	$current = $data_sections[$i];
	
	$current_bg_arr = array();
	$current_bg_inc = '';
	
	if ($current['background-repeat']) {
		array_push($current_bg_arr, 'background-repeat:' . $current['background-repeat'] . ';' );
	};
	
	if ($current['bg_image']) {
		array_push($current_bg_arr, 'background-image:url(' . $current['bg_image'] . ');' );
	};
	if ($current['bg']) {
		array_push($current_bg_arr, 'background-color:' . $current['bg'] . ';' );
	};
	if (count($current_bg_arr)) {
		$current_bg_inc = ' style="' . join('', $current_bg_arr) .'"'; 
	}
?>
<div id="block_<?php echo $i ?>">
<?php
    include $current['template'];
?>
</div>
<?php
}
include 'templates/footer.php';
?>