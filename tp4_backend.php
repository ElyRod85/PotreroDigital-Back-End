<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP 4 | Curso de Desarrollo Back-End | Potrero Digital | Eleonora Rodríguez</title>
    </head>

<body>
    <main>

        <?php

            // 1. Mostrar números del 1 al 100
            for ($i = 1; $i <= 100; $i++) {
                print "<p>Número del 1 al 100: $i</p>";
                echo "<br>";
            }

            // 2. Mostrar números del 100 al 1
            for ($i = 100; $i >= 1; $i--) {
                print "<p>Número del 100 al 1: $i</p>";
                echo "<br>";
            }

            // 3. Mostrar los números pares del 1 al 100
            for ($i = 2; $i <= 100; $i += 2) {
                print "<p>Número par del 1 al 100: $i</p>";
                echo "<br>";
            }

            // 4. Mostrar los números impares del 1 al 100
            for ($i = 1; $i <= 100; $i += 2) {
                print "<p>Número impar del 1 al 100: $i</p>";
                echo "<br>";
            }

            // 5. Mostrar la suma de los números de 1 al 20
            $suma = 0;

            for ($i = 1; $i <= 20; $i++) {
                $suma += $i;
                print "<p>La suma hasta el número $i es: $suma</p>";
                echo "<br>";
            }

            // 6. Mostrar la suma de números pares de 1 al 20
            for ($i = 2; $i <= 20; $i += 2) {
                $suma += $i;
                print "<p>La suma de números pares hasta el número $i es: $suma</p>";
                echo "<br>";
            }

        ?>

    </main>
</body>
</html>