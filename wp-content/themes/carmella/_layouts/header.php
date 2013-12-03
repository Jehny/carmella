<?php 

	global $pageTitle;
	global $pageDescription;
	global $pageKeywords;
	global $footerAdicional;
	global $message;
	
	$pageDescription = "Na Cidade dos Funcionários, com pizzas, esfihas e petiscos deliciosos, futebol e lutas no telão, WiFi e muita diversão!";
	$pageKeywords = "Pizzaria, Esfiharia, Petiscaria, Carmella, Cidade dos Funcionários - Fortaleza, Fortaleza - CE, 
	Pizzaria Carmela Fortaleza - CE, Pizzaria Carmella Cidade dos Funcionários Fortaleza - CE, rodízio";
	
?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="_css/master.css" type="text/css" />
	<title> <?php echo $pageTitle; ?> Pizzaria Carmella</title>
	<link rel="shortcut icon" href="_imgs/icon.png" />
	<link rel="shortcut icon" href="_imgs/favicon.ico" type="image/x-icon" />
	<link rel="icon" type="image/ico" href="_imgs/favicon.ico" />
	<meta charset="utf-8">
	<meta name="description" content="<?php echo $pageDescription; ?>">
	<meta name="keywords" content="<?php echo $pageKeywords; ?>">
	<meta name="author" content="Canto Certo">
</head>

<body>
	
<div id="conteudo">
		<section id="topo">
			<header>
				<div class="topo_logo">
					<a href="index.php"><img alt="Pizzaria Carmella" title="Pizzaria Carmella" src="_imgs/topo_logo.png" /></a>
				</div>
				<section class="topo_title">
					<h1>Pizzaria Carmella</h1>
					
				</section>
				<p class="pedido">
					<span>PEÇA AGORA!</span> <br /><br />
					Terça a Domingo das 18h às 23h<br />
					<font size=+1><b>Telefone: <a href="tel:4141 5727">(85) 4141-5727</a></b></font>
				
				</p>
				
			</header>
			<?php include 'menu.php'; ?>
		</section>
		
	<div id="pagina">
	