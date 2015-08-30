<?php

namespace OC\FentisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fiche
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\FentisBundle\Entity\FicheRepository")
 */
class Fiche
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="personnage", type="string", length=255)
     */
    private $personnage;

    /**
     * @var string
     *
     * @ORM\Column(name="race", type="string", length=255)
     */
    private $race;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="avantages_raciaux", type="text")
     */
    private $avantagesRaciaux;

    /**
     * @var string
     *
     * @ORM\Column(name="inconvenient_raciaux", type="text")
     */
    private $inconvenientRaciaux;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set personnage
     *
     * @param string $personnage
     * @return Fiche
     */
    public function setPersonnage($personnage)
    {
        $this->personnage = $personnage;

        return $this;
    }

    /**
     * Get personnage
     *
     * @return string 
     */
    public function getPersonnage()
    {
        return $this->personnage;
    }

    /**
     * Set race
     *
     * @param string $race
     * @return Fiche
     */
    public function setRace($race)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return string 
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Fiche
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set avantagesRaciaux
     *
     * @param string $avantagesRaciaux
     * @return Fiche
     */
    public function setAvantagesRaciaux($avantagesRaciaux)
    {
        $this->avantagesRaciaux = $avantagesRaciaux;

        return $this;
    }

    /**
     * Get avantagesRaciaux
     *
     * @return string 
     */
    public function getAvantagesRaciaux()
    {
        return $this->avantagesRaciaux;
    }

    /**
     * Set inconvenientRaciaux
     *
     * @param string $inconvenientRaciaux
     * @return Fiche
     */
    public function setInconvenientRaciaux($inconvenientRaciaux)
    {
        $this->inconvenientRaciaux = $inconvenientRaciaux;

        return $this;
    }

    /**
     * Get inconvenientRaciaux
     *
     * @return string 
     */
    public function getInconvenientRaciaux()
    {
        return $this->inconvenientRaciaux;
    }
}
