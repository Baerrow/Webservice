<?php

namespace GenreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AudioBundle\Entity\Audio;

/**
 * Genre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GenreBundle\Entity\GenreRepository")
 */
class Genre
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
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="AudioBundle\Entity\Audio", inversedBy="genres")
     * @ORM\JoinTable(name="audio_genre")
     */
    private $associatedAudios;


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
     *
     * @return Genre
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
     * Add associatedAudios
     *
     * @param AudioBundle\Entity\Audio $associatedAudio
     */
    public function addAssociatedAudios(Audio $associatedAudio)
    {
        $this->associatedAudios[] = $associatedAudios;
    }

    /**
     * Remove associatedAudios
     *
     * @param AudioBundle\Entity\Audio $associatedAudio
     */
    public function removeAssociatedAudios(Audio $associatedAudio)
    {
        $this->associatedAudios->removeElement($associatedAudio);
    }

    /**
     * Get associatedAudios
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getAssociatedAudios()
    {
        return $this->associatedAudios;
    }
}
