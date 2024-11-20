<?php

// Rota '/api' retorna o a mensagem 'Bem-vindo ao Alura!'
function apiRouter($request)
{    
    if ($request === '/api') {
        header('Content-Type: application/json');
        echo json_encode(['message' => 'Bem-vindo à imersão Alura!']);
    } else {
        echo 'Rota inválida';
    }
};

apiRouter($_SERVER['REQUEST_URI']);
