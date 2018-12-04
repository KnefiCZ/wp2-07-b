<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>kok</title>
  </head>
  <body>
<table>
  <?php
  for ($i=0; $i < 10 ; $i++) {
   ?><tr><?php
      for ($j=0; $j < 10 ; $j++) {
        ?><td><?php
          echo $numbers[$i][$j]=rand(0,100);
        ?></td><?php
        }
    ?></tr><?php
  }
  $iRand=rand(0,9);
  $jRand=rand(0,9);
  $sum=0;
  for ($s=0; $s < 10; $s++) {

  }
  echo $sum;
?>
  </table>

  </body>
  </html>
