<?php

namespace OC\FentisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skills
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\FentisBundle\Entity\SkillsRepository")
 */
class Skills
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
     * @ORM\ManyToOne(targetEntity="OC\FentisBundle\Entity\Fiche")
     */
    private $fiche;

    /**
     * @var string
     *
     * @ORM\Column(name="education", type="string", length=255)
     */
    private $education;

    /**
     * @var string
     *
     * @ORM\Column(name="detection", type="string", length=255)
     */
    private $detection;


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
     * Set education
     *
     * @param string $education
     * @return Skills
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string 
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set detection
     *
     * @param string $detection
     * @return Skills
     */
    public function setDetection($detection)
    {
        $this->detection = $detection;

        return $this;
    }

    /**
     * Get detection
     *
     * @return string 
     */
    public function getDetection()
    {
        return $this->detection;
    }

    /**
     * Set fiche
     *
     * @param \OC\FentisBundle\Entity\Fiche $fiche
     * @return Skills
     */
    public function setFiche(\OC\FentisBundle\Entity\Fiche $fiche = null)
    {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get fiche
     *
     * @return \OC\FentisBundle\Entity\Fiche 
     */
    public function getFiche()
    {
        return $this->fiche;
    }
}
