<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Title</title>
	</head>
	<body>
		<div id="header">
			<div id="logo">
				<a href="/">Title</a>
			</div>
			<div id="menu">
				<ul>
					<li><a href="/">Link1</a></li>
					<li><a href="/first">Link2</a></li>
				</ul>
			</div>
		</div>

		<div id="page">
			<?php include 'application/views/'.$content_view; ?>
		</div>

		<div id="footer">
			<a href="/">Title</a> &copy; 2000</a>
		</div>
	</body>
</html>