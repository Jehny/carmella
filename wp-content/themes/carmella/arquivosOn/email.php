<?php
	include 'includes/email.php';
echo "<html>";
echo "<body>";
echo "<div>";
echo "	<table align='center' style='background: #FFCC00; border: solid 1px #003333; border-collapse: collapse; width:600px'>";
echo "	<tr><td align='left' style='padding-top:20px; padding-left:20px'> </br>";
echo "		<a href='http://pizzariacarmella.com.br'><img src='_imgs/logo_email.png'></a>";
echo "	</td>";
echo "	<td style='padding-left: 20px; padding-top:20px; padding-right: 20px; color:#003333;'>";
// echo " </br> </br>";
echo " Mensagem aqui";
// $message .= $this->message;
echo "  </br> </br>";
echo "	</td></tr>";
echo "	<tr><td style='padding-left: 20px; padding-top:20px; color:#003333;'><br> Atenciosamente, <br>" .
		"</td></tr>";
echo "	<tr><td style='padding-bottom: 20px; padding-left: 20px; color:#003333;'> Pizzaria Carmella <br><br> </td></tr>";
echo "	</table>";
echo "</div>";
echo "</body>";
echo "</html>";
// $mail = new Email();
// $mail->to = "contato@pizzariacarmella.com.br";
// $mail->subject = "Email Pizzaria Carmella! ";
// $mail->message = 'Olá <strong> Jehny,</strong> <br><br>' .
// 		'Teste para envio de email do site da Carmela!';
// $mail->send();

?>