<?php
echo <<<_END
<!DOCTYPE html>
<html>
<head lang="ru-RU">
<title>SQL FORM
</title>
    <meta charset="UTF-8">
</head>
<body>
<form method="post" action="sqlscript.php">
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
?>