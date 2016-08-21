<!-- BODY CONTENT end -->
        

        <footer>
        
        	<div class="container">
                <div class="row">
                    
                   <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="pm-footer-social-info-container">
                            <h6>Следите за&nbsp;нами в&nbsp;социальных&nbsp;сетях</h6>
                        </div>
                        
                   </div>
                   
                   <div class="col-lg-6 col-md-6 col-sm-6">
							<ul class="pm-footer-social-icons">
								 <li title="Twitter" class="pm_tip_static_top"><a href="#"><i class="fa fa-twitter tw"></i></a></li>
								 <li title="Facebook" class="pm_tip_static_top"><a href="#"><i class="fa fa-facebook fb"></i></a></li>
								 <li title="Google Plus" class="pm_tip_static_top"><a href="#"><i class="fa fa-google-plus gp"></i></a></li>
								 <li title="Linkedin" class="pm_tip_static_top"><a href="#"><i class="fa fa-linkedin linked"></i></a></li>
								 <li title="YouTube" class="pm_tip_static_top"><a href="#"><i class="fa fa-youtube yt"></i></a></li>
							</ul>
                   </div>
                    
                </div>
            </div>	

                
        </footer>
                
        <div class="pm-footer-copyright">
        	
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 pm-footer-copyright-col">
                        <p><?php echo $layout['copy'] ?></p>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 pm-footer-navigation-col">
                        <ul class="pm-footer-navigation" id="pm-footer-nav">
									<?php for($i = 0; $i < count($data_sections); ++$i) { ?>
										<?php if ($data_sections[$i]['menu']){ ?>
										<li><a href="#block_<?php echo $i ?>"><?php echo $data_sections[$i]['menu'] ?></a></li>
										<?php } ?>
									<?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
    
    </div><!-- /pm_layout-wrapper -->
    
	 <?php include 'templates/includes/js_includes.php'; ?>
	 <?php include 'templates/includes/overlay_wrapper.php'; ?>

    <p id="back-top" class="visible-lg visible-md visible-sm"> </p>
    
  </body>
</html>
