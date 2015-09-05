<?php

namespace OC\FentisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * lifeInfo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\FentisBundle\Entity\lifeInfoRepository")
 */
class lifeInfo
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
     * @var integer
     *
     * @ORM\Column(name="force_ame", type="integer")
     */
    private $forceAme;

    /**
     * @var integer
     *
     * @ORM\Column(name="tromperie", type="integer")
     */
    private $tromperie;

    /**
     * @var integer
     *
     * @ORM\Column(name="def_cac", type="integer")
     */
    private $defCac;

    /**
     * @var integer
     *
     * @ORM\Column(name="def_dist", type="integer")
     */
    private $defDist;

    /**
     * @var integer
     *
     * @ORM\Column(name="armure", type="integer")
     */
    private $armure;

    /**
     * @var integer
     *
     * @ORM\Column(name="malus_total", type="integer")
     */
    private $malusTotal;

    /**
     * @var integer
     *
     * @ORM\Column(name="eva", type="integer")
     */
    private $eva;

    /**
     * @var integer
     *
     * @ORM\Column(name="pt_vie_totaux", type="integer")
     */
    private $ptVieTotaux;

    /**
     * @var integer
     *
     * @ORM\Column(name="pt_vie_actuel", type="integer")
     */
    private $ptVieActuel;


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
     * Set forceAme
     *
     * @param integer $forceAme
     * @return lifeInfo
     */
    public function setForceAme($forceAme)
    {
        $this->forceAme = $forceAme;

        return $this;
    }

    /**
     * Get forceAme
     *
     * @return integer 
     */
    public function getForceAme()
    {
        return $this->forceAme;
    }

    /**
     * Set tromperie
     *
     * @param integer $tromperie
     * @return lifeInfo
     */
    public function setTromperie($tromperie)
    {
        $this->tromperie = $tromperie;

        return $this;
    }

    /**
     * Get tromperie
     *
     * @return integer 
     */
    public function getTromperie()
    {
        return $this->tromperie;
    }

    /**
     * Set defCac
     *
     * @param integer $defCac
     * @return lifeInfo
     */
    public function setDefCac($defCac)
    {
        $this->defCac = $defCac;

        return $this;
    }

    /**
     * Get defCac
     *
     * @return integer 
     */
    public function getDefCac()
    {
        return $this->defCac;
    }

    /**
     * Set defDist
     *
     * @param integer $defDist
     * @return lifeInfo
     */
    public function setDefDist($defDist)
    {
        $this->defDist = $defDist;

        return $this;
    }

    /**
     * Get defDist
     *
     * @return integer 
     */
    public function getDefDist()
    {
        return $this->defDist;
    }

    /**
     * Set armure
     *
     * @param integer $armure
     * @return lifeInfo
     */
    public function setArmure($armure)
    {
        $this->armure = $armure;

        return $this;
    }

    /**
     * Get armure
     *
     * @return integer 
     */
    public function getArmure()
    {
        return $this->armure;
    }

    /**
     * Set malusTotal
     *
     * @param integer $malusTotal
     * @return lifeInfo
     */
    public function setMalusTotal($malusTotal)
    {
        $this->malusTotal = $malusTotal;

        return $this;
    }

    /**
     * Get malusTotal
     *
     * @return integer 
     */
    public function getMalusTotal()
    {
        return $this->malusTotal;
    }

    /**
     * Set eva
     *
     * @param integer $eva
     * @return lifeInfo
     */
    public function setEva($eva)
    {
        $this->eva = $eva;

        return $this;
    }

    /**
     * Get eva
     *
     * @return integer 
     */
    public function getEva()
    {
        return $this->eva;
    }

    /**
     * Set ptVieTotaux
     *
     * @param integer $ptVieTotaux
     * @return lifeInfo
     */
    public function setPtVieTotaux($ptVieTotaux)
    {
        $this->ptVieTotaux = $ptVieTotaux;

        return $this;
    }

    /**
     * Get ptVieTotaux
     *
     * @return integer 
     */
    public function getPtVieTotaux()
    {
        return $this->ptVieTotaux;
    }

    /**
     * Set ptVieActuel
     *
     * @param integer $ptVieActuel
     * @return lifeInfo
     */
    public function setPtVieActuel($ptVieActuel)
    {
        $this->ptVieActuel = $ptVieActuel;

        return $this;
    }

    /**
     * Get ptVieActuel
     *
     * @return integer 
     */
    public function getPtVieActuel()
    {
        return $this->ptVieActuel;
    }
}
