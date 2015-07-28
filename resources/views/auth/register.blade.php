<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title>Daftar User</title>
	<link rel="icon" href="{{ asset('/images/icon.png') }}">

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="{{ asset('/css/fonts/linecons/css/linecons.css ') }}">
	<link rel="stylesheet" href="{{ asset('/css/fonts/fontawesome/css/font-awesome.min.css ') }}">
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-core.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-forms.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-components.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/xenon-skins.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

	<script src="{{ asset('/js/jquery-1.11.1.min.js ') }}"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<style>
	.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
	</style>
</head>
<body>
<div class="container">

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="POST">
		
			<h2>Silahkan Mendaftar</h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control input-lg" placeholder="Nama Lengkap" tabindex="1">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" tabindex="2">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="3">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="4">
					</div>
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-12"><input type="submit" name="kirim" value="Daftar" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>
			<a href="{{ url('/') }}">Kembali</a>
		</form>
	</div>
</div>
</div>



	<!-- Bottom Scripts -->
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/js/TweenMax.min.js') }}"></script>
	<script src="{{ asset('/js/resizeable.js') }}"></script>
	<script src="{{ asset('/js/joinable.js') }}"></script>
	<script src="{{ asset('/js/xenon-api.js') }}"></script>
	<script src="{{ asset('/js/xenon-toggles.js') }}"></script>
	<script src="{{ asset('/js/jquery-validate/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('/js/toastr/toastr.min.js') }}"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="{{ asset('/js/xenon-custom.js') }}"></script>

</body>
</html>