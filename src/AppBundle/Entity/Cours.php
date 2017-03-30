<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CoursRepository")
 */
class Cours
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
     * @ORM\Column(name="libellecours", type="string", length=40)
     */
    private $libellecours;

    /**
     * @var int
     *
     * @ORM\Column(name="nbJours", type="integer")
     */
    private $nbJours;


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
     * Set libellecours
     *
     * @param string $libellecours
     *
     * @return Cours
     */
    public function setLibellecours($libellecours)
    {
        $this->libellecours = $libellecours;

        return $this;
    }

    /**
     * Get libellecours
     *
     * @return string
     */
    public function getLibellecours()
    {
        return $this->libellecours;
    }

    /**
     * Set nbJours
     *
     * @param integer $nbJours
     *
     * @return Cours
     */
    public function setNbJours($nbJours)
    {
        $this->nbJours = $nbJours;

        return $this;
    }

    /**
     * Get nbJours
     *
     * @return int
     */
    public function getNbJours()
    {
        return $this->nbJours;
    }
}
