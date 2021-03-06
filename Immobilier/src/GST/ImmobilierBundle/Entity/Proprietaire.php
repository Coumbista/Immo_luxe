<?php

namespace GST\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proprietaire
 *
 * @ORM\Table(name="proprietaire")
 * @ORM\Entity(repositoryClass="GST\ImmobilierBundle\Repository\ProprietaireRepository")
 */
class Proprietaire
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
     * @ORM\Column(name="numpiece", type="string", length=50, unique=true)
     */
    private $numpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nomcomplet", type="string", length=50)
     */
    private $nomcomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="adressepro", type="string", length=50)
     */
    private $adressepro;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_pro", type="string", length=15)
     */
    private $telPro;

    /**
     * @var string
     *
     * @ORM\Column(name="email_pro", type="string", length=100, unique=true)
     */
    private $emailPro;

    /**
     * @var string
     *
     * @ORM\Column(name="codebanque", type="string", length=50, unique=true)
     */
    private $codebanque;


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
     * Set numpiece
     *
     * @param string $numpiece
     *
     * @return Proprietaire
     */
    public function setNumpiece($numpiece)
    {
        $this->numpiece = $numpiece;

        return $this;
    }

    /**
     * Get numpiece
     *
     * @return string
     */
    public function getNumpiece()
    {
        return $this->numpiece;
    }

    /**
     * Set nomcomplet
     *
     * @param string $nomcomplet
     *
     * @return Proprietaire
     */
    public function setNomcomplet($nomcomplet)
    {
        $this->nomcomplet = $nomcomplet;

        return $this;
    }

    /**
     * Get nomcomplet
     *
     * @return string
     */
    public function getNomcomplet()
    {
        return $this->nomcomplet;
    }

    /**
     * Set adressepro
     *
     * @param string $adressepro
     *
     * @return Proprietaire
     */
    public function setAdressepro($adressepro)
    {
        $this->adressepro = $adressepro;

        return $this;
    }

    /**
     * Get adressepro
     *
     * @return string
     */
    public function getAdressepro()
    {
        return $this->adressepro;
    }

    /**
     * Set telPro
     *
     * @param string $telPro
     *
     * @return Proprietaire
     */
    public function setTelPro($telPro)
    {
        $this->telPro = $telPro;

        return $this;
    }

    /**
     * Get telPro
     *
     * @return string
     */
    public function getTelPro()
    {
        return $this->telPro;
    }

    /**
     * Set emailPro
     *
     * @param string $emailPro
     *
     * @return Proprietaire
     */
    public function setEmailPro($emailPro)
    {
        $this->emailPro = $emailPro;

        return $this;
    }

    /**
     * Get emailPro
     *
     * @return string
     */
    public function getEmailPro()
    {
        return $this->emailPro;
    }

    /**
     * Set codebanque
     *
     * @param string $codebanque
     *
     * @return Proprietaire
     */
    public function setCodebanque($codebanque)
    {
        $this->codebanque = $codebanque;

        return $this;
    }

    /**
     * Get codebanque
     *
     * @return string
     */
    public function getCodebanque()
    {
        return $this->codebanque;
    }
}

