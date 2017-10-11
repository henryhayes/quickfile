<?php
namespace Quickfile\Base\Object;

abstract class ToArray extends \Quickfile\Base\Object
{
    /**
     * Transforms this object into an array and returns it.
     *
     * @return array
     */
    public function toArray()
    {
        $retval = array();
        foreach ($this->_data as $name => $data) {
            $retval[$name] = $this->get($name);
        }

        return $retval;
    }
}