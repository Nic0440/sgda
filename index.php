<?php



require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router(url(), ":");

$route->namespace("Source\App");

$route->group(null);

$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/registro","Web:register");
$route->get("/localizacao","Web:location");
$route->get("/blog","Web:blog");
$route->get("/faq","Web:faq");
$route->get("/carrinho-compras","Web:chart");
$route->get("/login/{user-type}", "Web:login");
$route->get("/contato", "Web:contact");
$route->get("/calendario", "Web:calendar");
$route->get("/horarios", "Web:timetable");
$route->get("/protocolos", "Web:protocols");
$route->get("/turmas", "Web:classes");
$route->get("/cadastro", "Web:register");
$route->get("/adicionar_conta", "Web:add_account");
$route->get("/horarios/{turma}","Web:timetable");
$route->get("/faq-menager","Web:faq_menager");


$route->get("/ops/{errcode}", "Web:error");

$route->group("/app");
$route->get("/", "App:home");
$route->get("/perfil", "App:profile");
$route->get("/horarios", "App:timetable");
$route->get("/cadastro/usuario", "App:user_register");


$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}


ob_end_flush();
