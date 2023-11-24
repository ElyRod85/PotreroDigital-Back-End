<?php

  $connect = mysqli_connect("127.0.0.1","root","");
  mysqli_select_db($connect,"heladeria");
  $id = $_GET['id'];
  $consult = "SELECT * FROM sabores WHERE id=$id ";
  $data = mysqli_query ($connect, $consult);
  $info = mysqli_fetch_array($data);

?>


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
    <link rel="stylesheet" href="css/login.css">

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
          <a class="nav-item nav-link" href="index.php">Principal</a>
        </div>
      </div>
    </nav>
  </header>

  <main>

  <section class="producto">
    <div class="prod-info">
      <p class="nombre"><?php echo $info['nombre']; ?></p>
      <p class="desc"><?php echo $info['descripcion']; ?></p>
      <p class="precio">Precio (250g): $ <?php echo $info['precio']; ?></p>
    </div>
    <img src="<?php echo $info['foto']; ?>">
  </section>

  <a href="index.php"><button class="back">Volver</button></a>

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