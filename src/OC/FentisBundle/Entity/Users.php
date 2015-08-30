<?php

namespace OC\FentisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="oc_users")
 * @ORM\Entity(repositoryClass="OC\FentisBundle\Entity\UsersRepository")
 */
class Users{
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
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
    
    /**
     * @ORM\OneToOne(targetEntity="OC\FentisBundle\Entity\Image", cascade={"persist"})
     */
    private $image;
    
    /**
     * @ORM\OneToOne(targetEntity="OC\FentisBundle\Entity\Fiche", cascade={"persist"})
     */
    private $fiche;
    
        /**
     * @var string
     *
     * @ORM\Column(name="champs1", type="string", length=255)
     */
    private $champs1;
    
        /**
     * @var string
     *
     * @ORM\Column(name="champs2", type="string", length=255)
     */
    private $champs2;
    
        /**
     * @var string
     *
     * @ORM\Column(name="champs3", type="string", length=255)
     */
    private $champs3;
    
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
     * @return Users
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
     * @return Users
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

    public function __construct(){
        $this->password = "123";
        $this->champs1  = "Contenu du champs 1"; 
        $this->champs2  = "Contenu du champs 2";
        $this->champs3  = "Contenu du champs 3";         
    }
    

    /**
     * Set regular
     *
     * @param boolean $regular
     * @return Users
     */
    public function setRegular($regular)
    {
        $this->regular = $regular;

        return $this;
    }

    /**
     * Get regular
     *
     * @return boolean 
     */
    public function getRegular()
    {
        return $this->regular;
    }
    

    /**
     * Set image
     *
     * @param \OC\FentisBundle\Entity\Image $image
     * @return Users
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

    /**
     * Set champs1
     *
     * @param string $champs1
     * @return Users
     */
    public function setChamps1($champs1)
    {
        $this->champs1 = $champs1;

        return $this;
    }

    /**
     * Get champs1
     *
     * @return string 
     */
    public function getChamps1()
    {
        return $this->champs1;
    }

    /**
     * Set champs2
     *
     * @param string $champs2
     * @return Users
     */
    public function setChamps2($champs2)
    {
        $this->champs2 = $champs2;

        return $this;
    }

    /**
     * Get champs2
     *
     * @return string 
     */
    public function getChamps2()
    {
        return $this->champs2;
    }

    /**
     * Set champs3
     *
     * @param string $champs3
     * @return Users
     */
    public function setChamps3($champs3)
    {
        $this->champs3 = $champs3;

        return $this;
    }

    /**
     * Get champs3
     *
     * @return string 
     */
    public function getChamps3()
    {
        return $this->champs3;
    }

    /**
     * Set fiche
     *
     * @param \OC\FentisBundle\Entity\Fiche $fiche
     * @return Users
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
