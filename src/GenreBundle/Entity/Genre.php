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
     * @ORM\ManyToMany(targetEntity="AudioBundle\Entity\Audio", mappedBy="genres")
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
     * Add audio
     *
     * @param AudioBundle\Entity\Audio $audio
     */
    public function addAssociatedAudio(Audio $audio)
    {
        $this->associatedAudios[] = $audio;
    }

    /**
     * Remove audio
     *
     * @param AudioBundle\Entity\Audio $audio
     */
    public function removeAssociatedAudio(Audio $audio)
    {
        $this->associatedAudios->removeElement($audio);
    }

    /**
     * Get audios
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getAssociatedAudios()
    {
        return $this->associatedAudios;
    }
}
