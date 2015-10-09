<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/laracasts/public/css/style.css">
</head>
<body>
	<nav class="header-nav">
		@yield('header-nav')
	</nav>
	<div class="container">

		@include('partials.flash')
		
		@yield('content')
	
	</div>



	@yield('footer')



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
	
	$('div.alert').not('.alert-important').delay(3000).slideUp(300);

</script>

</body>
</html>