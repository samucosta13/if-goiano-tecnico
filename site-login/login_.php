<?php

	$senha = $_POST["senha"];
	$user = $_POST["user"];

	$senha_salva = "12345";
	$user_salvo = "samuca";

	if ($senha == $senha_salva && $user == $user_salvo) {
		echo "
	
	<!DOCTYPE html>
	<html>
	<head>
		<title>Loja Virtual</title>
		<meta charset=utf-8 lang=pt-br>
		<link rel=stylesheet href=https://fonts.googleapis.com/css?family=Neucha>
		<link rel=stylesheet href=https://fonts.googleapis.com/css?family=Special+Elite>
		<link rel=stylesheet type=text/css href=style_.css>
	</head>

	<body>	
		<header>
			<h1>Store World</h1>
		</header>

		<nav>
			<ul id=nav_ul>
				<li class=nav_li >Home</li>
				<li class=nav_li >Sobre</li>
				<li class=nav_li >Galeria</li>
				<li id=link_maior class=nav_li>Loja Virtual</li>
			</ul>
		</nav>

		<section id=logado_section>
			<p class=login_mensagem>Usuário logado com sucesso!</p>			
		</section>

		<footer>
			<div id=footer_div>
				<p class=footer_ps>Samuel Felipe de Oliveira Costa</p>
				<p class=footer_ps>Informática para Internet - 2º B | Instituto Federal Goiano - Campus Ceres</p>
			</div>
		</footer>
	</body>
	</html>

		";
	} else {
		echo "

	<!DOCTYPE html>
	<html>
	<head>
		<title>Loja Virtual</title>
		<meta charset=utf-8 lang=pt-br>
		<link rel=stylesheet href=https://fonts.googleapis.com/css?family=Neucha>
		<link rel=stylesheet href=https://fonts.googleapis.com/css?family=Special+Elite>
		<link rel=stylesheet type=text/css href=style_.css>
	</head>

	<body>	
		<header>
			<h1>Store World</h1>
		</header>

		<nav>
			<ul id=nav_ul>
				<li class=nav_li >Home</li>
				<li class=nav_li >Sobre</li>
				<li class=nav_li >Galeria</li>
				<li id=link_maior class=nav_li >Loja Virtual</li>
			</ul>
		</nav>

		<section id=logado_section>
			<p class=login_mensagem>Erro: usuário ou senha incorretos.</p>			
		</section>

		<footer>
			<div id=footer_div>
				<p class=footer_ps>Samuel Felipe de Oliveira Costa</p>
				<p class=footer_ps>Informática para Internet - 2º B | Instituto Federal Goiano - Campus Ceres</p>
			</div>
		</footer>
	</body>
	</html>

		";
	}
?>