<?php

namespace Source\App;

use League\Plates\Engine;
use Source\Models\User;
use Source\Models\Faq;
use Source\Models\Schedule;
use Source\Models\Class_;
use Source\Models\Calendar;
use Source\Models\Timetable;
use Source\Models\UserCategory;
use CoffeeCode\Router\Router;

class Web
{

    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/web", "php");
    }

    public function home()
    {
        echo $this->view->render("home", []);
    }

    public function register()
    {
        // $user = new User("Fernando", "fernando@gmail.com", "987654");
        // var_dump($user);

        // echo $this->view->render("register", [
        //     "users" => $user->selectAll()
        // ]);
        echo $this->view->render("register", []);
    }

    public function about()
    {
        echo $this->view->render("about", []);
    }
    public function model()
    {
        echo $this->view->render("model", []);
    }

    public function add_account()
    {
        echo $this->view->render("add-account", []);
    }
    public function location()
    {
        $name = "Fábio Santos";
        echo $this->view->render("location", [
            "name" => "Nicolas",
            "email" => "nicolaslemes.ch585@academico.ifsul.edu.br"
        ]);
    }

    public function blog()
    {
        echo "esse é o meu blog bonitinho...";
    }

    public function faq()
    {
        $faqs = new Faq();
        echo $this->view->render("faq", []);
    }
    public function faq_menager()
    {
        
        echo $this->view->render("faq-menager", []);
    }

    // public function chart()
    // {
    //     echo "Carrinho de compras";
    // }

    public function timetable(array $data): void
    {
        $timetables = new Timetable();
        $schedule = new Schedule();

        if (!empty($data["turma"])) {
            $shift = $data["turma"];
            $txt = substr($shift, -2);
            if ($txt === "am") {
                $schedules = $schedule->selectByCategory("Morning");
            }
            if ($txt === "at") {
                $schedules = $schedule->selectByCategory("Afternoon");
            }
            echo $this->view->render("timetable", [
                "timetable" => $timetables->selectByClass($data['turma']),
                "schedules" => $schedules
            ]);
            return;
        }
        echo $this->view->render("timetable", [
            "timetable" => $timetables->selectAll(),
            "schedules" => $schedule->selectByCategory("Morning")
        ]);
    }

    public function error(array $data): void
    {
        var_dump($data);
    }

    public function login(array $data): void
    {
        if ($data['user-type'] == "administrador" || $data['user-type'] == "estudante" || $data['user-type'] == "professor") {
            $userCategory = new UserCategory();
            $idCategory = $userCategory->selectIdByName($data['user-type']);
            echo $this->view->render("user-auth", [
                "userType" => $data['user-type'],
                "idCategory" => $idCategory[0]->id
            ]);
            return;
        }
        $route = new Router(url(), ":");
        $route->error();
        $route->redirect("/ops/{$route->error()}");
    }
    public function contact()
    {
        echo $this->view->render("contact", []);
    }
    public function calendar()
    {
        $events = new Calendar();
        echo $this->view->render("calendar", [
            "events" => $events->selectAll()
        ]);
    }
    public function protocols()
    {
        echo $this->view->render("protocols", []);
    }
    public function classes()
    {
        $classes = new Class_();
        echo $this->view->render("classes", [
            "classes" => $classes->selectAll()
        ]);
    }
    public function schedules()
    {
    }
}
