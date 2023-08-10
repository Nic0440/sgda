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

class App
{

    private $view;

    public function __construct()
    {
        $this->view = new Engine(__DIR__ . "/../../themes/app", "php");
        //var_dump($this->categories);
    }

    public function home()
    {
        echo $this->view->render("home", []);
    }

    public function profile()
    {
        echo $this->view->render("profile", []);
    }
    public function timetable()
    {
        $class = new Class_();
        echo $this->view->render("timetable", [
            "classes" => $class->selectAll()
        ]);
    }
    public function user_register()
    {
        $userCategories = new UserCategory();
        echo $this->view->render("user-register", [
            "userCategories" => $userCategories->selectAll()
        ]);
    }

}
