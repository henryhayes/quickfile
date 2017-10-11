<?php
namespace Quickfile\Api\Request;

abstract class SearchParameter extends ModelAbstract
{
    /**
     * @var string
     */
    private $returnCount        = 10;
    private $offset             = 0;
    private $orderResultsBy     = null;
    private $orderDirection     = 'ASC';

    /**
     * Contains values considered valid for "order results by", may be overridden
     * in child classes for a basic orderResultsBy validation.
     *
     * @var array
     */
    protected $orderResultsByValues = [];

    /**
     * Contains values considered valid for order direction.
     *
     * @var array
     */
    protected $orderDirectionValues = [
        'ASC',
        'DESC'
    ];

    /**
     * @param int $returnCount
     */
    public function setReturnCount($returnCount)
    {
        $this->returnCount = $returnCount;
    }

    /**
     * @param int $offset
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
    }

    /**
     * @param null $orderResultsBy
     * @return self
     */
    public function setOrderResultsBy($orderResultsBy)
    {
        if (in_array($orderResultsBy, $this->orderResultsByValues)) {
            $this->orderResultsBy = $orderResultsBy;
        }

        return $this;
    }

    /**
     * @param string $orderDirection
     * @return self
     */
    public function setOrderDirection($orderDirection)
    {
        if (in_array($orderDirection, $this->orderDirectionValues)) {
            $this->orderDirection = $orderDirection;
        }
        $this->orderDirection = $orderDirection;

        return $this;
    }
}