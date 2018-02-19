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
     * @ORM\Column(name="datecontrat", type="date")
     */
    private $datecontrat;

    /**
     * @var int
     *
     * @ORM\Column(name="caution", type="integer")
     */
    private $caution;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree", type="date")
     */
    private $duree;

  
  /**
   * @ORM\ManyToOne(targetEntity="GST\ImmobilierBundle\Entity\Client")
   * @ORM\JoinColumn(nullable=false)   */

  private $client;

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
}
