<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 13/05/20
 * Time: 7:03
 */

namespace Domain\Institusi\Services;


use App\Constant;
use Doctrine\ORM\EntityManager;
use Domain\BaseService;
use Domain\Institusi\MataKuliah;
use Domain\Institusi\Prodi;
use Illuminate\Support\Facades\Validator;

class MataKuliahService extends BaseService
{
    const COMMON_VALIDATION_RULES = [
        'tipe' => 'required',
        'prodiId' => 'required',
        'bobot' => 'required',
        'semester' => 'required',
        'status' => 'required',
    ];

    private $entityManager;

    private $mataKuliahRepository;

    private $prodiRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->mataKuliahRepository = $entityManager->getRepository(MataKuliah::class);
        $this->prodiRepository = $entityManager->getRepository(Prodi::class);
        parent::__construct($entityManager, $this->mataKuliahRepository);
    }

    public function createValidation($entityObject)
    {
        $createValidationRules =
            [
                'nama' => 'required|unique:\Domain\Institusi\MataKuliah,nama,{$id},id,deletedAt,NULL',
                'kode' => 'required|unique:\Domain\Institusi\MataKuliah,kode,{$id},id,deletedAt,NULL',
            ]
            + self::COMMON_VALIDATION_RULES;

        $arrData = $entityObject;
        if (is_object($entityObject)) {
            $arrData = (array) $entityObject;
        }
        return Validator::make($arrData, $createValidationRules);
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

    public function create($matkulObject)
    {
        $prodiEntity = $this->prodiRepository->find($matkulObject->prodiId);
        if (!isset($prodiEntity)) throw new EntityNotFoundException('Data Prodi tidak ada');

        $matkulEntitity = new MataKuliah();
        $matkulEntitity->setNama($matkulObject->nama);
        $matkulEntitity->setKode($matkulObject->kode);
        $matkulEntitity->setTipe($matkulObject->tipe);
        $matkulEntitity->setProdi($prodiEntity);
        $matkulEntitity->setBobot($matkulObject->bobot);
        $matkulEntitity->setSemester($matkulObject->semester);
        $matkulEntitity->setDeskripsi($matkulObject->deskripsi);

        $matkulEntitity->setStatus(Constant::STATUS_AKTIF);

        $this->entityManager->persist($matkulEntitity);
        $this->entityManager->flush();
    }
}