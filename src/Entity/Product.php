<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $place;

    /**
     * @ORM\Column(type="integer")
     */
    private $reference;

    /**
     * @ORM\Column(type="date")
     */
    private $buying_date;

    /**
     * @ORM\Column(type="date")
     */
    private $sav_date;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $price;

    /**
     * @ORM\Column(type="text")
     */
    private $utilisation_tip;

    /**
     * @ORM\Column(type="blob")
     */
    private $ticket_pictures;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $manual;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $category;

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

    public function getPlace(): ?string
    {
        return $this->place;
    }

    public function setPlace(string $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getReference(): ?int
    {
        return $this->reference;
    }

    public function setReference(int $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getBuyingDate(): ?\DateTimeInterface
    {
        return $this->buying_date;
    }

    public function setBuyingDate(\DateTimeInterface $buying_date): self
    {
        $this->buying_date = $buying_date;

        return $this;
    }

    public function getSavDate(): ?\DateTimeInterface
    {
        return $this->sav_date;
    }

    public function setSavDate(\DateTimeInterface $sav_date): self
    {
        $this->sav_date = $sav_date;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getUtilisationTip(): ?string
    {
        return $this->utilisation_tip;
    }

    public function setUtilisationTip(string $utilisation_tip): self
    {
        $this->utilisation_tip = $utilisation_tip;

        return $this;
    }

    public function getTicketPictures()
    {
        return $this->ticket_pictures;
    }

    public function setTicketPictures($ticket_pictures): self
    {
        $this->ticket_pictures = $ticket_pictures;

        return $this;
    }

    public function getManual()
    {
        return $this->manual;
    }

    public function setManual($manual): self
    {
        $this->manual = $manual;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }
}
