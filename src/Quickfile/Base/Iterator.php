<?php
namespace Quickfile\Base;

abstract class Iterator implements \Iterator, \Countable
{
    /**
     * Iterator pointer.
     *
     * @var integer
     */
    protected $_pointer = 0;

    /**
     * Contains the data for the iterable object.
     *
     * @var array
     */
    protected $_data = array();

    /**
     * Object instantiation. If an array of Portal_Base_Object objects
     * is passed as the parameter, they are added to the iterator.
     *
     * @param array $data
     */
    public function __construct(array $data = null)
    {
        if (!is_null($data) && count($data)) {
            foreach ($data as $object) {
                $this->add($object);
            }
        }
    }

    /**
     * Adds an object.
     *
     * @param  Object $object
     * @return Iterator
     */
    public function add(Portal_Base_Object $object)
    {
        $this->_data[] = $object;

        return $this;
    }

    /**
     * Rewind the iterator to the specified starting offset
     *
     * @return Iterator
     */
    public function rewind()
    {
        $this->_pointer = 0;

        return $this;
    }

    /**
     * Check whether the current element is valid
     *
     * @return bool Returns true on success or false on failure.
     */
    public function valid()
    {
        return (($this->_pointer >= 0) && ($this->_pointer < $this->count()));
    }

    /**
     * Get current key
     *
     * @return mixed the key for the current item.
     */
    public function key()
    {
        return $this->_pointer;
    }

    /**
     * Get current element
     *
     * @return mixed the current element or null if there is none.
     */
    public function current()
    {
        if (false === $this->valid()) {
            return null;
        }

        // return the row object
        return $this->_data[$this->_pointer];
    }

    /**
     * Move the iterator forward
     *
     * @return void
     */
    public function next()
    {
        ++$this->_pointer;
    }

    /**
     * Returns the number of elements in the collection.
     *
     * Implements Countable::count()
     *
     * @return int
     */
    public function count()
    {
        return count($this->_data);
    }
}