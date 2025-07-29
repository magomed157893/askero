<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$name = $request->query->get('name', 'World');

$response = new Response('Hello ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));

$response->send();
