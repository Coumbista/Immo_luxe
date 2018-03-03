<?php

namespace GST\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="GST\ImmobilierBundle\Repository\BienRepository")
 */
class Bien
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
     * @ORM\Column(name="nombien", type="string", length=50)
     */
    private $nombien;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_loc", type="integer")
     */
    private $prix_loc;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="idparentbien", type="integer")
     */
    private $idparentbien;
/**

   * @ORM\ManyToOne(targetEntity="GST\ImmobilierBundle\Entity\Localite")

   * @ORM\JoinColumn(name = "localite_id", referencedColumnName = "id")

   */

  private $localite;
    /**

   * @ORM\ManyToOne(targetEntity="GST\ImmobilierBundle\Entity\Typebien")

   * @ORM\JoinColumn(name = "typebien_id", referencedColumnName = "id")

   */

  private $typebien;
 /**

   * @ORM\OneToMany(targetEntity = "GST\ImmobilierBundle\Entity\Image", mappedBy = "bien")
   */

  private $images;
  

  private $reservations;
 

  private $contrats;
  
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
     * Set nombien
     *
     * @param string $nombien
     *
     * @return Bien
     */
    public function setNombien($nombien)
    {
        $this->nombien = $nombien;

        return $this;
    }

    /**
     * Get nombien
     *
     * @return string
     */
    public function getNombien()
    {
        return $this->nombien;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bien
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
     * Set prix_loc
     *
     * @param integer $prix_loc
     *
     * @return Bien
     */
    public function setPrix_loc($prix_loc)
    {
        $this->prix_loc = $prix_loc;

        return $this;
    }

    /**
     * Get prix_loc
     *
     * @return int
     */
    public function getPrix_loc()
    {
        return $this->prix_loc;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Bien
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
     * Set idparentbien
     *
     * @param integer $idparentbien
     *
     * @return Bien
     */
    public function setIdparentbien($idparentbien)
    {
        $this->idparentbien = $idparentbien;

        return $this;
    }

    /**
     * Get idparentbien
     *..
     * @return int
     */
    public function getIdparentbien()
    {
        return $this->idparentbien;
    }

    /**
     * Set localite
     *
     * @param \GST\ImmobilierBundle\Entity\Localite $localite
     *
     * @return Bien
     */
    public function setLocalite(\GST\ImmobilierBundle\Entity\Localite $localite = null)
    {
        $this->localite = $localite;

        return $this;
    }
  

    /**
     * Get localite
     *
     * @return \GST\ImmobilierBundle\Entity\Localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set typebien
     *
     * @param \GST\ImmobilierBundle\Entity\Typebien $typebien
     *
     * @return Bien
     */
    public function setTypebien(\GST\ImmobilierBundle\Entity\Typebien $typebien = null)
    {
        $this->typebien = $typebien;

        return $this;
    }

    /**
     * Get typebien
     *
     * @return \GST\ImmobilierBundle\Entity\Typebien
     */
    public function getTypebien()
    {
        return $this->typebien;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add image
     *
     * @param \GST\ImmobilierBundle\Entity\Image $image
     *
     * @return Bien
     */
    public function addImage(\GST\ImmobilierBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \GST\ImmobilierBundle\Entity\Image $image
     */
    public function removeImage(\GST\ImmobilierBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
   

    /**
     * Set prixLoc
     *
     * @param integer $prixLoc
     *
     * @return Bien
     */
    public function setPrixLoc($prixLoc)
    {
        $this->prix_loc = $prixLoc;

        return $this;
    }

    /**
     * Get prixLoc
     *
     * @return integer
     */
    public function getPrixLoc()
    {
        return $this->prix_loc;
    }

    /**
     * Add reservation
     *
     * @param \GST\ImmobilierBundle\Entity\Image $reservation
     *
     * @return Bien
     */
    public function addReservation(\GST\ImmobilierBundle\Entity\Image $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \GST\ImmobilierBundle\Entity\Image $reservation
     */
    public function removeReservation(\GST\ImmobilierBundle\Entity\Image $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Add contrat
     *
     * @param \GST\ImmobilierBundle\Entity\Reservation $contrat
     *
     * @return Bien
     */
    public function addContrat(\GST\ImmobilierBundle\Entity\Reservation $contrat)
    {
        $this->contrats[] = $contrat;

        return $this;
    }

    /**
     * Remove contrat
     *
     * @param \GST\ImmobilierBundle\Entity\Reservation $contrat
     */
    public function removeContrat(\GST\ImmobilierBundle\Entity\Reservation $contrat)
    {
        $this->contrats->removeElement($contrat);
    }

    /**
     * Get contrats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContrats()
    {
        return $this->contrats;
    }
    public function __toString(){
        return $this->nombien;
    }
}
