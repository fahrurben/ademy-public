<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 13/05/20
 * Time: 7:03
 */

namespace Domain\Institusi\Services;


use Doctrine\ORM\EntityManager;
use Domain\BaseService;
use Domain\Institusi\MataKuliah;

class MataKuliahService extends BaseService
{
    private $entityManager;

    private $mataKuliahRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->mataKuliahRepository = $entityManager->getRepository(MataKuliah::class);
        parent::__construct($entityManager, $this->mataKuliahRepository);
    }

    public function getMataKuliahGridQuery()
    {
        $query = $this->entityManager->getConnection()->createQueryBuilder();
        $query->select('m.id', 'm.nama', 'm.kode', 'm.semester', 'm.tipe', 'prodi_id', 'p.nama as prodi', 'm.status')
            ->from('mata_kuliah', 'm')
            ->innerJoin('m', 'prodi', 'p', 'm.prodi_id = p.id')
            ->where('m.deleted_at is NULL');

        return $query;
    }
}