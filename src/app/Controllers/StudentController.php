<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Database\StudentGateway;
use App\View;

class StudentController
{
    public function index(): View
    {
        $students = (new StudentGateway())->findAll();

        return View::make('students/index', ['students' => $students]);
    }

    public function create(): View
    {
        return View::make('students/create');
    }

    public function store(): void
    {
        $name = $_POST['name'];

        var_dump($name);
    }
}
