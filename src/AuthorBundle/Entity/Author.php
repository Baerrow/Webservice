<?php

namespace AuthorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AudioBundle\Entity\Audio;

/**
 * Author
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AuthorBundle\Entity\AuthorRepository")
 */
class Author
{
    public function __construct()
    {
        $this->productAudios = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @ORM\Column(name="Name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="AudioBundle\Entity\Audio", mappedBy="authors")
     * @ORM\JoinTable(name="audio_author")
     */
    private $productAudios;


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
     * @return Author
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
     * Set description
     *
     * @param string $description
     *
     * @return Author
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add productAudios
     *
     * @param AudioBundle\Entity\Audio $productAudio
     */
    public function addProductAudios(Audio $productAudio)
    {
        $this->productAudios[] = $productAudios;
    }

    /**
     * Remove productAudios
     *
     * @param AudioBundle\Entity\Audio $productAudio
     */
    public function removeProductAudios(Audio $productAudio)
    {
        $this->productAudios->removeElement($productAudio);
    }

    /**
     * Get productAudios
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getProductAudios()
    {
        return $this->productAudios;
    }
}
