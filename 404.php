<?php
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====

$layout = array(
	logo => '/img/derayos.png',
	copy => '©2016 <a href="http://derayos.com" target="_blank">derayos.com</a>',
	title=> 'Ошибка 404 - Страница не найдена'
);


// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====


include 'templates/header.php';
?>
<div class="pm-sub-header-container pm-parallax-panel" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="95">
	<div class="pm-sub-header-breadcrumbs">

	</div>
	
	<div class="pm-sub-header-title-container">
		<h5>404 Ошибка</h5>
	</div>
	
	<div class="pm-sub-header-message">
		<p>Страница не найдена</p>
	</div>

</div>

<?php

include 'templates/footer.php';
?>