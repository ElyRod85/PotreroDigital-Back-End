<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <script src="https://kit.fontawesome.com/1d8da103c1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>TP #8 | Consultas a BBDD | Curso de Desarrollo Back-End | Potrero Digital | Eleonora Rodríguez</title>
    </head>

    <body>
        <nav>
            <img src="imgs/potrero-logo.webp" alt="Potrero Digital">
            <div class="info">
                <p class="name">Eleonora Rodríguez</p>
                <p class="data">Nivel 2: Desarrollo Web Back-End</p>
                <p class="data">Año 2023</p>
            </div>
        </nav>

        <main>

            <header>
                <h1>Trabajo Práctico #8</h1>
                <h2>Consultas a BBDD</h2>
            </header>

            <h3>2. a. Todos los registros</h3>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de prenda</th>
                        <th>Marca</th>
                        <th>Talle</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $connect = mysqli_connect("127.0.0.1","root","");
                        mysqli_select_db($connect,"tienda");

                        $consult = "SELECT * FROM ropa";

                        $data = mysqli_query ($connect, $consult);

                        while ($row = mysqli_fetch_array($data)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['prenda']; ?></td>
                                <td><?php echo $row['marca']; ?></td>
                                <td><?php echo $row['talle']; ?></td>
                                <td><?php echo $row['precio']; ?></td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>


            <h3>2. b. Registros cuyo tipo de prenda es 'buzo'</h3>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de prenda</th>
                        <th>Marca</th>
                        <th>Talle</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $connect = mysqli_connect("127.0.0.1","root","");
                        mysqli_select_db($connect,"tienda");

                        $consult = "SELECT * FROM ropa WHERE prenda = 'buzo'";

                        $data = mysqli_query ($connect, $consult);

                        while ($row = mysqli_fetch_array($data)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['prenda']; ?></td>
                                <td><?php echo $row['marca']; ?></td>
                                <td><?php echo $row['talle']; ?></td>
                                <td><?php echo $row['precio']; ?></td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>


            <h3>2. c. Registros cuya marca es 'nike'</h3>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de prenda</th>
                        <th>Marca</th>
                        <th>Talle</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $connect = mysqli_connect("127.0.0.1","root","");
                        mysqli_select_db($connect,"tienda");

                        $consult = "SELECT * FROM ropa WHERE marca = 'nike'";

                        $data = mysqli_query ($connect, $consult);

                        while ($row = mysqli_fetch_array($data)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['prenda']; ?></td>
                                <td><?php echo $row['marca']; ?></td>
                                <td><?php echo $row['talle']; ?></td>
                                <td><?php echo $row['precio']; ?></td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>


            <h3>2. d. Registros cuyo precio es mayor a 500</h3>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo de prenda</th>
                        <th>Marca</th>
                        <th>Talle</th>
                        <th>Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $connect = mysqli_connect("127.0.0.1","root","");
                        mysqli_select_db($connect,"tienda");

                        $consult = "SELECT * FROM ropa WHERE precio > 500";

                        $data = mysqli_query ($connect, $consult);

                        while ($row = mysqli_fetch_array($data)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['prenda']; ?></td>
                                <td><?php echo $row['marca']; ?></td>
                                <td><?php echo $row['talle']; ?></td>
                                <td><?php echo $row['precio']; ?></td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>

        </main>

        <footer>
            <div class="footer-links">
                <a href="https://elyrod85.github.io/ElyPortfolio/" target="_blank"><i class="fa-solid fa-globe"></i></a>
                <a href="https://github.com/ElyRod85" target="_blank"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/in/eleonorarod85/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <p>© Eleonora Rodriguez para Potrero Digital, <script>document.write(new Date().getFullYear());</script></p>
        </footer>
    </body>
</html>