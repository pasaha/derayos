<?php
// ===== ===== ===== ===== ===== ===== ===== ===== ===== ===== =====

$data_carousel = array(
	array(
		"icon" => "business-card",
		"href" => '#',
		"title" => 'Причина 1',
		"info" => 'Тут описание причины'
	),
	array(
		"icon" => "briefcase",
		"href" => '',
		"title" => 'Причина 2',
		"info" => 'Тут описание причины'
	),
	array(
		"icon" => "map",
		"href" => '',
		"title" => 'Причина 3',
		"info" => 'Тут описание причины'
	),
	array(
		"icon" => "business-card",
		"href" => '',
		"title" => 'Причина 4',
		"info" => 'Тут описание причины'
	),
	array(
		"icon" => "business-card",
		"href" => '',
		"title" => 'Причина 5',
		"info" => 'Тут описание причины'
	),
);
?>
<!-- Interactive panels carousel -->
<div class="pm-column-container pm-containerPadding60">

 <div class="container">
		  <div class="row">
		  
			 <div class="col-lg-4 col-md-4 col-sm-4">
				
				 <h5 class="pm-primary">Зачем тебе этот мастер-класс?</h5>
					 
					 <p>5 ПРИЧИН</p>
					 
					 <p>Donec tincidunt ultrices felis, nec malesuada enim egestas id. Morbi ac urna non elit accumsan luctus non eu tortor.</p>
				
				</div>
		  
			 <div class="col-lg-8 col-md-8 col-sm-8" style="height: 277px">
					 <ul class="pm-interactive-panels-carousel" id="pm-interactive-panels-owl">
							<?php for($j = 0; $j < count($data_carousel); ++$j) { $item = $data_carousel[$j]; ?>
								<li>
								  <div class="pm-icon-bundle">
										<?php if ($item['icon']){ ?>
											<i class="typcn typcn-<?php echo $item['icon'] ?>"></i>
										<?php } ?>
										<div class="pm-icon-bundle-content">
											 <p>
											 <?php if ($item['href']){ ?>
												<a href="<?php echo $item['href'] ?>"><?php echo $item['title'] ?> <i class="fa fa-angle-right"></i></a>
											 <?php } else { ?>
												<?php echo $item['title'] ?>
											 <?php } ?>
											 </p>
										</div>
										 <?php if ($item['info']){ ?>
											<div class="pm-icon-bundle-info">
												<p><?php echo $item['info'] ?></p>
											</div>
										<?php } ?>
									</div><!-- icon bundle end -->
								</li>
							<?php } ?>
					 </ul>
				</div>
				
		  </div>
	 </div>

</div>
<!-- Interactive panels carousel -->