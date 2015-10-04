<?php

namespace OC\FentisBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Users
 *
 * @ORM\Table(name="oc_users")
 * @ORM\Entity(repositoryClass="OC\FentisBundle\Entity\UsersRepository")
 * @UniqueEntity(fields="login", message="il existe déjà un perso avec ce login")
 */
class users{
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
     * @ORM\Column(name="login", type="string", length=255, unique=true)
     * @Assert\length(min=5)
     */
    private $login;
    
    /**
     * @ORM\ManyToOne(targetEntity="OC\FentisBundle\Entity\details", cascade={"persist"})
     */
    private $details;

    /**
     * @ORM\ManyToOne(targetEntity="OC\FentisBundle\Entity\globals", cascade={"persist"})
     */
    private $globals;

    /**
     * @ORM\ManyToOne(targetEntity="OC\FentisBundle\Entity\skills", cascade={"persist"})
     */
    private $skills;
    
    /**
     * @ORM\ManyToOne(targetEntity="OC\FentisBundle\Entity\lifeInfo", cascade={"persist"})
     */
    private $lifeInfo;
    
    /**
     * @ORM\ManyToOne(targetEntity="OC\FentisBundle\Entity\equip", cascade={"persist"})
     */
    private $equip;
    
    public function __construct(){
        $this->password = "123";
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
     * Set login
     *
     * @param string $login
     * @return users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return users
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }


    /**
     * Set details
     *
     * @param \OC\FentisBundle\Entity\details $details
     * @return users
     */
    public function setDetails(\OC\FentisBundle\Entity\details $details = null)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return \OC\FentisBundle\Entity\details 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set skills
     *
     * @param \OC\FentisBundle\Entity\skills $skills
     * @return users
     */
    public function setSkills(\OC\FentisBundle\Entity\skills $skills = null)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return \OC\FentisBundle\Entity\skills 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set globals
     *
     * @param \OC\FentisBundle\Entity\globals $globals
     * @return users
     */
    public function setGlobals(\OC\FentisBundle\Entity\globals $globals = null)
    {
        $this->globals = $globals;

        return $this;
    }

    /**
     * Get globals
     *
     * @return \OC\FentisBundle\Entity\globals 
     */
    public function getGlobals()
    {
        return $this->globals;
    }

    /**
     * Set lifeInfo
     *
     * @param \OC\FentisBundle\Entity\lifeinfo $lifeInfo
     * @return users
     */
    public function setLifeInfo(\OC\FentisBundle\Entity\lifeInfo $lifeInfo = null)
    {
        $this->lifeInfo = $lifeInfo;

        return $this;
    }

    /**
     * Get lifeInfo
     *
     * @return \OC\FentisBundle\Entity\lifeInfo 
     */
    public function getLifeInfo()
    {
        return $this->lifeInfo;
    }

    /**
     * Set equip
     *
     * @param \OC\FentisBundle\Entity\equip $equip
     * @return users
     */
    public function setEquip(\OC\FentisBundle\Entity\equip $equip = null)
    {
        $this->equip = $equip;

        return $this;
    }

    /**
     * Get equip
     *
     * @return \OC\FentisBundle\Entity\equip 
     */
    public function getEquip()
    {
        return $this->equip;
    }

}
