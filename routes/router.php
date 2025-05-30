<?php

function load(string $controller, string $action)
{
    try {
        // se controller existe
        $controllerNamespace = "app\\controllers\\{$controller}";

        if (!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe");
        }

        $controllerInstance = new $controllerNamespace();

        if (!method_exists($controllerInstance, $action)) {
            throw new Exception(
                "O método {$action} não existe no controller {$controller}"
            );
        }

        $controllerInstance->$action((object) $_REQUEST);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$router = [
    "GET" => [
        "/" => function () {
            return load("HomeController", "index");
        },
        "/contact" => function () {
            return load("ContactController", "index");
        },
    ],
    "POST" => [
        "/contact" => function () {
            return load("ContactController", "store");
        },
    ],
];