<?php

namespace OC\FentisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FichePerso
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\FentisBundle\Entity\FichePersoRepository")
 */
class FichePerso
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
     * @ORM\ManyToOne(targetEntity="OC\FentisBundle\Entity\Users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
    /**
     * @ORM\OneToOne(targetEntity="OC\FentisBundle\Entity\Image", cascade={"persist"})
     */
    private $image;

        
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
     * Set user
     *
     * @param \OC\FentisBundle\Entity\Users $user
     * @return FichePerso
     */
    public function setUser(\OC\FentisBundle\Entity\Users $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \OC\FentisBundle\Entity\Users 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set image
     *
     * @param \OC\FentisBundle\Entity\Image $image
     * @return FichePerso
     */
    public function setImage(\OC\FentisBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \OC\FentisBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }
}