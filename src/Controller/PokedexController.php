<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;


class PokedexController extends AbstractController{

    #[Route("/", name:"home")]
    public function home()
    {
        return $this->render(
            "home.html.twig"
        );
    }
    #[Route("/pokemon/{number}", methods:['GET'], name:"pokeDetail")]
    public function getPokeDetail($number){
        $pokeApiUrl = "https://pokeapi.co/api/v2/pokemon/".$number;
        $client = HttpClient::create();
        $response = $client->request(
            'GET',
            $pokeApiUrl
        );
        
        $responseContent = $response->toArray();
        //El dumper te para la ejecución
        //dd($responseContent);
        return $this->render(
            "/pokemon/poke-detail.html.twig",
            ["pokeData"=> $responseContent]
        );
    }
    #[Route("/kanto/{title}", name:"kanto")]
    public function kanto($title)
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
            ["allPokemon"=> $responseContent, "offset"=>$offset, "name"=>$title]
        );
    }

    #[Route("/johto/{title}", name:"johto")]
    public function johto($title)
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
            ["allPokemon"=> $responseContent, "offset"=>$offset, "name"=>$title]
        );
    }

    #[Route("/hoenn/{title}", name:"hoenn")]
    public function hoenn($title)
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
            ["allPokemon"=> $responseContent, "offset"=>$offset, "name"=> $title]
        );
    }

    #[Route("/sinnoh/{title}", name:"sinnoh")]
    public function sinnoh($title)
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
            ["allPokemon"=> $responseContent, "offset"=>$offset, "name"=>$title]
        );
    }

    #[Route("/unova/{title}", name:"unova")]
    public function unova($title)
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
            ["allPokemon"=> $responseContent, "offset"=>$offset, "name"=>$title]
        );
    }

    #[Route("/kalos/{title}", name:"kalos")]
    public function kalos($title)
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
            ["allPokemon"=> $responseContent, "offset"=>$offset, "name"=>$title]
        );
    }

    #[Route("/alola/{title}", name:"alola")]
    public function alola($title)
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
            ["allPokemon"=> $responseContent, "offset"=>$offset, "name"=>$title]
        );
    }

    #[Route("/galar/{title}", name:"galar")]
    public function galar($title)
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
            ["allPokemon"=> $responseContent, "offset"=>$offset, "name"=>$title]
        );
    }

    #[Route("/paldea/{title}", name:"paldea")]
    public function paldea($title)
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
            ["allPokemon"=> $responseContent, "offset"=>$offset, "name"=>$title]
        );
    }

    // #[Route("/pokemon")]
    // public function GetPokemon()
    // {
    //     return $this->render("home.html.twig");
    // }
}
?>