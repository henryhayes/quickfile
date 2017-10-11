<?php
namespace Quickfile\Api\Model\Client;

class Preferences extends ModelAbstract
{
    /**
     * Client Contact First Name
     *
     * @var string
     */
    private $defaultSendMethod;

    /**
     * Client Contact First Name
     *
     * @var string
     */
    private $defaultCurrency;

    /**
     * Client Contact First Name
     *
     * @var string
     */
    private $defaultTerm;

    /**
     * Client Contact First Name
     *
     * @var string
     */
    private $paymentRestrictions;

    /**
     * @return string
     */
    public function getDefaultSendMethod()
    {
        return $this->defaultSendMethod;
    }

    /**
     * @param string $defaultSendMethod
     */
    public function setDefaultSendMethod($defaultSendMethod)
    {
        $this->defaultSendMethod = $defaultSendMethod;
    }

    /**
     * @return string
     */
    public function getDefaultCurrency()
    {
        return $this->defaultCurrency;
    }

    /**
     * @param string $defaultCurrency
     */
    public function setDefaultCurrency($defaultCurrency)
    {
        $this->defaultCurrency = $defaultCurrency;
    }

    /**
     * @return string
     */
    public function getDefaultTerm()
    {
        return $this->defaultTerm;
    }

    /**
     * @param string $defaultTerm
     */
    public function setDefaultTerm($defaultTerm)
    {
        $this->defaultTerm = $defaultTerm;
    }

    /**
     * @return string
     */
    public function getPaymentRestrictions()
    {
        return $this->paymentRestrictions;
    }

    /**
     * @param string $paymentRestrictions
     */
    public function setPaymentRestrictions($paymentRestrictions)
    {
        $this->paymentRestrictions = $paymentRestrictions;
    }
}