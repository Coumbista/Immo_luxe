<?php

namespace GST\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserve_pro
 *
 * @ORM\Table(name="reserve_pro")
 * @ORM\Entity(repositoryClass="GST\ImmobilierBundle\Repository\Reserve_proRepository")
 */
class Reserve_pro
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
     * @ORM\Column(name="datereservation", type="datetime")
     */
    private $datereservation;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    
    
 /**

   * @ORM\ManyToOne(targetEntity = "GST\ImmobilierBundle\Entity\Proprietaire")
   *  * @ORM\JoinColumn(nullable=false)

   */

  private $proprietaire;
  
   /**
   * @ORM\ManyToOne(targetEntity="GST\ImmobilierBundle\Entity\BienPro", inversedBy="reserve_pros")
   * @ORM\JoinColumn(nullable=false)
   */
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
     * Set datereservation
     *
     * @param \DateTime $datereservation
     *
     * @return Reserve_pro
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
     * @param boolean $etat
     *
     * @return Reserve_pro
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
     * Set proprietaire
     *
     * @param \GST\ImmobilierBundle\Entity\Proprietaire $proprietaire
     *
     * @return Reserve_pro
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
     * @param \GST\ImmobilierBundle\Entity\BienPro $bienpro
     *
     * @return Reserve_pro
     */
    public function setBienpro(\GST\ImmobilierBundle\Entity\BienPro $bienpro)
    {
        $this->bienpro = $bienpro;

        return $this;
    }

    /**
     * Get bienpro
     *
     * @return \GST\ImmobilierBundle\Entity\BienPro
     */
    public function getBienpro()
    {
        return $this->bienpro;
    }
}
