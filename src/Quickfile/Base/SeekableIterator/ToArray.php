<?php
namespace Quickfile\Base\SeekableIterator;

use Quickfile\Base\Object\ToArray as ObjectToArray;

abstract class ToArray extends \Quickfile\Base\SeekableIterator
{
    /**
     * Overrides the parent add() method and enforces use of Portal_Base_Object_ToArray.
     *
     * @param  ObjectToArray $object
     * @return Iterator
     */
    public function add(ObjectToArray $object)
    {
        return parent::add($object);
    }

    /**
     * Returns the iterator data as an array. If $recursive is true,
     * it will also call the toArray method on the iterator data.
     *
     * @param  bool $recursive Defaults to true
     * @return array
     */
    public function toArray($recursive = true)
    {
        $return = array();
        foreach ($this as $record) {
            if (($record instanceof ObjectToArray) && (true === $recursive)) {
                $return[] = $record->toArray();
            } else {
                $return[] = $record;
            }
        }

        return $return;
    }
    
    /**
     * Gets us a random object from this result-set.
     * 
     * @return ObjectToArray
     */
    public function getRandomObject()
    {
        list($key) = array_rand($this->toArray(), 1);
        
        return $this->seek($key)->current();
    }
}