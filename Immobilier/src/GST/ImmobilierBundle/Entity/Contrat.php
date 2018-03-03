<?php

namespace GST\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="GST\ImmobilierBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @ORM\Column(name="caution", type="integer")
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string")
     */
    private $duree;
     /**
     * @ORM\ManyToOne(targetEntity="GST\ImmobilierBundle\Entity\Client",inversedBy="contrats")
     * @ORM\JoinColumn(nullable=false)   */

    private $client;
     /**

   * @ORM\OneToMany(targetEntity = "GST\ImmobilierBundle\Entity\Paiement", mappedBy = "contrat")
   */

  private $paiements;
  /**
   * @ORM\ManyToOne(targetEntity="GST\ImmobilierBundle\Entity\Bien")
   * @ORM\JoinColumn(nullable=false)   */

    private $bien;

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
     * @return Contrat
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
     * Set caution
     *
     * @param integer $caution
     *
     * @return Contrat
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution
     *
     * @return int
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set duree
     *
     * @param \DateTime $duree
     *
     * @return Contrat
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return \DateTime
     */
    public function getDuree()
    {
        return $this->duree;
    }

   

    /**
     * Set client
     *
     * @param \GST\ImmobilierBundle\Entity\Client $client
     *
     * @return Contrat
     */
    public function setClient(\GST\ImmobilierBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \GST\ImmobilierBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
   

    /**
     * Set bien
     *
     * @param \GST\ImmobilierBundle\Entity\Bien $bien
     *
     * @return Contrat
     */
    public function setBien(\GST\ImmobilierBundle\Entity\Bien $bien)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \GST\ImmobilierBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }
    public function __toString(){
        return $this->duree;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->paiements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add paiement
     *
     * @param \GST\ImmobilierBundle\Entity\Paiement $paiement
     *
     * @return Contrat
     */
    public function addPaiement(\GST\ImmobilierBundle\Entity\Paiement $paiement)
    {
        $this->paiements[] = $paiement;

        return $this;
    }

    /**
     * Remove paiement
     *
     * @param \GST\ImmobilierBundle\Entity\Paiement $paiement
     */
    public function removePaiement(\GST\ImmobilierBundle\Entity\Paiement $paiement)
    {
        $this->paiements->removeElement($paiement);
    }

    /**
     * Get paiements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPaiements()
    {
        return $this->paiements;
    }
}
