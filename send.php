 <?php
$to = "sapf-love@yandex.ru"; // емайл получателя данных из формы
$theme = "Форма обратной связи сайта"; // тема полученного емайла
$message = "Имя пользователя: ".$_POST['user-name']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "Мой E-mail: ".$_POST['user-mail']."<br>"; //полученное из формы name=email
$message .= "Мой номер телефона: ".$_POST['user-phone']."<br>"; //полученное из формы name=phone
$message .= "Мое сообщение: ".$_POST['user-message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $theme, $message, $headers); //отправляет получателю на емайл значения переменных
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thank you</title>
</head>
<body>
	<h1>Thank you! We will contact you!</h1>
	<p>Please don't open the window!</p>
</body>
</html>

<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="http://form1.local/index.html");}
window.setTimeout("changeurl();",2000);
</script>