<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur", uniqueConstraints={@ORM\UniqueConstraint(name="Personne_Id", columns={"Personne_Id"}), @ORM\UniqueConstraint(name="Poste_Id", columns={"Poste_Id"}), @ORM\UniqueConstraint(name="Qualite_Id", columns={"Qualite_Id"})})
 * @ORM\Entity
 */
#[ApiResource]
class Joueur
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
     * @var \Poste
     *
     * @ORM\ManyToOne(targetEntity="Poste")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Poste_Id", referencedColumnName="Id")
     * })
     */
    private $poste;

    /**
     * @var \Qualite
     *
     * @ORM\ManyToOne(targetEntity="Qualite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Qualite_Id", referencedColumnName="Id")
     * })
     */
    private $qualite;

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

    public function getPoste(): ?Poste
    {
        return $this->poste;
    }

    public function setPoste(?Poste $poste): self
    {
        $this->poste = $poste;

        return $this;
    }

    public function getQualite(): ?Qualite
    {
        return $this->qualite;
    }

    public function setQualite(?Qualite $qualite): self
    {
        $this->qualite = $qualite;

        return $this;
    }


}
