<?php 
	$pageTitle = "Contato";
	include '_layouts/header.php'; 
	include 'includes/email.php';
	
	$footerAdicional = "footerContato";
	
	if(isset($_POST['submit'])){
		$mail = new Email();
		$mail->to = "contato@pizzariacarmella.com.br";
		$mail->subject = "Pizzaria Carmella Fale Conosco";
		$mail->message = " <strong>Assunto: </strong>" . "<br>". $_POST['assunto'] . "<br>
				<strong>Mensagem: </strong>"." <br>". $_POST['mensagem'] . " <br><br>".
		"<strong>Contato Usuário: </strong>"." <br>".
		"Nome: " . $_POST['nome'] . " <br>".
		"E-mail: " . $_POST['email'] . " <br>";
		$message = "Sua mensagem foi enviada!";
		
		if($mail->send()){
			if(!empty($message)) {
				echo "<div id='messageSite'><div>{$message} <a href='' id='closeMessage'>x</a></div></div>";
			} else {
			echo "";
			}
			
		}
	}
?>
	<section id="faleconosco">
		<header>
			<h1>Fale Conosco</h1>
			<p class="subtitulo">Como podemos ajudar?</p>
		</header>
		<form action="contato.php" method="POST">
			<fieldset>
				<p>	
					Nome: <br />
					<input type="text" name="nome" id="nome" required /> <br /><br />
					E-mail: <br />
					<input type="text" name="email" id="email" required />  <br /><br />
					Assunto:<br />
					<input type="text" name="assunto" id="assunto" required /> <br />
				</p>
				<p>
					Mensagem: <br /> 
					<textarea cols="40" rows="10" name="mensagem" id="mensagem">
					
					</textarea> 
					<br />
					<input type="reset" name="limpar" id="limpar" value="Limpar" />
					<button name="submit">Enviar</button>
				</p>
			</fieldset>
		</form>	
	</section>
	
	<section id="localizacao">
		<header>
			<h1 class="locaH1">
				Localização
			</h1>
			<p class="subtitulo">
				Precisa de ajuda para chegar à Pizzaria Carmella?
			</p>
		</header>
		
		<div id="mapaLoca">
			<div id="ondefica">
				<h1>Onde fica?</h1>
				
				<p class="onde">
					Av. Desembargador Gonzaga, 1000 - Cidade dos Funcionários - Fortaleza, CE
				</p>
				
				<p class="referencia">
					Pontos de Referência
				</p>
				<p class="pontoReferencia">
					Igreja da Glória
				</p>
				<p class="pontoReferencia">
					Restaurante Skina do Baião
				</p>
			</div>
			<div id="mapa">
				<iframe width="600" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=pt&amp;geocode=&amp;q=Avenida+Desembargador+Gonzaga,+1370,+Fortaleza+-+Cear%C3%A1,+Brasil&amp;aq=&amp;sll=-3.798942,-38.499274&amp;sspn=0.012311,0.01929&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Des.+Gonzaga,+1370+-+Cidade+dos+Funcion%C3%A1rios,+Fortaleza+-+Cear%C3%A1,+Brasil&amp;t=m&amp;ll=-3.798227,-38.500192&amp;spn=0.010277,0.013733&amp;z=16&amp;output=embed"></iframe>
			</div>
			
		</div>
		
	</section>
	
<?php include '_layouts/footer.php'; ?>