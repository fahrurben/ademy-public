<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 03/05/20
 * Time: 15:07
 */

namespace Domain\Institusi\Services;


use Doctrine\ORM\EntityManager;
use Domain\BaseService;
use Domain\Exceptions\EntityNotFoundException;
use Domain\Institusi\Prodi;
use Illuminate\Support\Facades\Validator;

class ProdiService extends BaseService
{
    private $entityManager;

    private $prodiRepository;

    protected $createValidationRules = [
        'nama' => 'required|unique:\Domain\Institusi\Prodi,nama',
        'kode' => 'required|unique:\Domain\Institusi\Prodi,kode',
        'fakultas_id' => 'required',
    ];

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->prodiRepository = $entityManager->getRepository(Prodi::class);
        parent::__construct($entityManager, $this->prodiRepository);
    }

    public function createValidation($requestData)
    {
        return Validator::make($requestData, $this->createValidationRules);
    }

    public function updateValidation($requestData)
    {
        $updateValidationRules = [
            'nama' => 'required|unique:\Domain\Institusi\Prodi,nama,'.$requestData['id'].',id,deletedAt,null',
            'kode' => 'required|unique:\Domain\Institusi\Prodi,kode,'.$requestData['id'].',id,deletedAt,null',
            'fakultas_id' => 'required',
        ];
        return Validator::make($requestData, $updateValidationRules);
    }

    public function getProdiGridQuery()
    {
        $query = $this->entityManager->getConnection()->createQueryBuilder();
        $query->select('id', 'nama', 'kode', 'fakultas_id')
            ->from('prodi')
            ->andWhere('prodi.deleted_at is NULL')
            ->orderBy('nama');

        return $query;
    }


    public function create($prodiObject)
    {
        $fakultas = $this->entityManager->find('\Domain\Institusi\Fakultas', $prodiObject->fakultas_id);
        if (!isset($fakultas)) throw new EntityNotFoundException('Data fakultas tidak ada');

        $prodiEntity = new Prodi();
        $prodiEntity->setNama($prodiObject->nama);
        $prodiEntity->setKode($prodiObject->kode);
        $prodiEntity->setFakultas($fakultas);

        $this->entityManager->persist($prodiEntity);
        $this->entityManager->flush();
    }

    public function update($id, $prodiObject)
    {
        $prodiEntity = $this->prodiRepository->find($id);
        if (!isset($prodiEntity)) throw new EntityNotFoundException('Data Prodi tidak ada');

        $fakultas = $this->entityManager->find('\Domain\Institusi\Fakultas', $prodiObject->fakultas_id);
        if (!isset($fakultas)) throw new EntityNotFoundException('Data fakultas tidak ada');

        $prodiEntity->setNama($prodiObject->nama);
        $prodiEntity->setKode($prodiObject->kode);
        $prodiEntity->setFakultas($fakultas);

        $this->entityManager->persist($prodiEntity);
        $this->entityManager->flush();
    }
}