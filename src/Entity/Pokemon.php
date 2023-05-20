<?php

namespace App\Entity;

use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PokemonRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]
class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    #[Route("/insert/pokemons")]
    public function insertPokemon(EntityManagerInterface $doctrine){
        $pokemon = new Pokemon();
        $pokemon->setName("Pokemon1");
        $pokemon->setDescription("Pokemon1-description");
        $pokemon->setImage("Pokemon1-image");

        $pokemon2 = new Pokemon();
        $pokemon2->setName("Pokemon2");
        $pokemon2->setDescription("Pokemon2-description");
        $pokemon2->setImage("Pokemon2-image");

        //Doctrine - Persist
        $doctrine->persist($pokemon);
        $doctrine->persist($pokemon2);
        //Flush
        $doctrine->flush();

        return new Response("Pokemon insertados correctamente");
    }
}
