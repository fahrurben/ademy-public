<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 02/05/20
 * Time: 8:39
 */

namespace Domain\Institusi\Services;


use Doctrine\ORM\EntityManager;
use Domain\Institusi\Fakultas;
use Domain\Institusi\Repositories\FakultasRepository;
use Illuminate\Support\Facades\Validator;

class FakultasService
{
    private $entityManager;

    private $fakultasRepository;

    private $createValidationRules = [
        'nama' => 'required|unique:\Domain\Institusi\Fakultas,nama,{$id},id,deletedAt,NULL',
        'kode' => 'required|unique:\Domain\Institusi\Fakultas,kode,{$id},id,deletedAt,NULL',
    ];

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->fakultasRepository = $entityManager->getRepository(Fakultas::class);
    }

    public function create(Fakultas $fakultas)
    {
        $this->entityManager->persist($fakultas);
        $this->entityManager->flush();
    }

    public function update(Fakultas $fakultas)
    {
        $this->entityManager->merge($fakultas);
        $this->entityManager->flush();
    }

    public function delete($id)
    {
        $fakultas = $this->fakultasRepository->find($id);

        if (!isset($fakultas)) {
            throw new \Exception(__('Rekod tidak ada'));
        }

        $this->entityManager->remove($fakultas);
    }

    public function createValidation($requestData)
    {
        return Validator::make($requestData, $this->createValidationRules);
    }
}