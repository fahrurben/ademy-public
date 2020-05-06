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
        parent::__construct($entityManager, $this->tahunAjaranRepository);
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

    public function getGridQuery()
    {
        $query = $this->entityManager->getConnection()->createQueryBuilder();
        $query->select('id', 'tipe', 'tahun_awal', 'tahun_akhir', 'status')
            ->from('tahun_ajaran')
            ->where('tahun_ajaran.deleted_at is NULL')
            ->orderBy('tahun_awal', 'ASC')
            ->addOrderBy('tipe', 'ASC');

        return $query;
    }

    public function create($taObject)
    {
        $taEntity = new TahunAjaran();
        $taEntity->setTipe($taObject->tipe);
        $taEntity->setTahunAwal($taObject->tahunAwal);
        $taEntity->setTahunAkhir($taObject->tahunAkhir);
        $taEntity->setStatus($taObject->status);

        $this->entityManager->persist($taEntity);
        $this->entityManager->flush();
    }

}