<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="Qwords" name="description" />
	<meta content="Rizky Bayu" name="author" />
	<meta content='Quote' name='keywords'/>
	<meta content='Global' name='distribution'/>
	<meta content='all' name='robots'/>
	<meta content='all' name='spiders'/>
	<meta content='id' name='language'/>
	<meta content='id' name='geo.country'/>
	<meta content='Indonesia' name='geo.placename'/>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<meta content='never' http-equiv='xpires'/>
	<meta content='general' name='rating'/>
	
	<title>Qwords</title>
	<link rel="icon" href="{{ asset('/images/icon.png') }}">

	<link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="{{ asset('/css/fonts/linecons/css/linecons.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/fonts/fontawesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-core.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-forms.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-components.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-skins.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/adaw.css') }}">

	<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body">
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<!-- <div class="sidebar-menu toggle-others fixed">
			
			
		</div>-->
		
		<div class="main-content">
					
			@include('header')
			
			<ul class="cbp_tmtimeline">

				<?php
					if(empty($data)){
						?>
				<li>
					<time class="cbp_tmtime" datetime="{{ date('F d, Y') }}"><span class="hidden">{{ date('F d, Y') }}</span> <span class="large">Now</span></time>
					
					<div class="cbp_tmicon timeline-bg-gray">
						<i class="fa-user"></i>
					</div>
					
					<div class="cbp_tmlabel empty">
						<span>No Activity</span>
					</div>
				</li>
						<?php
					}else{
						foreach ($data as $data) {
							?>
				<li>
					<time class="cbp_tmtime" datetime="{{ date('F-m-d H:i:s') }}"><span><?php echo substr($data['tanggal'], 11,5); ?></span>
					<?php
					$today = date('d');
					$tg_dt = substr($data['tanggal'], 8,2);
					$tgls = substr($data['tanggal'], 0,10);

					if($today == $tg_dt){
						echo "<span title='".tgl_indo($tgls)."'>Today</span>";
					}else{
						echo "<span title='".tgl_indo($tgls)."'>".nama_hari($tgls)."</span>";
					}
					?>
					</time>
					
					<div class="cbp_tmicon timeline-bg-primary">
						<i class="fa-quote-left"></i>
					</div>
					
					<div class="cbp_tmlabel">
					<!-- ini buat quotes -->
						<h2><a href="#"><?php //echo strip_tags($data['nama']); ?></a> <span>posted a quote update</span></h2>
						<p class="noselect" style="font-family: 'Indie Flower', cursive;font-size:25px;"><?php //echo strip_tags($data['quote']); ?></p>
						<?php
							// $sbr = $data['sumber'];
							// if(empty($sbr)){

							// }else{
							// 	echo "- ".strip_tags($sbr);
							// }
						?>
						<!--<br>
						<div id='fb-root'/>
						<span class='fb-like' data-layout='button_count' data-send='false' data-show-faces='false' expr:data-href='<?php echo $_SERVER["REQUEST_URI"];?>'/>
						<a class='twitter-share-button' data-count='horizontal' expr:data-text='data:post.title' expr:data-url='data:post.url'>Tweet</a>
						<div class='g-plusone' data-count='true' data-size='medium' expr:data-href='data:post.url'/>
						-->
					</div>
				</li>
							<?php
						}
					}
				?>
				
				<li>
					<time class="cbp_tmtime" datetime="{{ date('F d, Y') }}"><span class="hidden">{{ date('F d, Y') }}</span> <span class="large">&nbsp;</span></time>
					
					<div class="cbp_tmicon timeline-bg-gray">
						<i class="fa fa-circle-o-notch fa-spin"></i>
					</div>
					
					<div class="cbp_tmlabel empty">
						Refresh
					</div>
				</li>
				
			</ul>
			
			
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			@include('footer')
		</div>
		
		
	</div>
	
	
	



	<!-- Bottom Scripts -->
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/TweenMax.min.js') }}"></script>
	<script src="{{ asset('/js/resizeable.js') }}"></script>
	<script src="{{ asset('/js/joinable.js') }}"></script>
	<script src="{{ asset('/js/xenon-api.js') }}"></script>
	<script src="{{ asset('/js/xenon-toggles.js') }}"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('/js/xenon-custom.js') }}"></script>

</body>
<script type='text/javascript'>
//<![CDATA[
(function(){var fb1=document.createElement('script');fb1.type='text/javascript';fb1.async=true;fb1.src='http://connect.facebook.net/id_ID/all.js#xfbml=1','facebook-jssdk';var fb2=document.getElementsByTagName('script')[0];fb2.parentNode.insertBefore(fb1,fb2)})();(function(){var tw1=document.createElement('script');tw1.type='text/javascript';tw1.async=true;tw1.src='http://platform.twitter.com/widgets.js';var tw2=document.getElementsByTagName('script')[0];tw2.parentNode.insertBefore(tw1,tw2)})();(function(){var gp1=document.createElement('script');gp1.type='text/javascript';gp1.async=true;gp1.src='https://apis.google.com/js/plusone.js';var gp2=document.getElementsByTagName('script')[0];gp2.parentNode.insertBefore(gp1,gp2)})();
//]]>
</script>
</html>