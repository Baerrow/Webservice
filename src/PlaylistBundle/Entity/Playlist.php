<?php

namespace PlaylistBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AudioBundle\Entity\Audio;

/**
 * Playlist
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PlaylistBundle\Entity\PlaylistRepository")
 */
class Playlist
{
    public function __construct()
    {
        $this->listAudios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->listPlaylists = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @ORM\ManyToMany(targetEntity="AudioBundle\Entity\Audio", cascade={"persist"})
     * @ORM\JoinTable(name="playlist_audio")
     */
    private $listAudios;

    /**
     * @ORM\ManyToMany(targetEntity="PlaylistBundle\Entity\Playlist", mappedBy="listPlaylists")
     */
    private $inPlaylist;

    /**
     * @ORM\ManyToMany(targetEntity="PlaylistBundle\Entity\Playlist", inversedBy="inPlaylist")
     * @ORM\JoinTable(name="playlist_inPlaylist",
     *      joinColumns={@ORM\JoinColumn(name="playlist_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinCOlumn(name="in_playlist", referencedColumnName="id")}
     *)
     */
    private $listPlaylists;

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
     * @return Playlist
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
     * @return Playlist
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
     * Add listAudios
     *
     * @param AudioBundle\Entity\Audio $listAudios
     */
    public function addListAudios(Audio $listAudios)
    {
        $this->listAudios[] = $listAudios;
    }

    /**
     * Remove listAudios
     *
     * @param AudioBundle\Entity\Audio $listAudios
     */
    public function removeListAudios(Audio $listAudios)
    {
        $this->listAudios->removeElement($listAudios);
    }

    /**
     * Get listAudios
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getListAudios()
    {
        return $this->listAudios;
    }

    /**
     * Add listPlaylists
     *
     * @param PlaylistBundle\Entity\Playlist $listPlaylists
     */
    public function addListPlaylists(Playlist $listPlaylists)
    {
        $this->listPlaylists[] = $listPlaylists;
    }

    /**
     * Remove listPlaylists
     *
     * @param PlaylistBundle\Entity\Playlist $listPlaylists
     */
    public function removeListPlaylists(Playlist $listPlaylists)
    {
        $this->listPlaylists->removeElement($listPlaylists);
    }

    /**
     * Get listPlaylists
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getListPlaylists()
    {
        return $this->listPlaylists;
    }
}

