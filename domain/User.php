<?php
require_once dirname(__FILE__) . "/../domain/Person.php";

class User extends Person
{
    private string $email;
    private string $password;
    private string $passwordConfirmation;
    private string $activationCode;
    private bool $isActive;

    public function __construct(string $email, string $password, string $passwordConfirmation, string $firstName, string $lastName)
    {
        parent::__construct($firstName, $lastName);

        $this->email = $email;
        $this->password = $password;
        $this->passwordConfirmation = $passwordConfirmation;
        $this->isActive = false;
    }

    public function generateActivationCode(): string
    {
        return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(8 / strlen($x)))), 1, 8);
    }

    public function isNotValid(): bool
    {
        return $this->isNotValidEmail() || $this->isNotValidFirstName() || $this->isNotValidLastName() || $this->isNotValidPassword() || $this->isNotValidPasswordConfirmation() || $this->passwordsNotEqual();
    }

    public function isNotValidEmail(): bool
    {
        $isEmpty = empty($this->getEmail());

        return $isEmpty || !filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL);
    }

    public function isNotValidFirstName(): bool
    {
        return empty($this->getFirstName());
    }

    public function isNotValidLastName(): bool
    {
        return empty($this->getLastName());;
    }

    public function isNotValidPassword(): bool
    {
       return empty($this->getPassword());;
    }

    public function isNotValidPasswordConfirmation(): bool
    {
        return empty($this->getPasswordConfirmation());;
    }

    public function passwordsNotEqual(): bool
    {
        return $this->getPassword() != $this->getPasswordConfirmation();
    }

    public function isActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPasswordConfirmation(): string
    {
        return $this->passwordConfirmation;
    }

    public function setPasswordConfirmation(string $passwordConfirmation): void
    {
        $this->passwordConfirmation = $passwordConfirmation;
    }

    public function getActivationCode(): string
    {
        return $this->activationCode;
    }

    public function setActivationCode(string $activationCode): void
    {
        $this->activationCode = $activationCode;
    }
}