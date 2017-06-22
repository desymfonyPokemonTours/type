<?php

namespace Desymfony\Type\Domain\Exception;

class TypeNotFoundException extends \Exception
{
    public function __construct($typeId)
    {
        parent::__construct('Type not found with id: '.$typeId);
    }
}
