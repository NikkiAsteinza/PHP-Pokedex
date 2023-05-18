<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

class PokedexController extends AbstractController{

    #[Route("/")]
    public function home()
    {
        return $this->render(
            "home.html.twig"
        );
    }

    #[Route("/kanto")]
    public function kanto()
    {
        $offset = 0;
        $ammount =  151;
        $pokeApiUrl = "https://pokeapi.co/api/v2/pokemon?limit=$ammount&offset=$offset";
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $pokeApiUrl
        );
        
        $responseContent = $response->toArray();
        //El dumper te para la ejecución
        //dd($responseContent);
        return $this->render(
            "main.html.twig",
            ["allPokemon"=> $responseContent, "offset"=>0]
        );
    }

    #[Route("/johto")]
    public function johto()
    {
        $offset = 151;
        $ammount =  100;
        $pokeApiUrl = "https://pokeapi.co/api/v2/pokemon?limit=$ammount&offset=$offset";
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $pokeApiUrl
        );
        
        $responseContent = $response->toArray();
        //El dumper te para la ejecución
        //dd($responseContent);
        return $this->render(
            "main.html.twig",
            ["allPokemon"=> $responseContent, "offset"=>$offset]
        );
    }

    #[Route("/hoenn")]
    public function hoenn()
    {
        $offset = 251;
        $ammount =  135;
        $pokeApiUrl = "https://pokeapi.co/api/v2/pokemon?limit=$ammount&offset=$offset";
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $pokeApiUrl
        );
        
        $responseContent = $response->toArray();
        //El dumper te para la ejecución
        //dd($responseContent);
        return $this->render(
            "main.html.twig",
            ["allPokemon"=> $responseContent, "offset"=>$offset]
        );
    }

    #[Route("/sinnoh")]
    public function sinnoh()
    {
        $offset = 386;
        $ammount = 107;
        $pokeApiUrl = "https://pokeapi.co/api/v2/pokemon?limit=$ammount&offset=$offset";
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $pokeApiUrl
        );
        
        $responseContent = $response->toArray();
        //El dumper te para la ejecución
        //dd($responseContent);
        return $this->render(
            "main.html.twig",
            ["allPokemon"=> $responseContent, "offset"=>$offset]
        );
    }

    #[Route("/unova")]
    public function unova()
    {
        $offset = 493;
        $ammount =  156;
        $pokeApiUrl = "https://pokeapi.co/api/v2/pokemon?limit=$ammount&offset=$offset";
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $pokeApiUrl
        );
        
        $responseContent = $response->toArray();
        //El dumper te para la ejecución
        //dd($responseContent);
        return $this->render(
            "main.html.twig",
            ["allPokemon"=> $responseContent, "offset"=>$offset]
        );
    }

    #[Route("/kalos")]
    public function kalos()
    {
        $offset = 549;
        $ammount =  72;
        $pokeApiUrl = "https://pokeapi.co/api/v2/pokemon?limit=$ammount&offset=$offset";
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $pokeApiUrl
        );
        
        $responseContent = $response->toArray();
        //El dumper te para la ejecución
        //dd($responseContent);
        return $this->render(
            "main.html.twig",
            ["allPokemon"=> $responseContent, "offset"=>$offset]
        );
    }

    #[Route("/alola")]
    public function alola()
    {
        $offset = 621;
        $ammount =  72;
        $pokeApiUrl = "https://pokeapi.co/api/v2/pokemon?limit=$ammount&offset=$offset";
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $pokeApiUrl
        );
        
        $responseContent = $response->toArray();
        //El dumper te para la ejecución
        //dd($responseContent);
        return $this->render(
            "main.html.twig",
            ["allPokemon"=> $responseContent, "offset"=>$offset]
        );
    }

    #[Route("/galar")]
    public function galar()
    {
        $offset = 693;
        $ammount =  103;
        $pokeApiUrl = "https://pokeapi.co/api/v2/pokemon?limit=$ammount&offset=$offset";
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $pokeApiUrl
        );
        
        $responseContent = $response->toArray();
        //El dumper te para la ejecución
        //dd($responseContent);
        return $this->render(
            "main.html.twig",
            ["allPokemon"=> $responseContent, "offset"=>$offset]
        );
    }

    #[Route("/paldea")]
    public function paldea()
    {
        $offset = 693;
        $ammount =  103;
        $pokeApiUrl = "https://pokeapi.co/api/v2/pokemon?limit=$ammount&offset=$offset";
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $pokeApiUrl
        );
        
        $responseContent = $response->toArray();
        //El dumper te para la ejecución
        //dd($responseContent);
        return $this->render(
            "main.html.twig",
            ["allPokemon"=> $responseContent, "offset"=>$offset]
        );
    }

    #[Route("/pokemon")]
    public function GetPokemon()
    {
        return $this->render("home.html.twig");
    }
}
?>