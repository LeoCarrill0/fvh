<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Usuarios</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/style.css">
    <link rel="shortcut icon" href="<?= base_url() ?>media/logo-icon.png">
</head>
<body>
    <section class="home">
    </section>
    <form class="form" action="<?= base_url();?>index.php/loginusr/login" method="POST" autocomplete="off">
        <div class="invalid-feedback">
            
        </div>
        <a  href="<?= base_url() ?>index.php/dashboard"><img class="imass" src="<?= base_url() ?>media/logo11.png" alt=""></a>
        <h2 class="form__title">Inicia sesion</h2>
        <p class="form__paragraph">¿Aun no tienes cuenta? <a href="#" class="form__link">Entra aqui</a></p>

        <div class="form__container">
            <div class="form__group">
                <input type="text" name="username" id="username" class="form__input" placeholder=" " required>
                <label for="user" class="form__label">Usuario:</label>
                <span class="form__line"></span>
            </div>
            <div class="form__group">
                <input type="password" name="password" id="password" class="form__input" placeholder=" " required>
                <label for="password" class="form__label">Contraseña:</label>
                <span class="form__line"></span>
            </div>
            
                <input type="submit" class="form__submit" value="Entrar">
            
        </div>
    </form>
</body>
</html>