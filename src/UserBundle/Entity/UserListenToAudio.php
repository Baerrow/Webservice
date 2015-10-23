<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserListenToAudio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="UserBundle\Entity\UserListenToAudioRepository")
 */
class UserListenToAudio
{
    /**
      * @ORM\Id
      * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="audioListened")
      */
    private $user;

    /**
      * @ORM\Id
      * @ORM\ManyToOne(targetEntity="AudioBundle\Entity\Audio")
      */
    private $audio;

    /**
      * @ORM\Column(name="StopTime", type="time")
      */
    private $stopTime;

    /**
     * Set user
     *
     * @param UserBundle\Entity\User $user
     */
    public function setUser(UserBundle\Entity\User $user){
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return UserBundle\Entity\User $user
     */
    public function getUser(){
        return $this->user;
    }

    /**
     * Set audio
     *
     * @param AudioBundle\Entity\Audio $audio
     */
    public function setAudio(AudioBundle\Entity\Audio $audio){
        $this->audio = $audio;
    }

    /**
     * Get audio
     *
     * @return AudioBundle\Entity\Audio $audio
     */
    public function getAudio(){
        return $this->audio;
    }

    /**
     * Set stopTime
     *
     * @param string $stopTime
     *
     * @return UserListenToAudio
     */
    public function setStopTime($stopTime)
    {
        $this->stopTime = $stopTime;

        return $this;
    }

    /**
     * Get stopTime
     *
     * @return string
     */
    public function getStopTime()
    {
        return $this->stopTime;
    }


}

