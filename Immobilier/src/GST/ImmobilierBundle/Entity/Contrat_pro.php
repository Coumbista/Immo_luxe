<?php

namespace GST\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat_pro
 *
 * @ORM\Table(name="contrat_pro")
 * @ORM\Entity(repositoryClass="GST\ImmobilierBundle\Repository\Contrat_proRepository")
 */
class Contrat_pro
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
     * @var \DateTime
     *
     * @ORM\Column(name="datecontrat", type="datetime")
     */
    private $datecontrat;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=50)
     */
    private $duree;
 /**
     * @ORM\ManyToOne(targetEntity="GST\ImmobilierBundle\Entity\Proprietaire",inversedBy="contrat_pros")
     * @ORM\JoinColumn(nullable=false)   */

    private $proprietaire;
    /**
   * @ORM\ManyToOne(targetEntity="GST\ImmobilierBundle\Entity\Bien")
   * @ORM\JoinColumn(nullable=false)   */

  private $bienpro;


   
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
     * Set datecontrat
     *
     * @param \DateTime $datecontrat
     *
     * @return Contrat_pro
     */
    public function setDatecontrat($datecontrat)
    {
        $this->datecontrat = $datecontrat;

        return $this;
    }

    /**
     * Get datecontrat
     *
     * @return \DateTime
     */
    public function getDatecontrat()
    {
        return $this->datecontrat;
    }

    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return Contrat_pro
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Contrat_pro
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set proprietaire
     *
     * @param \GST\ImmobilierBundle\Entity\Proprietaire $proprietaire
     *
     * @return Contrat_pro
     */
    public function setProprietaire(\GST\ImmobilierBundle\Entity\Proprietaire $proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return \GST\ImmobilierBundle\Entity\Proprietaire
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

   

    /**
     * Set bienpro
     *
     * @param \GST\ImmobilierBundle\Entity\Bien $bienpro
     *
     * @return Contrat_pro
     */
    public function setBienpro(\GST\ImmobilierBundle\Entity\Bien $bienpro)
    {
        $this->bienpro = $bienpro;

        return $this;
    }

    /**
     * Get bienpro
     *
     * @return \GST\ImmobilierBundle\Entity\Bien
     */
    public function getBienpro()
    {
        return $this->bienpro;
    }
}
