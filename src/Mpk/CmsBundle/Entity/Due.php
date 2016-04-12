<?php

namespace Mpk\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Due
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mpk\CmsBundle\Entity\DueRepository")
 */
class Due
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
     * @var float
     *
     * @ORM\Column(name="value", type="float")
     */
    private $value;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="donatedDate", type="datetime")
     */
    private $donatedDate;
    
    /**
     * @ORM\ManyToOne(targetEntity="Mpk\CmsBundle\Entity\Member")
     * @ORM\JoinColumn(nullable=false)
     */
    private $member;
    
    
    public function __toString() 
    {
        if(!$this->getValue()){
            return 'Due';
        }
    }
    
    public function __construct() 
    {
        $this->setDonatedDate(new \DateTime("now"));
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
     * Set value
     *
     * @param float $value
     * @return Due
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set donatedDate
     *
     * @param \DateTime $donatedDate
     * @return Due
     */
    public function setDonatedDate($donatedDate)
    {
        $this->donatedDate = $donatedDate;

        return $this;
    }

    /**
     * Get donatedDate
     *
     * @return \DateTime 
     */
    public function getDonatedDate()
    {
        return $this->donatedDate;
    }

    /**
     * Set member
     *
     * @param \Mpk\CmsBundle\Entity\Member $member
     * @return Due
     */
    public function setMember(\Mpk\CmsBundle\Entity\Member $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \Mpk\CmsBundle\Entity\Member 
     */
    public function getMember()
    {
        return $this->member;
    }
}
