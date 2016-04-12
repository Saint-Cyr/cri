<?php

namespace Mpk\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConvenantFamily
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mpk\CmsBundle\Entity\ConvenantFamilyRepository")
 */
class ConvenantFamily
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="leader", type="string", length=255)
     */
    private $leader;
    
    /**
     * @ORM\ManyToOne(targetEntity="Mpk\CmsBundle\Entity\Church", inversedBy="convenantFamily", cascade="persist")
     * @ORM\JoinColumn(nullable=true)
     */
    private $church;

    public function __toString() {
        if(!$this->getName()){
            return 'New Convenant Family';
        }
        
        return $this->getName();
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
     * Set name
     *
     * @param string $name
     * @return ConvenantFamily
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return ConvenantFamily
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return ConvenantFamily
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set leader
     *
     * @param string $leader
     * @return ConvenantFamily
     */
    public function setLeader($leader)
    {
        $this->leader = $leader;

        return $this;
    }

    /**
     * Get leader
     *
     * @return string 
     */
    public function getLeader()
    {
        return $this->leader;
    }

    /**
     * Set church
     *
     * @param \Mpk\CmsBundle\Entity\Church $church
     * @return ConvenantFamily
     */
    public function setChurch(\Mpk\CmsBundle\Entity\Church $church = null)
    {
        $this->church = $church;

        return $this;
    }

    /**
     * Get church
     *
     * @return \Mpk\CmsBundle\Entity\Church 
     */
    public function getChurch()
    {
        return $this->church;
    }
}
