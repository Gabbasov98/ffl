<?php

include_once('mail.php');


$companyName = $_POST['companyName'];
$companyName = $_POST['companyName'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$mail = new Mail;
$mail->from('info@ffl.team', 'ФФЛ');
$mail->to('ag@design-lab.ru', 'ИМЯ_ПОЛУЧАТЕЛЯ');
$mail->subject = 'Заявка с сайта ffl.team';

$mail->body = "
	<table>
		<tr>
			<td><strong>Команда</strong></td><td>".$companyName."</td>
		</tr>
		<tr>
			<td><strong>Имя</strong></td><td>".$name."</td>
		</tr>
		<tr>
			<td><strong>Телефон</strong></td><td>".$phone."</td>
		</tr>
		<tr>
			<td><strong>Почта</strong></td><td>".$email."</td>
		</tr>
	</table>
";

echo $mail->body;

$mail->send();

?>
