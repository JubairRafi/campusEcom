<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Sell Commodity</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="/regi/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Sell Commodity</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post"enctype="multipart/form-data">
                    @csrf
					<input class="text" type="text" name="commodityName" placeholder="commodityName" required=""  >
                    <input class="text" type="text" name="price" placeholder="price" required="" ">
                    <input  type="file" name="picture" placeholder="picture" required="" >
					<input class="text" type="text" name="quantity" placeholder="quantity" required="" >
                    <input class="text" type="text" name="studentID" placeholder="studentID" value="{{$user[0]['studentId']}}" required="" readonly>
					<input type="submit" value="PUBLISH">
				</form>
			</div>
		</div>
		
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->

	<script>
			function myFunction() {
			var x = document.getElementById("myInput");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
			}
</script>
</body>
</html>