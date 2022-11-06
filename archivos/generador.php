<?php
$experiencia = [
    [
        'inicio' => '2018-06',
        'fin' => '2020-07',
        'nombre' => 'Operario en la campaña del cereal',
        'donde' => 'Servicios Agrarios Riojanos',
        'lugar' => 'Alesanco/Azofra'
    ], []
];
$estudios = [
    [
        'inicio' => '2016-09',
        'fin' => '2018-06',
        'nombre' => 'Bachillerato Cientifico',
        'donde' => '<abbr title="Instituto de Educación Secundaria">IES</abbr> Esteban Manuel Villegas',
        'lugar' => 'Najera'
    ], [
        'inicio' => '2018-09',
        'fin' => '2021-06',
        'nombre' => 'Grado en Ingeniería Electrónica Industrial y Automática',
        'donde' => 'Universidad de La Rioja',
        'lugar' => 'Logroño'
    ], [
        'inicio' => '2021-09',
        'fin' => 'actualidad',
        'nombre' => 'Grado en <abbr title="Desarrollo de Aplicaciones Web">DAW</abbr>',
        'donde' => 'Universidad de La Rioja',
        'lugar' => 'Logroño'
    ]
];
$otros = [
    [
        'fecha' => '2018-10',
        'nombre' => 'Permiso de conducción B'
    ], [
        'fecha' => '2022-porDefinir',
        'nombre' => 'Título de preveción de riesgos laborales'
    ]
];
$perfil = [
    'Teléfono' => '+34 650 659 560',
    'Email' => 'javieralesanco@gmail.com',
    'Fecha de nacimiento' => '2000 - 08 - 03'
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
    'Inglés' => 4,
    'Photoshop' => 4,
    'PHP' => 3,
    'JavaScript Vanilla' => 4
];
file_put_contents('experiencia.txt', serialize($experiencia));
file_put_contents('estudios.txt', serialize($estudios));
file_put_contents('otros.txt', serialize($otros));
file_put_contents('perfil.txt', serialize($perfil));
file_put_contents('habilidades.txt', serialize($habilidades));
header('Location: ../');
die();
