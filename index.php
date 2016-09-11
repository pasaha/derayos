<?php
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====

$layout = array(
	logo => '/img/derayos.png',
	copy => '©2016 <a href="http://derayos.com" target="_blank">derayos.com</a>',
	
	title=> 'Ментальный вызов',
	description => 'Описание для шаринга',
	share_image => '/img/derayos/bg.jpg'
);


$data_sections = array(
	array("template" => "templates/block/subheader.php",        "menu" => "Главная", "bg_image" => '/img/derayos/bg.jpg'),
#	array("template" => "templates/block/presentation.php"),
	array("template" => "templates/block/services.php", "bg" => '#f000f0'),
	array("template" => "templates/block/staff.php"),
	array("template" => "templates/block/contacts_form_1.php"),
	array("template" => "templates/block/interactive.php"),
	array("template" => "templates/block/contacts_form_2.php"),
	array("template" => "templates/block/theams.php"),
	array("template" => "templates/block/intro.php"),
	array("template" => "templates/block/why_usss.php",        "menu" => "О нас"),
	array("template" => "templates/block/contacts_form_3.php"),
	array("template" => "templates/block/partners.php"),
	array("template" => "templates/block/counter.php"),
	array("template" => "templates/block/results.php"),
	array("template" => "templates/block/text.php"),
	array("template" => "templates/block/testimonial.php"),
	array("template" => "templates/block/text2.php"),
	array("template" => "templates/block/semifooter.php"),
	array("template" => "templates/block/price.php"),
	array("template" => "templates/block/contacts_form_4.php",  "menu" => "Подписаться"),
	array("template" => "templates/block/comments.php"),
	array("template" => "templates/block/video.php", "bg_image" => '/img/derayos/bg.jpg'),
#	array("template" => "templates/block/milestone.php"),
	
);

// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====


include 'templates/header.php';
for($i = 0; $i < count($data_sections); ++$i) {
	$current = $data_sections[$i];
	
	$current_bg_arr = array();
	$current_bg_inc = '';
	
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