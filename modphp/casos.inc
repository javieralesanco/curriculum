<?php
function profileGen(array $array): void
{
    foreach ($array as $key => $value) {
        echo '<section>';
        echo "<h3>$key</h3>";
        echo "<p>$value</p>";
        echo '</section>';
    }
}
function habGen(array $array): void
{
    echo '<div class="habs">';
    foreach ($array as $key => $value) {
        echo "<label>$key</label>";
        echo '<input type="range" class="rango' . $value . '" min="0" max="5" value="' . $value . '">';
    }
    echo '</div>';
}
function generarListado(array $array): void
{
    foreach ($array as $valor) {
        if (isset($valor) && !empty($valor)) {
            echo '<section>';
            echo '<div class="fechas">';
            if (isset($valor['inicio'])) {
                echo '<p class="inicio">' . $valor['inicio'] . '</p>';
                echo '<p class="fin">' . $valor['fin'] . '</p>';
            } elseif (isset($valor['fecha']))
                echo '<p class="fecha">' . $valor['fecha'] . '</p>';
            echo '</div>';
            echo '<div class="content">';
            echo '<h3 class="nombre">' . $valor['nombre'] . '</h3>';
            if (isset($valor['donde']) && isset($valor['lugar'])) echo '<p class="donde">' . $valor['donde'] . ', ' . $valor['lugar'] . '</p>';
            echo '</div>';
            echo '</section>';
        }
    }
}
function idiomas(array $array): void
{
    foreach ($array as $key => $value) {
        echo '<section>';
        echo "<h3>$key</h3>";
        echo "<p>$value</p>";
        echo '</section>';
    }
}
