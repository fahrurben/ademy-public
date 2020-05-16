<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 16/05/20
 * Time: 13:05
 */

namespace Domain\TahunAjaran\Services;

use Doctrine\ORM\EntityManager;
use Domain\BaseService;
use Domain\Institusi\Dosen;
use Domain\Institusi\MataKuliah;
use Domain\Institusi\Prodi;
use Domain\Institusi\TahunAjaran;
use Domain\TahunAjaran\KelasTA;
use Illuminate\Support\Facades\Validator;

class KelasTAService extends BaseService
{
    private $entityManager;

    private $kelasTARepository;

    private $tahunAjaranRepository;

    private $prodiRepository;

    private $matkulRepository;

    private $dosenRepository;

    const COMMON_VALIDATION_RULES = [
        'taId' => 'required',
        'prodiId' => 'required',
        'matkulId' => 'required',
        'dosenId' => 'required',
    ];

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->kelasTARepository = $entityManager->getRepository(KelasTA::class);
        $this->tahunAjaranRepository = $entityManager->getRepository(TahunAjaran::class);
        $this->prodiRepository = $entityManager->getRepository(Prodi::class);
        $this->matkulRepository = $entityManager->getRepository(MataKuliah::class);
        $this->dosenRepository = $entityManager->getRepository(Dosen::class);
        parent::__construct($entityManager, $this->kelasTARepository);
    }

    public function createValidation($entityObject)
    {
        $this->validationObjectToArray($arrData, $entityObject);
        return Validator::make($arrData, self::COMMON_VALIDATION_RULES);
    }

    public function checkDuplicate($kelasTAObject)
    {
        $query = $this->kelasTARepository->createQueryBuilder('k')
            ->join('k.tahunAjaran', 'ta')
            ->join('k.prodi', 'p')
            ->join('k.mataKuliah', 'm')
            ->where('ta.id = :taId')
            ->andWhere('p.id = :prodiId')
            ->andWhere('m.id = :matkulId')
            ->setParameter('taId', $kelasTAObject->taId)
            ->setParameter('prodiId', $kelasTAObject->prodiId)
            ->setParameter('matkulId', $kelasTAObject->matkulId)
            ->getQuery();

        return $query->getOneOrNullResult();
    }

    public function create($kelasObject)
    {
        $prodiEntity = $this->prodiRepository->find($kelasObject->prodiId);
        if (!isset($prodiEntity)) throw new EntityNotFoundException('Data Prodi tidak ada');

        $tahunAjaranEntity = $this->tahunAjaranRepository->find($kelasObject->taId);
        if (!isset($tahunAjaranEntity)) throw new EntityNotFoundException('Tahun ajaran tidak ada');

        $mataKuliahEntity = $this->matkulRepository->find($kelasObject->matkulId);
        if (!isset($mataKuliahEntity)) throw new EntityNotFoundException('Mata kuliah tidak ada');

        $dosenEntity = $this->dosenRepository->find($kelasObject->dosenId);
        if (!isset($dosenEntity)) throw new EntityNotFoundException('Dosen tidak ada');

        $asistenEntity = null;
        if (isset($kelasObject->asistenId)) {
            $asistenEntity = $this->dosenRepository->find($kelasObject->asistenId);
            if (!isset($asistenEntity)) throw new EntityNotFoundException('Dosen tidak ada');
        }

        $kelasEntity = new KelasTA();
        $kelasEntity->setNama($mataKuliahEntity->getNama());
        $kelasEntity->setTahunAjaran($tahunAjaranEntity);
        $kelasEntity->setProdi($prodiEntity);
        $kelasEntity->setMataKuliah($mataKuliahEntity);
        $kelasEntity->setDosen($dosenEntity);
        $kelasEntity->setAsisten($asistenEntity);

        $this->entityManager->persist($kelasEntity);
        $this->entityManager->flush();
    }
}