<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>First hack</title>
</head>
<body>
<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "golden_key";

// Открываем соединение
$link = new mysqli($server, $user, $password, $db);

// Проверка результата подключения
if ($link->connect_error) {
    die("Подключение не удалось: " . $link->connect_error);
}

if(isset($_GET['id']))
{
$id=$_GET['id'];

$sql="SELECT * FROM login WHERE id='$id'";
$result=mysqli_query($link,$sql);
if(!$result){
echo'Error While Selection process: '.mysqli_error($link).' Error code: '.mysqli_errno($link);
exit;
}
$row = mysqli_fetch_array($result);

    if($row)
    {
      echo '<font color= "#0000ff">';
      echo 'ID: '. $row['id'];
      echo "<br>";
      echo 'Your Login: ' .$row['login'];
      echo "</font>";
      }
    }
    else { echo "Please input the ID as parameter with numeric value";}



?>
<div>
<br>
<img border="1" src="http://localhost/images/buratino.jpeg" width="600" height="399">
</div>
</body>
</html>

