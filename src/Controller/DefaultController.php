<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
// use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

// Heredar de abstract si se quiere usar twig
class DefaultController extends AbstractController{

    public function hola(){
        return $this->render("base.html.twig");
    }
    // ejecuta la primera que entra que cummple con el patrón. Lo suyo es poner de las rutas especficias a la generales

    //Rutas variables + Get, POST
    #[Route("/saludo/{name}", methods:['GET'])]
    public function saludo($name){
        return new Response("Buenas tardes $name");
    }

    // Si no pones ningun metodos por defecto pasa por todos
    #[Route("/saludo/{name}", methods:['POST', 'PUT'])]
    public function saludo2($name){
        return new Response("Buenas tardes $name");
    }

        // Si no pones ningun metodos por defecto pasa por todos
        #[Route("/saludo/{name}/{age}", methods:['POST', 'PUT'], requirements: ["age"=>"\d+"])]
        public function saludo3($name, $age){
            return new Response("Buenas tardes $name ($age)");
        }
}

?>