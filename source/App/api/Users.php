<?php

namespace Source\App\Api;

use CoffeeCode\Router\Router;
use Source\Models\User;
use Source\Models\UserCategory;

class Users extends Api
{
    public function __construct()
    {
        parent::__construct();
    }

    public function read(array $data): void
    {
        $response = [
            "code" => 200,
            "type" => "success",
            "message" => "Dados do usuário"
        ];
        http_response_code(200);
        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function create(array $data): void
    {

        if (!empty($data)) {
            $user = new User($data["name"], $data["email"], $data["password"], $data["idCategory"]);

            $user->insert();

            $userCategory = new UserCategory();
            http_response_code(200);
            $response["user"] = [
                "name" => $user->getName(),
                "email" => $user->getEmail(),
                "category" => $userCategory->selectNameById($data['idCategory'])
            ];

            echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            return;
        }

        $response = [
            "code" => 200,
            "type" => "success",
            "message" => "Usuário criado com sucesso"
        ];
        http_response_code(200);
        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
    public function login(array $data): void
    {

        $user = new User();
        $auth = $user->auth($data['user'], $data['password'], $data['idCategory']);
        if ($auth) {
            $response = [
                "type" => "success",
                "message" => "User logged in successfully"
            ];

            http_response_code(200);
            echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

            return;
        }
        $response = [
            "type" => "error",
            "message" => "Email or password not found"
        ];

        http_response_code(401);
        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }
}
