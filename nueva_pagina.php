<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if (isset($_GET["nombre1"]) && isset($_GET["nombre2"]) && isset($_GET["nombre3"]) && isset($_GET["nombre4"])) {
        $n1 = $_GET["nombre1"];
        $n2 = $_GET["nombre2"];
        $n3 = $_GET["nombre3"];
        $n4 = $_GET["nombre4"];
        echo "<br>";
        echo "este es tu nombre: " . htmlspecialchars($n1, ENT_QUOTES, 'UTF-8') . ' , '.'este es tu sobrenombre: ' 
        . htmlspecialchars($n2, ENT_QUOTES, 'UTF-8') . ' , '.'este es tu apodo: '
        . htmlspecialchars($n3, ENT_QUOTES, 'UTF-8') . ' , ' . 'esta al pareser tambien es tu nombre:'
        . htmlspecialchars($n4, ENT_QUOTES, 'UTF-8'). ' , ' . 'ya al karajo eìno puedes tener tantos nombres inbecil';
    } else {
        echo "<br>";
        echo "faltan nombres por llenar ";
    }
     ?>
</body>
</html>