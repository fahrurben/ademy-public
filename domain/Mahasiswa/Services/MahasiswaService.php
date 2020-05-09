<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 07/05/20
 * Time: 14:27
 */

namespace Domain\Mahasiswa\Services;


use App\Constant;
use Doctrine\ORM\EntityManager;
use Domain\BaseService;
use Domain\Institusi\Prodi;
use Domain\Institusi\TahunAjaran;
use Domain\Mahasiswa\Mahasiswa;
use Illuminate\Support\Facades\Validator;

class MahasiswaService extends BaseService
{
    const COMMON_VALIDATION_RULES = [
        'namaDepan' => 'required',
        'namaBelakang' => 'required',
        'namaLengkap' => 'required',
        'tempatLahir' => 'required',
        'tanggalLahir' => 'required',
        'prodiId' => 'required',
        'tahunAjaranMasukId' => 'required',
        'semester' => 'required',
    ];

    private $entityManager;

    private $mahasiswaRepository;

    private $prodiRepository;

    private $tahunAjaranRepository;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->mahasiswaRepository = $entityManager->getRepository(Mahasiswa::class);
        $this->prodiRepository = $entityManager->getRepository(Prodi::class);
        $this->tahunAjaranRepository = $entityManager->getRepository(TahunAjaran::class);
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

    public function createValidation($mahasiswaObject)
    {
        $createValidationRules =
            [
                'nim' => 'required|unique:\Domain\Mahasiswa\Mahasiswa,nim,{$id},id,deletedAt,NULL',
            ]
            + self::COMMON_VALIDATION_RULES;

        $mahasiswaArray = $mahasiswaObject;
        if (is_object($mahasiswaObject)) {
            $mahasiswaArray = (array) $mahasiswaObject;
        }
        return Validator::make($mahasiswaArray, $createValidationRules);
    }

    public function updateValidation($mahasiswaObject, $id)
    {
        $updateValidationRules =
            [
                'nim' => 'required|unique:\Domain\Mahasiswa\Mahasiswa,nim,' . $id . ',id,deletedAt,NULL',
            ]
            + self::COMMON_VALIDATION_RULES;

        $mahasiswaArray = $mahasiswaObject;
        if (is_object($mahasiswaObject)) {
            $mahasiswaArray = (array) $mahasiswaObject;
        }
        return Validator::make($mahasiswaArray, $updateValidationRules);
    }

    public function create($mhsObject)
    {
        $prodiEntity = $this->prodiRepository->find($mhsObject->prodiId);
        if (!isset($prodiEntity)) throw new EntityNotFoundException('Data Prodi tidak ada');

        $tahunAjaranEntity = $this->tahunAjaranRepository->find($mhsObject->tahunAjaranMasukId);
        if (!isset($tahunAjaranEntity)) throw new EntityNotFoundException('Tahun ajaran tidak ada');

        $mhsEntity = new Mahasiswa();
        $mhsEntity->setNim($mhsObject->nim);
        $mhsEntity->setNoId($mhsObject->noId);
        $mhsEntity->setNamaDepan($mhsObject->namaDepan);
        $mhsEntity->setNamaBelakang($mhsObject->namaBelakang);
        $mhsEntity->setNamaLengkap($mhsObject->namaLengkap);
        $mhsEntity->setTempatLahir($mhsObject->tempatLahir);
        $mhsEntity->setTanggalLahir($mhsObject->tanggalLahir);
        $mhsEntity->setProdi($prodiEntity);
        $mhsEntity->setTahunAjaranMasuk($tahunAjaranEntity);
        $mhsEntity->setSemester($mhsObject->semester);
        $mhsEntity->setStatus(Constant::STATUS_AKTIF);

        $this->entityManager->persist($mhsEntity);
        $this->entityManager->flush();
    }

    public function update($mhsObject, $id)
    {
        $prodiEntity = $this->prodiRepository->find($mhsObject->prodiId);
        if (!isset($prodiEntity)) throw new EntityNotFoundException('Data Prodi tidak ada');

        $tahunAjaranEntity = $this->tahunAjaranRepository->find($mhsObject->tahunAjaranMasukId);
        if (!isset($tahunAjaranEntity)) throw new EntityNotFoundException('Tahun ajaran tidak ada');

        $mhsEntity = $this->mahasiswaRepository->find($id);
        if (!isset($mhsEntity)) {
            throw new EntityNotFoundException('Data mahasiswa tidak ada');
        }

        $mhsEntity->setNim($mhsObject->nim);
        $mhsEntity->setNoId($mhsObject->noId);
        $mhsEntity->setNamaDepan($mhsObject->namaDepan);
        $mhsEntity->setNamaBelakang($mhsObject->namaBelakang);
        $mhsEntity->setNamaLengkap($mhsObject->namaLengkap);
        $mhsEntity->setTempatLahir($mhsObject->tempatLahir);
        $mhsEntity->setTanggalLahir($mhsObject->tanggalLahir);
        $mhsEntity->setProdi($prodiEntity);
        $mhsEntity->setTahunAjaranMasuk($tahunAjaranEntity);
        $mhsEntity->setSemester($mhsObject->semester);
        $mhsEntity->setStatus(Constant::STATUS_AKTIF);

        $this->entityManager->merge($mhsEntity);
        $this->entityManager->flush();
    }
}