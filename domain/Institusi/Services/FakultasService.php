<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 02/05/20
 * Time: 8:39
 */

namespace Domain\Institusi\Services;


use Doctrine\ORM\EntityManager;
use Domain\BaseService;
use Domain\Institusi\Fakultas;
use Domain\Institusi\Repositories\FakultasRepository;
use Illuminate\Support\Facades\Validator;

class FakultasService extends BaseService
{
    private $entityManager;

    private $fakultasRepository;

    // Todo: Fix this validation, cause there will be organization with same fakultas name
    private $createValidationRules = [
        'nama' => 'required|unique:\Domain\Institusi\Fakultas,nama,{$id},id,deletedAt,NULL',
        'kode' => 'required|unique:\Domain\Institusi\Fakultas,kode,{$id},id,deletedAt,NULL',
    ];

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->fakultasRepository = $entityManager->getRepository(Fakultas::class);
        parent::__construct($entityManager, $this->fakultasRepository);
    }

    public function createValidation($requestData)
    {
        return Validator::make($requestData, $this->createValidationRules);
    }
}