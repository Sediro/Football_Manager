<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Coach
 *
 * @ORM\Table(name="listecoachs")
 * @ORM\Entity
 */
#[ApiResource]
class ListeCoachs
{
    /**
     * @var int
     *
     * @ORM\Column(name="CoachID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

     /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true, options={"default"="'NULL'"})
     */
    private $nom = '\'NULL\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=true, options={"default"="'NULL'"})
     */
    private $prenom = '\'NULL\'';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pays", type="string", length=50, nullable=true, options={"default"="'NULL'"})
     */
    private $pays = '\'NULL\'';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }


}
