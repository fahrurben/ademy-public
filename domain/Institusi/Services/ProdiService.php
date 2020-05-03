<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 03/05/20
 * Time: 15:07
 */

namespace Domain\Institusi\Services;


use Doctrine\ORM\EntityManager;
use Domain\BaseService;
use Domain\Institusi\Prodi;

class ProdiService extends BaseService
{
    private $entityManager;

    private $prodiRepository;

    private $createValidationRules = [
        'nama' => 'required|unique:\Domain\Institusi\Prodi,nama,{$id},id,deletedAt,NULL',
        'kode' => 'required|unique:\Domain\Institusi\Prodi,kode,{$id},id,deletedAt,NULL',
    ];

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->prodiRepository = $entityManager->getRepository(Prodi::class);
        parent::__construct($entityManager, $this->prodiRepository);
    }
}