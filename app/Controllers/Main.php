<?php

namespace App\Controllers;

class Main extends BaseController
{
    protected $helpers = ['date', 'matematica'];
    public function index(): void
    {
        echo now();
        echo '<br>';
        echo adicionar(3, 2);
        echo '<br>';
        echo subtrair(8, 2);
        echo '<br>';
        echo multiplicar(4, 2);
        echo '<br>';
        echo dividir(16, 2);
    }
}
