<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 1 | Eleonora Rodriguez | Curso Back-End | Potrero Digital</title>
</head>
<body>

    <main>

        <?php

            // 1. Imprimir por pantalla "Hola mundo"
            echo 'Hola mundo';

            // 2. Cargar en una variable la cadena de caracteres "Hola mundo" y luego imprimirla por pantalla
            $hola = 'Hola mundo';
            echo $hola;

            // 3. Crear dos variables enteras y mostrar por pantalla la suma, la resta, la multiplicación, 
            // la división entera y el resto de la división entera
            $var1 = 4;
            $var2 = 6;

            // Suma
            echo $var1+$var2;

            // Resta
            echo $var1-$var2;

            // Multiplicación
            echo $var1*$var2;

            // División
            echo $var1/$var2;

            // Resto de la división
            echo $var1%$var2;

            // 4. Realizar la transformación de grados Celsius a Fahrenheit para el valor de 20°C
            // y luego imprimirlo en la pantalla

            $celsius = 20;
            $fahrenheit = $celsius*1.8 + 32;
            echo $fahrenheit;

            // 5. Implmentar algoritmos que permitan:
            // a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm
            $base = 18;
            $altura = 12;

            // Perímetro del rectángulo
            $perimetroRectangulo = $base*2 + $altura*2;
            echo $perimetroRectangulo;

            // Área del rectángulo
            $areaRectangulo = $base*$altura;
            echo $areaRectangulo;

            // b) Calcular el perímetro y el área de un círculo, dado que su radio es de 30cm
            $radio = 30;

            // Perímetro del círculo
            $perimetroCirculo = 2*pi()*$radio;
            echo $perimetroCirculo;

            // Área del círculo
            $areaCirculo = pi()*$radio**2;
            echo $areaCirculo;

        ?>

    </main>

</body>
</html>