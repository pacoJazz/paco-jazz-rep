a<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style type="text/css">
			body
			{
				font-family: 'century gothic', sans-serif;
				color:white;
				margin:0;
				padding:0;
			}
			.markdown-mailable
			{
				background: linear-gradient(to bottom, green, yellow, red);
				padding:20px;
				border-radius: 10px;
				height:100vh;
			}
			.text-center
			{
				text-align: center;
			}
			h1
			{
				font-size:40px;
				font-weight: normal;
				letter-spacing: 2px;
			}
			a
			{
				display: inline-block;
				text-decoration:none;
				border:1px solid white;
				padding:15px 20px;
				color:white;
				border-radius: 5px;
				margin-top:20px;
			}
			a:hover
			{
				background-color:green;
			}
			#para
			{
				color:ù#FFF;
			}
		</style>
	</head>
	<body>
		<div class="markdown-mailable">
			<h1 class="text-center">Réinitialisation de votre mot de passe</h1>
			<p class="text-center" id="para">Afin de réinitialiser votre mot de passe, merci de cliquer sur le bouton ci dessous:<br></p>
			<center>
				<a href="{{ $link }}">Lien de réinitialisation</a>
			</center>
		</div>
		
	</body>
</html>