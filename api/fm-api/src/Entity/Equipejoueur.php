<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Equipejoueur
 *
 * @ORM\Table(name="equipejoueur", uniqueConstraints={@ORM\UniqueConstraint(name="Id", columns={"Id"})}, indexes={@ORM\Index(name="Equipe_Id", columns={"Equipe_Id"}), @ORM\Index(name="IDX_2D45D3D3BE97716D", columns={"Joueur_Id"})})
 * @ORM\Entity
 */
#[ApiResource]
class Equipejoueur
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="numéro_du_joueur", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $numéroDuJoueur = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \Joueur
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Joueur_Id", referencedColumnName="Id")
     * })
     */
    private $joueur;

    /**
     * @var \Equipe
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Equipe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Equipe_Id", referencedColumnName="Id")
     * })
     */
    private $equipe;

    public function getNuméroDuJoueur(): ?int
    {
        return $this->numéroDuJoueur;
    }

    public function setNuméroDuJoueur(?int $numéroDuJoueur): self
    {
        $this->numéroDuJoueur = $numéroDuJoueur;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJoueur(): ?Joueur
    {
        return $this->joueur;
    }

    public function setJoueur(?Joueur $joueur): self
    {
        $this->joueur = $joueur;

        return $this;
    }

    public function getEquipe(): ?Equipe
    {
        return $this->equipe;
    }

    public function setEquipe(?Equipe $equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }


}
