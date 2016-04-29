<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Don
 *
 * @ORM\Table(name="don")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DonRepository")
 */
class Don
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
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Donnateur")
     */
    private $donnateur;
    
    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=2, scale=2, nullable=true)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="modePaiement", type="string", length=50, nullable=true)
     */
    private $modePaiement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaires", type="string", length=255, nullable=true)
     */
    private $commentaires;

    /**
     * @var int
     *
     * @ORM\Column(name="recuNum", type="integer", nullable=true)
     */
    private $recuNum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="recuDate", type="date", nullable=true)
     */
    private $recuDate;


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
     * Set montant
     *
     * @param string $montant
     *
     * @return Don
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set modePaiement
     *
     * @param string $modePaiement
     *
     * @return Don
     */
    public function setModePaiement($modePaiement)
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    /**
     * Get modePaiement
     *
     * @return string
     */
    public function getModePaiement()
    {
        return $this->modePaiement;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Don
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set commentaires
     *
     * @param string $commentaires
     *
     * @return Don
     */
    public function setCommentaires($commentaires)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return string
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }

    /**
     * Set recuNum
     *
     * @param integer $recuNum
     *
     * @return Don
     */
    public function setRecuNum($recuNum)
    {
        $this->recuNum = $recuNum;

        return $this;
    }

    /**
     * Get recuNum
     *
     * @return int
     */
    public function getRecuNum()
    {
        return $this->recuNum;
    }

    /**
     * Set recuDate
     *
     * @param \DateTime $recuDate
     *
     * @return Don
     */
    public function setRecuDate($recuDate)
    {
        $this->recuDate = $recuDate;

        return $this;
    }

    /**
     * Get recuDate
     *
     * @return \DateTime
     */
    public function getRecuDate()
    {
        return $this->recuDate;
    }
}

