<?php 

namespace App\Controllers;

use Core\View\View;

class  HomeController{
    public function index() {
        return View::render('home');
    }
}