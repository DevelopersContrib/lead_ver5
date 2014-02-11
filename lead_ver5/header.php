<!DOCTYPE html>
<? include('includes/config.php');?>
<html>
    <head>
        <title><?php echo $title?></title>		
		<link rel="canonical" href="http://<?=$domain?>/<?=str_replace('.php','',basename($_SERVER['PHP_SELF']))?>" />
		<meta charset="utf-8">
		<meta name="robots" content="index, follow" />       
        <meta name="description" content="<?php echo ucfirst($domain)?> - <?php echo stripcslashes($desciption)?>">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
		<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
        <link rel="stylesheet" href="js/jquery.counter-analog.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="js/jquery.counter-analog2.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="css/custom.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', '<?php echo $account_ga?>']);
		  _gaq.push(['_trackPageview']);		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
		<style>	
		<? if($background_image==""){?>
		.background-rep{ background: url(http://d2qcctj8epnr7y.cloudfront.net/uploads/photodune-438310-group-of-people-m.jpg) no-repeat scroll 0 -40% rgba(0, 0, 0, 0); padding-top: 40px; }
		<?}else{?>
		.background-rep{ background: url(<?=$background_image?>) no-repeat scroll center rgba(0, 0, 0, 0); padding-top: 40px; }
		<? } ?>
		</style>
    </head>
    <body>
	
		<div style="position:relative;">
			<div style="position: absolute; z-index: 10; top: 0; right: 30px;" class="animated rotateIn r-d">
			   <a href="<?=$domain_affiliate_link;?>" target="_blank" alt="Contrib">
					<img src="http://d2qcctj8epnr7y.cloudfront.net/images/2013/badge-contrib-3.png">
				</a>
			</div>
		</div>
	
        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    
                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    
                    <!-- Be sure to leave the brand out there if you want it shown -->
					<? if($logo==''){ ?>
						<a class="brand" href="http://www.<?php echo $domain;?>"><?php echo ucfirst($domain);?></a>
                    <? }else{ ?>
						<a class="brand" href="http://www.<?php echo $domain;?>/"><img src="<?php echo $logo;?>" alt="<?php echo ucfirst($domain);?>" style="height:35px;"></a>
                    <? } ?>                    
                    <!-- Everything you want hidden at 940px or less, place within here -->
                    <div class="nav-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="/contact.html"><i class="icon-home icon-white"></i> Contact</a></li>
                            <li><a href="/contact.html"><i class="icon-home icon-white"></i> We are Hiring!</a></li>                            
							<li><a href="/about.html"><i class="icon-tags icon-white"></i> About</a></li>
                            <li><a href="/terms.html"><i class="icon-inbox icon-white"></i> Terms</a></li>
                            <li><a href="/privacy.html"><i class="icon-wrench icon-white"></i> Privacy</a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div><!--Menu Navigation-->
        <div class="background-rep">
            <div class="container">
                <div class="row-fluid">
                    <div class="span12">