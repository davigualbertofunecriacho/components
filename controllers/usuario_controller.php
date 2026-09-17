<?php
function usuarioController(){
    echo "6. Controller recebeu a requisição.<br>";
    $usuarios = usuarioService();
    echo "8. Controller recebeu os dados do service.<br>";
    echo "Usuario encontrados:<br>";
    foreach ($usuarios as $usuarios) {
        echo "-". $usuario . "<br>";
    }
}