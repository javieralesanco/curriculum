<?php
$experiencia = [
    [
        'inicio' => '06 / 2018',
        'fin' => '07 / 2020',
        'nombre' => 'Operario en la campaña del cereal',
        'donde' => 'Servicios Agrarios Riojanos',
        'lugar' => 'Alesanco / Azofra'
    ], [
        'inicio' => '03 / 2023',
        'fin' => '06 / 2023',
        'nombre' => 'Practicas como desarrollador backend',
        'donde' => 'Netbrain',
        'lugar' => 'Logroño'
    ], [
        'inicio' => '10 / 2023',
        'fin' => '10 / 2023',
        'nombre' => 'Peon de bodega',
        'donde' => 'Bodega Cooperativa Santiago Apostol',
        'lugar' => 'Alesanco'
    ]
];
$estudios = [
    [
        'inicio' => '09 / 2016',
        'fin' => '06 / 2018',
        'nombre' => 'Bachillerato Cientifico',
        'donde' => '<abbr title="Instituto de Educación Secundaria">IES</abbr> Esteban Manuel Villegas',
        'lugar' => 'Najera'
    ], [
        'inicio' => '09 / 2018',
        'fin' => '06 / 2021',
        'nombre' => 'Grado en Ingeniería Electrónica Industrial y Automática',
        'donde' => 'Universidad de La Rioja',
        'lugar' => 'Logroño'
    ], [
        'inicio' => '09 / 2021',
        'fin' => '06 / 2023',
        'nombre' => 'Estudios superiores en <abbr title="Desarrollo de Aplicaciones Web">DAW</abbr>',
        'donde' => '<abbr title="Instituto de Educación Secundaria">IES</abbr> Comercio',
        'lugar' => 'Logroño'
    ], [
        'inicio' => '10 / 2023',
        'fin' => 'actualidad',
        'nombre' => 'Estudios superiores en <abbr title="Desarrollo de Aplicaciones Multiplataforma">DAM</abbr>',
        'donde' => 'FPD Rioja',
        'lugar' => 'Onine'
    ]
];
$otros = [
    [
        'fecha' => '10 / 2018',
        'nombre' => 'Permiso de conducción B'
    ], [
        'fecha' => '11 / 2022',
        'nombre' => 'Título de preveción de riesgos laborales'
    ], [
        'nombre' => 'Movilidad nacional'
    ]
];
$perfil = [
    'Teléfono' => '<a href="tel:+34650659560">+34 650 659 560</a>',
    'Email' => '<a href="mailto:javieralesanco@gmail.com">javieralesanco@gmail.com</a>',
    'Fecha de nacimiento' => '03 / 08 / 2000',
    'Github' => '<a href="https://github.com/javieralesanco">javieralesanco</a>'
];
$habilidades = [
    'Java' => 4,
    'HTML' => 5,
    'CSS' => 5,
    'XML' => 4,
    'MySQL y SQL Server' => 5,
    'Word' => 4,
    'Excel' => 4,
    'Git-GitFlow' => 4,
    'JUnit' => 3,
    'Photoshop' => 4,
    'PHP' => 5,
    'JavaScript Vanilla' => 5,
    'Laravel' => 4
];
$idiomas = [
    'Español' => 'Lengua materna',
    'Inglés' => 'Nivel medio-alto'
];
file_put_contents('experiencia.txt', serialize($experiencia));
file_put_contents('estudios.txt', serialize($estudios));
file_put_contents('otros.txt', serialize($otros));
file_put_contents('perfil.txt', serialize($perfil));
file_put_contents('habilidades.txt', serialize($habilidades));
file_put_contents('idiomas.txt', serialize($idiomas));
header('Location: ../ ');
die();
