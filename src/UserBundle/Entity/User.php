<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UserBundle\Entity\UserRepository")
 */
class User
{
    public function __construct()
    {
        $this->audioListened = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @ORM\Column(name="Login", type="string", length=255, unique=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="Mail", type="string", length=255, unique=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=255)
     */
    private $password;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsAdmin", type="boolean")
     */
    private $isAdmin = false;

    /**
     * @ORM\ManyToMany(targetEntity="AudioBundle\Entity\Audio", cascade={"persist"})
     */
    // private $audioListened;

    /**
     * @var array
     *
     * @ORM\Column(name="Uploaded", type="json_array", nullable=true)
     */
    // private $uploaded = null;

    /**
     * @ORM\OneToMany(targetEntity="UserBundle\Entity\UserListenToAudio", mappedBy="user")
     */
    protected $audioListened;

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
     *
     * @return User
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
     * Set mail
     *
     * @param string $mail
     *
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
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
     * Set isAdmin
     *
     * @param boolean $isAdmin
     *
     * @return User
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * Get isAdmin
     *
     * @return boolean
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * Add audioListened
     *
     * @param UserBundle\Entity\UserListenToAudio $audioListened
     */
    public function addAudioListened(UserBundle\Entity\UserListenToAudio $audioListened)
    {
        $this->audioListened[] = $audioListened;
    }

    /**
     * Remove audioListened
     *
     * @param UserBundle\Entity\UserListenToAudio $audioListened
     */
    public function removeAudioListened(UserBundle\Entity\UserListenToAudio $audioListened)
    {
        $this->audioListened->removeElement($audioListened);
    }

    /**
     * Get audioListened
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getAudioListened()
    {
        return $this->audioListened;
    }

    /**
     * Set uploaded
     *
     * @param array $uploaded
     *
     * @return User
     */
    // public function setUploaded($uploaded)
    // {
    //     $this->uploaded = $uploaded;

    //     return $this;
    // }

    /**
     * Get uploaded
     *
     * @return array
     */
    // public function getUploaded()
    // {
    //     return $this->uploaded;
    // }
}
