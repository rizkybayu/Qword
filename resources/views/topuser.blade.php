<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Qwords>" />
	<meta name="author" content="Rizky Bayu" />
	
	<title>Qwords - Top User</title>
	<link rel="icon" href="{{ asset('/images/icon.png') }}">
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="{{ asset('/css/fonts/linecons/css/linecons.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/fonts/fontawesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-core.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-forms.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-components.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-skins.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

	<script src="{{ asset('/js/jquery-1.11.1.min.js') }}" ></script>

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
				<li>
					<time class="cbp_tmtime" datetime="2014-10-03T03:45"><span>5 Top User Quote</span> <span><?php //echo tgl_indo($tgl);?></span></time>
					
					<div class="cbp_tmicon timeline-bg-warning">
						<i class="fa-user"></i>
					</div>
					
					<div class="cbp_tmlabel">
						<h2>Kutipan pengguna yang paling banyak :</h2>
						<p>
							<ol>
							<?php
							if(empty($user)){
								echo "<li>Belum ada pengguna</li>";
							}else{
								foreach ($user as $user) {
									echo "
								<li>".$user['Nama']." (<a href='".base_url('user')."/".$user['username']."'>".$user['Jum']." Quote</a>)</li>
								";
							}
							}
							?>
							</ol>
						</p>
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
</html>