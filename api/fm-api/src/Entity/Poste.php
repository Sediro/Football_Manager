<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Poste
 *
 * @ORM\Table(name="poste")
 * @ORM\Entity
 */
#[ApiResource]
class Poste
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
     * @var string|null
     *
     * @ORM\Column(name="intitule", type="string", length=50, nullable=true, options={"default"="'NULL'"})
     */
    private $intitule = '\'NULL\'';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getintitule(): ?string
    {
        return $this->intitule;
    }

    public function setintitule(?string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }


}
