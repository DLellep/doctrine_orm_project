<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
* @Entity
*/

/* sama mõte mis author*/

class Tag {
	/**
	* @Column(type="integer")
	* @Id
	* @GeneratedValue
	*/
	private $id;

	/**
	* @Column(type="string")
	*/
	private $name;

	public function getId(){
		return $this->id;
	}

	public function setId($value){
		$this->id = $value;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($value){
		$this->name = $value;
	}
}