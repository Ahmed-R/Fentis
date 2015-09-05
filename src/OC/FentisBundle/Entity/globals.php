<?php

namespace OC\FentisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * globals
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\FentisBundle\Entity\globalsRepository")
 */
class globals
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
     * @ORM\Column(name="aura", type="integer")
     */
    private $aura;

    /**
     * @var integer
     *
     * @ORM\Column(name="ressource", type="integer")
     */
    private $ressource;

    /**
     * @var integer
     *
     * @ORM\Column(name="sang_froid", type="integer")
     */
    private $sangFroid;

    /**
     * @var integer
     *
     * @ORM\Column(name="agilite", type="integer")
     */
    private $agilite;

    /**
     * @var integer
     *
     * @ORM\Column(name="perception", type="integer")
     */
    private $perception;

    /**
     * @var integer
     *
     * @ORM\Column(name="vigueur", type="integer")
     */
    private $vigueur;

    /**
     * @var integer
     *
     * @ORM\Column(name="intelligence", type="integer")
     */
    private $intelligence;

    /**
     * @var integer
     *
     * @ORM\Column(name="ruse", type="integer")
     */
    private $ruse;

    /**
     * @var integer
     *
     * @ORM\Column(name="technique", type="integer")
     */
    private $technique;

    /**
     * @var integer
     *
     * @ORM\Column(name="bonus_deg", type="integer")
     */
    private $bonusDeg;

    /**
     * @var integer
     *
     * @ORM\Column(name="initiative", type="integer")
     */
    private $initiative;

    /**
     * @var integer
     *
     * @ORM\Column(name="mov", type="integer")
     */
    private $mov;

    /**
     * @var integer
     *
     * @ORM\Column(name="pt_ress_totaux", type="integer")
     */
    private $ptRessTotaux;

    /**
     * @var integer
     *
     * @ORM\Column(name="pt_ress_actuel", type="integer")
     */
    private $ptRessActuel;

    /**
     * @var integer
     *
     * @ORM\Column(name="pt_mana_totaux", type="integer")
     */
    private $ptManaTotaux;

    /**
     * @var integer
     *
     * @ORM\Column(name="pt_mana_actuel", type="integer")
     */
    private $ptManaActuel;

    /**
     * @var integer
     *
     * @ORM\Column(name="res_fleau", type="integer")
     */
    private $resFleau;

    /**
     * @var integer
     *
     * @ORM\Column(name="bestialite", type="integer")
     */
    private $bestialite;

    /**
     * @var integer
     *
     * @ORM\Column(name="impregne", type="integer")
     */
    private $impregne;

    /**
     * @var integer
     *
     * @ORM\Column(name="necrose", type="integer")
     */
    private $necrose;

    /**
     * @var string
     *
     * @ORM\Column(name="stigmates", type="text")
     */
    private $stigmates;


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
     * Set aura
     *
     * @param integer $aura
     * @return globals
     */
    public function setAura($aura)
    {
        $this->aura = $aura;

        return $this;
    }

    /**
     * Get aura
     *
     * @return integer 
     */
    public function getAura()
    {
        return $this->aura;
    }

    /**
     * Set ressource
     *
     * @param integer $ressource
     * @return globals
     */
    public function setRessource($ressource)
    {
        $this->ressource = $ressource;

        return $this;
    }

    /**
     * Get ressource
     *
     * @return integer 
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * Set sangFroid
     *
     * @param integer $sangFroid
     * @return globals
     */
    public function setSangFroid($sangFroid)
    {
        $this->sangFroid = $sangFroid;

        return $this;
    }

    /**
     * Get sangFroid
     *
     * @return integer 
     */
    public function getSangFroid()
    {
        return $this->sangFroid;
    }

    /**
     * Set agilite
     *
     * @param integer $agilite
     * @return globals
     */
    public function setAgilite($agilite)
    {
        $this->agilite = $agilite;

        return $this;
    }

    /**
     * Get agilite
     *
     * @return integer 
     */
    public function getAgilite()
    {
        return $this->agilite;
    }

    /**
     * Set perception
     *
     * @param integer $perception
     * @return globals
     */
    public function setPerception($perception)
    {
        $this->perception = $perception;

        return $this;
    }

    /**
     * Get perception
     *
     * @return integer 
     */
    public function getPerception()
    {
        return $this->perception;
    }

    /**
     * Set vigueur
     *
     * @param integer $vigueur
     * @return globals
     */
    public function setVigueur($vigueur)
    {
        $this->vigueur = $vigueur;

        return $this;
    }

    /**
     * Get vigueur
     *
     * @return integer 
     */
    public function getVigueur()
    {
        return $this->vigueur;
    }

    /**
     * Set intelligence
     *
     * @param integer $intelligence
     * @return globals
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get intelligence
     *
     * @return integer 
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set ruse
     *
     * @param integer $ruse
     * @return globals
     */
    public function setRuse($ruse)
    {
        $this->ruse = $ruse;

        return $this;
    }

    /**
     * Get ruse
     *
     * @return integer 
     */
    public function getRuse()
    {
        return $this->ruse;
    }

    /**
     * Set technique
     *
     * @param integer $technique
     * @return globals
     */
    public function setTechnique($technique)
    {
        $this->technique = $technique;

        return $this;
    }

    /**
     * Get technique
     *
     * @return integer 
     */
    public function getTechnique()
    {
        return $this->technique;
    }

    /**
     * Set bonusDeg
     *
     * @param integer $bonusDeg
     * @return globals
     */
    public function setBonusDeg($bonusDeg)
    {
        $this->bonusDeg = $bonusDeg;

        return $this;
    }

    /**
     * Get bonusDeg
     *
     * @return integer 
     */
    public function getBonusDeg()
    {
        return $this->bonusDeg;
    }

    /**
     * Set initiative
     *
     * @param integer $initiative
     * @return globals
     */
    public function setInitiative($initiative)
    {
        $this->initiative = $initiative;

        return $this;
    }

    /**
     * Get initiative
     *
     * @return integer 
     */
    public function getInitiative()
    {
        return $this->initiative;
    }

    /**
     * Set mov
     *
     * @param integer $mov
     * @return globals
     */
    public function setMov($mov)
    {
        $this->mov = $mov;

        return $this;
    }

    /**
     * Get mov
     *
     * @return integer 
     */
    public function getMov()
    {
        return $this->mov;
    }

    /**
     * Set ptRessTotaux
     *
     * @param integer $ptRessTotaux
     * @return globals
     */
    public function setPtRessTotaux($ptRessTotaux)
    {
        $this->ptRessTotaux = $ptRessTotaux;

        return $this;
    }

    /**
     * Get ptRessTotaux
     *
     * @return integer 
     */
    public function getPtRessTotaux()
    {
        return $this->ptRessTotaux;
    }

    /**
     * Set ptRessActuel
     *
     * @param integer $ptRessActuel
     * @return globals
     */
    public function setPtRessActuel($ptRessActuel)
    {
        $this->ptRessActuel = $ptRessActuel;

        return $this;
    }

    /**
     * Get ptRessActuel
     *
     * @return integer 
     */
    public function getPtRessActuel()
    {
        return $this->ptRessActuel;
    }

    /**
     * Set ptManaTotaux
     *
     * @param integer $ptManaTotaux
     * @return globals
     */
    public function setPtManaTotaux($ptManaTotaux)
    {
        $this->ptManaTotaux = $ptManaTotaux;

        return $this;
    }

    /**
     * Get ptManaTotaux
     *
     * @return integer 
     */
    public function getPtManaTotaux()
    {
        return $this->ptManaTotaux;
    }

    /**
     * Set ptManaActuel
     *
     * @param integer $ptManaActuel
     * @return globals
     */
    public function setPtManaActuel($ptManaActuel)
    {
        $this->ptManaActuel = $ptManaActuel;

        return $this;
    }

    /**
     * Get ptManaActuel
     *
     * @return integer 
     */
    public function getPtManaActuel()
    {
        return $this->ptManaActuel;
    }

    /**
     * Set resFleau
     *
     * @param integer $resFleau
     * @return globals
     */
    public function setResFleau($resFleau)
    {
        $this->resFleau = $resFleau;

        return $this;
    }

    /**
     * Get resFleau
     *
     * @return integer 
     */
    public function getResFleau()
    {
        return $this->resFleau;
    }

    /**
     * Set bestialite
     *
     * @param integer $bestialite
     * @return globals
     */
    public function setBestialite($bestialite)
    {
        $this->bestialite = $bestialite;

        return $this;
    }

    /**
     * Get bestialite
     *
     * @return integer 
     */
    public function getBestialite()
    {
        return $this->bestialite;
    }

    /**
     * Set impregne
     *
     * @param integer $impregne
     * @return globals
     */
    public function setImpregne($impregne)
    {
        $this->impregne = $impregne;

        return $this;
    }

    /**
     * Get impregne
     *
     * @return integer 
     */
    public function getImpregne()
    {
        return $this->impregne;
    }

    /**
     * Set necrose
     *
     * @param integer $necrose
     * @return globals
     */
    public function setNecrose($necrose)
    {
        $this->necrose = $necrose;

        return $this;
    }

    /**
     * Get necrose
     *
     * @return integer 
     */
    public function getNecrose()
    {
        return $this->necrose;
    }

    /**
     * Set stigmates
     *
     * @param string $stigmates
     * @return globals
     */
    public function setStigmates($stigmates)
    {
        $this->stigmates = $stigmates;

        return $this;
    }

    /**
     * Get stigmates
     *
     * @return string 
     */
    public function getStigmates()
    {
        return $this->stigmates;
    }

}
