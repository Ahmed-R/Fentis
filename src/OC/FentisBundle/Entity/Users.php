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
     * @ORM\Column(name="regular", type="boolean")
     */
    private $regular = true;

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
}