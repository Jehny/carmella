<?php

class Email{

	public $to = "";
	public $message = "";
	public $from;
	public $fromName = "Pizzaria Carmella";
	public $subject = "";
	public $cc = "";
	public $bcc = "";
	public $mime = "1.0";
	public $contentType = "text/html; charset=iso-8859-1";
	public $quebra_linha;

	function __construct() {
		if (eregi('tempsite.ws$|locaweb.com.br$|hospedagemdesites.ws$|websiteseguro.com$', $_SERVER[HTTP_HOST])) {
		        $this->from ='contato@pizzariacarmella.com.br'; // Substitua essa linha pelo seu e-mail@seudominio
		} else {
		        $this->from = "contato@pizzariacarmella.com.br";
		        //    Na linha acima estamos forçando que o remetente seja 'webmaster@seudominio'$_SERVER[HTTP_HOST],
		        // Você pode alterar para que o remetente seja, por exemplo, 'contato@seudominio'.
		}

		if(PATH_SEPARATOR == ";"){
			$this->quebra_linha = "\r\n";
		} else {
			$this->quebra_linha = "\n";
		}
	}

	public function message(){

		$message  = "<html>";
		$message .= "<body>";
		$message .= "<div>";
		$message .= "	<table align='center' style='background: #FFCC00; border: solid 1px #003333; border-collapse: collapse; width:600px'>";
		$message .= "	<tr><td align='left' style='padding-top:20px; padding-left:20px'> </br>";
		$message .= "		<a href='http://pizzariacarmella.com.br'><img src='http://pizzariacarmella.com.br/_imgs/logo_email.png'></a>";
		$message .= "	</td></tr>";
		$message .= "	<tr><td style='padding-left: 20px; padding-top:20px; padding-right: 20px; color:#003333;'>";
		$message .= " </br> </br>";
		$message .= $this->message;
		$message .= "  </br> </br>";
		$message .= "	</td></tr>";
		$message .= "	<tr><td style='padding-left: 20px; padding-top:20px; color:#003333;'><br> Atenciosamente, <br>" .
				"</td></tr>";
		$message .= "	<tr><td style='padding-bottom: 20px; padding-left: 20px; color:#003333;'> Pizzaria Carmella <br><br> </td></tr>";
		$message .= "	</table>";
		$message .= "</div>";
		$message .= "</body>";
		$message .= "</html>";

		return $message;
	}

	public function headers(){
		$headers = "MIME-Version: 1.1" .$this->quebra_linha;
		$headers .= "Content-type: text/html; charset=utf-8" .$this->quebra_linha;
		// Perceba que a linha acima contém "text/html", sem essa linha, a mensagem não chegará formatada.
		$headers .= "From: " . $this->fromName . " <" . $this->from . ">" . $this->quebra_linha;
		$headers .= "Cc: " . $this->cc . $this->quebra_linha;
		$headers .= "Bcc: " . $this->bcc . $this->quebra_linha;
		$headers .= "Reply-To: " . $this->from . $this->quebra_linha;

		return $headers;
	}

	public function send(){
		if(!mail($this->to, $this->subject, $this->message(), $this->headers() ,"-r".$this->from)){ // Se for Postfix
			$headers .= "Return-Path: " . $this->from . $this->quebra_linha; // Se "não for Postfix"
			if(mail($this->to, $this->subject, $this->message(), $this->headers())){
				return true;
			} else {
				return false;
			};
		} else {
			return true;
		}
	}

	
	

}

?>