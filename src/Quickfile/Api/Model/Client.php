<?php
namespace Quickfile\Api\Model;

class Client extends ModelAbstract
{
    /**
     * Client ID
     *
     * @var int
     */
    private $clientId;

    /**
     * Client Company Name
     *
     * @var string
     */
    private $companyName;

    /**
     * Client Account Reference
     *
     * @var string
     */
    private $accountReference;

    /**
     * Client Address Line 1
     *
     * @var string
     */
    private $addressLine1;

    /**
     * Client Address Line 2
     *
     * @var string
     */
    private $addressLine2;

    /**
     * Client Address Line 3
     *
     * @var string
     */
    private $addressLine3;

    /**
     * Client Town
     *
     * @var string
     */
    private $town;

    /**
     * Client Country ISO
     *
     * @var string
     */
    private $countryIso;

    /**
     * Client Post Code
     *
     * @var string
     */
    private $postCode;

    /**
     * Client VAT Number
     *
     * @var string
     */
    private $vatNumber;

    /**
     * Client VAT Exempt
     *
     * @var bool
     */
    private $vatExempt;

    /**
     * Client Company Name
     *
     * @var string
     */
    private $allowAttachPDF;
}