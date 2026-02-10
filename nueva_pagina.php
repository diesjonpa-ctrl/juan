<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            color: #ffffff;
            font-size: 25px;
            background-image: url(https://i.pinimg.com/originals/d6/78/2d/d6782de9d28fa43af95b4ed6423fa466.gif);
        }
        #arbolito{
        padding: 10px 20px;
        font-size: 16px;
        background-color: #0b8700;
        color: #8a0000;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 10px 30px;
        }
        #Aseguracion{
        padding: 10px 20px;
        font-size: 16px;
        background-color: #62006d;
        color: #f5ff2f;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin: 10px 20px;
        }
    </style>
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
        . htmlspecialchars($n4, ENT_QUOTES, 'UTF-8'). ' , ' . 'ya al karajo no puedes tener tantos nombres imbecil';
    } else {
        echo "<br>";
        echo "faltan nombres por llenar ";
    }
     ?>
    <h1>Mandar un paqueteee</h1>
    <h3>CADA KM de transporte cuesta 5 euros y CADA KG cuesta 0.5 euros</h3>
    <form method="POST" width="100%">
        <input type="number" name="peso" id ="peso_del_paquete" min="0">  los Kg de peso</input>
        <input type="number" name="distancia_en_km" id ="distancia_en_km" min="0">  los Km de distancia</input>
        <div class="campo">
            <label>Tipo de envío:</label>
            <input type="radio" name="tipo_envio" value="estandar" id="estandar" checked>
            <label style="display:inline" for="estandar">Estándar</label><br>
            
            <input type="radio" name="tipo_envio" value="express" id="express">
            <label style="display:inline" for="express">Express</label>
        </div>
        <input type="submit" value="enviar">
    </form>
    <?php
        if (isset($_POST["peso"]) && isset($_POST["distancia_en_km"]) && isset($_POST["tipo_envio"])) {
            $peso = $_POST["peso"];
            $distancia = $_POST["distancia_en_km"];
            $tipo_envio = $_POST["tipo_envio"];
            
            if ($tipo_envio === "estandar") {
                $costo = ($peso * 0.5) + ($distancia * 5);
            } elseif ($tipo_envio === "express") {
                $costo = ($peso * 0.4) + ($distancia * 5) + 5 ;
            } else {
                echo "Tipo de envío no válido.";
                exit;
            }
            
            echo "<br>";
            echo "<width='100%'>El costo del envío es: $" . number_format($costo, 2);
        } else {
            echo "<br>";
            echo "<width='100%'>Faltan datos por llenar para calcular el costo del envío.";
        }
        ?>
    <button id="arbolito">Un arbolito de navidad</button>
    <script>
        document.getElementById("arbolito").addEventListener("click", function() {
            window.location.href = "http://localhost/juan/triangulo.php";
        });
    </script>
    <button id="Aseguracion">ASEGURACION</button>
    <script>
        document.getElementById("Aseguracion").addEventListener("click", function() {
            window.location.href = "http://localhost/juan/aseguracion.php";
        });
    </script>
</body>
</html>