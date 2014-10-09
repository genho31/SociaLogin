<?php namespace Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;

class MainController implements ControllerProviderInterface
{
	public function connect(Application $app){

		$route = $app["controllers_factory"];

		$route->get("/", [$this, "index"])->bind("index");
		
		$route->get('/hello/{name}', [$this, "hello"])->bind("hello");

		return $route;
	}

	public function index(Application $app){
		return "Bienvenido <br>
				<a href='fb.php'>Logueate Usando Facebook</a>";
	}

	public function hello(Application $app, $name){
		return "Hola ".$name;
	}
}