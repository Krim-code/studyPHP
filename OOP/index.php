<?php 
declare(strict_types = 1)
include './includes/autholoader.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
</head>
<body>
   <?php 
 
   $person01 = new Person\Person("Revy","Grey",25);
   echo $person01->getName();
   echo $person01->eyeColor;
   $person01->setName('Krim');
   echo $person01->getName();

   echo Person\Person::$drinkingAge;
   Person\Person::setDrinkingAge(18);
   echo Person\Person::$drinkingAge;
   ?>
</body>
</html>