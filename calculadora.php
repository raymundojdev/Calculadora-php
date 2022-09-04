<?php 

    if (isset($_POST['operacion'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['operacion'];

        if (!empty($num1) && !empty($num2) && !empty($op)) {
            //Comprobamos que lo numeros y variables no vengan vacios
            if (is_numeric($num1) && is_numeric($num2)) {
                //Comprobamos que esten ingresando datos numericos 
                
                if ($op == "+") {                    
                    $resultado = $num1+$num2;
                }elseif ($op == "-") {                    
                    $resultado = $num1-$num2;
                }elseif ($op == "/") {
                    $resultado = $num1 / $num2;
                }elseif ($op == "*") {
                    $resultado = $num1 * $num2;
                }else{
                    $resultado = "Esa no es  una operación válida";
                }
        }else{
            //isnumeric
            $resultado = "Esos no son numeros";
        }

        }else{
        $resultado = "Debes de teclear solo números";
        }
    }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>Calculadora</title>
</head>
<body>
    
<div class="container">
    <div class="calc">
        <h2>Calculadora</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            Digital el primer número
            <input type="number" name="num1" value="<?php if(isset($_POST['num1'])){echo $_POST['num1'];} ?>">           
            Digital el segundo número
            <input type="number" name="num2" value="<?php if(isset($_POST['num2'])){echo $_POST['num2'];} ?>">
            <div class="op">
                <input type="submit" name="operacion" value="+">   
            </div>
            <div class="op">
                <input type="submit" name="operacion" value="-">   
            </div>
            <div class="op">
                <input type="submit" name="operacion" value="/">   
            </div>
            <div class="op">
                <input type="submit" name="operacion" value="*">   
            </div>
            <h3 class="resultado">
                
                <?php 
                    //Si existe la variable resultado entonces manda la información
                    if (isset($resultado)) {
                        echo $resultado;    
                    }
                    
                 ?>
            </h3>
        </form>
    </div>
</div>   
</body>
</html>