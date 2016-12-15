<!doctype html>
<html> 	
	<head> 		
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,400,600" rel="stylesheet">
		<link href="/css/zappem.css" rel="stylesheet">
	</head>
	<body>
		<?=$Layouts['topbar']?>

		<div id="content">
			<?=$Content?>
		</div>

		<footer>
			<div class="container">
				<div class="row">
					<div class="column shrink">
						<img src="/img/logo.svg" class="logo">
					</div>
					<div class="column shrink">
						<ul>
							<li>
								<a href="/">Home</a>
							</li>
							<li>
								<a href="/getting-started">Getting Started</a>
							</li>
							<li>
								<a href="/docs">Docs</a>
							</li>
							<li>
								<a href="https://demo.zappem.xyz">Demo</a>
							</li>
							<li>
								<a href="/download">Download</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="column align-right copyright">
						&copy; <?=date('Y')?> Zappem
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>
