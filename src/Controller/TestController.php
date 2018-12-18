<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class TestController extends AbstractController
{
    public function index()
    {
        return new Response('index');
    }

    public function view()
    {
        return new Response('view');
    }

    public function list()
    {
        return new Response('list');
    }

    public function update()
    {
        return new Response('update');
    }
}