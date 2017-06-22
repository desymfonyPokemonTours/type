<?php

namespace Desymfony\Type\Infrastructure\DependencyInjection\Symfony;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TypeBundle extends Bundle
{
    /**
     * Returns the bundle's container extension class.
     *
     * @return string
     */
    protected function getContainerExtensionClass()
    {
        return TypeExtension::class;
    }
}
