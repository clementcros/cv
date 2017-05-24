<?php

namespace CamionsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poidslourd
 *
 * @ORM\Table(name="poidslourd")
 * @ORM\Entity(repositoryClass="CamionsBundle\Repository\PoidslourdRepository")
 */
class Poidslourd
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
     * @ORM\Column(name="Marque", type="text")
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="Immatriculation", type="text")
     */
    private $immatriculation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Mine", type="date")
     */
    private $dateMine;

    /**
     * @var string
     *
     * @ORM\Column(name="Cout_Normal", type="string", length=255)
     */
    private $coutNormal;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire_Cout_Normal", type="text", nullable=true)
     */
    private $commentaireCoutNormal;

    /**
     * @var string
     *
     * @ORM\Column(name="Cout_Supplementaire", type="string", length=255)
     */
    private $coutSupplementaire;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire_Cout_supplementaire", type="text", nullable=true)
     */
    private $commentaireCoutSupplementaire;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set marque
     *
     * @param string $marque
     * @return Poidslourd
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set immatriculation
     *
     * @param string $immatriculation
     * @return Poidslourd
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    /**
     * Get immatriculation
     *
     * @return string 
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }

    /**
     * Set dateMine
     *
     * @param \DateTime $dateMine
     * @return Poidslourd
     */
    public function setDateMine($dateMine)
    {
        $this->dateMine = $dateMine;

        return $this;
    }

    /**
     * Get dateMine
     *
     * @return \DateTime 
     */
    public function getDateMine()
    {
        return $this->dateMine;
    }

    /**
     * Set coutNormal
     *
     * @param string $coutNormal
     * @return Poidslourd
     */
    public function setCoutNormal($coutNormal)
    {
        $this->coutNormal = $coutNormal;

        return $this;
    }

    /**
     * Get coutNormal
     *
     * @return string 
     */
    public function getCoutNormal()
    {
        return $this->coutNormal;
    }

    /**
     * Set commentaireCoutNormal
     *
     * @param string $commentaireCoutNormal
     * @return Poidslourd
     */
    public function setCommentaireCoutNormal($commentaireCoutNormal)
    {
        $this->commentaireCoutNormal = $commentaireCoutNormal;

        return $this;
    }

    /**
     * Get commentaireCoutNormal
     *
     * @return string 
     */
    public function getCommentaireCoutNormal()
    {
        return $this->commentaireCoutNormal;
    }

    /**
     * Set coutSupplementaire
     *
     * @param string $coutSupplementaire
     * @return Poidslourd
     */
    public function setCoutSupplementaire($coutSupplementaire)
    {
        $this->coutSupplementaire = $coutSupplementaire;

        return $this;
    }

    /**
     * Get coutSupplementaire
     *
     * @return string 
     */
    public function getCoutSupplementaire()
    {
        return $this->coutSupplementaire;
    }

    /**
     * Set commentaireCoutSupplementaire
     *
     * @param string $commentaireCoutSupplementaire
     * @return Poidslourd
     */
    public function setCommentaireCoutSupplementaire($commentaireCoutSupplementaire)
    {
        $this->commentaireCoutSupplementaire = $commentaireCoutSupplementaire;

        return $this;
    }

    /**
     * Get commentaireCoutSupplementaire
     *
     * @return string 
     */
    public function getCommentaireCoutSupplementaire()
    {
        return $this->commentaireCoutSupplementaire;
    }
}
