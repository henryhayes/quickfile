<?php
namespace Quickfile\Api\Model\Client;

class Contact extends ModelAbstract
{
    /**
     * Client Contact Id
     *
     * @var int
     */
    private $clientContactID;

    /**
     * Client Contact First Name
     *
     * @var string
     */
    private $firstName;

    /**
     * Client Contact Surname
     *
     * @var string
     */
    private $surname;

    /**
     * Client Contact Email
     *
     * @var string
     */
    private $email;

    /**
     * Client Contact Password
     *
     * @var string
     */
    private $password;

    /**
     * Client Contact Telephone Numbers
     *
     * @var Contact\TelephoneNumbers
     */
    private $telephoneNumbers;

    /**
     * @return int
     */
    public function getClientContactID()
    {
        return $this->clientContactID;
    }

    /**
     * @param int $clientContactID
     */
    public function setClientContactID($clientContactID)
    {
        $this->clientContactID = $clientContactID;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return Contact\TelephoneNumbers
     */
    public function getTelephoneNumbers()
    {
        return $this->telephoneNumbers;
    }

    /**
     * @param Contact\TelephoneNumbers $telephoneNumbers
     */
    public function setTelephoneNumbers($telephoneNumbers)
    {
        $this->telephoneNumbers = $telephoneNumbers;
    }
}