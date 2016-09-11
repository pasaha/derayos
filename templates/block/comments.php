<div<?php echo $current_bg_inc ?> class="pm-containerPadding-top-60 pm-containerPadding-bottom-40 pm-center pm-container-border">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Комментарии</h3>
			 </div>
			 <br><br>
			 <div class="col-lg-6 col-md-6 col-sm-6 pm-column-spacing">
			 
<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="//vk.com/js/api/openapi.js?127"></script>

<script type="text/javascript">
  VK.init({apiId: 5625606, onlyWidgets: true});
</script>

<!-- Put this div tag to the place, where the Comments block will be -->
<div id="vk_comments"></div>
<script type="text/javascript">
VK.Widgets.Comments("vk_comments", {limit: 10, width: "100", attach: "*"});
</script>
			 
			 </div>
			 
			 <div class="col-lg-6 col-md-6 col-sm-6 pm-column-spacing">
			 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-comments" data-href="http://derayos2.pasaha.ru/" data-width="100%" data-numposts="10"></div>
			 
			 
			 </div>
		</div>

  </div>
</div>





<style>
#vk_comments {
	width: 100%!important;
}
</style>