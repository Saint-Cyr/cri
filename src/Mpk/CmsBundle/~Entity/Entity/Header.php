<?php

namespace Mpk\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Header
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Mpk\CmsBundle\Entity\HeaderRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Header
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    private $file;
    
    /**
     * @var string
     *
     * @ORM\Column(name="updated", type="datetime", length=255, nullable=true)
     */
    private $updated;
    
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="tweeter", type="string", length=255)
     */
    private $tweeter;

    /**
     * @var string
     *
     * @ORM\Column(name="in_url", type="string", length=255)
     */
    private $inUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="google", type="string", length=255)
     */
    private $google;

    /**
     * @var string
     *
     * @ORM\Column(name="skype", type="string", length=255)
     */
    private $skype;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;


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
     * Set image
     *
     * @param string $image
     * @return Header
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Header
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set tweeter
     *
     * @param string $tweeter
     * @return Header
     */
    public function setTweeter($tweeter)
    {
        $this->tweeter = $tweeter;

        return $this;
    }

    /**
     * Get tweeter
     *
     * @return string 
     */
    public function getTweeter()
    {
        return $this->tweeter;
    }

    /**
     * Set inUrl
     *
     * @param string $inUrl
     * @return Header
     */
    public function setInUrl($inUrl)
    {
        $this->inUrl = $inUrl;

        return $this;
    }

    /**
     * Get inUrl
     *
     * @return string 
     */
    public function getInUrl()
    {
        return $this->inUrl;
    }

    /**
     * Set google
     *
     * @param string $google
     * @return Header
     */
    public function setGoogle($google)
    {
        $this->google = $google;

        return $this;
    }

    /**
     * Get google
     *
     * @return string 
     */
    public function getGoogle()
    {
        return $this->google;
    }

    /**
     * Set skype
     *
     * @param string $skype
     * @return Header
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string 
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Header
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Header
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    public function upload()
    {
    // the file property can be empty if the field is not required
    if (null === $this->getFile()) {
        return;
    }

    // move takes the target directory and target filename as params
    $this->getFile()->move(__DIR__.'/../../../../web/images/',
        $this->getFile()->getClientOriginalName()
    );

    // set the path property to the filename where you've saved the file
    $this->image = $this->getFile()->getClientOriginalName();

    // clean up the file property as you won't need it anymore
    $this->setFile(null);
    }
    
    /**
    * @ORM\prePersist
    * @ORM\preUpdate
    */
    public function lifecycleFileUpload() {
        $this->upload();
    }
    
    /**
    * Updates the hash value to force the preUpdate and postUpdate events to fire
    */
    public function refreshUpdated() {
        $this->setUpdated(new \DateTime("now"));
    }
    
    /**
    * Sets file.
    *
    * @param UploadedFile $file
    */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }
    
    
    
    /**
    * Get file.
    *
    * @return UploadedFile
    */
    public function getFile()
    {
        return $this->file;
    }
    

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Article
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
