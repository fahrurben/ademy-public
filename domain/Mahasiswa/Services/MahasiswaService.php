<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 07/05/20
 * Time: 14:27
 */

namespace Domain\Mahasiswa\Services;


use Doctrine\ORM\EntityManager;
use Domain\BaseService;
use Domain\Mahasiswa\Mahasiswa;

class MahasiswaService extends BaseService
{
    private $entityManager;

    private $mahasiswaRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->mahasiswaRepository = $entityManager->getRepository(Mahasiswa::class);
        parent::__construct($entityManager, $this->mahasiswaRepository);
    }

    public function getMahasiswaGridQuery()
    {
        $query = $this->entityManager->getConnection()->createQueryBuilder();
        $query->select('m.id', 'nim', 'nama_lengkap', 'prodi_id', 'p.nama as prodi', 't.tahun_awal', 'semester')
            ->innerJoin('m', 'prodi', 'p', 'm.prodi_id = p.id')
            ->innerJoin('m', 'tahun_ajaran', 't', 'm.tahun_ajaran_masuk_id = t.id')
            ->from('mahasiswa', 'm')
            ->where('m.deleted_at is NULL');

        return $query;
    }

}