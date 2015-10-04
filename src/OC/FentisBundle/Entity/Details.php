<?php

namespace OC\FentisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * details
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\FentisBundle\Entity\detailsRepository")
 */
class details
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
     * @var integer
     *
     * @ORM\Column(name="xptotal", type="integer")
     */
    private $xptotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="xprestant", type="integer")
     */
    private $xprestant;

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
     * @ORM\Column(name="gabarit", type="string", length=255)
     */
    private $gabarit;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="taille", type="integer")
     */
    private $taille;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="poids", type="integer")
     */
    private $poids;
    
    /**
     * @var string
     *
     * @ORM\Column(name="beaute", type="string", length=255)
     */
    private $beaute;    

    /**
     * @var string
     *
     * @ORM\Column(name="caractere", type="text")
     */
    private $caractere;    
    
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
     * @var string
     *
     * @ORM\Column(name="note", type="text")
     */
    private $note;
    
    
    public function __construct(){
    }


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
     * @return FichePerso
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
     * Set xptotal
     *
     * @param integer $xptotal
     * @return FichePerso
     */
    public function setXptotal($xptotal)
    {
        $this->xptotal = $xptotal;

        return $this;
    }

    /**
     * Get xptotal
     *
     * @return integer 
     */
    public function getXptotal()
    {
        return $this->xptotal;
    }

    /**
     * Set xprestant
     *
     * @param integer $xprestant
     * @return FichePerso
     */
    public function setXprestant($xprestant)
    {
        $this->xprestant = $xprestant;

        return $this;
    }

    /**
     * Get xprestant
     *
     * @return integer 
     */
    public function getXprestant()
    {
        return $this->xprestant;
    }

    /**
     * Set race
     *
     * @param string $race
     * @return FichePerso
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
     * Set avantagesRaciaux
     *
     * @param string $avantagesRaciaux
     * @return FichePerso
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
     * @return FichePerso
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

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return details
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
     * Set gabarit
     *
     * @param string $gabarit
     * @return details
     */
    public function setGabarit($gabarit)
    {
        $this->gabarit = $gabarit;

        return $this;
    }

    /**
     * Get gabarit
     *
     * @return string 
     */
    public function getGabarit()
    {
        return $this->gabarit;
    }

    /**
     * Set taille
     *
     * @param integer $taille
     * @return details
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return integer 
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set poids
     *
     * @param integer $poids
     * @return details
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return integer 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set beaute
     *
     * @param string $beaute
     * @return details
     */
    public function setBeaute($beaute)
    {
        $this->beaute = $beaute;

        return $this;
    }

    /**
     * Get beaute
     *
     * @return string 
     */
    public function getBeaute()
    {
        return $this->beaute;
    }

    /**
     * Set caractere
     *
     * @param string $caractere
     * @return details
     */
    public function setCaractere($caractere)
    {
        $this->caractere = $caractere;

        return $this;
    }

    /**
     * Get caractere
     *
     * @return string 
     */
    public function getCaractere()
    {
        return $this->caractere;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return details
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }
}
