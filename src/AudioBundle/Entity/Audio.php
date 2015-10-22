<?php

namespace AudioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GenreBundle\Entity\Genre;
use AuthorBundle\Entity\Author;
use UserBundle\Entity\User;

/**
 * Audio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AudioBundle\Entity\AudioRepository")
 */
class Audio
{
    public function __construct()
    {
        $this->genres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->authors = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @var float
     *
     * @ORM\Column(name="Number", type="float")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsSaga", type="boolean", nullable=true)
     */
    private $isSaga = false;

    /**
     * @ORM\ManyToMany(targetEntity="GenreBundle\Entity\Genre", mappedBy="associatedAudios")
     * @ORM\JoinTable(name="audio_genre")
     */
    private $genres;

    /**
     * @ORM\ManyToMany(targetEntity="AuthorBundle\Entity\Author", mappedBy="productAudios")
     */
    private $authors;

    /**
     * @var string
     *
     * @ORM\Column(name="Link", type="text")
     */
    private $link;

    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="audioUploaded")
     */
    private $uploadedBy;


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
     * @return Audio
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
     * Set number
     *
     * @param float $number
     *
     * @return Audio
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return float
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Audio
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
     * Set isSaga
     *
     * @param boolean $isSaga
     *
     * @return Audio
     */
    public function setIsSaga($isSaga)
    {
        $this->isSaga = $isSaga;

        return $this;
    }

    /**
     * Get isSaga
     *
     * @return boolean
     */
    public function getIsSaga()
    {
        return $this->isSaga;
    }

    /**
     * Add genres
     *
     * @param GenreBundle\Entity\Genre $genres
     */
    public function addGenre(Genre $genre){
        $this->genres[] = $genre;
        $genre->addAssociatedAudios($this);
    }

    /**
     * Remove genres
     *
     * @param GenreBundle\Entity\Genre $genres
     */
    public function removeGenre(Genre $genre){
        $this->genres->removeElement($genre);
        $genre->removeAssociatedAudios($this);
    }

    /**
     * Get genres
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Add authors
     *
     * @param AuthorBundle\Entity\Author $authors
     */
    public function addAuthor(Author $author)
    {
        $this->authors[] = $author;
        $author->addProductAudios($this);
    }

    /**
     * Remove authors
     *
     * @param AuthorBundle\Entity\Author $authors
     */
    public function removeAuthor(Author $author)
    {
        $this->authors->removeElement($author);
        $author->removeProductAudios($this);
    }

    /**
     * Get authors
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return Audio
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set uploadedBy
     *
     * @param UserBundle\Entity\User $uploadedBy
     */
    public function setUploadedBy(User $uploadedBy)
    {
        $this->uploadedBy = $uploadedBy;
    }

    /**
     * Get uploadedBy
     *
     * @return UserBundle\Entity\User
     */
    public function getUploadedBy()
    {
        return $this->uploadedBy;
    }
}
