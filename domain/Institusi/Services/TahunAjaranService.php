<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 06/05/20
 * Time: 8:20
 */

namespace Domain\Institusi\Services;

use Doctrine\ORM\EntityManager;
use Domain\BaseService;
use Domain\Exceptions\EntityNotFoundException;
use Domain\Institusi\Fakultas;
use Domain\Institusi\Repositories\TahunAjaranRepository;
use Domain\Institusi\TahunAjaran;
use Illuminate\Support\Facades\Validator;

class TahunAjaranService extends BaseService
{
    private $entityManager;

    private $tahunAjaranRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->tahunAjaranRepository = $entityManager->getRepository(TahunAjaran::class);
        parent::__construct($entityManager, $this->fakultasRepository);
    }

    public function createValidation($tahunAjaranObject)
    {
        $createValidationRules = [];
        return Validator::make($tahunAjaranObject, $createValidationRules);
    }

    public function updateValidation($tahunAjaranObject)
    {
        $updateValidationRules = [];

        return Validator::make($tahunAjaranObject, $updateValidationRules);
    }

    public function isExist($tahunAjaranObject, $id = null)
    {
        $arrResult = $this->tahunAjaranRepository->isExist($tahunAjaranObject, $id);

        return $arrResult.length > 0;
    }

    public function getFakultasGridQuery()
    {
        $query = $this->entityManager->getConnection()->createQueryBuilder();
        $query->select('id', 'nama', 'kode')
            ->from('fakultas')
            ->where('fakultas.deleted_at is NULL');

        return $query;
    }

    public function create($fakultasObject)
    {
        $fakultasEntity = new Fakultas();
        $fakultasEntity->setNama($fakultasObject->nama);
        $fakultasEntity->setKode($fakultasObject->kode);

        $this->entityManager->persist($fakultasEntity);
        $this->entityManager->flush();
    }

    public function update($id, $fakultasObject)
    {
        $fakultasEntity = $this->fakultasRepository->find($id);

        if (!isset($fakultasEntity)) {
            throw new EntityNotFoundException('Entity Not Found');
        }

        $fakultasEntity->setNama($fakultasObject->nama);
        $fakultasEntity->setKode($fakultasObject->kode);

        $this->entityManager->merge($fakultasEntity);
        $this->entityManager->flush();
    }
}