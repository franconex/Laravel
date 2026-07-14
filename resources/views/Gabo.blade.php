
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Clientes - Taller Automotriz</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background-color: #111827;
            color: #ffffff;
        }

        /* ENCABEZADO */
        header {
            background-color: #0b0f19;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 4px solid #e63946;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icono {
            width: 50px;
            height: 50px;
            background-color: #e63946;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
        }

        .logo h2 {
            font-size: 24px;
            letter-spacing: 1px;
        }

        .logo span {
            color: #e63946;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            margin-left: 25px;
            font-weight: bold;
            transition: 0.3s;
        }

        nav a:hover {
            color: #e63946;
        }

        /* SECCIÓN PRINCIPAL */
        .contenedor {
            width: 90%;
            max-width: 1200px;
            margin: 50px auto;
        }

        .titulo-seccion {
            text-align: center;
            margin-bottom: 40px;
        }

        .titulo-seccion h1 {
            font-size: 38px;
            text-transform: uppercase;
            margin-bottom: 12px;
        }

        .titulo-seccion h1 span {
            color: #e63946;
        }

        .titulo-seccion p {
            color: #b8c1cc;
            font-size: 17px;
        }

        /* TARJETAS */
        .clientes {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .tarjeta {
            background-color: #1f2937;
            border-radius: 15px;
            padding: 30px 20px;
            text-align: center;
            border: 1px solid #374151;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
            overflow: hidden;
        }

        .tarjeta::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background-color: #e63946;
        }

        .tarjeta:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }

        .avatar {
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background-color: #e63946;
            border: 5px solid #374151;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 38px;
            font-weight: bold;
        }

        .tarjeta h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .tarjeta .numero {
            display: inline-block;
            background-color: #111827;
            color: #e63946;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .tarjeta p {
            color: #b8c1cc;
            font-size: 14px;
            line-height: 1.6;
        }

        .etiqueta {
            display: inline-block;
            margin-top: 18px;
            padding: 8px 16px;
            border-radius: 6px;
            background-color: #e63946;
            color: white;
            font-size: 13px;
            font-weight: bold;
        }

        /* INFORMACIÓN DEL TALLER */
        .informacion {
            margin-top: 50px;
            background-color: #1f2937;
            border-left: 5px solid #e63946;
            border-radius: 10px;
            padding: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .informacion h2 {
            margin-bottom: 10px;
        }

        .informacion p {
            color: #b8c1cc;
        }

        .boton {
            display: inline-block;
            background-color: #e63946;
            color: white;
            text-decoration: none;
            padding: 13px 25px;
            border-radius: 8px;
            font-weight: bold;
            transition: 0.3s;
        }

        .boton:hover {
            background-color: #c92f3b;
            transform: scale(1.05);
        }

        /* PIE DE PÁGINA */
        footer {
            margin-top: 50px;
            background-color: #0b0f19;
            text-align: center;
            padding: 25px;
            color: #9ca3af;
            border-top: 1px solid #374151;
        }

        footer span {
            color: #e63946;
        }

        /* DISEÑO RESPONSIVO */
        @media screen and (max-width: 1000px) {
            .clientes {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (max-width: 650px) {
            header {
                flex-direction: column;
                gap: 20px;
            }

            nav a {
                margin: 0 8px;
                font-size: 14px;
            }

            .clientes {
                grid-template-columns: 1fr;
            }

            .titulo-seccion h1 {
                font-size: 30px;
            }

            .informacion {
                flex-direction: column;
                text-align: center;
                gap: 25px;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="logo">
            <div class="logo-icono">🔧</div>

            <h2>Taller <span>MotorPro</span></h2>
        </div>

        <nav>
            <a href="#">Inicio</a>
            <a href="#">Servicios</a>
            <a href="#">Clientes</a>
            <a href="#">Contacto</a>
        </nav>
    </header>

    <main class="contenedor">

        <section class="titulo-seccion">
            <h1>Nuestros <span>clientes</span></h1>

            <p>
                Personas que confían en nuestro taller para el mantenimiento
                y reparación de sus vehículos.
            </p>
        </section>

        <section class="clientes">

            <article class="tarjeta">
                <div class="avatar">IF</div>

                <span class="numero">Cliente 01</span>

                <h3>Ismael Franco Ruiz</h3>

                <p>
                    Cliente registrado en el sistema del taller y propietario
                    de un vehículo atendido por nuestro equipo.
                </p>

                <span class="etiqueta">Cliente frecuente</span>
            </article>

            <article class="tarjeta">
                <div class="avatar">LG</div>

                <span class="numero">Cliente 02</span>

                <h3>Luis Gabriel Mendieta Orellana</h3>

                <p>
                    Cliente registrado con acceso al historial de reparaciones,
                    mantenimientos y servicios realizados.
                </p>

                <span class="etiqueta">Cliente preferencial</span>
            </article>

            <article class="tarjeta">
                <div class="avatar">LH</div>

                <span class="numero">Cliente 03</span>

                <h3>Lucas Herrera Becerra</h3>

                <p>
                    Propietario de vehículo registrado para recibir diagnósticos,
                    revisiones mecánicas y mantenimiento preventivo.
                </p>

                <span class="etiqueta">Cliente activo</span>
            </article>

            <article class="tarjeta">
                <div class="avatar">DA</div>

                <span class="numero">Cliente 04</span>

                <h3>Diana Camila Ayala</h3>

                <p>
                    Cliente registrada para solicitar servicios automotrices
                    y realizar seguimiento al estado de su vehículo.
                </p>

                <span class="etiqueta">Cliente nueva</span>
            </article>

        </section>

        <section class="informacion">

            <div>
                <h2>¿Necesitas registrar un nuevo cliente?</h2>

                <p>
                    Agrega sus datos personales y la información de su vehículo
                    al sistema del taller.
                </p>
            </div>

            <a href="#" class="boton">Registrar cliente</a>

        </section>

    </main>

    <footer>
        <p>
            © 2026 Taller <span>MotorPro</span> |
            Sistema de gestión de clientes y vehículos
        </p>
    </footer>

</body>
</html>
