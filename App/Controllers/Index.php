<?php
namespace App\Controllers;
use Fine\Http\Controller;

class Index extends Controller
{

    public function index()
    {
        return $this->display('Index/Index',[],false);
    }

    public function data(...$args)
    {
        return $this->json($args);
    }
}




