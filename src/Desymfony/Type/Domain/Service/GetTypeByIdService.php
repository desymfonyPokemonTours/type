<?php

namespace Desymfony\Type\Domain\Service;

use Desymfony\Type\Domain\Repository\TypeRepository;

class GetTypeByIdService
{
    /**
     * @var TypeRepository
     */
    private $typeRepository;

    public function __construct(TypeRepository $typeRepository)
    {
        $this->typeRepository = $typeRepository;
    }

    public function execute($typeId)
    {
        return $this->typeRepository->getById($typeId);
    }
}
