<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP 2 | Curso de Desarrollo Back-End | Potrero Digital | Eleonora Rodríguez</title>
    </head>

<body>
    <main>

        <?php

            // 1. Crear una variable n y validar que sea un número positivo.
            $num1 = 5;

            if ($num1 > 0) {
                echo 'Esta variable contiene el número 5, que es un número positivo';
                echo '<br>';
            }

            // 2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.
            $num2 = 7;

            if ($num2 > 1 && $num2 < 10) {
                echo 'Esta variable contiene el número 7, que es mayor a 1 y menor a 10.';
                echo '<br>';
            }

            // 3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.
            $num3 = 15;

            if ($num3 > 10 || $num3 < 2) {
                echo 'Esta variable contiene el número 15, que es mayor a 10 o menor a 2.';
                echo '<br>';
            }

            // 4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2.
            $numero1 = 8;
            $numero2 = 4;

            // 4.1. Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta.
            if ($numero1 > $numero2) {
                echo $numero1+$numero2;
                echo '<br>';
                echo $numero1-$numero2;
                echo '<br>';
            }

            // 4.2. Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto de la división. 
            elseif ($numero2 > $numero1) {
                echo $numero1*$numero2;
                echo '<br>';
                echo $numero1/$numero2;
                echo '<br>';
                echo $numero1%$numero2;
                echo '<br>';
            } // Esto no se imprimirá porque el $numero2 no es mayor que el $numero1.

            // 4.3. Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.
            elseif ($numero1 == $numero2) {
                echo 'Los números ingresados son iguales';
                echo '<br>';
            } // Esto tampoco se imprimirá porque $numero1 y $numero2 no son iguales.

        ?>

    </main>
</body>
</html>