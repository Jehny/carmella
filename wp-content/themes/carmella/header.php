<?php 

	global $pageTitle;
	global $pageDescription;
	global $pageKeywords;
	global $footerAdicional;
	global $message;
	
	$pageDescription = " Pizzaria Carmella situada na cidade dos Funcionários, antigo Só o Filé agora conta com feijoada, luta, jogos
	do brasileirão e muita diversão";
	$pageKeywords = "Pizzaria, Esfiharia, Petiscaria, Carmella, Cidade dos Funcionários - Fortaleza, Fortaleza - CE, 
	Pizzaria Carmela Fortaleza - CE, Pizzaria Carmella Cidade dos Funcionários Fortaleza - CE";
	
?>

<!DOCTYPE html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/_css/master.css" type="text/css" />
	<title> <?php echo $pageTitle; ?> Pizzaria Carmella</title>
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/_imgs/icon.png" />
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/_imgs/favicon.ico" type="image/x-icon" />
	<link rel="icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/_imgs/favicon.ico" />
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="keywords" content="<?php echo $pageKeywords; ?>">
	<meta name="author" content="Canto Certo">
</head>

<body>
	
<div id="conteudo">
		<section id="topo">
		<?php 
			if(!empty($message)) {
				echo "<div id='messageSite'><div>{$message} <a href='' id='closeMessage'>x</a></div></div>";
			} else {
			echo "";
			}
		?>
			<header>
				<div class="topo_logo">
					<a href="index.php"><img alt="Pizzaria Carmella" title="Pizzaria Carmella" src="<?php bloginfo('template_url'); ?>/_imgs/topo_logo.png" /></a>
				</div>
				<section class="topo_title">
					<h1>Pizzaria Carmella</h1>
					
				</section>
				<p class="pedido">
					<span>FACA JÁ SEU PEDIDO</span> <br /><br />
					Terca a Domingo das 18h às 23h<br />
					Telefone: <a href="tel:4141 5727">4141 5727</a>
				
				</p>
				
			</header>
			<?php include 'menu.php'; ?>
		</section>
		
	<div id="pagina">
	