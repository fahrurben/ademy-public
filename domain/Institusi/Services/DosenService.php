<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 09/05/20
 * Time: 15:27
 */

namespace Domain\Institusi\Services;


use Doctrine\ORM\EntityManager;
use Domain\BaseService;
use Domain\Institusi\Dosen;
use Domain\Institusi\Fakultas;

class DosenService extends BaseService
{
    const COMMON_VALIDATION_RULES = [
        'namaDepan' => 'required',
        'namaBelakang' => 'required',
        'namaLengkap' => 'required',
        'tempatLahir' => 'required',
        'tanggalLahir' => 'required',
        'fakultasId' => 'required',
    ];

    private $entityManager;

    private $dosenRepository;

    private $fakultasRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->dosenRepository = $entityManager->getRepository(Dosen::class);
        $this->fakultasRepository = $entityManager->getRepository(Fakultas::class);
        parent::__construct($entityManager, $this->dosenRepository);
    }

    public function getDosenGridQuery()
    {
        $query = $this->entityManager->getConnection()->createQueryBuilder();
        $query->select('d.id', 'nid', 'nama_lengkap', 'f.nama as fakultas')
            ->innerJoin('d', 'fakultas', 'f', 'd.fakultas_id = f.id')
            ->from('dosen', 'd')
            ->where('d.deleted_at is NULL');

        return $query;
    }
}