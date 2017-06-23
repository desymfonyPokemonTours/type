<?php

namespace Desymfony\Type\Infrastructure\Persistence\Doctrine\Domain\Repository;

use Desymfony\Doctrine\EntityRepository\DesymfonyEntityRepository;
use Desymfony\Type\Domain\Exception\TypeNotFoundException;
use Desymfony\Type\Domain\Repository\TypeRepository;
use Desymfony\Type\Infrastructure\Persistence\Doctrine\Domain\Entity\DoctrineType;

class DoctrineTypeRepository extends DesymfonyEntityRepository implements TypeRepository
{
    public function getById($typeId)
    {
        $type = $this->find($typeId);

        if (null === $type) {
            throw new TypeNotFoundException($typeId);
        }

        return $type;
    }

    protected function getEntityNamespace()
    {
        return DoctrineType::class;
    }
}
