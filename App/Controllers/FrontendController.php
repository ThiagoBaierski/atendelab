<?php 

class FrontendController
{
    private PDO $pdo;

    public function __construct(){
        require __DIR__ . '/../../config/database.php';
        $this->pdo = $pdo;
    }

    private function json(array $dados, int $status = 200): void
    {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($dados, JSON_UNESCAPED_UNICODE);
    }

    public function pessoas(): void
    {
        header('Location: ?controller=frontend&action=pessoas');
        exit;
    }

}