<?php
namespace Quickfile\Base;

abstract class SeekableIterator extends Iterator
    implements \SeekableIterator
{
    /**
     * Seek to the given position
     *
     * @param position int <p>
     * The position to seek to.
     * </p>
     * @return int the offset position after seeking.
     */
    public function seek($position)
    {
        $position = (int) $position;
        if ($position < 0 || $position >= $this->count()) {
            throw new Exception("Illegal index {$position}");
        }
        $this->_pointer = $position;

        return $this;
    }
}