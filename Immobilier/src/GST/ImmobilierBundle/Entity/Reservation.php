<?php

namespace GST\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="GST\ImmobilierBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @ORM\Column(name="datereservation", type="date")
     */
    private $datereservation;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;
  
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
     * Set datereservation
     *
     * @param \DateTime $datereservation
     *
     * @return Reservation
     */
    public function setDatereservation($datereservation)
    {
        $this->datereservation = $datereservation;

        return $this;
    }

    /**
     * Get datereservation
     *
     * @return \DateTime
     */
    public function getDatereservation()
    {
        return $this->datereservation;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bien = new \Doctrine\Common\Collections\ArrayCollection();
        $this->client = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add bien
     *
     * @param \GST\ImmobilierBundle\Entity\Bien $bien
     *
     * @return Reservation
     */
    public function addBien(\GST\ImmobilierBundle\Entity\Bien $bien)
    {
        $this->bien[] = $bien;

        return $this;
    }

    /**
     * Remove bien
     *
     * @param \GST\ImmobilierBundle\Entity\Bien $bien
     */
    public function removeBien(\GST\ImmobilierBundle\Entity\Bien $bien)
    {
        $this->bien->removeElement($bien);
    }

    /**
     * Get bien
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBien()
    {
        return $this->bien;
    }

    /**
     * Add client
     *
     * @param \GST\ImmobilierBundle\Entity\Client $client
     *
     * @return Reservation
     */
    public function addClient(\GST\ImmobilierBundle\Entity\Client $client)
    {
        $this->client[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \GST\ImmobilierBundle\Entity\Client $client
     */
    public function removeClient(\GST\ImmobilierBundle\Entity\Client $client)
    {
        $this->client->removeElement($client);
    }

    /**
     * Get client
     *
     * @return \Doctrine\Common\Collections\Collection
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
     * @return Reservation
     */
    public function setBien(\GST\ImmobilierBundle\Entity\Bien $bien)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Set client
     *
     * @param \GST\ImmobilierBundle\Entity\Client $client
     *
     * @return Reservation
     */
    public function setClient(\GST\ImmobilierBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }
}
