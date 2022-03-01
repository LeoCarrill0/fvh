<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/stdash.css">

    <link rel="shortcut icon" href="<?= base_url() ?>media/logo-icon.png">
    
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Inicio Noticias</title> 
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <a href="#"><img src="<?= base_url() ?>media/logo1.png" alt=""></a>
                </span>

                <div class="text logo-text">
                    <span class="name">Inicio</span>
                    <span class="profession">Friedrich Von Hayek</span>
                </div>
            </div>

            <i class='bx bxs-right-arrow-alt toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Buscar...">
                </li>

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-money icon' ></i>
                            <span class="text nav-text">Pagos</span>
                        </a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bowl-hot icon' ></i>
                            <span class="text nav-text">Cafeteria</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="<?= base_url();?>index.php/login">
                            <i class='bx bx-log-in icon' ></i>
                                <span class="text nav-text">Ingresar</span>
                            </a>
                    </li>

                </ul>
            </div>

        </div>

    </nav>
    
    <section class="home">
        <div class="text">Sección de noticias</div>
    </section>

    <script src="<?= base_url() ?>assets/js/script.js"></script>

</body>
</html>