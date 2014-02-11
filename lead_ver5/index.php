<? include('header.php');?>
                        <div class="span5">
                            <div class="wrap-left-content">
                                <div class="tabbable-custom nav-justified">
                                    <ul class="nav nav-tabs nav-justified">
                                        <li class="active">
                                            <a data-toggle="tab" href="#D1">
                                                <i class="icon-laptop"></i> <?php echo ucfirst($domain);?> Features
                                            </a>
                                        </li>
                                        <li class="">
                                            <a data-toggle="tab" href="#D2">
                                                <i class="icon-sitemap"></i> Why Contrib?
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="D1" class="tab-pane active">
                                            <div class="media">                      
                                                <a href="#" class="pull-left"><img src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/icon-50x50-contrib-contribute2.png" alt="Contribute" class="media-object"></a>                      
                                                <div class="media-body">                        
                                                    <h4 class="media-heading">Contribute</h4>                       
                                                    <p>Contribute your skills, services, apps or capital, part-time.   Help a team of other passionate people doing amazing things.</p>                      
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a href="#" class="pull-left">                        
                                                    <img src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/icon-50x50-contrib-money2.png" alt="Make Money through Contribution" class="media-object">                      
                                                </a>                      
                                                <div class="media-body">                        
                                                    <h4 class="media-heading">Create Value for <?php echo ucfirst($domain);?></h4>                        
                                                    <p>Amazing things happen with the right people, technology, concept and resources here at <?php echo ucfirst($domain);?>.  From equity ownership, great people creating synergy, or the  2% of shares going to charity, Contrib and <?php echo ucfirst($domain);?> members focus on creating Value.</p>                      
                                                </div>                    
                                            </div>
                                            <div class="media">                      
                                                <a href="#" class="pull-left">
                                                    <img alt="Search" src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/icon-50x50-contrib-market2.png" class="media-object">
                                                </a>                      
                                                <div class="media-body">                        
                                                    <h4 class="media-heading">Browse the <?php echo ucfirst($domain);?> Marketplace </h4>
                                                    <p>Browse our Asset Marketplace and Find other Great People working on Amazing Projects such as <?php echo ucfirst($domain);?>. </p>
                                                </div>                    
                                            </div>
                                        </div>
                                        <div id="D2" class="tab-pane">
                                            <div class="tab-pane active" id="D2">
                                                <h4>Great  reasons why you should join us</h4>
                                                <ul style="padding-left: 10px;" class="unstyled">
                                                    <li><i class="icon-check"></i> Cowork with like minded, talented people</li>
                                                    <li><i class="icon-check"></i> Great Perks</li>
                                                    <li><i class="icon-check"></i> Founding Member Status Opps</li>
                                                    <li><i class="icon-check"></i> Amazing Members, Advisors, Sponsors, Investors</li>
                                                    
                                                </ul>
                                                <p><?php echo ucfirst($domain);?> is a proud member of the <a href="http://www.contrib.com">Contrib Network</a> .</p>
                                                <p>Founded in 1996 as eCorp, the worlds largest Virtual Domain Development Incubator on the planet, Contrib helps turn Visitors into Contributors and Ideas into Action using proprietary technology, new business models and YOU. Learn More Today.</p> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="span7 follow-desc">
                            <div class="row-fluid" style="min-height: 395px;">
                                <div class="wrap-right-content text-center">                                    
									
									<div class="span12" id="follow_step1">
										<h1 class="h3-domain">
											Follow, Join, Partner with <span><?php echo ucfirst($domain);?></span>
										</h1>
										<h4>
											Join Free, Help Build, Manage and Monetize Great Companies Today.
										</h4> 
										<h5><? echo $introduction?></h5>
										<form onclick="return false;" >
											<label>Your Official Email:</label>
											<input type="text" name="initial_email" id="initial_email" value="" class="input-large span7" />
											<div class="span12">
												<div class="span2"></div>
												<div class="span5"><div class="text-error" id="follow_warning1"></div></div>
												<div class="span3" style="margin: 0;">
													<button class="btn btn-success btn-large" id="follow_step1_btn">NEXT<i class="icon-chevron-right icon-white"></i></button>
												</div>
											</div>
										</form>
									</div><!-- box 1 -->	
									
									<div class="span12" id="follow_step2" style="display:none">  
										<h2 class="text-center">
											Create A Free Account
										</h2>
										<p class="span10 lead text-center"><em>Create your free account at Contrib and build or join your first Startup Company .</em></p>
										<br />
										<form onclick="return false;" >  											
											<div class="span5" style="margin-left: 2.564102564102564%;">
												<label>Your Official Email:</label>  
												<input type="text" class="span12 input-large" value="" id="email" name="email"> 
											</div>     
											<div class="clear"></div>										   
											<div class="span5"> 
												<label>Your First Name</label>
												<input class="span12 input-large" type="text" value="" id="firstname" name="firstname">                      
											</div>
											<div class="span5">
												<label>Your Last Name</label>
												<input class="span12 input-large" type="text" value="" id="lastname" name="lastname"> 
											</div>                                                  
											<div class="span5"> 
												<label>Password:</label>
												<input type="password" class="span12 input-large" id="password" name="password">
											</div>                      
											<div class="span5">
												<label>Confirm password:</label> 
												<input type="password" class="span12 input-large" id="password2" name="password2">
											</div>                      
											<div class="span12">
												<div class="span7"><span class="pull-left text-error" id="follow_warning2" style="margin: 20px 0 0 0" ></span></div>                         
												<div class="span3">
													<button style="margin: 20px 0 0 45px;" class="btn btn-success btn-large" id="follow_step2_btn">NEXT<i class="icon-chevron-right icon-white"></i></button>
												</div>  
											</div>         
										</form> 
									</div><!-- box 2 -->	
                                    
									<div class="span12" id="follow_step3" style="display:none;text-align:left"> 
										
											<h2 class="text-center">
												We want to know more about you
											</h2>
											<p class="span10">
												<em>We want to attract talented and gifted people like you so please take the time to upload a picture or add your current country of residence.</em>
											</p>
											<div class="clear"></div><br />
																						
											<div class="span5">
													<label>What do you look like:</label> 
													<div id="user_image" class="userphoto" style="height:170px;width:170px;">
														
														<input type="hidden" id="default_photo" value="">
														<img id="userimage" class="img_cls"  alt="" src="/img/avatar0.jpg">
														
														
													</div>
													<span class="btn btn-primary btn-small fileinput-button" style="margin-left: 20px;margin-top: 3px;">                               
														<i class="icon-plus icon-white"></i>                               
														<span>Upload Image</span>                               
														<!-- The file input field used as target for the file upload widget --> 
														<input id="fileupload" type="file" name="files[]" multiple>  
													</span>
													<div id="progress" class="progress progress-success progress-striped" style="margin-left: 20px;margin-top: 3px;">
														<div class="bar"></div>                        
													</div> 
													<!-- The container for the uploaded files -->
													<div id="files" class="files" style="display:none"></div> 
													<span id="saved_status" class="help-block" style="margin-left: 20px;margin-top: 3px;"></span>  
											</div> 
											
											<form onclick="return false;" > 
												<div class="span5" style="margin-left: 2.564102564102564%;">
													<label>Country</label>
													<? include('country_select.php'); ?> 
												</div>
												<div class="span5">
													<label>City</label> 
													<input class="span12 input-block-level" type="text" value="" id="city" name="city"> 
												</div>                     
												<div class="span5">
													<label>Phone</label>                            
													<input class="span12 input-block-level" type="text" name="phone" id="phone" value="" > 
												</div>
												<div class="span5">  
													<label>Website</label> 
													<input class="span12 input-block-level" type="text" name="website" id="website" value="" > 
												</div>  
												<div class="span10">
													<div class="row-fluid">  
														<div class="span12">
															<div class="text-error" id="follow_warning3" style="text-align: center;"></div>											
														</div>
														<button class="btn btn-success btn-large pull-left" id="follow_step3_back"><i class="icon-chevron-left icon-white"></i> Back</button> 
														<button class="btn btn-success btn-large pull-right" id="follow_step3_btn">Next <i class="icon-chevron-right icon-white"></i></button>    
													</div> 
												</div>											
											</form>										
									</div><!-- box 3 -->	
									
									<div class="span12" id="follow_step4" style="display:none;"> 
										<h2 class="text-center">
											Your Social Details
										</h2>
										<p class="span10">
											<em>If you're going to be a part of something big, then you must have social profiles everywhere. Please take the time to at least add one.</em>
										</p>
										<br /><div class="clearfix"></div>  
										
										<form onclick="return false;" >
											<div class="span10 offset1" >
												<label>Add Your Social Links</label> 
												<select id="social_select" class="span10" style="margin-bottom: 0px;"> 
													<option value=""> -- select social account --</option>   
													<option value="1">Facebook</option>  
													<option value="10">Twitter</option>  
													<option value="2">LinkedIn</option>
													<option value="9">GitHub</option>
													<option value="4">Skype</option>
													<option value="5">Yahoo</option> 
													<option value="6">GTalk</option>
													<option value="7">AOL</option>
													<option value="8">Windows Live</option>
												</select>                      
											</div>  
											<br /><br /><div class="clearfix"></div>
											
											<div class="span10 offset1">                   
												<div class="span10 social_reg social_reg1" style="display:none;margin-left: 2.564102564102564%;">
													<img src="img/icons/facebook.png">                          
													<input class="span10 social_register" type="text" id="contact_1" value="" placeholder="link to your facebook profile" style="margin-bottom:0;">
													<img src="img/remove.png" class="social_remove" id="social_remove_1" alt="Facebook">       
												</div>                      
												<div class="span10 social_reg social_reg10"  style="display:none">
													<img src="img/icons/twitter.png">
													<input type="text" class="span10 social_register" id="contact_10" value="" placeholder="link to your twitter profile" style="margin-bottom:0;">                          
													<img src="img/remove.png" class="social_remove" id="social_remove_10" alt="Twitter">
												</div>  
												<div class="span10 social_reg social_reg2"  style="display:none">                           
													<img src="img/icons/linkedin.png">  
													<input class="span10 social_register" type="text" id="contact_2" value="" placeholder="link to your linkedin profile" style="margin-bottom:0;">
													<img src="img/remove.png" class="social_remove" id="social_remove_2" alt="LinkedIn"> 
												</div>   
												<div class="span10 social_reg social_reg9"  style="display:none">      
													<img src="img/icons/github.png">                            
													<input class="span10 social_register" type="text" id="contact_9" value="" placeholder="link to your github account" style="margin-bottom:0;"> 
													<img src="img/remove.png" class="social_remove" id="social_remove_9" alt="GitHub"> 
												</div>                     
												<div class="span10 social_reg social_reg4"  style="display:none">
													<img src="img/icons/skype.png"> 
													<input class="span10 social_register" type="text" id="contact_4" value="" placeholder="your skype id" style="margin-bottom:0;"> 
													<img src="img/remove.png" class="social_remove" id="social_remove_4" alt="Skype">           
												</div>
												<div class="span10 social_reg social_reg5" style="display:none" > 
													<img src="img/icons/yahoo.png">
													<input class="span10 social_register" type="text" id="contact_5" value="" placeholder="your yahoo id" style="margin-bottom:0;">  
													<img src="img/remove.png" class="social_remove" id="social_remove_5" alt="Yahoo">
												</div>   
												<div class="span10 social_reg social_reg6" style="display:none"> 
													<img src="img/icons/gtalk.png">
													<input class="span10 social_register" type="text" id="contact_6" value="" placeholder="your gtalk id" style="margin-bottom:0;">      
													<img src="img/remove.png" class="social_remove" id="social_remove_6" alt="GTalk">
												</div>                      
												<div class="span10 social_reg social_reg7" style="display:none"> 
													<img src="img/icons/aol.png"> 
													<input class="span10 social_register" type="text" id="contact_7" value="" placeholder="your AOL id" style="margin-bottom:0;">
													<img src="img/remove.png" class="social_remove" id="social_remove_7" alt="AOL">  
												</div>                     
												<div class="span10 social_reg social_reg8" style="display:none">   
													<img src="img/icons/windows.png">      
													<input class="span10 social_register" type="text" id="contact_8" value="" placeholder="your windows live id" style="margin-bottom:0;">  
													<img src="img/remove.png" class="social_remove" id="social_remove_8" alt="Windows Live"> 
												</div>   
											</div> 
											
											<div class="clearfix"></div>
											<br class="clearfix">
											<div class="row-fluid" id="nextbtn2">  
												<button class="btn btn-success btn-large pull-left" id="follow_step4_back"><i class="icon-chevron-left icon-white"></i> Back</button> 
												<button class="btn btn-success btn-large pull-right" id="follow_step4_btn">Next <i class="icon-chevron-right icon-white"></i></button>    
											</div> 
										</form>
									</div> <!-- box 4 -->	
									
									<div class="span12" id="follow_step5" style="display:none;text-align: left;">  
										<h2 class="text-center">
											Your Industry Details
										</h2>
										<p class="span10 lead text-center">
											<em>We have 15 vertical industries and over 20,000 assets,domains that you could choose for your next venture and we need to know what your experience is.</em>
										</p>
													
										<div class="clearfix"></div>  
										<div class="row-fluid form-horizontal">  
											<div class="control-group">      
												<label class="control-label">I'm best described as</label>   
												<div class="controls"> 
													<select id="role_id" data-original-title="" title="">
														<option value="">Choose your expertise</option>
														<?php if (count($roles) > 0): foreach ($roles as $row): ?>
														<option value="<?php echo $row['role_id']?>"><?php echo $row['role_name']?></option>
														<?php endforeach; endif; ?>
													</select>
												</div>    
											</div>    
											<div class="control-group">
												<label class="control-label">What are you looking for</label> 
												<div class="controls">
													<select class="span10" id="intention"> 
														<?php foreach ($intentions as $int):?>
														<option value="<?php echo $int?>"><?php echo $int?></option> 
														<?php endforeach;?>
													</select> 
												</div>   
											</div>     
											<div class="control-group">
												<label class="control-label">Select your industry</label>   
												<div class="controls">
													<select id="industry_id" data-original-title="" title="">
														<option>Select your industry</option>
														<?php if (count($industries) > 0): foreach ($industries as $row): ?>
														<option value="<?php echo $row['IndustryId']?>"  ><?php echo $row['Name']?></option>
														<?php endforeach; endif; ?>
													</select>													
												</div>                          
											</div>                      
										</div>                          
										<div class="span12" style="padding:20px;background-color: #fff;border-radius: 5px;margin-left:4px;margin-top: 5px;">
											<h4 class="text-info">Experience level</h4>                
											<div class="row-fluid"> 
												<table width="90%" cellspacing="0" cellpadding="0" border="0" align="center" style=" border:1px solid #D7D7D7;" class="ratetable">				
													<?php if (count($experiences) > 0): foreach ($experiences as $row): ?>
													<tr id="skill_<?php echo $row['skill_id']?>" class="ratetr">
													<td align="center" style="border-left:1px solid #D7D7D7; border-right:1px solid #D7D7D7;">
														<span style="font-weight:bold;"><?php echo $row['experience'] ?></span>
													</td>
													<td align="center" style="padding-left:50px;" class="ratetd">					  
														<?php for ($i=1;$i<6;$i++):?>
														<input name="star-skill<?php echo $row['skill_id']?>" type="radio" class="star" value="<?php echo $i?>" />   
														<?php endfor;?>
														<input type="hidden" name="ex_<?php echo $row['skill_id']?>" class="rateinput" id="rate_<?php echo $row['skill_id']?>" value="">
													 </td>
													</tr>            
													<?php endforeach; endif; ?>
												</table>												
											</div>                            
										</div>  
										<div class="clearfix"></div>     
										<br class="clearfix">
										<div class="row-fluid">
											<div class="span12">
												<div id="reg_loading"></div>
												<div class="text-error" id="follow_warning5" style="text-align:center"></div>											
											</div>
											<input type="hidden" name="domain" id="domain" value="<?=isset($domain)?$domain:'contrib.com'?>" > 
											<button class="btn btn-success btn-large pull-left" id="follow_step5_back"><i class="icon-chevron-left icon-white"></i> Back</i></button>  
											<button class="btn btn-success btn-large pull-right"  id="follow_step5_btn">Submit <i class="icon-chevron-right icon-white"></i></button>      
										</div>
										<div class="clearfix"></div>         
									</div><!-- box 5 -->									
									
									<div id="follow_topsites" style="display: none">
										<h3>Thank you for your registration!</h3>
										<p style="background: rgba(255, 173, 0, 0.2);padding: 5px;">Please check the verification email that we have just sent you. Check out our top followed sites or continue viewing your account by <a target="_blank" href="http://www.contrib.com/network/account">clicking here</a>.</p>
										<div class="row-fluid">
											<div class="span11 wrap-content-final">
												<div class="span4 text-center">
													<img style="margin-bottom: 10px;" src="http://contrib.com/uploads/logo/image_logo-gventures10-420x60.png" class="follow-img">
													<a class="btn btn-info" target="_blank" href="http://www.contrib.com/brand/details/globalventures.com"><b>Follow</b></a>
												</div>
												<div class="span7">
													<div class="row-fluid">
														<a href="http://www.contrib.com/brand/details/globalventures.com" class="follow-name"><b>Globalventures.com</b></a>
													</div>
													<div class="row-fluid">
														<p>Global Ventures, LLC, established in 1996, is a Real Estate and Technology company focused on building and leveraging electronic corporations (eCorp) within the Domain Name System.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid">
											<div class="span11 wrap-content-final">
												<div class="span4 text-center">
													<img style="margin-bottom: 10px;" src="http://contrib.com/uploads/logo/goingglobal.png" class="follow-img">
													<a class="btn btn-info" target="_blank" href="http://www.contrib.com/brand/details/goingglobal.com"><b>Follow</b></a>
												</div>
												<div class="span7">
													<div class="row-fluid">
														<a href="http://www.contrib.com/brand/details/goingglobal.com" class="follow-name"><b>Goingglobal.com</b></a>
													</div>
													<div class="row-fluid">
														<p>Taking Your Business and Services Globally. Be a part of our global community when we launch!</p>
													</div>
												</div>
											</div>
										</div>
										<div class="row-fluid">
											<div class="span11 wrap-content-final">
												<div class="span4 text-center">
													<img style="margin-bottom: 10px;" src="http://contrib.com/uploads/logo/microblog.png" class="follow-img">
													<a class="btn btn-info" target="_blank" href="http://www.contrib.com/brand/details/microblog.com"><b>Follow</b></a>
												</div>
												<div class="span7">
													<div class="row-fluid">
														<a href="http://www.contrib.com/brand/details/microblog.com" class="follow-name"><b>Microblog.com</b></a>
													</div>
													<div class="row-fluid">
														<p>MicroBlog allows you to publish your updates and manage your profiles across multiple social media networks or micro blog sites in one dashboard.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div><!-- box final-->
									
									
									<div class="span12" style="margin-top: 30px;"> 
										<span class="help-block fnt-styl text-center">Your email will not be published on your profile page. We promise not to share your email with anyone else. Please check our <a href="#">Privacy Policy</a> and <a href="#">Terms &amp;Conditions.</a> </span>
									</div>
                                </div>
                            </div>
                        </div>

        


		
		<script src="js/jquery.fileupload.js" type="text/javascript"></script>
		<script src="js/jquery.rating-short.js" type="text/javascript" language="javascript"></script>
		<script>
			$(function () {
				'use strict';
				// Change this to the location of your server-side upload handler:
				var url = 'http://www.contrib.com/signup/uploadpic';
				$('#fileupload').fileupload({
					url: url,
					dataType: 'json',
					done: function (e, data) {
						$.each(data.result.files, function (index, file) {
							if(file.error){
								$('#saved_status').text("Ooops! You uploaded a file alright but it's not in the correct format. We only accept .jpg, .jpeg, or .png files");
							}else{
								$('#saved_status').text("Please wait while we are saving your image..");
								$('<p/>').text(file.name).appendTo('#files');
								$('#userimage').attr('src','http://www.contrib.com/uploads/profile/'+file.name);
								//automatically save user profile image
									$.post('http://www.contrib.com/signup/saveprofileimage',{filename:file.name},function(data){
										if(data == "OK"){
												var filename = file.name;
												var ext = filename.split('.').pop().toLowerCase();
												if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
													$('#saved_status').text("The file you are trying to upload is invalid.");
												}else{
													$('#saved_status').text("Your image has been saved.");
												}
										}else{
											$('#saved_status').text("An error occurred while uploading your image. Please try again.");
										}
									});
							}
						});
					},
					progressall: function (e, data) {
						var progress = parseInt(data.loaded / data.total * 100, 10);
						$('#progress .bar').css(
							'width',
							progress + '%'
						);
					}
				}).prop('disabled', !$.support.fileInput)
					.parent().addClass($.support.fileInput ? undefined : 'disabled');
			});
		</script>
		
		<script>
		$(function() {
			$('#accordion').accordion({collapsible: true});
			$('#email').tooltip({'trigger':'focus','title':'proper format your@email.com','placement':'right',});
			$('#website').tooltip({'trigger':'focus','title':'enter your website name here','placement':'right',});
			$('#password').tooltip({'trigger':'focus','title':'password must be alphanumeric,4 to 20 characters','placement':'right',}); 
			$(".users").popover({trigger:'hover'}); 
			$('.counter').counter();
			
			
			$('#follow_step1_btn').click(function(){
				var initial_email = $('#initial_email').val();
				var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				
				$('#follow_warning1').html('');
				
				if (initial_email == ""){
					$('#follow_warning1').html('* Please provide an e-mail *');
					$('#initial_email').focus();
				}else if(!emailfilter.test(initial_email)){
					$('#follow_warning1').html('* Invalid e-mail format *');
					$('#initial_email').focus();
				}else {
					$("#follow_step1_btn").attr('disabled', true); 
					$.post('http://www.contrib.com/forms/fullcontactdetails',
						   {initial_email:initial_email}
						   ,function(data){
								if(data.photo!=''){
									$('#userimage').attr('src',data.photo);
									$('#default_photo').val(data.photo);
								}
							   
							   $('#firstname').val(data.fname);
							   $('#lastname').val(data.lname);							   
							   $('#email').val(initial_email);
							   $('#follow_step1').hide();
							   $('#follow_step2').show();
						   }
					);
				}		
			});
			
			$('#follow_step2_btn').click(function(){
				var email = $('#email').val();
				var firstname = $('#firstname').val();
				var lastname = $('#lastname').val();
				var password = $('#password').val();
				var password2 = $('#password2').val();				
				var emailfilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				var letters = /^[a-zA-Z ]+$/;
				
				$('#follow_warning2').html('');
				
				if (email == ""){
					$('#follow_warning2').html('* Please provide an e-mail *');
					$('#email').focus();
				}else if(!emailfilter.test(email)){
					$('#follow_warning2').html('* Invalid e-mail format *');
					$('#email').focus();
				}else if (firstname == ""){
					$('#follow_warning2').html('* First name is required *');
					$('#firstname').focus();
				}else if(!letters.test(firstname)){				
					$('#follow_warning2').html('* Accepts letters only *');
					$('#firstname').focus();
				}else if(firstname.length > 25){				
					$('#follow_warning2').html('* Name should have 3 to 25 characters *');
					$('#firstname').focus();               
				}else if(firstname.length < 3 ){				
					$('#follow_warning2').html('* Name should have 3 to 25 characters *'); 
					$('#firstname').focus();  
				}else if (lastname == ""){
					$('#follow_warning2').html('* Last name is required *');
					$('#lastname').focus();
				}else if(!letters.test(lastname)){				
					$('#follow_warning2').html('* Accepts letters only *');
					$('#lastname').focus();
				}else if(lastname.length > 25){				
					$('#follow_warning2').html('* Name should have 3 to 25 characters *');
					$('#lastname').focus();               
				}else if(lastname.length < 3 ){				
					$('#follow_warning2').html('* Name should have 3 to 25 characters *'); 
					$('#lastname').focus();  
				}else if (password == ""){
					$('#follow_warning2').html('* Password is required *');
					$('#password').focus();
				}else if(password.length < 5){				
					$('#follow_warning2').html('* Password should have atleast 5 characters *'); 
					$('#password').focus();  
				}else if (password2 == ""){
					$('#follow_warning2').html('* Confirm Password is required *');
					$('#password2').focus();
				}else if(password!=password2){				
					$('#follow_warning2').html('* Password not match *'); 
					$('#password2').focus();
				}else{
					$('#follow_step2').hide();
					$('#follow_step3').show();
					$('#follow_warning2').html('');
				}
				
			});
						
			$('#follow_step3_btn').click(function(){
				var country_id = $('#country_id').val();
				var city = $('#city').val();
			
				if (country_id == ""){
					$('#follow_warning3').html('* Please select your country *');
					$('#country_id').focus();
				}else if (city == ""){
					$('#follow_warning3').html('* Please enter your city *');
					$('#city').focus();
				}else{
					$('#follow_step3').hide();
					$('#follow_step4').show();
					$('#follow_warning3').html('');
				}			
			});
			
			$('#social_select').change(function(){
				var social = $(this).val();
				
				$('.social_reg'+social).show();
				
				$("#social_select option[value='"+social+"']").remove();
			});
			
			$('.social_remove').click(function(){
				var id = $(this).attr('id');
				var social = id.replace('social_remove_','');
				var text = $(this).attr('alt');
				
				$('.social_reg'+social).hide();
				
				$('#social_select').append( new Option(text,social) );
				
			});
			
			$('#follow_step4_btn').click(function(){
				$('#follow_step4').hide();
				$('#follow_step5').show();
			});
			
			/*BACK EVENTS*/
			$('#follow_step3_back').click(function(){
				$('#follow_step3').hide();
				$('#follow_step2').show();
				$('#follow_warning3').html('');
			});
			
			$('#follow_step4_back').click(function(){
				$('#follow_step4').hide();
				$('#follow_step3').show();
			});
			
			$('#follow_step5_back').click(function(){
				$('#follow_step5').hide();
				$('#follow_step4').show();
				$('#follow_warning5').html('');
			});
			
			/*SAVE DATA*/
			$('#follow_step5_btn').click(function(){
				
				var firstname = $('#firstname').val();
				var lastname = $('#lastname').val();
				var email = $('#email').val();
				var password = $('#password').val();
				var password2 = $('#password2').val();
				var country_id =  $('#country_id').val();
				var city = $('#city').val();
				var country = $("#country_id option:selected").text();
				var phone = $('#phone').val();
				var website =  $('#website').val();
				var intention = $('#intention').val();
				var role_id = $('#role_id').val();
				var role_name = $("#role_id option:selected").text();
				var industry_id = $('#industry_id').val();
				var industry_name = $("#industry_id option:selected").text();
				var default_photo = $('#default_photo').val();
				var domain = $('#domain').val();
				var experiences = "";
				var rating = "";
				var socials = "";
				var social_values = "";
				var pics = "";
				
				$('.files p').each(function() {
					pics = $(this).text();
				});
				
				$('.social_register').each(function() {
					var id = $(this).attr('id');
					social_id  = id.replace('contact_','');  
					social_values += $(this).val()+";;";
					socials += social_id + ",";
				});
				
				$('.ratetable .ratetr .ratetd .rateinput').each(function() {
					var id = $(this).attr('id');
					experience  = id.replace('rate_','');  
					rating += $(this).val()+";;";
					experiences += experience + ",";
				});
				
				if(role_id == ""){
					$('#follow_warning5').html('* Please select your expertise *');
					$('#city').focus();
				}else if(industry_id == "" || industry_name == "Select your industry"){
					$('#follow_warning5').html('* Please select your industry *');
					$('#industry_id').focus();
				}else{
				
					showloading();
					$("#follow_step5_back").attr('disabled', true);
					$("#follow_step5_btn").attr('disabled', true);
					$('#follow_warning5').html('');
					
					$.post("http://www.contrib.com/signup/checkexist",{'field':'EmailAddress','value':email},function(data){

						if (data.status == 0){
						
							$.post("http://www.contrib.com/signup/saveall",
								{
								 firstname:firstname,
								 lastname:lastname,
								 email:email,
								 password:password,
								 website:website,
								 country_id:country_id,
								 city:city,
								 country:country,
								 phone:phone,
								 website:website,
								 intention:intention,
								 role_id:role_id,
								 role_name:role_name,
								 industry_id:industry_id,
								 industry_name:industry_name,
								 experiences:experiences,
								 rating:rating,
								 socials:socials,
								 social_values:social_values,
								 pics:pics,
								 default_photo:default_photo,
								 domain:domain
				
								}
								,function(data){
									if (data.status){
									
										 if (domain==""){
											 domain = "contrib.com";
										 }
									 
										$.post("http://www.manage.vnoc.com/salesforce/addlead",
											 {
												 'firstName':firstname,
												 'lastName':lastname,
												 'title':'',
												 'email':email,
												 'phone':phone,
												 'street':'',
												 'city':city,
												 'country':country,
												 'state':'',
												 'zip':'',
												 'domain':domain,
												 'role':role_name,
												 'form_type':'Contrib User'
											 }
											 ,function(data2){										  
												   _gaq.push(['_trackEvent', 'Domains', 'Signup', domain]);
												  $('#follow_step5').hide();
												  $('#follow_topsites').show();
											 }
										);
									 
									}else {
										$('#follow_warning5').html('* Registration error occured. Please try again later. *'); 				 
									}
								}
							);	 
						}else{
							$('#follow_warning5').html('* Email already have an account. * <a href="http://www.contrib.com" target="_top">Please LOGIN here.</a>');
							$("#follow_step5_back").attr('disabled', false);
							$("#follow_step5_btn").attr('disabled', false);
							hideloading();
						}
					
					});
				}
			});
			
			
		});
		
		function showloading(){
			var html = "<div style='text-align:center;padding-top:50px'><img src='/img/loadingAnimation.gif'></div>";
			$('#reg_loading').html(html);
		}
		function hideloading(){
			$('#reg_loading').html('');
		}
		</script>

		
<? include('footer.php');?>