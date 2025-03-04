<?php

namespace App\Model;

use DateTime;

class Contact
{
    
	private ?string $firstname;
    private ?string $lastname;
    private ?string $email;
    // private ?string $phone;
    private ?string $message;
    private ?DateTime $date;

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $value): void
    {
        $this->firstname = $value;
    } 

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $value): void
    {
        $this->lastname = $value;
    }

    public function getEmail(): ?string
	{
		return $this->email;
	}

	public function setEmail(?string $value): void
	{
		$this->email = $value;
	}

	// je voulais que telephone puisse être null, mais je ne trouve pas comment faire et cela bloque au moment du listage. je l'ai enlevé partout
    // public function getPhone(): ?string
	// {
	// 	return $this->phone;
	// }

	// public function setPhone(?string $value): void
	// {
	// 	$this->phone = $value;
	// }

    public function getMessage(): ?string
	{
		return $this->message;
	}

	public function setMessage(?string $value): void
	{
		$this->message = $value;
	}

	public function getDate(): ?DateTime
	{
		return $this->date;
	}

	public function setDate(?DateTime $value): void
	{
		$this->date = $value;
	}
}