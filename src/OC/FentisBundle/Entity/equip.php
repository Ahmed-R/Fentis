<?php

namespace OC\FentisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * equip
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="OC\FentisBundle\Entity\equipRepository")
 */
class equip
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
     * @ORM\Column(name="arme1", type="string", length=255)
     */
    private $arme1;

    /**
     * @var string
     *
     * @ORM\Column(name="armure1", type="string", length=255)
     */
    private $armure1;    
    
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
     * Set arme1
     *
     * @param string $arme1
     * @return equip
     */
    public function setArme1($arme1)
    {
        $this->arme1 = $arme1;

        return $this;
    }

    /**
     * Get arme1
     *
     * @return string 
     */
    public function getArme1()
    {
        return $this->arme1;
    }

    /**
     * Set armure1
     *
     * @param string $armure1
     * @return equip
     */
    public function setArmure1($armure1)
    {
        $this->armure1 = $armure1;

        return $this;
    }

    /**
     * Get armure1
     *
     * @return string 
     */
    public function getArmure1()
    {
        return $this->armure1;
    }
}
