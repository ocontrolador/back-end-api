<?php
// App.php
class App {
    private $port;
    
    public function __construct($port = 3000) {
        $this->port = $port;
    }
    
    public function listen() {
        // Configuração dos headers
        header('Content-Type: application/json; charset=UTF-8');
        
        // Captura a requisição
        $request_uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        
        // Rota padrão
        if ($request_uri === '/api') {
            echo json_encode([
                'message' => 'Bem-vindo à imersão Alura!'
            ]);
            return;
        }
        
        // Rota não encontrada
        http_response_code(404);
        echo json_encode([
            'error' => 'Rota não encontrada'
        ]);
    }
}


