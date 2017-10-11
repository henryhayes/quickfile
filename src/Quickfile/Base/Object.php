<?php
namespace Quickfile\Base;

abstract class Object implements \Countable, \ArrayAccess
{
    /**
     * The data in name/value pairs for the object.
     *
     * @var array
     */
    protected $_data = array();

    /**
     * Object instantiation. If an array of data is passed
     * as the parameter, they are added to the object.
     *
     * This object is capable of being read-only. To use this functionality, please
     * ensure that you set the _isReadOnly property to true when building your
     * child class.
     *
     * @param array $data An array of key=>value pairs of data.
     */
    public function __construct(array $data = null)
    {
        if (!is_null($data) && (count($data) > 0)) {
            foreach ($data as $name => $value) {
                $this->add($name, $value);
            }
        }
    }

    /**
     * Adds a virtual property.
     *
     * @param  mixed $name
     * @param  mixed $value
     * @return Object
     */
    public function add($name, $value)
    {
        $this->_data[$name] = $value;

        return $this;
    }

    /**
     * Gets a virtual class property value.
     *
     * @param  string $name
     * @throws \UnexpectedValueException
     * @return mixed
     */
    public function get($name)
    {
        if (false === $this->__isset($name)) {

            throw new \UnexpectedValueException("'{$name}' does not exist");
        }

        $value = $this->_data[$name];

        return $value;
    }

    /**
     * Removes a virtual property by name.
     *
     * @param  mixed $name
     * @return Object
     */
    public function remove($name)
    {
        if ($this->__isset($name)) {
            unset($this->_data[$name]);
        }

        return $this;
    }

    /**
     * Sets a virtual class property.
     *
     * @param  string $name
     * @param  string $value
     * @return void
     */
    public function __set($name, $value)
    {
        $this->add($name, $value);
    }

    /**
     * Magically gets a virtual class property value.
     *
     * @param  string $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->get($name);
    }

    /**
     * Unsets the value if it exists.
     *
     * @param  mixed $name
     * @return void
     */
    public function __unset($name)
    {
        $this->remove($name);
    }

    /**
     * Finds out if a virtual class property exists.
     *
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (false === array_key_exists($name, $this->_data)) {
            return false;
        }

        return true;
    }

    /**
     * Returns an integer of the amount of virtual properties
     * inside this object.
     *
     * @link http://www.php.net/manual/en/countable.count.php
     *
     * @return integer
     */
    public function count()
    {
        return count($this->_data);
    }

    /**
     * Finds out if an array element exists by offset/key name.
     *
     * @param offset $offset
     */
    public function offsetExists($offset)
    {
        return $this->__isset($offset);
    }

    /**
     * Gets an array element by offset/key name.
     *
     * @param  offset $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        $this->__get($offset);
    }

    /**
     * Sets an array element by offset/key name.
     *
     * @param mixed offset
     * @param mixed value
     */
    public function offsetSet($offset, $value)
    {
        $this->__set($offset, $value);
    }

    /**
     * Unsets an array element by offset/key name.
     *
     * @param offset $offset
     */
    public function offsetUnset($offset)
    {
        $this->__unset($offset);
    }

    /**
     * This object cannot be cast to a string. If you want your object
     * (that extends this one) to do so, please override __toString().
     *
     * @return Exception
     */
    public function __toString()
    {
        throw new \Exception('This object cannot be cast to a string');
    }
}