<?php
$number1 = 0;
$number2 = 0;
$number3 = 0;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice 8</title>
   </head>
   <body>
     <p>
     <?php
function sum($number1, $number2, $number3)
{
  $sum = $number1 + $number2 + $number3;
  return $sum;
}
$sum = sum(25, 75, 63);
echo $sum;
      ?>
    </p>

   </body>
 </html>
