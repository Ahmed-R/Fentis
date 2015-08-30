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
     * @ORM\OneToOne(targetEntity="OC\FentisBundle\Entity\Fiche", cascade={"persist"})
     */
    private $fiche;
    
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

    /**
     * Set fiche
     *
     * @param \OC\FentisBundle\Entity\Ficheglobale $fiche
     * @return Users
     */
    public function setFiche(\OC\FentisBundle\Entity\Ficheglobale $fiche = null)
    {
        $this->fiche = $fiche;

        return $this;
    }

    /**
     * Get fiche
     *
     * @return \OC\FentisBundle\Entity\Ficheglobale 
     */
    public function getFiche()
    {
        return $this->fiche;
    }

}
