<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="front end, web design, seo, content strategist, freelance, copywriting, content writer, agile, project management, project manager, responsive design, wordpress, ecommerce, spanish translator"/>
    <meta name="description" content="Personal portfolio of Web Designer and Digital Media Specialist Eleonora Rodriguez"/>
    <meta name="copyright" content="This portfolio belongs to Eleonora Rodriguez"/>
    
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Eleonora Rodriguez | Web Designer and Digital Media Specialist"/>
    <meta property="og:url" content="https://elyrod85.github.io/ElyPortfolio/"/>
    <meta property="og:image" content="./imgs/share-img.png"/>
    <meta name="twitter:description" content="Eleonora Rodriguez Portfolio | Web Designer and Digital Media Specialist">
    <meta name="twitter:image" content="./imgs/share-img.png">
      
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <script src="https://kit.fontawesome.com/1d8da103c1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Ice Cream Shop | Portfolio project by Eleonora Rodriguez</title>
  </head>
<body>

  <header id="my-header">
    <nav class="top-links">
      <ul class="social-links">
        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
      </ul>
      <p class="info">
        Avenida Siempre Viva 742, Palermo, Buenos Aires, Argentina | <i class="fa-solid fa-phone"></i> +54 9 11 1234 5678
      </p>
    </nav>


    <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="my-nav">
      <a class="navbar-brand" href="index.html"><img src="imgs/logo.png" alt="Tina Helados" id="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <!-- 
          <a class="nav-item nav-link" href="sabores.html">Sabores</a>
          <a class="nav-item nav-link" href="#">Postres</a>
          <a class="nav-item nav-link" href="#">Sucursales</a>
          <a class="nav-item nav-link" href="#">Historia</a>
          -->
          <a class="nav-item nav-link" href="login.html">Ingresar</a>
          <a class="nav-item nav-link" href="#">Carrito</a>
        </div>
      </div>
    </nav>
  </header>

  <main>

    <section class="hero">
      <div class="hero-img">
        <img src="imgs/ice-cream-hero-img.jpg">
      </div>
      <div class="CTA">
        <div class="wrapper">
          <h1>Helados Artesanales <span class="highlight">Tina</span></h1>
          <p>Tradicional heladería familiar desde 1960 en Palermo</p>
          <a href="#sabores" class="link-button">Nuestros sabores</a>
        </div>
      </div>
    </section>

    <section id="sabores">

    <div class="sabores-tabs">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="flex-sm-fill text-sm-center nav-link active" id="nav-chocolate-tab" data-bs-toggle="tab" data-bs-target="#nav-chocolate" type="button" role="tab" aria-controls="nav-chocolate" aria-selected="true">Chocolate</button>
          <button class="flex-sm-fill text-sm-center nav-link" id="nav-ddl-tab" data-bs-toggle="tab" data-bs-target="#nav-ddl" type="button" role="tab" aria-controls="nav-ddl" aria-selected="false">Dulces de leche</button>
          <button class="flex-sm-fill text-sm-center nav-link" id="nav-cremas-tab" data-bs-toggle="tab" data-bs-target="#nav-cremas" type="button" role="tab" aria-controls="nav-cremas" aria-selected="false">Cremas</button>
          <button class="flex-sm-fill text-sm-center nav-link" id="nav-fruticrema-tab" data-bs-toggle="tab" data-bs-target="#nav-fruticrema" type="button" role="tab" aria-controls="nav-fruticrema" aria-selected="false">Frutales (crema)</button>
          <button class="flex-sm-fill text-sm-center nav-link" id="nav-frutagua-tab" data-bs-toggle="tab" data-bs-target="#nav-frutagua" type="button" role="tab" aria-controls="nav-frutagua" aria-selected="false">Frutales (agua)</button>
          <button class="flex-sm-fill text-sm-center nav-link" id="nav-incomibles-tab" data-bs-toggle="tab" data-bs-target="#nav-incomibles" type="button" role="tab" aria-controls="nav-incomibles" aria-selected="false">Incomibles</button>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-chocolate" role="tabpanel" aria-labelledby="nav-chocolate-tab">
          <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Chocolates' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"><button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-ddl" role="tabpanel" aria-labelledby="nav-ddl-tab">
          <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Dulces de leche' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-cremas" role="tabpanel" aria-labelledby="nav-cremas-tab">
          <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Cremas' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-fruticrema" role="tabpanel" aria-labelledby="nav-fruticrema-tab">
          <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Frutales (crema)' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-frutagua" role="tabpanel" aria-labelledby="nav-frutagua-tab">
          <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Frutales (agua)' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-incomibles" role="tabpanel" aria-labelledby="nav-incomibles-tab">
          <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Incomibles' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
          </div>
        </div>
      </div>
    </div>



    <div class="sabores-tabs-responsive">
      <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-chocolate-tab" data-bs-toggle="pill" data-bs-target="#v-pills-chocolate" type="button" role="tab" aria-controls="v-pills-chocolate" aria-selected="true">Chocolate</button>
          <button class="nav-link" id="v-pills-ddl-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ddl" type="button" role="tab" aria-controls="v-pills-ddl" aria-selected="false">Dulces de leche</button>
          <button class="nav-link" id="v-pills-cremas-tab" data-bs-toggle="pill" data-bs-target="#v-pills-cremas" type="button" role="tab" aria-controls="v-pills-cremas" aria-selected="false">Cremas</button>
          <button class="nav-link" id="v-pills-fruticrem-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fruticrem" type="button" role="tab" aria-controls="v-pills-fruticrem" aria-selected="false">Frutas (crema)</button>
          <button class="nav-link" id="v-pills-frutigua-tab" data-bs-toggle="pill" data-bs-target="#v-pills-frutigua" type="button" role="tab" aria-controls="v-pills-frutigua" aria-selected="true">Frutas (agua)</button>
          <button class="nav-link" id="v-pills-incomibles-tab" data-bs-toggle="pill" data-bs-target="#v-pills-incomibles" type="button" role="tab" aria-controls="v-pills-incomibles" aria-selected="false">Incomibles</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-chocolate" role="tabpanel" aria-labelledby="v-pills-chocolate-tab">
            <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Chocolates' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-ddl" role="tabpanel" aria-labelledby="v-pills-ddl-tab">
            <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Dulces de leche' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-cremas" role="tabpanel" aria-labelledby="v-pills-cremas-tab">
            <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Cremas' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-fruticrem" role="tabpanel" aria-labelledby="v-pills-fruticrem-tab">
            <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Frutales (crema)' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-frutigua" role="tabpanel" aria-labelledby="v-pills-frutigua-tab">
            <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Frutales (agua)' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-incomibles" role="tabpanel" aria-labelledby="v-pills-incomibles-tab">
            <div class="contenedor">
                <?php
                      $connect = mysqli_connect("127.0.0.1","root","");
                      mysqli_select_db($connect,"heladeria");

                      $consult = "SELECT * FROM sabores WHERE categoria = 'Incomibles' ";

                      $data = mysqli_query ($connect, $consult);

                      while ($row = mysqli_fetch_array($data)) { ?>

                      <div class="sabor">
                          <p class="nombre"><?php echo $row['nombre']; ?></p>
                          <img src="<?php echo $row['foto']; ?>">
                          
                          <p class="desc"><?php echo $row['descripcion']; ?></p>
                          <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                          <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                      </div>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>


<!--
      <h3>Chocolates</h3>
      <div class="contenedor">
              <?php
                    $connect = mysqli_connect("127.0.0.1","root","");
                    mysqli_select_db($connect,"heladeria");

                    $consult = "SELECT * FROM sabores WHERE categoria = 'Chocolates' ";

                    $data = mysqli_query ($connect, $consult);

                    while ($row = mysqli_fetch_array($data)) { ?>

                    <div class="sabor">
                        <p class="category"><?php echo $row['categoria']; ?></p>
                        <p class="nombre"><?php echo $row['nombre']; ?></p>
                        <p class="prod-id">ID <?php echo $row['id']; ?></p>
                        <img src="<?php echo $row['foto']; ?>">
                        
                        <p class="desc"><?php echo $row['descripcion']; ?></p>
                        <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                        <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                    </div>
              <?php } ?>
      </div>


      <h3>Dulces de leche</h3>
      <div class="contenedor">
              <?php
                    $connect = mysqli_connect("127.0.0.1","root","");
                    mysqli_select_db($connect,"heladeria");

                    $consult = "SELECT * FROM sabores WHERE categoria = 'Dulces de leche' ";

                    $data = mysqli_query ($connect, $consult);

                    while ($row = mysqli_fetch_array($data)) { ?>

                    <div class="sabor">
                        <p class="category"><?php echo $row['categoria']; ?></p>
                        <p class="nombre"><?php echo $row['nombre']; ?></p>
                        <p class="prod-id">ID <?php echo $row['id']; ?></p>
                        <img src="<?php echo $row['foto']; ?>">
                        
                        <p class="desc"><?php echo $row['descripcion']; ?></p>
                        <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                        <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                    </div>
              <?php } ?>
      </div>

      <h3>Cremas</h3>
      <div class="contenedor">
              <?php
                    $connect = mysqli_connect("127.0.0.1","root","");
                    mysqli_select_db($connect,"heladeria");

                    $consult = "SELECT * FROM sabores WHERE categoria = 'Cremas' ";

                    $data = mysqli_query ($connect, $consult);

                    while ($row = mysqli_fetch_array($data)) { ?>

                    <div class="sabor">
                        <p class="category"><?php echo $row['categoria']; ?></p>
                        <p class="nombre"><?php echo $row['nombre']; ?></p>
                        <p class="prod-id">ID <?php echo $row['id']; ?></p>
                        <img src="<?php echo $row['foto']; ?>">
                        
                        <p class="desc"><?php echo $row['descripcion']; ?></p>
                        <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                        <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                    </div>
              <?php } ?>
      </div>

      <h3>Frutales (crema)</h3>
      <div class="contenedor">
              <?php
                    $connect = mysqli_connect("127.0.0.1","root","");
                    mysqli_select_db($connect,"heladeria");

                    $consult = "SELECT * FROM sabores WHERE categoria = 'Frutales (crema)' ";

                    $data = mysqli_query ($connect, $consult);

                    while ($row = mysqli_fetch_array($data)) { ?>

                    <div class="sabor">
                        <p class="category"><?php echo $row['categoria']; ?></p>
                        <p class="nombre"><?php echo $row['nombre']; ?></p>
                        <p class="prod-id">ID <?php echo $row['id']; ?></p>
                        <img src="<?php echo $row['foto']; ?>">
                        
                        <p class="desc"><?php echo $row['descripcion']; ?></p>
                        <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                        <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                    </div>
              <?php } ?>
      </div>

      <h3>Frutales (agua)</h3>
      <div class="contenedor">
              <?php
                    $connect = mysqli_connect("127.0.0.1","root","");
                    mysqli_select_db($connect,"heladeria");

                    $consult = "SELECT * FROM sabores WHERE categoria = 'Frutales (agua)' ";

                    $data = mysqli_query ($connect, $consult);

                    while ($row = mysqli_fetch_array($data)) { ?>

                    <div class="sabor">
                        <p class="category"><?php echo $row['categoria']; ?></p>
                        <p class="nombre"><?php echo $row['nombre']; ?></p>
                        <p class="prod-id">ID <?php echo $row['id']; ?></p>
                        <img src="<?php echo $row['foto']; ?>">
                        
                        <p class="desc"><?php echo $row['descripcion']; ?></p>
                        <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                        <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                    </div>
              <?php } ?>
      </div>


      <h3>Incomibles</h3>
      <div class="contenedor">
              <?php
                    $connect = mysqli_connect("127.0.0.1","root","");
                    mysqli_select_db($connect,"heladeria");

                    $consult = "SELECT * FROM sabores WHERE categoria = 'Incomibles' ";

                    $data = mysqli_query ($connect, $consult);

                    while ($row = mysqli_fetch_array($data)) { ?>

                    <div class="sabor">
                        <p class="category"><?php echo $row['categoria']; ?></p>
                        <p class="nombre"><?php echo $row['nombre']; ?></p>
                        <p class="prod-id">ID <?php echo $row['id']; ?></p>
                        <img src="<?php echo $row['foto']; ?>">
                        
                        <p class="desc"><?php echo $row['descripcion']; ?></p>
                        <p>Precio (250g): $ <?php echo $row['precio']; ?></p>
                        <a href="producto.php?id=<?php echo $row['id'];?>"> <button type="button" name="button">Ver</button></a>
                    </div>
              <?php } ?>
      </div>
                    -->
    </section>












    <!--
    <section class="features">
      <article>
        <i class="fa-solid fa-money-bill-wave"></i>
        <p>Pagá en efectivo al recibir tu pedido</p>
      </article>
      <article>
        <i class="fa-regular fa-credit-card"></i>
        <p>Pagá en línea con tu tarjeta de débito o crédito</p>
      </article>
      <article>
        <i class="fa-solid fa-calendar-days"></i>
        <p>Programá tu pedido para recibirlo cuando quieras</p>
      </article>
      <article>
        <i class="fa-solid fa-motorcycle"></i>
        <p>Todos los envíos a partir de $5000 son sin costo</p>
      </article>
    </section>

    <section class="newsletter">
      descuentos exclusivos
    </section>
    -->

  </main>


  <footer>
        <p>© Ice Cream Shop | Portfolio project by Eleonora Rodriguez, <script>document.write(new Date().getFullYear());</script></p>
  </footer>

  <button onclick="topFunction()" id="backButton" title="Go back to the top">
    <i class="fa-solid fa-chevron-up"></i>
  </button>

  <script type="text/javascript" src="js/index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>