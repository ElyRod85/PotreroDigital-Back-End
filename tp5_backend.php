<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TP 5 | Curso de Desarrollo Back-End | Potrero Digital | Eleonora Rodríguez</title>
    </head>

<body>
    <main>

        <?php

            // 1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.

            $ejercicio1 = [];

            for ($i = 2; $i <= 20; $i += 2) {
                $ejercicio1[] = $i;
            }

            foreach ($ejercicio1 as $numero) {
                print("$numero <br>");
            }


            // 2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. 
            // Mostrar el esquema del array con print_r().

            $ejercicio2 = ["Pedro", "Ana", 34, 1];
            print_r($ejercicio2);
            print("<br>");


            /* 3. Crear un array asociativo e introducir los siguientes valores:
            Nombre: Pedro
            Apellido: Torres
            Dirección: Av. Mayor 3703
            Teléfono: 1122334455
            */

            $ejercicio3 = [
                'Nombre' => "Pedro",
                'Apellido' => "Torres",
                'Direccion' => "Av. Mayor 3703",
                'Telefono' => 1122334455
            ];


            // 4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y Chicago, sin asignar índices al array.
            // A continuación, muestra el contenido del array. 
            // Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.

            $ejercicio4 = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

            foreach ($ejercicio4 as $index => $ciudad) {
                print("La ciudad con el índice $index tiene el nombre $ciudad.<br>");
            }


            // 5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona, LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
            // Ejemplo: El índice de Madrid es MD.

            $ejercicio5 = [
                "MD" => "Madrid",
                "BCL" => "Barcelona",
                "LD" => "Londres",
                "NY" => "New York",
                "LA" => "Los Ángeles",
                "CCG" => "Chicago"
            ];

            foreach ($ejercicio5 as $index => $ciudades) {
                print("El índice de $ciudades es $index.<br>");
            }

        ?>

    </main>
</body>
</html>