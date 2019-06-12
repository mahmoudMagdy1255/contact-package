<!DOCTYPE html>
<html>
<head>
	<title>Contact Us Page</title>
</head>
<body>
	Contact Us Page

	<form action="{{ route('contact') }}" method="post">

		@csrf

		<input type="text" name="name" placeholder="Your Name">

		<input type="email" name="email" placeholder="Your Email">

		<input type="text" name="message" placeholder="Your message">

		<input type="submit" value="Send">

	</form>

</body>
</html>