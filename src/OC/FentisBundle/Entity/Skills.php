<?php

namespace OC\FentisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skills
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\FentisBundle\Entity\SkillsRepository")
 */
class skills
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
     * @ORM\Column(name="education", type="integer")
     */
    private $education;

    /**
     * @var integer
     *
     * @ORM\Column(name="detection", type="integer")
     */
    private $detection;

    /**
     * @var integer
     *
     * @ORM\Column(name="parade", type="integer")
     */
    private $parade;

    /**
     * @var integer
     *
     * @ORM\Column(name="esquive", type="integer")
     */
    private $esquive;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="respsy", type="integer")
     */
    private $respsy;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="lucidite", type="integer")
     */
    private $lucidite;
    
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
     * Set parade
     *
     * @param string $parade
     * @return Skills
     */
    public function setParade($parade)
    {
        $this->parade = $parade;

        return $this;
    }

    /**
     * Get parade
     *
     * @return string 
     */
    public function getParade()
    {
        return $this->parade;
    }


    /**
     * Set esquive
     *
     * @param integer $esquive
     * @return skills
     */
    public function setEsquive($esquive)
    {
        $this->esquive = $esquive;

        return $this;
    }

    /**
     * Get esquive
     *
     * @return integer 
     */
    public function getEsquive()
    {
        return $this->esquive;
    }

    /**
     * Set respsy
     *
     * @param integer $respsy
     * @return skills
     */
    public function setRespsy($respsy)
    {
        $this->respsy = $respsy;

        return $this;
    }

    /**
     * Get respsy
     *
     * @return integer 
     */
    public function getRespsy()
    {
        return $this->respsy;
    }

    /**
     * Set lucidite
     *
     * @param integer $lucidite
     * @return skills
     */
    public function setLucidite($lucidite)
    {
        $this->lucidite = $lucidite;

        return $this;
    }

    /**
     * Get lucidite
     *
     * @return integer 
     */
    public function getLucidite()
    {
        return $this->lucidite;
    }
}
