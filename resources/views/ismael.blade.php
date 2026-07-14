<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Franco Ruiz - Ingeniería en Sistemas</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <style>
        body{
            font-family: Arial, sans-serif;
        }

        .hero{
            background: linear-gradient(135deg,#0f172a,#1e3a8a);
            color: white;
            padding: 100px 0;
        }

        .perfil{
            width:250px;
            height:250px;
            border-radius:50%;
            object-fit:cover;
            border:5px solid white;
        }

        .card{
            transition:0.4s;
        }

        .card:hover{
            transform: translateY(-10px);
        }

        .icono{
            font-size:50px;
            color:#0d6efd;
        }

        footer{
            background:#0f172a;
            color:white;
            padding:20px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-laptop-code"></i> Mi Portafolio
            </a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 text-center">
                    <img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61"
                        class="perfil"
                        alt="Perfil">
                </div>

                <div class="col-md-6">
                    <h1 class="display-4 fw-bold">
                        Franco Ruiz
                    </h1>

                    <h3>Ingeniería en Sistemas</h3>

                    <p class="lead">
                        Estudiante de 6to semestre de la carrera de Ingeniería en Sistemas,
                        cursando la materia de Programación Web II y aprendiendo Laravel
                        para el desarrollo de aplicaciones web modernas.
                    </p>

                    <a href="#" class="btn btn-primary btn-lg">
                        <i class="fas fa-user"></i> Conóceme
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Información -->
    <section class="container py-5">

        <div class="text-center mb-5">
            <h2>¿Quién Soy?</h2>
            <p>
                Apasionado por la tecnología, el desarrollo web,
                las bases de datos y la programación.
            </p>
        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card shadow text-center p-4">
                    <i class="fas fa-code icono"></i>
                    <h4 class="mt-3">Programación</h4>
                    <p>
                        Desarrollo de aplicaciones con
                        PHP, Laravel, C# y JavaScript.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow text-center p-4">
                    <i class="fas fa-database icono"></i>
                    <h4 class="mt-3">Bases de Datos</h4>
                    <p>
                        Diseño y administración de bases
                        de datos MySQL y SQL Server.
                    </p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow text-center p-4">
                    <i class="fas fa-server icono"></i>
                    <h4 class="mt-3">Tecnologías</h4>
                    <p>
                        Laravel, Linux, Git, Bootstrap,
                        Redes y Desarrollo Web.
                    </p>
                </div>
            </div>

        </div>

    </section>

    <!-- Tecnologías -->
    <section class="bg-light py-5">

        <div class="container text-center">

            <h2 class="mb-5">Tecnologías que estoy aprendiendo</h2>

            <div class="row">

                <div class="col-md-3">
                    <i class="fab fa-laravel text-danger" style="font-size:70px;"></i>
                    <h5 class="mt-3">Laravel</h5>
                </div>

                <div class="col-md-3">
                    <i class="fab fa-php text-primary" style="font-size:70px;"></i>
                    <h5 class="mt-3">PHP</h5>
                </div>

                <div class="col-md-3">
                    <i class="fab fa-html5 text-danger" style="font-size:70px;"></i>
                    <h5 class="mt-3">HTML5</h5>
                </div>

                <div class="col-md-3">
                    <i class="fab fa-css3-alt text-primary" style="font-size:70px;"></i>
                    <h5 class="mt-3">CSS3</h5>
                </div>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="text-center">
        <h5>Programación Web II - Laravel</h5>
        <p>
            Estudiante de Ingeniería en Sistemas - 6to Semestre
        </p>
        <i class="fab fa-github"></i>
        <i class="fab fa-facebook ms-3"></i>
        <i class="fab fa-linkedin ms-3"></i>
    </footer>

</body>
</html>
