<?php
namespace Quickfile\Api\Request;

class UniqueId
{
    private $uniqueId;

    private function generate()
    {
        if (!$this->uniqueId) {
            $this->uniqueId = uniqid('', true);
        }

        return $this->uniqueId;
    }

    public function get()
    {
        return $this->generate();
    }
}