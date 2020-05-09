<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 09/05/20
 * Time: 15:27
 */

namespace Domain\Institusi\Services;


use App\Constant;
use Doctrine\ORM\EntityManager;
use Domain\BaseService;
use Domain\Institusi\Dosen;
use Domain\Institusi\Fakultas;
use Illuminate\Support\Facades\Validator;

class DosenService extends BaseService
{
    const COMMON_VALIDATION_RULES = [
        'namaDepan' => 'required',
        'namaBelakang' => 'required',
        'namaLengkap' => 'required',
        'tempatLahir' => 'required',
        'tanggalLahir' => 'required',
        'fakultasId' => 'required',
        'jabatan' => 'required',
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

    public function createValidation($dosenObject)
    {
        $createValidationRules =
            [
                'nid' => 'required|unique:\Domain\Institusi\Dosen,nid,{$id},id,deletedAt,NULL',
            ]
            + self::COMMON_VALIDATION_RULES;

        $dosenArray = $dosenObject;
        if (is_object($dosenObject)) {
            $dosenArray = (array) $dosenObject;
        }
        return Validator::make($dosenArray, $createValidationRules);
    }

    public function create($dosenObject)
    {
        $fakultasEntity = $this->fakultasRepository->find($dosenObject->fakultasId);
        if (!isset($fakultasEntity)) throw new EntityNotFoundException('Data Fakultas tidak ada');

        $dosenEntity = new Dosen();
        $dosenEntity->setNid($dosenObject->nid);
        $dosenEntity->setNoId($dosenObject->noId);
        $dosenEntity->setNamaDepan($dosenObject->namaDepan);
        $dosenEntity->setNamaBelakang($dosenObject->namaBelakang);
        $dosenEntity->setNamaLengkap($dosenObject->namaLengkap);
        $dosenEntity->setTempatLahir($dosenObject->tempatLahir);
        $dosenEntity->setTanggalLahir($dosenObject->tanggalLahir);
        $dosenEntity->setFakultas($fakultasEntity);
        $dosenEntity->setJabatan($dosenObject->jabatan);
        $dosenEntity->setStatus(Constant::STATUS_AKTIF);

        $this->entityManager->persist($dosenEntity);
        $this->entityManager->flush();
    }

}