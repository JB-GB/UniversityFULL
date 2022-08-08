<?php 
    require ("conexion_BD.php");
    $queryAlumnos = "SELECT * FROM profesorado";
    $result = $conn->query($queryAlumnos);
?>

<!--    HTML CONSULTAR ALUMNOS  -->

<!DOCTYPE html>
<html lang="en">
    <head> 
        <link rel="stylesheet" href="../CSS/index.CSS">
        <link rel="stylesheet" href="../CSS/indexhome.css">
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/31/31443.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>University | Buscar</title>
    </head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9815a5f5f0.js" crossorigin="anonymous"></script>
    
    <nav>
        <!--    TopNav  -->
        <div class="container-fluid bg-warning p-3 " class="naveG" id="navG">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <a class="" href="../HTML/index.html"><img src="../IMGS/logo.png" class="img-thumbnail" alt="Logo de escuela"></a>
                </div>
                <div class="col-md-1 offset-md-6">
                    <div class="toggle-menu">
                        <button class="bg-light navbar-toggler toggler-example purple darken-3" type="button" data-toggle="collapse" data-target="#nav" aria-controls="navbarSupportedContent41" 
                        aria-expanded="false" a-label="Toggle navigation">
                            <i class="fas fa-bars fa-1x"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="dropdown perfil">
                        <img class="img-thumbnail bg-warning btn-secondary dropdown-toggle" src="../IMGS/Sample_User_Icon.png" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="login.html">
                                <i class="bi bi-box-arrow-in-right"></i>
                                Iniciar sesion
                            </a>
                            <a class="dropdown-item" href="../HTML/profile.html">
                                <i class="bi bi-person-circle"></i>
                                Perfil
                            </a>
                            <a class="dropdown-item" href="../HTML/buscar.html">
                                <i class="bi bi-search"></i>
                                Buscar perfil
                            </a>
                            <hr>
                            <p class="dropdown-header">Registra</p>
                            <a class="dropdown-item" href="../HTML/alumnos.html">
                                <i class="bi bi-person"></i>
                                Alumnos
                            </a>
                            <a class="dropdown-item" href="../HTML/admins.html">
                                <i class="bi bi-person-badge"></i>
                                Administrativos
                            </a>
                            <a class="dropdown-item" href="../HTML/profes.html">
                                <i class="bi bi-person-video2"></i>
                                Profesores
                            </a>
                            <hr>
                            <a class="dropdown-item" href="../PHP/cerrarConexion.php">
                                <i class="bi bi-box-arrow-left"></i>
                                Cerrar sesion
                            </a>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    
        <!--Colapsado del boton-->
        <div id="nav" class="collapse">
            <div class="container-fluid bg-light">
                <div class="navegacion">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item"><a class="nav-link" href="../HTML/index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="../HTML/edOffer.html">Education</a></li>
                        <li class="nav-item"><a class="nav-link" href="../HTML/about.html">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="../HTML/services.html">Need help?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <!---------------------->
    <!-- Aqui en contenido-->
    <!---------------------->

    <!------------------------------------------------------------------------------------------------------------>

    <body>
        <div class="container-fluid">
            <div class="row justify-content-center align-content-center mt-4">
                    <div class="col-10">
                        <table class="table mt-5">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Matricula</th>
                                    <th scope="col">Primer nombre</th>
                                    <th scope="col">Segundo nombre</th>
                                    <th scope="col">Primer apellido</th>
                                    <th scope="col">Segundo apellido</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">telefono</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php
                                if($result->num_rows>0){
                                    while($row = $result->fetch_assoc()){
                                    ?>
                                        <tr>
                                        <td><?php echo $row['id_Profe']; ?></td>
                                        <td><?php echo $row['prnom_Profe']; ?></td>
                                        <td><?php echo $row['segnom_Profe']; ?></td>
                                        <td><?php echo $row['prape_Profe']; ?></td>
                                        <td><?php echo $row['segape_Profe']; ?></td>
                                        <td><?php echo $row['mail_Profe']; ?></td>
                                        <td><?php echo $row['tel_Profe']; ?></td>
                                        
                                        <td><a class="btn btn-success" href="updateProfes.php?id=<?php echo $row['id_Profe'];?>">UPDATE</a>
                                        <a class="btn btn-danger" href="deleteProfes.php?idAB=<?php echo $row['id_Profe'];?>">DELETE</a></td>
                                    </tr>
                                    <?php
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-1">
                </div>
            </div>
        </div>
    </body>

    <!------------------------------------------------------------------------------------------------------------>

    <!-- footer -->    
    <div class="container-fluid bg-light ubicanos">
        <div class="row align-items-center my-2">
            <div class="col meetUs ">
                <h1>MEET US</h1>
            </div>
            
            <div class="col-1">
                <!-- Social -->
                <ul class="nav nav-justified ">
                    <li class="p-3"><a href="https://www.instagram.com/oxford_uni/" class=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li class="p-3"><a href="https://www.facebook.com/the.university.of.oxford"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li class="p-3"><a href="https://twitter.com/UniofOxford?s=20&t=llFGhY8b-gq7QkMl4HmD3g"><i class="fa-brands fa-twitter"></i></a></li>                        
                    <li class="p-3"><a href="https://en.wikipedia.org/wiki/University_of_Oxford"><i class="fa-brands fa-wikipedia-w"></i></a></li>
                </ul>
            </div>
    
            <div class="col">
                <div class="text-left direx">
                    <!-- Direccion -->
                    <p>We're at</p>
                    <p>Oxford OX1 2JD, Reino Unido</p>
                    <p>Phone: (449) 586-15-45</p>
                </div>
            </div>
        </div>
    </div>

        <div class="container-fluid d-flex bg-warning d-flex align-items-center">
            
        </div>
        
        
        <!-- Forma -->
        <div class="container-fluid bg-warning contact">
            <div class="container">
                
                <div class="row">
                    <div class="col-md-7">
                        <div class="contacTitu">
                            <h2>Contact Us</h2>
                            <hr>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-7">
                        <form action="/" class="mb-4 mb-lg-0">
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input required type="text" class="form-control" id="name" placeholder="Put your name here" />
                                </div>
                                <div class="col-md-6 form-group">
                                    <input required type="email" class="form-control" id="email" placeholder="Put your E-mail here" />
                                </div>
                            </div>
                            <div class="form-group">
                                <input requiredtype="text" class="form-control" id="subject" placeholder="How we can help you?" />
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Type Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-light">Contact us</button>
                        </form>
                    </div>

                    <!-- Mapa -->
                    <div class="col-lg-5">
                        <div class="container">
                            <div id="map-container-google-1" class="z-depth-1-half map-container">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79033.88745673645!2d-1.324404641796881!3d51.75481639999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversidad%20de%20Oxford!5e0!3m2!1ses-419!2smx!4v1655781477341!5m2!1ses-419!2smx"
                                  style="border:5;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapa">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</html>