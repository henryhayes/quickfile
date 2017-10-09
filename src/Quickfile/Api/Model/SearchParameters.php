<?php
namespace Quickfile\Api\Request;

abstract class SearchParameters
{
    /**
     * @var string
     */
    private $returnCount        = '10';
    private $offset             = '0';
    private $orderResultsBy     = null;
    private $orderDirection     = 'ASC';
}