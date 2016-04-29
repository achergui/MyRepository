<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Config\Definition\IntegerNode;

/**
 * Donnateur
 * 
 * @ORM\Table(name="donnateur")
 * @ORM\Entity
 */

class Donnateur
{
	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Adresse")
	 */
	private $adresse;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="civilite", type="string", length=3)
	 */
	private $civilite;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="nom", type="string", length=50)
	 */
	private $nom;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="prenom", type="string", length=50)
	 */
	private $prenom;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="fonction", type="string", length=50)
	 */
	private $fonction;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="lieuDeNaissance", type="string", length=50)
	 */
	private $lieuDeNaissance;
	
	/**
	 * @var string
	 *
	 * @ORM\Column(name="dateDeNaissance", type="date", nullable=true)
	 */
	private $dateDeNaissance;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getCivilite() {
		return $this->civilite;
	}
	public function setCivilite($civilite) {
		$this->civilite = $civilite;
		return $this;
	}
	public function getNom() {
		return $this->nom;
	}
	public function setNom($nom) {
		$this->nom = $nom;
		return $this;
	}
	public function getPrenom() {
		return $this->prenom;
	}
	public function setPrenom($prenom) {
		$this->prenom = $prenom;
		return $this;
	}
	public function getFonction() {
		return $this->fonction;
	}
	public function setFonction($fonction) {
		$this->fonction = $fonction;
		return $this;
	}
	public function getLieuDeNaissance() {
		return $this->lieuDeNaissance;
	}
	public function setLieuDeNaissance($lieuDeNaissance) {
		$this->lieuDeNaissance = $lieuDeNaissance;
		return $this;
	}
	public function getDateDeNaissance() {
		return $this->dateDeNaissance;
	}
	public function setDateDeNaissance($dateDeNaissance) {
		$this->dateDeNaissance = $dateDeNaissance;
		return $this;
	}
	public function getAdresse() {
		return $this->adresse;
	}
	public function setAdresse($adresse) {
		$this->adresse = $adresse;
		return $this;
	}
	public function getDons() {
		return $this->dons;
	}
	public function setDons($dons) {
		$this->dons = $dons;
		return $this;
	}
	
	
	
	
}