<!DOCTYPE html>
<html>
<head>
	<title>website form</title>
</head>
<body>
	<form action="send.php" method="post">
		<input type="text" name="fio" placeholder="Укажите ФИО" required>
		<input type="text" name="email" placeholder="Укажите e-mail" required>
		<input type="submit" value="Отправить">
	</form>
	<?php
		$fio = $_POST['fio'];
		$email = $_POST['email'];
		$fio = htmlspecialchars($fio);
		$email = htmlspecialchars($email);
		$fio = urldecode($fio);
		$email = urldecode($email);
		$fio = trim($fio);
		$email = trim($email);
		if (mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
		 {     echo "сообщение успешно отправлено";
		} else {
		    echo "при отправке сообщения возникли ошибки";
		}
	?>
</body>
</html>