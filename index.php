<?php
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====

$layout = array(
	logo => '/img/derayos.png',
	copy => '©2016 <a href="http://derayos.com" target="_blank">derayos.com</a>',
	title=> 'Ментальный вызов'
);


$data_sections = array(
	array("template" => "templates/block/subheader.php",        "menu" => "Главная"),
#	array("template" => "templates/block/presentation.php"),
	array("template" => "templates/block/services.php"),
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
	array("template" => "templates/block/contacts_form_4.php",        "menu" => "Подписаться"),
#	array("template" => "templates/block/milestone.php"),
	
);

// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====


include 'templates/header.php';
for($i = 0; $i < count($data_sections); ++$i) {
?>
<div id="block_<?php echo $i ?>">
<?php
    include $data_sections[$i]['template'];
?>
</div>
<?php
}
include 'templates/footer.php';
?>