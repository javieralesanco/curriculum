<?php
$name = 'Javier López Andrés';
$experiencia = unserialize(file_get_contents('archivos/experiencia.txt'));
$estudios = unserialize(file_get_contents('archivos/estudios.txt'));
$otros = unserialize(file_get_contents('archivos/otros.txt'));
$habilidades = unserialize(file_get_contents('archivos/habilidades.txt'));
$perfil = unserialize(file_get_contents('archivos/perfil.txt'));
$idiomas = unserialize(file_get_contents('archivos/idiomas.txt'));
arsort($habilidades);
require 'modphp/casos.inc';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="author" content="Javier López Andrés">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $name ?></title>
</head>

<body>
    <header>
        <h1 id="nombre"><?= $name ?></h1>
        <img src="recursos/perfil.jpg" alt="Foto de perfil" title="UwU">
        <article id="perfil">
            <h2>Perfil</h2>
            <?php profileGen($perfil) ?>
        </article>
        <article id="habilidades">
            <h2>Habilidades</h2>
            <?php habGen($habilidades) ?>
        </article>
    </header>
    <main>
        <p id="intro">Soy estudiante de informática con un fuerte interés en la programación y el hardware. Soy trabajador, responsable y siempre estoy dispuesto a aprender. Recientemente, he estado explorando el web scraping como parte de mi crecimiento profesional.</p>
        <!-- <p id="intro">Idealista, futurista, electricista, dentista, culturista, ebanista,
            tarotista... Todo esto son palabras acabadas en ista, yo solo soy un diseñador
            y programador fullstack interesado en la programación y el hardware.</p> -->
        <article id="experiencia">
            <h2>Experiencia laboral</h2>
            <?php generarListado($experiencia) ?>
        </article>
        <article id="estudios">
            <h2>Estudios</h2>
            <?php generarListado($estudios) ?>
        </article>
        <article id="idiomas">
            <h2>Idiomas</h2>
            <?php idiomas($idiomas) ?>
        </article>
        <article id="otros">
            <h2>Otros</h2>
            <?php generarListado($otros) ?>
        </article>
        <!--TEMPORAL-->
        <form action="archivos/generador.php">
            <input type="submit" value="Refresh">
        </form>
    </main>
</body>

</html>