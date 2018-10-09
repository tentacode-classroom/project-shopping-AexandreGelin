<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TagsRepository")
 */
class Tags
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Fish", mappedBy="tags")
     */
    private $fish;

    public function __construct()
    {
        $this->fish = new ArrayCollection();
    }

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

    /**
     * @return Collection|Fish[]
     */
    public function getFish(): Collection
    {
        return $this->fish;
    }

    public function addFish(Fish $fish): self
    {
        if (!$this->fish->contains($fish)) {
            $this->fish[] = $fish;
            $fish->addTag($this);
        }

        return $this;
    }

    public function removeFish(Fish $fish): self
    {
        if ($this->fish->contains($fish)) {
            $this->fish->removeElement($fish);
            $fish->removeTag($this);
        }

        return $this;
    }
}
