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
     * @var string
     *
     * @ORM\Column(name="parade", type="string", length=255)
     */
    private $parade;
    
    /**
     * @ORM\ManyToOne(targetEntity="OC\FentisBundle\Entity\Users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
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
     * Set user
     *
     * @param \OC\FentisBundle\Entity\Users $user
     * @return Skills
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
}