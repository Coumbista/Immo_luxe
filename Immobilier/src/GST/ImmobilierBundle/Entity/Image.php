<?php

namespace GST\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="GST\ImmobilierBundle\Repository\ImageRepository")
 */
class Image
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

   * @ORM\ManyToOne(targetEntity = "GST\ImmobilierBundle\Entity\Bien",  inversedBy="images")
   *  * @ORM\JoinColumn(nullable=false)

   */

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
     * Set image
     *
     * @param string $image
     *
     * @return Image
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
     * Set bien
     *
     * @param \GST\ImmobilierBundle\Entity\Bien $bien
     *
     * @return Image
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
        return $this->image;
    }


    
}
