<?php

namespace GST\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagepro
 *
 * @ORM\Table(name="imagepro")
 * @ORM\Entity(repositoryClass="GST\ImmobilierBundle\Repository\ImageproRepository")
 */
class Imagepro
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
     * @ORM\Column(name="image", type="string", length=50)
     */
    private $image;
/**

   * @ORM\ManyToOne(targetEntity = "GST\ImmobilierBundle\Entity\BienPro",  inversedBy="imagepros")
   *  * @ORM\JoinColumn(nullable=false)

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
     * Set image
     *
     * @param string $image
     *
     * @return Imagepro
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set bienpro
     *
     * @param \GST\ImmobilierBundle\Entity\BienPro $bienpro
     *
     * @return Imagepro
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
