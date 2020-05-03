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
use Illuminate\Support\Facades\Validator;

class ProdiService extends BaseService
{
    private $entityManager;

    private $prodiRepository;

    protected $createValidationRules = [
        'nama' => 'required|unique:\Domain\Institusi\Prodi,nama,{$id},id,deletedAt,NULL',
        'kode' => 'required|unique:\Domain\Institusi\Prodi,kode,{$id},id,deletedAt,NULL',
        'fakultas_id' => 'required',
    ];

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->prodiRepository = $entityManager->getRepository(Prodi::class);
        parent::__construct($entityManager, $this->prodiRepository);
    }

    public function createValidation($requestData)
    {
        return Validator::make($requestData, $this->createValidationRules);
    }
}