<!-- Get Post request -->
<?php 
$name = 'No';
$age = 'no';
if (isset($_GET['name'])){
    $name = htmlentities($_GET['name']);
}
if (isset($_GET['age'])){
    $age = htmlentities($_GET['age']);
}

if (isset($_POST['name'])){
    $name =  htmlentities($_POST['name']);
}
if (isset($_POST['age'])){
    $age =  htmlentities($_POST['age']);
}


echo "Имя: $name <br> Возраст: $age";

?>
<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>title</title>
</head>
<body>
   <form method="POST">
   <p>Имя: <input type="text" name="name" /></p>
    <p>Возраст: <input type="number" name="age" /></p>
    <input type="submit" value="Отправить">
   </form>
</body>
</html>