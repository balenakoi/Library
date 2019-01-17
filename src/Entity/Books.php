<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BooksRepository")
 */
class Books
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
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $auteur;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="text")
     */
    private $categorie;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="boolean")
     */
    private $diponsibility;

    /**
     * @ORM\Column(type="text")
     */
    private $resume;

    public function getId() : ? int
    {
        return $this->id;
    }

    public function getTitre() : ? string
    {
        return $this->titre;
    }

    public function setTitre(string $titre) : self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getAuteur() : ? string
    {
        return $this->auteur;
    }

    public function setAuteur(string $auteur) : self
    {
        $this->auteur = $auteur;

        return $this;
    }

    public function getDate() : ? \DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date) : self
    {
        $this->date = $date;

        return $this;
    }

    public function getCategorie() : ? string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie) : self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getImage() : ? string
    {
        return $this->image;
    }

    public function setImage(string $image) : self
    {
        $this->image = $image;

        return $this;
    }

    public function getDiponsibility() : ? bool
    {
        return $this->diponsibility;
    }

    public function setDiponsibility(bool $diponsibility) : self
    {
        $this->diponsibility = $diponsibility;

        return $this;
    }

    public function getResume() : ? string
    {
        return $this->resume;
    }

    public function setResume(string $resume) : self
    {
        $this->resume = $resume;

        return $this;
    }
}
