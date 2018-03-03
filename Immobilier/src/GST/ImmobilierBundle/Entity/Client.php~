<?php

namespace GST\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="GST\ImmobilierBundle\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numeropiece", type="string", length=50, unique=false)
     */
    private $numeropiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomclient", type="string", length=50)
     */
    private $nomclient;

    /**
     * @var string
     *
     * @ORM\Column(name="telclient", type="string", length=15)
     */
    private $telclient;

    /**
     * @var string
     *
     * @ORM\Column(name="adresseclient", type="string", length=50)
     */
    private $adresseclient;

    /**
     * @var string
     *
     * @ORM\Column(name="emailclient", type="string", length=100, nullable=true, unique=false)
     */
    private $emailclient;

 /**
     * @var string
     *
     * @ORM\Column(name="password", type="string")
     */
    private $password;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numeropiece
     *
     * @param string $numeropiece
     *
     * @return Client
     */
    public function setNumeropiece($numeropiece)
    {
        $this->numeropiece = $numeropiece;

        return $this;
    }

    /**
     * Get numeropiece
     *
     * @return string
     */
    public function getNumeropiece()
    {
        return $this->numeropiece;
    }

    /**
     * Set nomclient
     *
     * @param string $nomclient
     *
     * @return Client
     */
    public function setNomclient($nomclient)
    {
        $this->nomclient = $nomclient;

        return $this;
    }

    /**
     * Get nomclient
     *
     * @return string
     */
    public function getNomclient()
    {
        return $this->nomclient;
    }

    /**
     * Set telclient
     *
     * @param string $telclient
     *
     * @return Client
     */
    public function setTelclient($telclient)
    {
        $this->telclient = $telclient;

        return $this;
    }

    /**
     * Get telclient
     *
     * @return string
     */
    public function getTelclient()
    {
        return $this->telclient;
    }

    /**
     * Set adresseclient
     *
     * @param string $adresseclient
     *
     * @return Client
     */
    public function setAdresseclient($adresseclient)
    {
        $this->adresseclient = $adresseclient;

        return $this;
    }

    /**
     * Get adresseclient
     *
     * @return string
     */
    public function getAdresseclient()
    {
        return $this->adresseclient;
    }

    /**
     * Set emailclient
     *
     * @param string $emailclient
     *
     * @return Client
     */
    public function setEmailclient($emailclient)
    {
        $this->emailclient = $emailclient;

        return $this;
    }

    /**
     * Get emailclient
     *
     * @return string
     */
    public function getEmailclient()
    {
        return $this->emailclient;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Client
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
}
