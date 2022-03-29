<!doctype html>
<!--[if lte IE 9]>
<html lang="en" class="oldie">
<![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inmo APP - Medellín</title>
		<link rel="stylesheet" media="all" href="{{ asset('templates/agencia-app/css/custom.css')}}" />
		<style type="text/css">
			*{
				margin: 0px;
				padding: 0px;
			}
		</style>
	</head>
<body>
	
<div class="medellin" style="height: 100%;">
	<span>M</span>
	<span>E</span>
	<span>D</span>
	<span>E</span>
	<span>L</span>
	<span>L</span>
	<span>Í</span>
	<span>N</span>
</div>

<script type="text/javascript">
	const spans = document.querySelectorAll('.medellin span');

	spans.forEach((span, idx) => {
		span.addEventListener('click', (e) => {
			e.target.classList.add('active');
		});
		span.addEventListener('animationend', (e) => {
			e.target.classList.remove('active');
		});
		
		// Initial animation
		setTimeout(() => {
			span.classList.add('active');
		}, 750 * (idx+1))
	});

	setTimeout(function () {
		window.location = '{{ route('user.index') }}'
   }, 8000);
</script>
</body>
</html>