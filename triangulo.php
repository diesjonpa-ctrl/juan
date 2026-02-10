<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            font-size: 100px;
            font-family:cursive;
            color: #0b8700;
            background-image:url(https://img.freepik.com/vector-gratis/fondo-inviernos-navidad-copos-nieve-que-brillan-intensamente-rojo_1017-34484.jpg?semt=ais_user_personalization&w=740&q=80) ;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

    </style>
</head>
<body>
    <?php
      for ($i = 1; $i <= 10; $i++) {
          for ($j = 1; $j <= $i; $j++) {
              echo " * ";
          }
          echo "<br>";
      } 
    ?>
    
</body>
</html>