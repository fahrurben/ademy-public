<?php
/**
 * Created by PhpStorm.
 * User: fahrur
 * Date: 03/05/20
 * Time: 15:01
 */

namespace Domain;


use Doctrine\ORM\EntityManager;
use Illuminate\Support\Facades\Validator;

class BaseService
{
    private $repository;

    private $entityManager;

    private $createValidationRules = [];

    public function __construct(EntityManager $entityManager, $repository)
    {
        $this->entityManager = $entityManager;
        $this->repository = $repository;
    }
    public function create($entity)
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }

    public function update($entity)
    {
        $this->entityManager->merge($entity );
        $this->entityManager->flush();
    }

    public function delete($id)
    {
        $entity = $this->repository->find($id);

        if (!isset($entity)) {
            throw new \Exception(__('Rekod tidak ada'));
        }

        $this->entityManager->remove($entity);
        $this->entityManager->flush();
    }
}