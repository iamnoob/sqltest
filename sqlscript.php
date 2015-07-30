<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$pidr = $_POST['pidr'];
$a = new \DateTime();
$time = $a->format('d.m.Y H:i:s');

$user = 'user';
$pass = 'pass';
$dbh = new PDO('mysql:host=localhost;dbname=people', $user, $pass);
$st = $dbh->prepare('INSERT INTO people(name, surname, sex, pidr, age, time)
VALUES(:name, :surname, :sex, :pidr, :age, :time)');
$st->bindValue(':name',$name);
$st->bindValue(':surname',$surname);
$st->bindValue(':sex',$sex);
$st->bindValue(':pidr',$pidr);
$st->bindValue(':age',$age);
$st->bindValue(':time',$time);
$st->execute();
$st->fetchAll();
$dbn = null;

echo "Ваше имя: $name<br>Ваша фамилия: $surname<br>Ваш пол: $sex<br>Ваш возраст: $age<br>Статус пидара: $pidr<br>";
echo "Текущее время: $time";
?>
</body>
</html>