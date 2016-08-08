<?php
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====

$layout = array(
	logo => '/img/quantum-wordpress-theme.jpg'

);


$data_sections = array(
	array("template" => "templates/block/subheader.php"),
#	array("template" => "templates/block/presentation.php"),
	array("template" => "templates/block/services.php"),
#	array("template" => "templates/block/main.php",        "menu" => "Главная", "alias" => "main"),
	array("template" => "templates/block/staff.php"),
	array("template" => "templates/block/contacts_form.php"),
	array("template" => "templates/block/interactive.php"),
	array("template" => "templates/block/contacts_form.php"),
	array("template" => "templates/block/theams.php"),
	array("template" => "templates/block/intro.php"),
	array("template" => "templates/block/why_usss.php"),
	array("template" => "templates/block/contacts_form_3.php"),
	array("template" => "templates/block/partners.php"),
	array("template" => "templates/block/counter.php"),
	array("template" => "templates/block/results.php"),
	array("template" => "templates/block/text.php"),
	array("template" => "templates/block/testimonial.php"),
	array("template" => "templates/block/text2.php"),
	array("template" => "templates/block/semifooter.php"),
	array("template" => "templates/block/price.php"),
	array("template" => "templates/block/contacts_form.php"),
#	array("template" => "templates/block/milestone.php"),
	
);

// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====


include 'templates/header.php';
for($i = 0; $i < count($data_sections); ++$i) {
    include $data_sections[$i]['template'];
}
include 'templates/footer.php';
?>