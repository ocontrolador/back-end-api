<?php

$posts = [
    [
        'id' => 1,
        'descricao' => 'Uma foto teste',
        'imagem' => 'https://placecats.com/millie/300/150',
    ],
    [
        'id' => 2,
        'descricao' => 'Gato curioso olhando pela janela',
        'imagem' => 'https://placekitten.com/400/200',
    ],
    [
        'id' => 3,
        'descricao' => 'Gatinho dormindo em uma caixa',
        'imagem' => 'https://picsum.photos/id/237/300/200',
    ],
    [
        'id' => 4,
        'descricao' => 'Gato brincando com um novelo de lã',
        'imagem' => 'https://source.unsplash.com/random/300x200/?cat,yarn',
    ],
    [
        'id' => 5,
        'descricao' => 'Gato preto em um beco escuro',
        'imagem' => 'https://unsplash.com/photos/2305850/download',
    ],
    [
        'id' => 6,
        'descricao' => 'Gato laranja tomando sol',
        'imagem' => 'https://loremflickr.com/320/240/kitten',
    ],
];


function getPostById($id) : array 
{
    global $posts;
    $post = array_filter($posts, fn($post) => $post['id'] == $id);

    if(count($post) > 0) 
        return array_values($post)[0]; // retorna o primeiro elemento do array
    
    return ['error' => 'Post não encontrado'];    
}

function apiRouter($request) {
    global $posts;
    $path = explode('/', trim($request, '/'));
    dd($path);

    $route = match ($path[0]) {
        'posts' => isset($path[1]) ? getPostById($path[1]) : $posts,
         default => ['error' => 'Rota inválida'],
    };

    header('Content-Type: application/json');
    if (array_key_exists('error', $route)) 
        http_response_code(404);
    echo json_encode($route);
}

var_dump($_SERVER['REQUEST_URI']);
apiRouter($_SERVER['REQUEST_URI']);

