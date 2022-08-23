<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css?ts=<?=time()?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>proyecto-html</title>
</head>

<body>



    <header>
        <div class=" container-fluid footer-header text-center">

            <img src="assets/img/Imagen 1.png" alt="logo">

        </div>
    </header>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://server.com/tutoriales-mati/proyecto-html-bootstrap_desafio2/sobre-nosotros.php">SOBRE NOSOTROS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://server.com/tutoriales-mati/proyecto-html-bootstrap_desafio2/servicios.php">SERVICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://server.com/tutoriales-mati/proyecto-html-bootstrap_desafio2/ubicacion.php">DÓNDE ENCONTRARNOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="http://server.com/tutoriales-mati/proyecto-html-bootstrap_desafio2/contacto.php">CONTACTO</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="assets/img/Imagen 2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item active">
                <img src="assets/img/Imagen 3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/Imagen 5.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <table class="pt-5" width="50%" style="padding-right: 50%; margin-left: 350px; ">
        <!--tabla de contenidos-->
        <thead >
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
        </thead >
        <tbody >
        <?php
        include_once 'Classes/contents.php';
        $contents = new Contents;
        foreach ($contents->list() as $content) {
        ?>
            <tr>
            <td><?php echo  $content['id']; ?></td>
            <td><?php echo $content['title']; ?></td>
            <td><?php echo $content['content']; ?></td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>

    <div class="container pb-3">
        <div class="row card-grande">
            <div class="col-md-5 col-12">
                <img src="assets/img/Imagen 6.png" alt="">
            </div>
            <div class="col-md-7 col-12 c-g-texto">
                <div>
                    <h3 class="">Servicio 1</h3>
                    <p class="">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standa….

                    </p>
                </div>

            </div>
        </div>

        <div class="row mr-5 cards" id="cards-arriba">
            <div class="col-md-4  col-sm-6">
                <div class="card h-100">
                    <img src="assets/img/Imagen 3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Servicio 1</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="card h-100">
                    <img src="assets/img/Enmascarar grupo 1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Servicio 1</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <div class="card h-100">
                    <img src="assets/img/Imagen 5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Servicio 1</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-header">
        <div class="container">
            <div class="row mr-5 cards">
                <div class="col-4  ">
                    <div class="card h-100">

                        <div class="card-body">
                            <h5 class="card-title">Servicio 1</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the </p>

                        </div>
                    </div>
                </div>
                <div class="col-4 ">
                    <div class="card ">

                        <div class="card-body">
                            <h5 class="card-title">Servicio 1</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the </p>

                        </div>
                    </div>
                </div>
                <div class="col-4  ">
                    <div class="card ">

                        <div class="card-body">
                            <h5 class="card-title">Servicio 1</h5>
                            <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-header text-center">

            <img src="assets/img/Imagen 1.png" alt="logo">

        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>