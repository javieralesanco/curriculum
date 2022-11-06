<?php
$experiencia = [
    [
        'inicio' => '06 / 2018',
        'fin' => '07 / 2020',
        'nombre' => 'Operario en la campaña del cereal',
        'donde' => 'Servicios Agrarios Riojanos',
        'lugar' => 'Alesanco / Azofra'
    ], []
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
        'fin' => 'actualidad',
        'nombre' => 'Estudios superiores en <abbr title="Desarrollo de Aplicaciones Web">DAW</abbr>',
        'donde' => 'Universidad de La Rioja',
        'lugar' => 'Logroño'
    ]
];
$otros = [
    [
        'fecha' => '10 / 2018',
        'nombre' => 'Permiso de conducción B'
    ], [
        'fecha' => 'mes / 2022',
        'nombre' => 'Título de preveción de riesgos laborales'
    ], [
        'nombre' => 'Movilidad nacional'
    ]
];
$perfil = [
    'Teléfono' => '+34 650 659 560',
    'Email' => 'javieralesanco@gmail.com',
    'Fecha de nacimiento' => '03 / 08 / 2000'
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
    'PHP' => 3,
    'JavaScript Vanilla' => 4
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
