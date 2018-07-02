<html>

<head>

<style>

html, body {
	background-color: #f5f5f5;
	display: flex;
	flex-direction: column;
	text-align: center;
	justify-content: center;
}

img {
	margin-bottom: 20px;
}

.inputText {
	width: 270px;
	height: 30px;
	padding-left: 10px;
}

.submit {
	background-color: #007bff;
	color: white;
	width: 270px;
	height: 30px;
	text-align: center;
	border-radius: 5px;
}

div {
	text-align:center;
	margin-left: auto;
	margin-right: auto;
}

</style>

</head>

<body>

<div>

	<div>
		<img src="https://belbo.com/wp-content/themes/responsive/core/images/belbo.png" alt="Belbo Logo">
	</div>
	
	<div>
		<form>
			<input class="inputText" type="text" name="emailAddress" placeholder="Email address"></br>
			<input class="inputText" type="text" name="password" placeholder="Password"></br>
		</form>
	</div>
	
	<div>
		<form>
			<input type="checkbox" name="checkbox">Remember me</br>
		</form>
	</div>
	
	<div>
		<form>
			<input class="submit" type="submit" name="submit" value="Sign in">
		</form>
	</div>
		
</div>

</body>