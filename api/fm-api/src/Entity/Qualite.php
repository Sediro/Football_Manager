<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Qualite
 *
 * @ORM\Table(name="qualite")
 * @ORM\Entity
 */
#[ApiResource]
class Qualite
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
     * @ORM\Column(name="intitulé", type="string", length=50, nullable=true, options={"default"="'NULL'"})
     */
    private $intitulé = '\'NULL\'';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitulé(): ?string
    {
        return $this->intitulé;
    }

    public function setIntitulé(?string $intitulé): self
    {
        $this->intitulé = $intitulé;

        return $this;
    }


}
