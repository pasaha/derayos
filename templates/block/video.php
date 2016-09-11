<?php

$data_video = array(
	array( // 'этот код для произвольного видео, с произвольной картинкой
		"video" => '<iframe width="560" height="315" src="https://www.youtube.com/embed/bDJ_MJSiaQo" frameborder="0" allowfullscreen></iframe>',
		"image" => 'https://i.ytimg.com/vi/bDJ_MJSiaQo/hqdefault.jpg?custom=true&w=400&h=300',
		"title" => 'Видео',
		"sutitle"=>'sutitle',
		"info"=>'info',
		"date"=>array('JUL','05')
	),
	array(
		"youtube_key" => '7qRE1Kizops',
		"title" => 'Видео',
		"sutitle"=>'sutitle',
		"info"=>'info',
		"date"=>array('JUL','05')
	),
	array(
		"youtube_key" => 'dDqbTvEr0p0',
		"title" => 'Видео',
		"sutitle"=>'sutitle',
		"info"=>'info',
		"date"=>array('JUL','05')
	),
	array(
		"youtube_key" => 'AlQiP1wL0P4',
		"title" => 'Видео',
		"sutitle"=>'sutitle',
		"info"=>'info',
		"date"=>array('JUL','05')
	),
);
?>

<div<?php echo $current_bg_inc ?> class="pm-containerPadding-top-60 pm-containerPadding-bottom-40 pm-center pm-container-border">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Видео</h3>
			 </div>
			 
			<ul class="pm-presentation-posts pm-presentation-owl" style="height:365px">
				<?php for($ij = 0; $ij < count($data_video); ++$ij) {
					$video = $data_video[$ij];
					$frame = $video['video'] ? $video['video'] : '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' . $video['youtube_key'] . '" frameborder="0" allowfullscreen></iframe>';
					$image = $video['image'] ? $video['image'] : 'https://i.ytimg.com/vi/' . $video['youtube_key'] . '/hqdefault.jpg?custom=true&w=400&h=300&stc=true&jpg444=true&jpgq=90&sp=68';
				?>
				<li>
					<div class="pm-presentation-post-container js-overlay-video" data-frame="<?php echo htmlspecialchars($frame) ?>" style="cursor: pointer">
						<?php if ($video['date']){ ?>
							<div class="pm-presentation-post-date">
								<div class="pm-presentation-post-date-box">
									<p class="pm-month"><?php echo $video['date'][0] ?></p>
									<p class="pm-day"><?php echo $video['date'][1] ?></p>
								</div>
							</div><!-- /pm-presentation-post-date -->
						<?php } ?>
						<?php if ($video['title']){ ?>
							<div class="pm-presentation-post-title">
							 <p><?php echo $video['title'] ?></p>
							</div>
						<?php } ?>
						<?php if ($video['info']){ ?>
							<div class="pm-presentation-post-excerpt">
							 <p><?php echo $video['info'] ?></p>
							</div>
						<?php } ?>
						<div class="pm-presentation-post-hover-container">
							<?php if ($video['sutitle']){ ?>
								<p class="pm-presentation-post-hover-excerpt"><?php echo $video['sutitle'] ?></p>
							<?php } else { ?>
								<p class="pm-presentation-post-hover-title"><?php echo $video['title'] ?></p>
							<?php } ?>
						</div>
						
						<div class="pm-presentation-post-img">
						 <img src="<?php echo $image ?>" width="475" height="315"> 
						</div>
					</div><!-- /pm-presentation-post-container -->
				</li>
				<?php } ?>
			</ul>
		</div>
  </div>
</div>

