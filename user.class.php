<?php

class User{
	private $name;
	private $address;
	private $district;
	private $cep;
	private $city;
	private $country;

	public function getname(){
		return $this->name;
	}

	public function setname($name){
		$this->name = $name;
	}

	public function getaddress(){
		return $this->address;
	}

	public function setaddress($address){
		$this->address = $address;
	}

	public function getDistrict(){
		return $this->district;
	}
	
	public function setDistrict($district){
		$this->district = $district;
		return $this;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setCep($cep){
		$this->cep = $cep;
		return $this;
	}

	public function getCity(){
		return $this->city;
	}

	public function setCity($city){
		$this->city = $city;
		return $this;
	}

	public function getCountry(){
		return $this->country;
	}

	public function setCountry($country){
		$this->country = $country;
		return $this;
	}
}

?>