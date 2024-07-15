<?php

namespace App\Entity;

use Symfony\Component\Routing\Annotation\Route;

class Dog {
    private int $id;
    private string $name;
    private string $breed;
    private \DateTime $birthdate;


    public function GetId(): int{
        return $this->id;
    }

    public function SetId(int $id){
        $this->id = $id;
    }

    public function GetName(): string{
        return $this->name;
    }

    public function SetName(string $name){
        $this->name = $name;
    }

    public function GetBreed(): string{
        return $this->breed;
    }

    public function SetBreed(String $breed){
        $this->breed = $breed;
    }

    public function GetBirthdate(): \DateTime{
        return $this->birthdate;
    }

    public function SetBirthdate(\DateTime $birthdate){
        $this->birthdate = $birthdate;
    }

    #[Route('/test-dog')]

}