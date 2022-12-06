<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", indexes={@ORM\Index(name="Login_Id", columns={"Login_Id"}), @ORM\Index(name="Personne_Id", columns={"Personne_Id"})})
 * @ORM\Entity
 */
#[ApiResource]
class Utilisateur
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Personne_Id", referencedColumnName="Id")
     * })
     */
    private $personne;

    /**
     * @var \Login
     *
     * @ORM\ManyToOne(targetEntity="Login")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Login_Id", referencedColumnName="Id")
     * })
     */
    private $login;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonne(): ?Personne
    {
        return $this->personne;
    }

    public function setPersonne(?Personne $personne): self
    {
        $this->personne = $personne;

        return $this;
    }

    public function getLogin(): ?Login
    {
        return $this->login;
    }

    public function setLogin(?Login $login): self
    {
        $this->login = $login;

        return $this;
    }


}
