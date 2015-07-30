<?php
$user = 'user';
$pass = 'pass';
$dbh = new PDO('mysql:host=localhost;dbname=people', $user, $pass);

echo <<<_END
<!DOCTYPE html>
<html>
<head lang="ru-RU">
<title>SQL FORM
</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="post" action="sqlform.php">
Ваше имя:<input type="text" name="name"><br>
Ваша фамилия:<input type="text" name="surname"><br>
Пол: Мужской <input type="radio" name="sex" value="Мужской">
Женский<input type="radio" name="sex" value="Женский"><br>
Ваш возраст:<input type="text" name="age"><br>
Поставь галочку если ты пидор<input type="checkbox" name="pidr" value="Да"><br>
<input type="submit" value="Отправить в базу">
</form>
</body>
</html>
_END;

if(isset($_POST['name']))
$name = $_POST['name'];
else $name = "-";

if(isset($_POST['surname']))
$surname = $_POST['surname'];
else $surname = "-";

if(isset($_POST['sex']))
$sex = $_POST['sex'];
else $sex = "-";

if(isset($_POST['age']))
    $age = $_POST['age'];
else $age = "-";

if(isset($_POST['pidr']))
    $pidr = $_POST['pidr'];
else $pidr = "-";

$a = new \DateTime();
$time = $a->format('d.m.Y H:i:s');

echo "Ваше имя: $name<br>Ваша фамилия: $surname<br>Ваш пол: $sex<br>Ваш возраст: $age<br>Статус пидара: $pidr<br>";
echo "Текущее время - $time";

INSERT INTO people(name, surname, sex, pidr, age, time)
VALUES($name, $surname, $sex, $pidr, $age, $time);